<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $filePath = "uploads/file.txt";
    $output = file_get_contents($filePath);

    $ages = explode("\n", $output);
    $totalAge = 0;
    foreach ($ages as $age) {
      echo $age."<br>";
      $totalAge = $totalAge + intval($age);
    }
    $avAge = round($totalAge/count($ages),2);
    echo "Average age: ".$avAge."\n";

    ?>

  </body>
</html>
