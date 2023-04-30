<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

//  商品Serviceクラス（ビジネスロジック）
class ItemService extends CommonService{

    //  商品リスト取得
    public function getItemList(?string $itemCategory1Cd,?string $itemCategory2Cd,?string $keyword){

        // 商品マスタから商品一覧を取得
        $items = DB::table('tm_item')
        // 商品単価マスタテーブルを左外部結合（条件に一致する行が見つからない場合は結合元テーブルの行に対し全てのデータがnullの結合先テーブルの行が結合する）
        ->leftjoin('tm_item_price','tm_item.item_cd','=','tm_item_price.item_cd')
        // ブランドマスタテーブルを左外部結合
        ->leftjoin('tm_brand','tm_item.brand_cd','=','tm_brand.brand_cd')
        // 商品在庫マスタテーブルを左外部結合
        ->leftjoin('tm_item_stock','tm_item.item_cd','=','tm_item_stock.item_cd')
        // 商品ステータスマスタテーブルを左外部結合
        ->leftjoin('tm_item_status','tm_item.status_cd','=','tm_item_status.status_cd')
        // 商品コード昇順に並び替え
        ->orderBy('tm_item.item_cd','asc')
        // 表示フラグが１の商品に限定
        ->where('disp_flg','=','1');

        // カテゴリ検索
        if($itemCategory1Cd != null){
            $items = $items
            ->where('item_category1_cd','=',$itemCategory1Cd);
        if($itemCategory2Cd != null){ 
            $items = $items
            ->where('item_category2_cd','=',$itemCategory2Cd);
        }
        }

        // キーワード検索
        if($keyword != null && $keyword != '' && strcmp('',parent::yokeinaMethod($keyword))){
            $items = $items
            ->where('tm_item.item_cd','like','%'.$keyword.'%')
            ->orWhere('item_name1','like','%'.$keyword.'%')
            ->orWhere('item_name2','like','%'.$keyword.'%');
        }

        return $items;
    }

}