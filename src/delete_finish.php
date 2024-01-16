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

    <h1>作品削除完了</h1>
    <hr>

    <?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('delete from Film where id=?');
    $sql->execute([$_GET['id']]);
    ?>

    <font color="ff0000"><h3>削除しました</h3></font>
    <button type=button onclick="location.href='index.php'" class="new">作品一覧へ</button>
</body>
</html>