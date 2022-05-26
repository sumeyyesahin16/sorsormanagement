<?php

namespace App\Utility;

class ResultControl
{
    public static function Error($msg, $code = 1, $data = null)
    {
        return ['success' => false, 'code' => $code, 'message' => $msg, 'data' => $data];
    }

    public static function ErrorValidate($errors)
    {
        $msg = '';
        foreach ($errors->messages() as $error){
            $msg .= $error[0].' ';
        }
        return ['success' => false, 'code' => 22, 'message' => $msg, 'data' => null];
    }

    public static function Success($msg = '', $data = null)
    {
        return ['success' => true, 'code' => 0, 'message' => $msg, 'data' => $data];
    }

    public static function ErrorAuthView(){
        return view('standart.errors.auth');
    }
}
