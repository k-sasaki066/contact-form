@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection

@section('content')
<div class="contact-form__content">
    <div class="contact-form__inner">
        <div class="contact-form__heading">
            <h2>お問い合わせ</h2>
        </div>
        <form class="form" action="/contacts/confirm" method="post">
            @csrf
            <div class="form-group">
                <div class="form-group__title">
                    <span class="form__label-item">お名前</span>
                    <span class="form__label-required">必須</span>
                </div>
                <div class="form-group__item">
                    <div class="form-group__item-text">
                        <input class="form-group__item-input" type="text" name="name" placeholder="テスト太郎" value="{{ old('name')}}">
                    </div>
                    <div class="form-group__item-error">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group__title">
                    <span class="form__label-item">メールアドレス</span>
                    <span class="form__label-required">必須</span>
                </div>
                <div class="form-group__item">
                    <div class="form-group__item-text">
                        <input class="form-group__item-input" type="email" name="email" placeholder="text@example.com" value="{{ old('email')}}">
                    </div>
                    <div class="form-group__item-error">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group__title">
                    <span class="form__label-item">電話番号</span>
                    <span class="form__label-required">必須</span>
                </div>
                <div class="form-group__item">
                    <div class="form-group__item-text">
                        <input class="form-group__item-input" type="tel" name="tel" placeholder="09012345678" value="{{ old('tel')}}">
                    </div>
                    <div class="form-group__item-error">
                        @error('tel')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group__title">
                    <span class="form__label-item">お問い合わせ内容</span>
                </div>
                <div class="form-group__item">
                    <div class="form-group__item-text">
                        <textarea class="form-group__item-textarea" name="content" placeholder="資料請求をしたいです" value="{{ old('content')}}"></textarea>
                    </div>
                    <div class="form-group__item-error">
                        @error('content')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group__button">
                <button class="form-group__button-submit" type="submit">送信</button>
            </div>
        </form>
    </div>
</div>
@endsection