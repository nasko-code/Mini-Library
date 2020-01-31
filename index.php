<?php 

    session_start();

    if (!isset($_SESSION['bookList'])) {
        $_SESSION['bookList'] = array();
    }
   
   // print_r($_SESSION);

   //  $files = scandir('covers');
   //  $imageNames = array_slice($files, 2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mini Library</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="heading">Mini Library</h1>
            <h2 class="heading">Last Added Books</h2>
        </header>
      
        <a class="upload-button" href="upload.php">Upload Book</a>
        <a class="upload-button" href="\books" target= "_blank" >Download Books</a>
        <a class="upload-button" href="https://www.w3schools.com/" target= "_blank">W3Schools.com</a>

        <div class="gallery">
            
            <?php
                foreach ($_SESSION['bookList'] as $book) {
                    $bookCover = $book['cover'];
                    $bookName = $book['name'];

                   // echo "<img src=\"covers/$bookCover\" alt=\"Gallery Image\">";

                   echo "<a href=\"books/$bookName\" download><img src=\"covers/$bookCover\" alt=\"Gallery Image\"></a>";
                }
            ?>
        </div>
    </div>
</body>
</html>