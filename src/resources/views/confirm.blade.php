@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="confirm__content">
    <div class="confirm__inner">
        <div class="confirm__heading">
            <h2>お問い合わせ内容確認</h2>
        </div>
        <form class="confirm-table__form" action="/contacts" method="post">
            @csrf
            <div class="confirm-table__inner">
                <table class="confirm-table__content">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                        <td class="confirm-table__item">
                            <input class="confirm-table__item-input" type="text" name="name" value="{{ $contact['name']}}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__item">
                            <input class="confirm-table__item-input" type="email" name="email" value="{{ $contact['email'] }}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号</th>
                        <td class="confirm-table__item">
                            <input class="confirm-table__item-input" type="tel" name="tel" value="{{ $contact['tel'] }}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせ内容</th>
                        <td class="confirm-table__item">
                            <input class="confirm-table__item-input" type="text" name="content" value="{{ $contact['content'] }}" readonly>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="confirm-table__button">
                <button class="confirm-table__button-submit" type="submit">送信</button>
            </div>
        </form>
    </div>
</div>
@endsection