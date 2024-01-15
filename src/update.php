<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>映画鑑賞システム</title>
</head>
<body>
    <?php require 'db_connect.php'; ?>
    <h1>作品更新</h1>
    <button type="button" onclick="location.href='index.php'" class=back>戻る</button><br>
    <hr>
    <p>
        <form action="update_check.php" method="post">
            <?php
            $pdo=new PDO($connect, USER, PASS);
            $sql=$pdo->prepare('select * from Film where id=?');
            $sql->execute([$_GET['id']]);
            foreach($sql as $row){
                echo '作品名：<input type="text" name="name" value="',$row['name'],'" required><br>';
                echo '鑑賞日：<input type="date" name="date" value="',$row['date'],'"><br>';
                echo '感想　：<textarea name="feelings" cols="30" rows="5">',$row['feelings'],'</textarea><br>';
                echo 'リンク：<input type="text" name="link" value="',$row['link'],'"><br>';
                echo '<input type="hidden" name="id" value="',$row['id'],'">';
            }
            ?>
            <p>
                <button type="submit">確認</button>
            </p>
        </form>
    </p>
</body>
</html>