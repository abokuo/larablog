<?php

namespace App\Http\Controllers;
use App\Mail\ContactMailer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function addContact()
    {
        $inputs = request()->all();

        // 驗證規則
        $rules = [
                'name' => ['required', 'max:150'], //訪客名字
                'email' => ['required', 'max:150'], //電子郵件
                'subject' => ['required'], //聯絡主題
                'message' => ['required'], //聯絡內容
                'h-captcha-response' => ['required|HCaptcha'], //圖型驗證
                ];

        // 驗證資料
        $validator = Validator::make($inputs, $rules);
        // 資料驗證錯誤時的處理
        if ($validator->fails()){
            return redirect()
            ->withErrors($validator)
            ->withInput();
        }

        $inputs['message'] = nl2br($inputs['message']);

        //通知信件
        $mailDetails=[
            'contactTitle' => '【通知】larablog 有訪客填寫聯絡表單',
            'subject' => $inputs['subject'],
            'guest' => $inputs['name'] . '<' . $inputs['email'] . '>',
            'contactTime' => now(),
            'message' => $inputs['message'],
        ];
        $adminEmail = User::find(1)->email;
        Mail::to($adminEmail)->send(new ContactMailer($mailDetails));
        return redirect('/');
    }

}
