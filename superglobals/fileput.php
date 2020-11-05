<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    if (isset($_POST['submit'])){
      $myFile = fopen("uploads/file.txt","a");
      $txt = $_POST['age']."\n";
      fwrite($myFile,$txt);
      fclose($myFile);
    }
    ?>

    <form class="" action="fileput.php" method="post">
      <input type="text" name="age" value="">
      <input type="submit" name="submit">

    </form>

  </body>
</html>
