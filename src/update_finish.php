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
    $film=$pdo->prepare('update Film set name=?,link=?,date=?,feelings=? where id=?');
    $film->execute([$_POST['name'],$_POST['link'],$_POST['date'],$_POST['feelings'],$_GET['id']]);
    ?>
    
    <h1>作品更新完了</h1>
    <hr>
    <font color="ff0000"><h3>更新しました</h3></font>
    <button type=button onclick="location.href='index.php'" class="new">作品一覧へ</button>
</body>
</html>