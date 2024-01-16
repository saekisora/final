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
            echo '<dt><button type="button" onclick="location.href=`update.php?id=',$row['id'],'`" class="up">更新</button> ';
            echo '<button type="button" onclick="location.href=`delete.php?id=',$row['id'],'`" class="dele">削除</button></dt><br>';
            if($row['link'] ==  null){
                echo '<dd>',$row['name'],'</dd>';
            }else{
                echo '<dd><a href="',$row['link'],'">',$row['name'],'</a></dd>';
            }
            echo '<dd>',$row['date'],'</dd>';
            echo '<dd>',$row['feelings'],'</dd>';
            echo '</dl>';
            echo '-------------------------------------------------------------------<br>';
        }
    }
    ?>
    
</body>
</html>