<?php

namespace App\Http\Controllers;

use App\Mail\CommentMailer;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function addComment($slug){
        $post = Post::where('slug', $slug)->first();
        $inputs = request()->all();

        // 驗證規則
        $rules = [
                'name' => ['required', 'max:150'], //訪客名字
                'email' => ['required', 'max:150'], //電子郵件
                'comment' => ['required'], //回應內容
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

        $inputs['comment'] = nl2br($inputs['comment']);
        $inputs['post_id'] = $post->id;
        $comment = Comment::create($inputs);

        //通知信件
        $mailDetails=[
            'subject' => '【通知】larablog 有訪客填寫回應',
            'post' => $post->title,
            'guest' => $inputs['name'] . '<' . $inputs['email'] . '>',
            'commentTime' => now(),
            'comment' => $inputs['comment'],
        ];
        $adminEmail = User::find(1)->email;
        Mail::to($adminEmail)->send(new CommentMailer($mailDetails));
        return redirect()->back();
    }

    public function deleteComment(Request $request){
        $comment = Comment::findOrFail($request->id);
        $comment->delete();
        return redirect()->back();
    }
}
