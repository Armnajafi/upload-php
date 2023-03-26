<?php

    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["uploadingfile"]["name"]);
    $uploadOk = 1;
    if(isset($_POST["submit"])) {
        $uploadOk = 1;
    }
    
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    } else {
      if (move_uploaded_file($_FILES["uploadingfile"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["uploadingfile"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
