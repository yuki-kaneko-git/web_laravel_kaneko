<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メニュー画面</title>
</head>
<body>
    <p>社員名簿Web管理システム（簡易版）</p>
    <p></p>
    <p>管理メニュー</p>
    <ul>
        <li><a href="{{route('insert')}}">社員登録画面</a></li>
        <li><a href="{{route('viewAll')}}">社員一覧画面</a></li>
    </ul>
</body>
</html>