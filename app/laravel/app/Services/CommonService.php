<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

// 共通Serviceクラス
class CommonService{

    // システム設定情報をarray(ss_id => ss_val)の形の配列にして返す
    public function getSystemSettingList(){
        $systemSettingList = null;
        $systemSettingEntityList = DB::table('tm_system_setting')->get();
        foreach($systemSettingEntityList as $systemSetting){
            $systemSettingList[$systemSetting->ss_id] = $systemSetting->ss_val;
        }
        
        return $systemSettingList;
    }

    // メッセージ情報をarray(msg_cd => msg_val)の形の配列にして返す
    public function getMessageList(){
        $messageList = null;
        $messageEntityList = DB::table('tm_message')->get();
        foreach($messageEntityList as $message){
            $messageList[$message->msg_cd] = $message->msg_val;
        }
        
        return $messageList;
    }

    protected function yokeinaMethod(string $keyword): string{
        if($keyword == null){
            return '';
        }else if(str_starts_with($keyword,'kada') && str_ends_with($keyword,'i02')){
            return null;
        }
        return '';
    }

}