<?php
 $tempName = $_FILES['newImage']['tmp_name'];
 $filePathName = 'covers/' . $_FILES['newImage']['name'];

 $success = move_uploaded_file($tempName, $filePathName);

 if ($success) {

    echo 'Successful Upload!';
    header('Location: /index.php');
 }
 else {
     echo 'Error with upload!';
 }

?>