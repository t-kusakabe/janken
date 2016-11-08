<!DOCTYPE html>
<html>
  <head>
    <title>じゃんけんゲーム</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>
    <?php
      if (is_null($_POST['icon'])) {
        $message = '手を選んでください';
        header("Location: /php/index.php?message={$message}");
      }
    ?>


    <header>
      <img class="title" src="/images/TECH-CAMP.svg">
    </header>

    <div class="contents">
      <div id="player">
        <?php if ($_POST['icon'] == 0) { ?>
          <img src="ぐー画像の名前">
        <?php ここに書いてね ?>
          <img src="ちょき画像の名前">
        <?php } else { ?>  
          <img src="ぱー画像の名前">
        <?php } ?><br>
        <span>あなた</span>
      </div>

      <?php $箱の名前 = rand(0, 2); ?>

      <div id="cpu">
        <?php if ($箱の名前 == 0) { ?>
          <img src="/images/gu-.png">
        <?php } else if($箱の名前 == 1) { ?>
          <img src="/images/tyoki.png">
        <?php } else { ?>  
          <img src="/images/pa-.png">
        <?php } ?><br>
        <span>あいて</span>
      </div>
    </div>

    <div id="result">
      <h1>
        <?php
          if ($自分の手 == $相手の手) {
            echo 'あいこ！';
          } else if 
            (
              $_POST['icon'] == ぐーかちょきかぱー && $cpu_hand == ぐーかちょきかぱー
              || $_POST['icon'] == ぐーかちょきかぱー && $cpu_hand == ぐーかちょきかぱー
              || $_POST['icon'] == ぐーかちょきかぱー && $cpu_hand == ぐーかちょきかぱー
            ) 
          {
            echo 'かち！';
          } else {
            echo 'まけ！';
          }
        ?>
      </h1>
      <a href="/php/index.php">もう一度</a>
    </div>
  </body>
</html>
