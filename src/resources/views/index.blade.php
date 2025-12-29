@extends('layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection

@section('main')
    <div class="contact-form__content">
        <h2 class="contact-form__heading">
            お問い合わせ
        </h2>
        <form class="contact-form" action="/contacts/confirm" method="post">
            @csrf
            <div class="form-group">
                <div class="input__label">
                    <span class="input__ttl">お名前</span><span class="required__tag">必須</span>
                </div>
                <div class="input__item">
                    <input class="form-input" type="text" name="name" value="{{ old('name') }}" placeholder="テスト太郎">
                    <p class="error-message">
                        @error('name')
                        {{$message}}
                        @enderror
                    </p>
                </div>
            </div>
            <div class="form-group">
                <div class="input__label">
                    <span class="input__ttl">メールアドレス</span><span class="required__tag">必須</span>
                </div>
                <div class="input__item">
                    <input class="form-input" type="email" name="email" value="{{ old('email') }}" placeholder="test@example.com">
                    <p class="error-message">
                        @error('email')
                        {{$message}}
                        @enderror
                    </p>
                </div>
            </div>
            <div class="form-group">
                <div class="input__label">
                    <span class="input__ttl">電話番号</span><span class="required__tag">必須</span>
                </div>
                <div class="input__item">
                    <input class="form-input" type="tel" name="tel" value="{{ old('tel') }}" placeholder="09012345678">
                    <p class="error-message">
                        @error('tel')
                        {{$message}}
                        @enderror
                    </p>
                </div>
            </div>
            <div class="form-group">
                <div class="input__label">
                    <span class="input__ttl">お問い合わせ内容</span>
                </div>
                <textarea class="form-textarea" name="comment" id="" placeholder="資料をいただきたいです">{{ old('comment') }}</textarea>
            </div>
            <button class="submit-btn" type="submit">送信</button>
        </form>
    </div>
@endsection
