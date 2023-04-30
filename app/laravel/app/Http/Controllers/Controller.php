<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\CommonService;

//  基底Controllerクラス
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // システム設定情報をarray(ss_id => ss_val)の形の配列にして返す
    protected function getCommonSystemSetting(){
        $common_ss = null;
        $commonService = new CommonService();

        if(isset($_SESSION['common_ss'])){
            $common_ss = $_SESSION['common_ss'];
        }else{
            $common_ss = $commonService->getSystemSettingList();
        }

        $_SESSION['common_ss'] = $common_ss;
        
        return $common_ss;
    }

    // メッセージ情報をarray(msg_cd => msg_val)の形の配列にして返す
    protected function getCommonMessage(){
        $common_msg = null;
        $commonService = new CommonService();

        if(isset($_SESSION['common_msg'])){
            $common_msg = $_SESSION['common_msg'];
        }else{
            $common_msg = $commonService->getMessageList();
        }
        
        $_SESSION['common_msg'] = $common_msg;
        
        return $common_msg;
    }
}
