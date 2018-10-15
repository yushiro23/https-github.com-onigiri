<?php
    session_start();
    require_once('../dbconnect.php');

    // 閲覧制限
    // サインイン処理をしていれば、セッション処理の中にidが保存されているので、idが存在するかどうかでこのタイムラインページの閲覧を制限する。

    if (!isset($_SESSION['register']['id'])) {
      header('../location: signin.php');
    }

    $bbs_people = $_GET['id'];
    //SELECTで現在サインインしているユーザーの情報をusersテーブルから読み込む
    $sql = 'SELECT `id`, `name`, `img_name` FROM `users` WHERE `id` = ?';
    $data = [$bbs_people];
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    $sql = 'SELECT * FROM `users` WHERE `id` = ?';
    $data = [$bbs_people];
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $name = $user['name'];
    $email = $user['email'];
    $img_name = $user['img_name'];
    $gender = $user['gender'];
    $age = $user['age'];
    $school = $user['school'];
    $other = $user['other'];

    $sql = 'SELECT `p`.* FROM `posts`AS `p` LEFT JOIN `users` AS `u` ON `p`. `user_id`= `u`.`id` WHERE u.`id` = ?';
    $data = [$bbs_people];
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    // ポストを入れる配列
    $posts = array();
    // レコードがなくなるまで取得処理
    while(true){
      // 1件ずつフェッチ
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        // レコードがなければ処理を抜ける
          if($record == false){
              break;
          }
          // レコードがあれば追加
          $posts[] = $record;
    }

    $sql = 'SELECT `f`.* FROM `feeds`AS `f` LEFT JOIN `users` AS `u` ON `f`. `user_id`= `u`.`id` WHERE u.`id` = ?';
    $data = [$bbs_people];
    $stmt = $dbh->prepare($sql);
    $stmt->execute($data);

    // ポストを入れる配列
    $feeds = array();
    // レコードがなくなるまで取得処理
    while(true){
      // 1件ずつフェッチ
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        // レコードがなければ処理を抜ける
          if($record == false){
              break;
          }
          // レコードがあれば追加
          $feeds[] = $record;
    }

    // $genderの文字化
    if($gender=='1'){
      $gender = 'Male';
    }elseif($gender=='2'){
      $gender = 'Female';
    }else{
      $gender = 'Not Chosen';
    }

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>投稿者情報</title>
</head>
<body>
  <h1>USER INFO</h1>
    <h3>YOUR INFORMATION</h3>
      <div>
          
          <div>
            <img src="../user_profile_img/<?= $user['img_name']?>" width="60" class="img-thumbnail"><br>
          </div>
          <div>User Name:<?php echo $name?></div>

          <div>gender:<?php echo $gender?></div>

          <div>age:<?php echo $age?></div>

          <div>school:<?php echo $school?></div>

          <div>introduction:<?php echo $other?></div>


  <div>
    <h3>BLOG POSTS</h3>
    <?php foreach ($posts as $post):?>
      <form action="../blog/blog.php" method="POST">
      <input type="hidden" name="post_id" value="<?php echo $post['id'] ?>">
      <div>TITLE:<?php echo $post['title'] ?></div>
      <div>BODY:<?php echo $post['post'] ?></div>
      <div>TIME:<?php echo $post['created'] ?></div>
      <input type="submit" name="submit" value="CHECK">
      <br>
      </form>
    <?php endforeach; ?>
  </div>
  <div>
    <h3>BBS POSTS</h3>
    <?php foreach ($feeds as $feed):?>
      <form action="bbs.php" method="POST">
      <input type="hidden" name="feed_id" value="<?php echo $feed['id'] ?>">
      <div>BODY:<?php echo $feed['feed'] ?></div>
      <div>TIME:<?php echo $feed['created'] ?></div>
      <input type="submit" name="submit" value="CHECK">
      <br>
    </form>
    <?php endforeach; ?>
  </div>
</body>
</html>