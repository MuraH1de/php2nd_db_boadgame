<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start</title>
</head>
<body>
    <h1>すごろくスタート！</h1>
    <h2>何人で遊びますか？</h2>

    <form method="POST" action="number_update.php">
        <div class="select_number">
            <!-- <legend>フリーアンケート</legend>
            <label>名前：<input type="text" name="name"></label><br>
            <label>Email：<input type="text" name="email"></label><br>
            <label><textArea name="content" rows="4" cols="40"></textArea></label><br> -->
            <select name="number">
            <option value="">-</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            </select> 人で遊びます。
            <input type="submit" value="GO">
        </div>
    </form>
</body>
</html>