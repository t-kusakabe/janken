<!DOCTYPE html>
<html>
  <head>
    <title>じゃんけんゲーム</title>
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="contents">
      <form action="check.php" method="POST">
        <div class="content">
          <label>
            <img class="hand" src="/images/gu-.png"><br>
            <input class="icon" type="radio" name="icon">
          </label>
        </div>
        <div class="content">
          <label>
            <img class="hand" src="/images/tyoki.png"><br>
            <input class="icon" type="radio" name="icon">
          </label>
        </div>
        <div class="content">
          <label>
            <img class="hand" src="/images/pa-.png"><br>
            <input class="icon" type="radio" name="icon">
          </label>
        </div>
        <input type="submit" value="じゃんけんぽんっ！">
      </form>
    </div>
  </body>
</html>
