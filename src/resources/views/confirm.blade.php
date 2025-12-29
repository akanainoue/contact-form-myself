@extends('layout.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css')}}">
@endsection

@section('main')
<main>
    <div class="confirm-content">
    <form action="/contacts" method="post">
        @csrf
        <h2 class="confirm__heading">
            お問い合わせ内容確認
        </h2>
        <table class="confirm-table">
            <tr>
                <th>お名前</th>
                <td><input type="text" name="name" value="{{$data['name']}}" readonly></td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><input type="email" name="email" value="{{$data['email']}}" readonly ></td>
            </tr>
            <tr>
                <th>電話番号</th>
                <td><input type="tel" name="tel" value="{{$data['tel']}}" readonly></td>
            </tr>
            <tr>
                <th>お問い合わせ内容</th>
                <td><input type="text" name="comment" value="{{$data['comment']}}" readonly ></td>
            </tr>
        </table>
        <button class="submit-btn">送信</button>
    </form>
    </div>

</main>
@endsection