<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $personalInfo = array("Name"=>"Kate", "Age"=>"38","City"=>"Lancaster");
    $moreInfo = array("State"=>"PA", "Height"=>"5'6");

    $personalInfo = array_merge($personalInfo, $moreInfo);

    foreach ($personalInfo as $key => $value) {
      echo $key.": ".$value."<br>";
    }

    print_r($personalInfo);
    echo "<br>";
    print_r(array_keys($personalInfo));
    echo "<br>";
    print_r(array_values($personalInfo));
    echo "<br>";

    $cars = array("ford","chevy","toyota");
    array_push($cars, "nissan");

    print_r($cars);
    echo "<br>";
    echo array_search("chevy", $cars);
    echo "<br>";
    echo count($cars);
     ?>

  </body>
</html>
