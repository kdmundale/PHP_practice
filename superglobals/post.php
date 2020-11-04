<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    if(isset($_POST)){
      echo $_POST['name'].", your form is submitted.";
    } else {
      echo "bang";
    }
    echo "<br>";
    print_r($_POST);
    ?>

    <form action="post.php" method="post">
      <input type="text" name="name" value="">
      <input type="text" name="age" value="">
      <button type="submit" name="button">Submit</button>
    </form>

  </body>
</html>
