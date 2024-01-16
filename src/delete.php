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

    <h1>作品削除</h1>
    <button type="button" onclick="location.href='index.php'" class="back">戻る</button><br>
    <hr>

    <?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('select * from Film where id=?');
    $sql->execute([$_GET['id']]);
    foreach($sql as $row){
        echo '<dl>';
        echo '<dt>',$row['name'];
        echo '<dd>',$row['date'],'</dd>';
        echo '<dd>',$row['feelings'],'</dd>';
        echo '<dd>',$row['link'],'</dd>';
        echo '</dl>';
    }
    echo '<font color="ff0000"><h3>削除しますか？</h3></font>';
    echo '<button type="button" onclick="location.href=`delete_finish.php?id=',$_GET['id'],'`" class="next">OK</button>';
    ?>
</body>
</html>