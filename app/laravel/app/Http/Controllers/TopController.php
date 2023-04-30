<?php

namespace App\Http\Controllers;

use App\Services\ItemCategoryService;

//  Top画面のControllerクラス
class TopController extends Controller
{
    // TOP画面表示
    public function index(){
        // 新規セッションを開始してセッションIDを発行、もじくはリクエスト時にセッションIDが渡されていればセッションを復帰する
        session_start();

        $itemCategoryService = new ItemCategoryService();

        // 汎用情報を取得
        $itemCategory1List = $itemCategoryService->getItemCategory1List();
        $itemCategory2List = $itemCategoryService->getItemCategory2List();
        $common_ss = parent::getCommonSystemSetting();
        $common_msg = parent::getCommonMessage();


        // 第一引数：遷移するビューの名前、第2引数：ビューへ渡す変数名
        return view('top',compact('itemCategory1List','itemCategory2List','common_ss','common_msg'));
    }
}
