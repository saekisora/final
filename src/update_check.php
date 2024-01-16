<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>映画鑑賞システム</title>
</head>
<body>
    <h1>作品更新確認</h1>
    <?php
    echo '<button type="button" onclick="location.href=`update.php?id=',$_POST['id'],'`" class="back">戻る</button><br>';
    ?>
    <hr>
    <p>
        <?php
        echo '<form action="update_finish?id=',$_POST['id'],'" method="post">';
            echo '作品名：<input type="text" name="name" value="',$_POST['name'],'" readonly><br>';
            echo '鑑賞日：<input type="text" name="date" value="',$_POST['date'],'" readonly><br>';
            echo '感想　：<textarea name="feelings" cols="30" rows="5" readonly>',$_POST['feelings'],'</textarea><br>';
            echo 'リンク：<input type="text" name="link" value="',$_POST['link'],'" readonly><br>';
            echo '<input type="hidden" name="feelings" value="',$_POST['feelings'],'">';
            ?>
            <p>
                <button type="submit" class="next">更新</button>
            </p>
        </form>
    </p>
</body>
</html>