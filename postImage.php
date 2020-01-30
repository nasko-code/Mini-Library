<?php
    $tempCover = $_FILES['cover']['tmp_name'];
    $coverPathName = 'covers/' . $_FILES['newImage']['name'];

    $tempBook = $_FILES['book']['tmp_name'];
    $bookPathName = 'books/' . $_FILES['newImage2']['name'];

    $coverSuccess = move_uploaded_file($tempCover, $coverPathName);
    $bookSuccess = move_uploaded_file($tempBook, $bookPathName);
            
    if ($coverSuccess && $bookSuccess) {
        header('Location: /');
    }
    else {
        echo 'Error with upload!';
    }
?>
 