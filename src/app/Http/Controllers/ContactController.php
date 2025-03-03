<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    //フォーム入力ページの送信ボタンクリックで行われる処理。フォーム入力ページから送られた内容を入力内容確認ページに表示する処理
    public function confirm(ContactRequest $request) //form(indexの)から送られてきた値をまずは取り出す。それにRequestクラスが必要
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']); //取得した内容をいったん、contactっていう箱に格納して、
        return view('confirm', compact('contact'));
    }

    //入力内容確認ページの送信ボタンクリックで行われる処理 データも保存されるようにする
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
        return view('thanks');
    }
}
