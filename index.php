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
    <title>Animal Gallery</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="heading">Animal Gallery</h1>
            <h2 class="heading">Cute animals</h2>
        </header>

        <a class="upload-button" href="upload.php">Upload Image</a>

        <div class="gallery">
            
            <?php
                foreach ($imageNames as $imageName) {
                    echo "<img src=\"covers/$imageName\" alt=\"Gallery Image\">";
                }
            ?>
        </div>
    </div>
</body>
</html>