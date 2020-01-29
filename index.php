<?php 
    $files = scandir('covers');
    $imageNames = array_slice($files, 2);
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
            
        </header>

        <a class="upload-button" href="upload.php">Upload Book</a>

        <div class="gallery">
            
            <?php
                foreach ($imageNames as $imageName) {
                    echo "<img src=\"covers/$imageName\" alt=\"Cover Book\">";
                }
            ?>
        </div>
    </div>

    <a class="download-button" href="\books\the_little_prince.pdf" target= "_blank">Download/Read Book</a>


</body>
</html>