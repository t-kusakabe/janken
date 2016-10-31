<!DOCTYPE html>
<html>
  <head>
    <title>じゃんけんゲーム</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="contents">
      <div class="player">
        <?php if ($_POST['icon'] == 0) { ?>
          <img src="/images/gu-.png">
        <?php } else if($_POST['icon'] == 1) { ?>
          <img src="/images/tyoki.png">
        <?php } else { ?>  
          <img src="/images/pa-.png">
        <?php } ?>
      </div>

      <?php $cpu_hand = rand(0, 2); ?>

      <div class="cpu">
        <?php if ($cpu_hand == 0) { ?>
          <img src="/images/gu-.png">
        <?php } else if($cpu_hand == 1) { ?>
          <img src="/images/tyoki.png">
        <?php } else { ?>  
          <img src="/images/pa-.png">
        <?php } ?>
      </div>
    </div>
  </body>
</html>
