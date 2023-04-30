<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ItemCategoryService;
use App\Services\ItemService;

class ItemController extends Controller
{
    public function search(Request $req){
      // リクエストパラメータの受け取り
      $k = $req['k'];
      $c1 = $req['c1'];
      $c2 = $req['c2'];
      $p = $req['p'] ?: 1;
      
      // 新規セッションを開始してセッションIDを発行、もじくはリクエスト時にセッションIDが渡されていればセッションを復帰する
      session_start();
      
      $itemCategoryService = new ItemCategoryService();
      $itemService = new ItemService();
      
      // 汎用情報を取得
      $itemCategory1List = $itemCategoryService->getItemCategory1List();
      $itemCategory2List = $itemCategoryService->getItemCategory2List();
      $common_ss = parent::getCommonSystemSetting();
      $common_msg = parent::getCommonMessage();
      
      // カテゴリ検索時の画面に表示するカテゴリ名
      $currentItemCategory1 = $itemCategoryService->getCurrentItemCategory1($c1);
      $currentItemCategory2 = $itemCategoryService->getCurrentItemCategory2($c1,$c2);
      
      // 商品マスタから商品一覧を取得
      $items = $itemService->getItemList($c1,$c2,$k);

      // 検索結果合計を取得しておく
      $itemTotal = $items->count();

      // 総ページ数を計算
      $maxPage = ceil($itemTotal / 20);

      // ページに表示する商品に限定
      $items = $items
      ->offset(($p-1)*20)
      ->limit(20)
      // クエリ発行
      ->get();

      // 画像の差し替え
      foreach($items as $item){
        $item->item_image1 = $item->item_image1 ?: 'noimage.png';
      }
      
      // 第一引数：遷移するビューの名前、第2引数：ビューへ渡す変数名
      return view('itemlist',compact('itemCategory1List','itemCategory2List','common_ss','common_msg','p','items','req','currentItemCategory1','currentItemCategory2','itemTotal','maxPage'));
  }
}
