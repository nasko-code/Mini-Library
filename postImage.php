<?php
 $tempName = $_FILES['newImage']['tmp_name'];
 $filePathName = 'covers/' . $_FILES['newImage']['name'];

 $tempName2 = $_FILES['newImage2']['tmp_name'];
 $filePathName2 = 'books/' . $_FILES['newImage2']['name'];


 $success = move_uploaded_file($tempName, $filePathName);
            move_uploaded_file($tempName2, $filePathName2);

 if ($success) {
    header('Location: /index.php');
 }
 else {
     echo 'Error with upload!';
 }

?>