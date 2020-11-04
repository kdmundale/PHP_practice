<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $str= "Hello, my name is Kate.";

    echo strlen($str)."\n";

    $firstName="My first name is Kate.";
    echo "<br>";
    echo str_word_count($firstName)."<br>";

    $email = "email@email.com";
    if (strpos($email, "@")) {
      echo "this is a valid email"."<br>";
    } else {
      echo "this is not a valid email"."<br>";
    }

    echo strtoupper ("what is your name?"."<br>");
    ?>

  </body>
</html>
