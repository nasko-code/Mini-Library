<?php
    session_start();

    
    // $bookNameWithExtension = $_FILES['book']['name'];
    // $bookName = substr($bookNameWithExtension, 0, strpos($bookNameWithExtension, '.'));

    // array("bookName" => "cover", "bookname2" => "cover2");
    // array(
    //     array('book' => 'bookName', 'cover' => 'coverName'),
    //     array('book' => 'bookName', 'cover' => 'coverName'),
    // )


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
    
    // function saveNames("$tempBook" => "coverName"

    $bookName = $_FILES['book']['name'];
    $coverName = $_FILES['cover']['name'];

    $tempBook = $_FILES['book']['tmp_name'];
    $bookPathName = 'books/' . $_FILES['book']['name'];

    $tempCover = $_FILES['cover']['tmp_name'];
    $coverPathName = 'covers/' . $_FILES['cover']['name'];

    $coverSuccess = move_uploaded_file($tempCover, $coverPathName);
    $bookSuccess = move_uploaded_file($tempBook, $bookPathName);

    $newBook = array('name' => $bookName, 'cover' => $coverName);
    array_push($_SESSION['bookList'], $newBook);

    if ($coverSuccess && $bookSuccess) {
        header('Location: /');
    }
    else {
        echo 'Error with upload!';
    }
?>
 