<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

//  商品分類Serviceクラス
class ItemCategoryService extends CommonService{

    //　商品分類1マスタのデータオブジェクトを取得
    // 返り値は('item_category1_cd' => '10'、'item_category1_name' =>...)の様なデータがデータ件数個入ったCollection型
    public function getItemCategory1List(){

        // セッションにデータが入っていればセッションから取得、無ければDBから直接取得
        $category1List = (isset($_SESSION['category1List'])) ? $_SESSION['category1List'] : DB::table('tm_item_category1')->get();

        // セッションのデータを更新
        $_SESSION['category1List'] = $category1List;
        
        return $category1List;
    }

    //　商品分類2マスタのデータオブジェクトを取得
    public function getItemCategory2List(){

        // セッションにデータが入っていればセッションから取得、無ければDBから直接取得
        $category2List = (isset($_SESSION['category2List'])) ? $_SESSION['category2List'] : DB::table('tm_item_category2')->get();
        
        // セッションのデータを更新
        $_SESSION['category2List'] = $category2List;
        
        return $category2List;
    }

    // 現在商品分類1情報取得
    // 返り値は('item_category1_cd' => '10'、'item_category1_name' =>...)の様な1つの列データ
    public function getCurrentItemCategory1($itemCategory1Cd){

        $itemCategory1 = null;

        if ($itemCategory1Cd != null){
            $itemCategory1 = DB::table('tm_item_category1')
            ->where('item_category1_cd',$itemCategory1Cd)
            ->first();
        }

        return $itemCategory1;
    }

    // 現在商品分類2情報取得
    public function getCurrentItemCategory2($itemCategory1Cd,$itemCategory2Cd){

        $itemCategory2 = null;

        if($itemCategory2Cd != null){
            $itemCategory2 = DB::table('tm_item_category2')
            ->where('item_category1_cd',$itemCategory1Cd)
            ->where('item_category2_cd',$itemCategory2Cd)
            ->first();
        }

        return $itemCategory2;
    }

}