<?php
    // $bookNameWithExtension = $_FILES['book']['name'];
    // $bookName = substr($bookNameWithExtension, 0, strpos($bookNameWithExtension, '.'));


   /* function getNames() {
        $fileContents = file_get_contents('names.txt');
        $names = unserialize($fileContents);
     }

     return $names;

     function saveNames($bookName, $coverName) {
        $newName = array('book' => $bookName, 'cover' => $coverName);

        if (!file_exists('names.txt')) {
            file_put_contents('names.txt', serialize(array()));
        }

        $nameArray = unserialize(file_get_contents('names.txt'));

        array_push($nameArray, $newName);

        file_put_contents('names.txt', serialize($nameArray));

    */


    $tempBook = $_FILES['book']['tmp_name'];
    $bookPathName = 'books/' . $_FILES['book']['name'];

    $tempCover = $_FILES['cover']['tmp_name'];
    $coverPathName = 'covers/' . $_FILES['cover']['name'];

    $coverSuccess = move_uploaded_file($tempCover, $coverPathName);
    $bookSuccess = move_uploaded_file($tempBook, $bookPathName);
            
    if ($coverSuccess && $bookSuccess) {
        header('Location: /');
    }
    else {
        echo 'Error with upload!';
    }
?>
 