<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
        // 登入作業
    public function logInPage(){
        $binding = [
            'title' => '登入',
        ];
        return view('auth.login', $binding);
    }

    // 登入處理
    public function logInProcess(){
        // 接收登入資料
        $input = request()->all();

        // 驗證規則
        $rules = [
            'email' => ['required', 'max:150', 'email'], //電子郵件
            'password' => ['required', 'min:6'], //密碼
        ];
        // 驗證資料
        $validator = Validator::make($input, $rules);
        // 資料驗證錯誤時的處理
        if ($validator->fails()){
            return redirect('/auth/login')
            ->withErrors($validator)
            ->withInput();
        }

        // 獲取使用者資料
        $User = User::where('email', $input['email'])->firstOrFail();

        // 檢查登入密碼
        $is_password_correct = Hash::check($input['password'], $User->password);
        // 密碼錯誤回傳訊息
        if(!$is_password_correct){
            $error_message = [
                'msg' => '密碼錯誤',
            ];
            return redirect('/auth/login')->withErrors($error_message)->withInput();
        }
        // 記錄會員 session 編號
        session()->put('role_id', $User->role_id);

        // 會員登入後重新導向至登入前畫面，如果沒有則重新導向至首頁
        return redirect('/');
    }

    public function logOut(){
        //清除 session
        session()->forget('role_id');
        //重新導向至首頁
        return redirect('/');
    }

}
