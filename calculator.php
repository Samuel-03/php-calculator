<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="calculator.php" method="get">
      Enter first number: <input type="number" name="num1"><br>
      Enter second number: <input type="number" name="num2"><br>
      <input type="submit">
    </form>
    Answer : <?php echo $_GET["num1"] + $_GET["num2"] ?>
  </body>
</html>
