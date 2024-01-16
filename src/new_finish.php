<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>映画鑑賞システム</title>
</head>
<body>
    <?php require 'db_connect.php'; ?>
    <?php
    $pdo=new PDO($connect, USER, PASS);
    $film=$pdo->prepare('insert into Film values(null,?,?,?,?)');
    $film->execute([$_POST['name'],$_POST['link'],$_POST['date'],$_POST['feelings']]);
    ?>

    <h1>作品登録完了</h1>
    <hr>
    <font color="ff0000"><h3>登録しました</h3></font>
    <button type=button onclick="location.href='index.php'" class="new">作品一覧へ</button>
</body>
</html>