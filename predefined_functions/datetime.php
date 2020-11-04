<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //Date
    //'d'=day
    //'j'=Day without zeroes
    //'D'=Day of the week
    //'l'= Full day of the week
    //'m'=Month as a number with zeroes
    //'n'=Month as a number without zeroes
    //'M'=Month (3 letters)
    //'F'=Full month
    //'y'=two-digit year
    //'Y'=full year
    echo date('m/d/Y');

    //Times
    //'g'= Hours in 12 hour format without zeroes
    //'h'= Hours in 12 hour format with zeros
    //'G'=hours in 24 hour format without zeroes
    //'H'=Hours in 24 hour format with zeroes
    //'a'=am/pm in lowercase
    //'A'=AM/PM
    //'i'=minutes without leading zeroes
    //'s'= seconds without leading zeroes;
    date_default_timezone_set('America/New_York');
    echo "<br>";
    echo date('g:i:s a');

    //string to time
    $time = strtotime("4:00pm December 15 2019");
    echo "<br>";
    echo $time, "\n";
    //unix timestamp
    echo "<br>";
    echo date('m/d/y g:i:s a', $time);
    ?>

  </body>
</html>
