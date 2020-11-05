<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      // echo $_FILES['file']['name'];
      // echo $_FILES['file']['size'];
      // echo $_FILES['file']['tmp_name'];
    ?>
    <form class="" action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file">
      <button type="submit" name="submit">submit</button>

    </form>
  </body>
</html>
