<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>映画鑑賞システム</title>
</head>
<body>
    <?php require 'db_connect.php'; ?>

    <h1>映画鑑賞システム</h1>
    <button type="button" onclick="location.href='new.php'" class="new">作品登録</button>
    <hr>

    <?php
    $pdo=new PDO($connect, USER, PASS);
    $noinfomation='作品が登録されていません<br>';
    $film=$pdo->query('select * from Film');
    if($film->rowCount()==0){
        echo $noinfomation;
    }else{
        foreach($film as $row){
            echo '<dl>';
            echo '<dt>',$row['name'],'　<button type="button" onclick="location.href=`update.php?id=',$row['id'],'`">更新</button>　<button type="button" onclick="location.href=`delete.php?id=',$row['id'],'`">削除</button></dt>';
            echo '<dd>',$row['date'],'</dd>';
            echo '<dd>',$row['feelings'],'</dd>';
            echo '<dd>',$row['link'],'</dd>';
            echo '</dl>';
            echo '-------------------------------------------------------------------<br>';
        }
    }
    ?>
</body>
</html>