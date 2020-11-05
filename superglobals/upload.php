<?php
if(isset($_POST['submit'])){
  $file = $_FILES['file'];
  $name = $_FILES['file']['name'];//filename
  $tmp_name = $_FILES['file']['tmp_name'];
  $size = $_FILES['file']['size'];
  $error = $_FILES['file']['error'];
  echo $name."\n".$tmp_name."\n".$size."\n";

  $tempExtension = explode('.', $name);

  $fileExtension = strtolower(end($tempExtension));

  $isAllowed = array('jpg','jpeg','png','pdf');
  //check extension and errors
  if (in_array($fileExtension,$isAllowed)){
    if ($error === 0){
      if ($size < 500000){
        $newFileName = uniqid('',true).".".$fileExtension;
        $fileDestination = "uploads/".$newFileName;
        echo ($fileDestination);
        move_uploaded_file($tmp_name, $fileDestination);
        header("Location: files.php?yesssss");
      }else{
        echo "Sorry, file too big.";
      }
    } else {
      echo "Sorry, there was an error. Try again.";
    }
  }else{
    echo "Your filetype is not accepted.";
  }

}
?>
