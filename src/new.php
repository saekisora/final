<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>映画鑑賞システム</title>
</head>
<body>
    <h1>作品登録</h1>
    <button type="button" onclick="location.href='index.php'" class="back">戻る</button><br>
    <hr>
    <p>
        <form action="new_check.php" method="post">
            作品名：<input type="text" name="name" required><br>
            鑑賞日：<input type="date" name="date"><br>
            感想　：<textarea name="feelings" cols="30" rows="5"></textarea><br>
            リンク：<input type="text" name="link"><br>
            
            <p>
                <button type="submit" class="next">確認</button>
            </p>
        </form>
    </p>
</body>
</html>