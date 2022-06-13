<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>書籍登録</title>
    <link href="" rel="">
</head>
<body>
    <header>
        <nav>
            <div>
                <div><a href="select02.php">読みたい本一覧</a></div>
                <div><a href="read03.php">読んだ本一覧</a></div>
            </div>
        </nav>
    </header>
    <form method="post" action="insert02.php">
        <div>
            <fieldset>
                <legend>読みたい本リスト</legend>
                <label>書籍名：<input type="text" name="name"></label><br>
                <label>amazon：<input type="text" name="amazon"></label><br>
                <label>評価：<select name="assesment">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                </label><br>
                <label>感想：<input type="text" name="comment"></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
</body>
</html>