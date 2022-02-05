## ①課題内容（どんな作品か）

すごろくゲームを作成中です。<br>
 ` ドラフト版は完成。` 

【ファイル概要】
- ```index.php```  <br>
    ⇒遊ぶ人数を選択する
- ```number_update.php```  <br>
    ⇒DBに遊ぶ人数を更新する（UPDATE）
- ```user_regist.php```  <br>
    ⇒名前を登録する
- ```user_insert.php```  <br>
    ⇒DBに名前を登録する（INSERT）
- ```game_index.php```  <br>
    ⇒サイコロを振って、何マス進むか決める<br>
    ⇒DBからゲームの進捗を取得して表示する（SELECT）
- ```game_insert.php```  <br>
    ⇒DBからゲームの進捗を取得して表示する（SELECT）<br>
    ⇒DBに進んだマスの数を更新する（UPDATE）<br>
    ⇒DBにゲームの進捗を登録する（INSERT）


【動作】
1. ```index.php``` 遊ぶ人数を登録
2. ```user_regist.php```　名前を登録
3. ```game_index.php```　ゲームを進める


## ②工夫した点・こだわった点

- DBを使って、ゲームの進捗管理をできるすごろくを作成。
- ```game_index.php```でサイコロを振るときは、```javascript```を使って、ランダムで設定できるようにしました。

## ③質問・疑問（あれば）

- 

## ④その他（感想、シェアしたいことなんでも）

- 
