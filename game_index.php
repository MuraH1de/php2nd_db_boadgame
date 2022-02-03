<?php
    try {
        //ID:'root', Password: 'root'
        $pdo = new PDO('mysql:dbname=sugoroku;charset=utf8;host=localhost','root','root');
    } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
    }

    // ターン数確認
    $stmt = $pdo->prepare("SELECT count(*) FROM game_table");
    $status = $stmt->execute();
    $turn_all = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($turn_all["count(*)"]);
    echo '<br />';
    


    //ユーザ情報を読み込む
    $stmt = $pdo->prepare("SELECT * FROM user_table");
    $status = $stmt->execute();
    $user_all = 0;
    while($user_table[] = $stmt->fetch(PDO::FETCH_ASSOC)){
        $user_all += 1;
    }
    //echo $user_table[0]["user_name"].'<br />';
    //echo $user_tablee[1]["user_name"].'<br />';
    //echo $user_all.'<br />';







?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-2.1.3.min.js"></script>
    
    <title>Game</title>
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <h1>すごろく</h1>

    <h2><span id="user"><?= $user_table[0]["user_name"]; ?></span>の番です。</h2>
    <h2>ゴールまで<span id="position"><?= $user_table[0]["goal"]; ?></span>マスです。</h2>
    <button id="saikoro">サイコロを振る</button>
    <h2>出た目は<span id="s_result"></span></h2>
    <h2 id="goal"></h2>
    <button id="next">次の人へ</button>



<script>

    let saikoro_result = 0;
    $("#saikoro").on("click", function(){
        saikoro_result = Math.ceil(Math.random() * 6);
        console.log(saikoro_result);
        $("#s_result").empty();
        $("#s_result").append(saikoro_result);

        if( - )

    })

    $("#next").on("click", function(){

    }

</script>
</body>
</html>