<!DOCTYPE html>
<html>
  <head>
    <title>じゃんけんゲーム</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/radio.js"></script>
  </head>

  <body>
    <header>
      <img class="title" src="/images/TECH-CAMP.svg">
    </header>

    <div class="contents">
      <form name="form" action="/check.php" method="POST">
        <div class="flame">
          <div class="content">
            <label id="aaa">
              <img id="0" class="hand" src="/images/gu-.png"><br>
              <input class="icon" type="radio" name="icon" value="0">
            </label>
          </div>
          <div class="content">
            <label>
              <img id="1" class="hand" src="/images/tyoki.png"><br>
              <input class="icon" type="radio" name="icon" value="1">
            </label>
          </div>
          <div class="content">
            <label>
              <img id="2" class="hand" src="/images/pa-.png"><br>
              <input class="icon" type="radio" name="icon" value="2">
            </label>
          </div><br>
        </div>
        <button class="submit_button" type="submit">じゃんけんぽんっ！</button>
      </form>
    </div>

    <p class="message">
      <?php 
        if (isset($_GET['message'])) {
          echo $_GET['message'];
        }
      ?>
    </p>
  </body>
</html>
