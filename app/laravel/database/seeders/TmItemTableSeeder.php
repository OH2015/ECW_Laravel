<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tm_item')->truncate();
        DB::table('tm_item')->insert([
            [
                'item_cd'           => 	'0000001001',
                'item_name1'        => 	'Inspire 17 910 New Dimension',
                'item_name2'        => 	'Laptop',
                'item_category1_cd' => 	'10',
                'item_category2_cd' => 	'10',
                'brand_cd'          => 	'0001',
                'model_number'      => 	'DD-INSP-17-910-ND',
                'jan_cd'            => 	'4900000101001',
                'item_image1'       => 	'0100_pc01.png',
                'disp_flg'          => 	'1',
                'status_cd'         => 	'01',
                'update_by'         => 	'ecwinit',
                'insert_by'         => 	'ecwinit'
                   
            ],
            [  
                 'item_cd'           => 	'0000001002'
                ,'item_name1'        => 	'Inspire 15 910 New Dimension'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-15-910-ND'
                ,'jan_cd'            => 	'4900000101002'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'01'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
            ],
            [
                 'item_cd'           => 	'0000001003'
                ,'item_name1'        => 	'Inspire 17 900 New Dimension'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-17-900-ND'
                ,'jan_cd'            => 	'4900000101003'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000001004'
                ,'item_name1'        => 	'Inspire 15 900 New Dimension'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-15-900-ND'
                ,'jan_cd'            => 	'4900000101004'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000001005'
                ,'item_name1'        => 	'Inspire 17 710 New Dimension'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-17-710-ND'
                ,'jan_cd'            => 	'4900000101005'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000001006'
                ,'item_name1'        => 	'Inspire 15 710 New Dimension'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-15-710-ND'
                ,'jan_cd'            => 	'4900000101006'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000001007'
                ,'item_name1'        => 	'Inspire 17 700 New Dimension'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-17-700-ND'
                ,'jan_cd'            => 	'4900000101007'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000001008'
                ,'item_name1'        => 	'Inspire 15 700 New Dimension'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-15-700-ND'
                ,'jan_cd'            => 	'4900000101008'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000001009'
                ,'item_name1'        => 	'Inspire 14 510 Standard'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-14-510-STD'
                ,'jan_cd'            => 	'4900000101009'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
                      
            ],
            [
                 'item_cd'           => 	'0000001010'
                ,'item_name1'        => 	'Inspire 13 510 Standard'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-13-510-STD'
                ,'jan_cd'            => 	'4900000101010'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
                 
            ],
            [
                 'item_cd'           => 	'0000001011'
                ,'item_name1'        => 	'Inspire 14 500 Standard'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-14-500-STD'
                ,'jan_cd'            => 	'4900000101011'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
                     
            ],
            [
                 'item_cd'           => 	'0000001012'
                ,'item_name1'        => 	'Inspire 13 500 Standard'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-13-500-STD'
                ,'jan_cd'            => 	'4900000101012'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
                     
            ],
            [
                 'item_cd'           => 	'0000001013'
                ,'item_name1'        => 	'Inspire 14 310 Standard'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-14-310-STD'
                ,'jan_cd'            => 	'4900000101013'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
                      
            ],
            [
                 'item_cd'           => 	'0000001014'
                ,'item_name1'        => 	'Inspire 13 310 Standard'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-13-310-STD'
                ,'jan_cd'            => 	'4900000101014'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
                     
            ],
            [
                 'item_cd'           => 	'0000001015'
                ,'item_name1'        => 	'Inspire 14 300 Standard'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-14-300-STD'
                ,'jan_cd'            => 	'4900000101015'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
                    
            ],
            [
                 'item_cd'           => 	'0000001016'
                ,'item_name1'        => 	'Inspire 13 300 Standard'
                ,'item_name2'        => 	'Laptop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-INSP-13-300-STD'
                ,'jan_cd'            => 	'4900000101016'
                ,'item_image1'       => 	'0100_pc01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
                     
            ],
            [
                 'item_cd'           => 	'0000002001'
                ,'item_name1'        => 	'Vistro 910 New Frontier'
                ,'item_name2'        => 	'Desktop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-VIST-910-NF'
                ,'jan_cd'            => 	'4900000201001'
                ,'item_image1'       => 	'0100_pc02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'01'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000002002'
                ,'item_name1'        => 	'Vistro 900 New Frontier'
                ,'item_name2'        => 	'Desktop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-VIST-900-NF'
                ,'jan_cd'            => 	'4900000201002'
                ,'item_image1'       => 	'0100_pc02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000002003'
                ,'item_name1'        => 	'Vistro 710 New Frontier'
                ,'item_name2'        => 	'Desktop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-VIST-710-NF'
                ,'jan_cd'            => 	'4900000201003'
                ,'item_image1'       => 	'0100_pc02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
              
            ],
            [
                 'item_cd'           => 	'0000002004'
                ,'item_name1'        => 	'Vistro 700 New Frontier'
                ,'item_name2'        => 	'Desktop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-VIST-700-NF'
                ,'jan_cd'            => 	'4900000201004'
                ,'item_image1'       => 	'0100_pc02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000002005'
                ,'item_name1'        => 	'Vistro 510'
                ,'item_name2'        => 	'Desktop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-VIST-510'
                ,'jan_cd'            => 	'4900000201005'
                ,'item_image1'       => 	'0100_pc02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000002006'
                ,'item_name1'        => 	'Vistro 500'
                ,'item_name2'        => 	'Desktop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-VIST-500'
                ,'jan_cd'            => 	'4900000201006'
                ,'item_image1'       => 	'0100_pc02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'99'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000002007'
                ,'item_name1'        => 	'Vistro 310'
                ,'item_name2'        => 	'Desktop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-VIST-310'
                ,'jan_cd'            => 	'4900000201007'
                ,'item_image1'       => 	'0100_pc02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'99'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000002008'
                ,'item_name1'        => 	'非表示商品☆Vistro 300'
                ,'item_name2'        => 	'Desktop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-VIST-300'
                ,'jan_cd'            => 	'4900000201008'
                ,'item_image1'       => 	'0100_pc02.png'
                ,'disp_flg'          => 	'0'
                ,'status_cd'         => 	'99'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000002009'
                ,'item_name1'        => 	'Vistro R7'
                ,'item_name2'        => 	'Desktop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-VIST-R7'
                ,'jan_cd'            => 	'4900000201009'
                ,'item_image1'       => 	'0100_pc02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000002010'
                ,'item_name1'        => 	'Vistro R5'
                ,'item_name2'        => 	'Desktop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-VIST-R5'
                ,'jan_cd'            => 	'4900000201010'
                ,'item_image1'       => 	'0100_pc02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000002011'
                ,'item_name1'        => 	'Vistro R3'
                ,'item_name2'        => 	'Desktop'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0001'
                ,'model_number'      => 	'DD-VIST-R3'
                ,'jan_cd'            => 	'4900000201011'
                ,'item_image1'       => 	'0100_pc02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000003001'
                ,'item_name1'        => 	'Colorin NP-54A3'
                ,'item_name2'        => 	'プリンタ複合機'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'30'
                ,'brand_cd'          => 	'0002'
                ,'model_number'      => 	'CLRN-NP-54A3'
                ,'jan_cd'            => 	'4900000301001'
                ,'item_image1'       => 	'0100_pc03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000003002'
                ,'item_name1'        => 	'Colorin NP-53A4'
                ,'item_name2'        => 	'プリンタ複合機'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'30'
                ,'brand_cd'          => 	'0002'
                ,'model_number'      => 	'CLRN-NP-53A4'
                ,'jan_cd'            => 	'4900000301002'
                ,'item_image1'       => 	'0100_pc03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000003003'
                ,'item_name1'        => 	'Colorin NP-44A3'
                ,'item_name2'        => 	'プリンタ複合機'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'30'
                ,'brand_cd'          => 	'0002'
                ,'model_number'      => 	'CLRN-NP-44A3'
                ,'jan_cd'            => 	'4900000301003'
                ,'item_image1'       => 	'0100_pc03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000003004'
                ,'item_name1'        => 	'Colorin NP-43A4'
                ,'item_name2'        => 	'プリンタ複合機'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'30'
                ,'brand_cd'          => 	'0002'
                ,'model_number'      => 	'CLRN-NP-43A4'
                ,'jan_cd'            => 	'4900000301004'
                ,'item_image1'       => 	'0100_pc03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000003005'
                ,'item_name1'        => 	'非表示商品☆Colorin NP-34A3'
                ,'item_name2'        => 	'プリンタ複合機'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'30'
                ,'brand_cd'          => 	'0002'
                ,'model_number'      => 	'CLRN-NP-34A3'
                ,'jan_cd'            => 	'4900000301005'
                ,'item_image1'       => 	'0100_pc03.png'
                ,'disp_flg'          => 	'0'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000003006'
                ,'item_name1'        => 	'非表示商品☆Colorin NP-33A4'
                ,'item_name2'        => 	'プリンタ複合機'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'30'
                ,'brand_cd'          => 	'0002'
                ,'model_number'      => 	'CLRN-NP-33A4'
                ,'jan_cd'            => 	'4900000301006'
                ,'item_image1'       => 	'0100_pc03.png'
                ,'disp_flg'          => 	'0'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000003007'
                ,'item_name1'        => 	'Colorin Q34'
                ,'item_name2'        => 	'プリンタ'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'30'
                ,'brand_cd'          => 	'0002'
                ,'model_number'      => 	'CLRN-NP-Q34'
                ,'jan_cd'            => 	'4900000301007'
                ,'item_image1'       => 	'0100_pc03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000003008'
                ,'item_name1'        => 	'Colorin Q33'
                ,'item_name2'        => 	'プリンタ'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'30'
                ,'brand_cd'          => 	'0002'
                ,'model_number'      => 	'CLRN-NP-Q33'
                ,'jan_cd'            => 	'4900000301008'
                ,'item_image1'       => 	'0100_pc03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000003009'
                ,'item_name1'        => 	'Colorin U24'
                ,'item_name2'        => 	'プリンタ'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'30'
                ,'brand_cd'          => 	'0002'
                ,'model_number'      => 	'CLRN-NP-U24'
                ,'jan_cd'            => 	'4900000301009'
                ,'item_image1'       => 	'0100_pc03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000003010'
                ,'item_name1'        => 	'Colorin U23'
                ,'item_name2'        => 	'プリンタ'
                ,'item_category1_cd' => 	'10'
                ,'item_category2_cd' => 	'30'
                ,'brand_cd'          => 	'0002'
                ,'model_number'      => 	'CLRN-NP-U23'
                ,'jan_cd'            => 	'4900000301010'
                ,'item_image1'       => 	'0100_pc03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000004001'
                ,'item_name1'        => 	'BRAVINA 55V NU1150'
                ,'item_name2'        => 	'4K液晶テレビ'
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0003'
                ,'model_number'      => 	'SN-BRV-55V-NU1150'
                ,'jan_cd'            => 	'4900000401001'
                ,'item_image1'       => 	'0200_electronics01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000004002'
                ,'item_name1'        => 	'BRAVINA 43V NU1130'
                ,'item_name2'        => 	'4K液晶テレビ'
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0003'
                ,'model_number'      => 	'SN-BRV-43V-NU1130'
                ,'jan_cd'            => 	'4900000401002'
                ,'item_image1'       => 	'0200_electronics01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000004003'
                ,'item_name1'        => 	'BRAVINA 32V NU1100'
                ,'item_name2'        => 	'ハイビジョン液晶テレビ'
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0003'
                ,'model_number'      => 	'SN-BRV-32V-NU1100'
                ,'jan_cd'            => 	'4900000401003'
                ,'item_image1'       => 	'0200_electronics01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000004004'
                ,'item_name1'        => 	'BRAVINA 28V NN1050'
                ,'item_name2'        => 	'ハイビジョン液晶テレビ'
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0003'
                ,'model_number'      => 	'SN-BRV-28V-NN1050'
                ,'jan_cd'            => 	'4900000401004'
                ,'item_image1'       => 	'0200_electronics01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000004005'
                ,'item_name1'        => 	'BRAVINA 24V NN1030'
                ,'item_name2'        => 	'ハイビジョン液晶テレビ'
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0003'
                ,'model_number'      => 	'SN-BRV-24V-NN1030'
                ,'jan_cd'            => 	'4900000401005'
                ,'item_image1'       => 	'0200_electronics01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000004006'
                ,'item_name1'        => 	'LDC-45RC 45V'
                ,'item_name2'        => 	'4K液晶テレビ'
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0009'
                ,'model_number'      => 	'MB-LDC-45V-RC'
                ,'jan_cd'            => 	'4900000401006'
                ,'item_image1'       => 	'0200_electronics02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000004007'
                ,'item_name1'        => 	'LDC-39DY 39V'
                ,'item_name2'        => 	'4K液晶テレビ'
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0009'
                ,'model_number'      => 	'MB-LDC-39V-DY'
                ,'jan_cd'            => 	'4900000401007'
                ,'item_image1'       => 	'0200_electronics02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000004008'
                ,'item_name1'        => 	'LDC-33HA 33V'
                ,'item_name2'        => 	'ハイビジョン液晶テレビ'
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0009'
                ,'model_number'      => 	'MB-LDC-33V-HA'
                ,'jan_cd'            => 	'4900000401008'
                ,'item_image1'       => 	'0200_electronics02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000004009'
                ,'item_name1'        => 	'LDC-28UC 28V'
                ,'item_name2'        => 	'ハイビジョン液晶テレビ'
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0009'
                ,'model_number'      => 	'MB-LDC-28V-UC'
                ,'jan_cd'            => 	'4900000401009'
                ,'item_image1'       => 	'0200_electronics02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000005001'
                ,'item_name1'        => 	'DXR-EX401A-SU'
                ,'item_name2'        => 	null
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0004'
                ,'model_number'      => 	'DXR-EX401A-SU'
                ,'jan_cd'            => 	'4900000501001'
                ,'item_image1'       => 	'0200_electronics03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000005002'
                ,'item_name1'        => 	'DXR-EX351A-DU'
                ,'item_name2'        => 	null
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0004'
                ,'model_number'      => 	'DXR-EX351A-DU'
                ,'jan_cd'            => 	'4900000501002'
                ,'item_image1'       => 	'0200_electronics03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000005003'
                ,'item_name1'        => 	'GR-EX301A-LL'
                ,'item_name2'        => 	null
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0004'
                ,'model_number'      => 	'GR-EX301A-CR'
                ,'jan_cd'            => 	'4900000501003'
                ,'item_image1'       => 	'0200_electronics03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000005004'
                ,'item_name1'        => 	'GR-EX251A-LS'
                ,'item_name2'        => 	null
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0004'
                ,'model_number'      => 	'GR-EX251A-LF'
                ,'jan_cd'            => 	'4900000501004'
                ,'item_image1'       => 	'0200_electronics03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000005005'
                ,'item_name1'        => 	'GR-EX201A-SH'
                ,'item_name2'        => 	null
                ,'item_category1_cd' => 	'20'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0004'
                ,'model_number'      => 	'GR-EX251A-EOF'
                ,'jan_cd'            => 	'4900000501005'
                ,'item_image1'       => 	'0200_electronics03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'99'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000006001'
                ,'item_name1'        => 	'SEAMEISTER'
                ,'item_name2'        => 	''
                ,'item_category1_cd' => 	'30'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0005'
                ,'model_number'      => 	''
                ,'jan_cd'            => 	'4900000601001'
                ,'item_image1'       => 	'0300_watchesandgoods01.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000006002'
                ,'item_name1'        => 	'ツインベルUX50'
                ,'item_name2'        => 	''
                ,'item_category1_cd' => 	'30'
                ,'item_category2_cd' => 	'10'
                ,'brand_cd'          => 	'0006'
                ,'model_number'      => 	''
                ,'jan_cd'            => 	'4900000601002'
                ,'item_image1'       => 	'0300_watchesandgoods02.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000007001'
                ,'item_name1'        => 	'カップ&ソーサーペア'
                ,'item_name2'        => 	''
                ,'item_category1_cd' => 	'30'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0007'
                ,'model_number'      => 	''
                ,'jan_cd'            => 	'4900000701001'
                ,'item_image1'       => 	'0300_watchesandgoods03.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            [
                 'item_cd'           => 	'0000007002'
                ,'item_name1'        => 	'MOUNTAINSIDELANTERN'
                ,'item_name2'        => 	''
                ,'item_category1_cd' => 	'30'
                ,'item_category2_cd' => 	'20'
                ,'brand_cd'          => 	'0008'
                ,'model_number'      => 	''
                ,'jan_cd'            => 	'4900000701002'
                ,'item_image1'       => 	'0300_watchesandgoods04.png'
                ,'disp_flg'          => 	'1'
                ,'status_cd'         => 	'00'
                ,'update_by'         => 	'ecwinit'
                ,'insert_by'         => 	'ecwinit'
              
            ],
            
            
        ]);
    }
}
