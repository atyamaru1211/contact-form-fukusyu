@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>お問い合わせ内容確認</h2>
            </div>
            <form class="form" action="/contacts" method="post">
                @csrf
                <div class="confirm-table"><!--テーブルをこれから書くからtableで。-->
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th><!--左側の項目をthで表現-->
                            <td class="confirm-table__text">
                                <input type="text" name="name" value="{{ $contact['name']}}" readonly> <!--contactの箱の中にあるnameを取り出して表示-->
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                <input type="email" name="email" value="{{ $contact['email'] }}" readonly>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            <td class="confirm-table__text">
                                <input type="tel" name="tel" value="{{ $contact['tel'] }}" readonly>
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                                <input type="text" name="content" value="{{ $contact['content'] }}" readonly>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="confirm__button"><!--ボタンはformの内側に記載-->
                    <button class="confirm__button-submit" type="submit">送信</button><!--ボタンには必ずtypeを書く-->
                </div>
            </form>
        </div>
@endsection