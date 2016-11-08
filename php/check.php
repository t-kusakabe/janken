<!DOCTYPE html>
<html>
  <head>
    <title>じゃんけんゲーム</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>
    <header>
      <img class="title" src="/images/TECH-CAMP.svg">
    </header>

    <div class="contents">
      <div id="player">
        <?php if ($_POST['icon'] == 0) { ?>
          <img src="/images/gu-.png">
        <?php } else if($_POST['icon'] == 1) { ?>
          <img src="/images/tyoki.png">
        <?php } else { ?>  
          <img src="/images/pa-.png">
        <?php } ?><br>
        <span>あなた</span>
      </div>

      <?php $cpu_hand = rand(0, 2); ?>

      <div id="cpu">
        <?php if ($cpu_hand == 0) { ?>
          <img src="/images/gu-.png">
        <?php } else if($cpu_hand == 1) { ?>
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
          if ($_POST['icon'] == $cpu_hand) {
            echo 'あいこ！';
          } else if 
            (
              $_POST['icon'] == 0 && $cpu_hand == 1 
              || $_POST['icon'] == 1 && $cpu_hand == 2 
              || $_POST['icon'] == 2 && $cpu_hand == 0
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
