<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>映画鑑賞システム</title>
</head>
<body>
    <h1>作品登録確認</h1>
    <button type="button" onclick="location.href='new.php'" class="back">戻る</button><br>
    <hr>
    <p>
        <form action="new_finish" method="post">
            <?php
            echo '作品名：<input type="text" name="name" value="',$_POST['name'],'" readonly><br>';
            echo '鑑賞日：<input type="text" name="date" value="',$_POST['date'],'" readonly><br>';
            echo '感想　：<textarea name="feelings" cols="30" rows="5" readonly>',$_POST['feelings'],'</textarea><br>';
            echo 'リンク：<input type="text" name="link" value="',$_POST['link'],'" readonly><br>';
            echo '<input type="hidden" name="feelings" value="',$_POST['feelings'],'">';
            ?>
            <p>
                <button type="submit" class="next">登録</button>
            </p>
        </form>
    </p>
</body>
</html>