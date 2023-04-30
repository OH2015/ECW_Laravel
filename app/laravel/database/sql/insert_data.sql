-- 商品単価マスタ、税抜下代単価を投入（税抜上代単価×0.9）
update tm_item_price set no_tax_wholesale_price = floor(no_tax_retail_price * 0.9);


-- 商品在庫マスタ、サンプルデータ投入（在庫数量0を3件以上含み、かつランダムな在庫数量）
truncate tm_item_stock;

insert into tm_item_stock(item_cd, stock_num, update_by, insert_by)
with pre_stock_num_list as (
    select
         item_cd
        ,floor( power(rand()*8, 2) ) as stock_num
    from
        tm_item
)
, ascend as (
    select
         row_number()over(order by stock_num asc) as row_num
        ,stock_num
    from
        pre_stock_num_list
)
select
     item_cd
    ,(case when (psnl.stock_num - third_from_bottom.stock_num) > 0 then  (psnl.stock_num - third_from_bottom.stock_num) else 0 end) stock_num
    ,'ecwinit'
    ,'ecwinit'
from
   (select stock_num from ascend where row_num = 3) as third_from_bottom
    ,pre_stock_num_list psnl
;



-- ユーザ変数を使った繰り返し処理でfrom句に使うための臨時テーブル
drop table if exists tmp;
create table tmp(
    id INT PRIMARY KEY AUTO_INCREMENT,
    hoge INT
);

-- 行の数を、生成したい連続値より大きくなるまで複製させる
INSERT INTO tmp (hoge) VALUES (0); -- 1
INSERT INTO tmp (id) SELECT 0 FROM tmp; -- 2
INSERT INTO tmp (id) SELECT 0 FROM tmp; -- 4
INSERT INTO tmp (id) SELECT 0 FROM tmp; -- 8
INSERT INTO tmp (id) SELECT 0 FROM tmp; -- 16
INSERT INTO tmp (id) SELECT 0 FROM tmp; -- 32
INSERT INTO tmp (id) SELECT 0 FROM tmp; -- 64
INSERT INTO tmp (id) SELECT 0 FROM tmp; -- 128
INSERT INTO tmp (id) SELECT 0 FROM tmp; -- 256
INSERT INTO tmp (id) SELECT 0 FROM tmp; -- 512
INSERT INTO tmp (id) SELECT 0 FROM tmp; -- 1024
INSERT INTO tmp (id) SELECT 0 FROM tmp; -- 2048
INSERT INTO tmp (id) SELECT 0 FROM tmp; -- 4096


-- 連続値生成の為にユーザ変数を定義
SET @var =  9000000000;

-- 商品マスタ（商品分類なしテスト商品データ4096件生成）
insert into tm_item (item_cd, item_name1, update_by, insert_by)
with generate_item_cds as (
    select
        lpad(convert(g_no,char),10,'0') as item_cd
    from
        (SELECT @var := @var+1 as g_no FROM tmp LIMIT 5000) a
)
,test_item_values as (
    select
         item_cd as item_cd
        ,concat('テスト商品',item_cd) as item_name1
    from
        generate_item_cds
)
,sign as (select 'ecwinit' as name)

select v.*, sign.name,sign.name
from test_item_values as v,sign
;


-- 受注履歴トラン、データ投入（2000注文ランダム）
truncate tt_order_history;

-- 連続値生成の為にユーザ変数を定義
SET @var1 = 1000000000;
SET @var2 = 1000000000;
SET @var3 = 1000000000;
SET @var4 = 0;


insert into tt_order_history (order_no, order_date, record_no, item_cd, order_quantity, update_by, insert_by)
with generate_order_nos as (
    select
         gorder as order_no
        ,g_record_no as record_no
    from
        (
            (SELECT @var1 := @var1+1 as gorder FROM tmp LIMIT 2000) a
            cross join
            (SELECT @var4 := @var4+1 as g_record_no FROM tmp LIMIT 4) b
        )
)
,order_seq as (
    select
         row_number() over (order by gorder asc) as order_seq_no
        ,gorder as order_no
    from
        (SELECT @var3 := @var3+1 as gorder FROM tmp LIMIT 2000) as a
    group by
        gorder
)
,generate_max_record_no as (
    select
         g_order_no as order_no
        ,floor( power( (rand() + 0.5), 3 ) ) + 1 as max_record_no
    from
        (SELECT @var2 := @var2+1 as g_order_no FROM tmp LIMIT 2000) as t
)
,item_cds as (
    select
         row_number()over() as row_num
        ,I.item_cd
    from
        tm_item I
    where
        exists (
            select 1
            from tm_item_price IP
            where IP.item_cd = I.item_cd
        )
    and
        I.disp_flg = '1'
    group by
        I.item_cd
    order by
        I.item_cd asc
)
,base_orders as (
    select
         gon.order_no
        ,gon.record_no
        ,floor(rand() * (select count(1) from item_cds)) + 1 as choice_item_row_num
        ,floor(rand() * 5) + 1 as order_quantity
    from
        generate_order_nos gon
    left join
        generate_max_record_no gmrn
        on gon.order_no = gmrn.order_no
    where
        gon.record_no <= gmrn.max_record_no
    order by
        gon.order_no asc
)
,order_history_values as (
    select
         BO.order_no
        ,timestamp(DATE_ADD('2021/03/23 17:50:01', Interval OS.order_seq_no*10 MINUTE)) as order_date
        ,BO.record_no
        ,IC.item_cd
        ,BO.order_quantity
    from
        base_orders BO
    left join
        item_cds IC
        on IC.row_num = BO.choice_item_row_num
    left join
        order_seq OS
        on OS.order_no = BO.order_no
)
,sign as (select 'ecwinit' as name)

select v.*, sign.name, sign.name
from order_history_values as v, sign
;


drop table tmp;