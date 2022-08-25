<?php
    $employee_id = $_POST['employee_id'];
    $family_name = $_POST['family_name'];
    $first_name = $_POST['first_name'];
    $section_id = $_POST['section_id'];
    $mail = $_POST['mail'];
    $gender_id = $_POST['gender_id'];

    $pdo = new PDO('pgsql:dbname=company_directory;options=\'--client_encoding=UTF8\';host=localhost', 'homestead', 'secret');



    $stmt = $pdo->prepare("INSERT INTO employee (employee_id, family_name, first_name, section_id, mail, gender_id) VALUES (:employee_id, :family_name, :first_name, :section_id, :mail, :gender_id)");
    $stmt->bindParam(':employee_id', $employee_id, PDO::PARAM_STR);
    $stmt->bindParam(':family_name', $family_name, PDO::PARAM_STR);
    $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
    $stmt->bindParam(':section_id', $section_id, PDO::PARAM_STR);
    $stmt->bindParam(':mail', $mail, PDO::PARAM_STR);
    $stmt->bindParam(':gender_id', $gender_id, PDO::PARAM_STR);

    $result = $stmt->execute();
    $pdo = null;

    if($result == null) {
        echo 'データの登録に失敗しました';
    }else {
        echo 'データを登録しました';
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録結果画面</title>
</head>
<body>
    <ul>
        <li><a href="{{route('insert')}}">社員登録画面</a></li>
        <li><a href="{{route('viewAll')}}">社員一覧画面</a></li>
        <li><a href = "{{route('menu')}}">メニュー画面</a></li>
    </ul>
</body>
</html>