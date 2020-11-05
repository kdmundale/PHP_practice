<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    session_start();

    $_SESSION['name']= "Dari";
    $_SESSION['age']=38;

    echo "Hello ".$_SESSION['name']."\n";

    setcookie("name","Kate",time()+3600);

    print_r($_COOKIE);
    //arg1 = name of cookie
    //arg2 = value
    //arg3 = expire
    //arg4 = path
    //arg5 = domain
    //arg6 = security
    ?>

  </body>
</html>
