<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Book</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <h1 class="heading">Mini Library</h1>
            <a class="home-button" href="index.php">Home</a>
        </header>

        
        <form action="postImage.php" method="post" enctype="multipart/form-data" class="upload-image-form">
        <form action="postImage2.php" method="post" enctype="multipart/form-data" class="upload-image-form">
        

        
            <div>
                <label>Upload Book: </label>
                <input type="file" name="newBook">

               
            </div>



            <div>
                <input type="submit" value="Upload" class="upload-button">
            </div>

            <form action="postbook.php" method="post" enctype="multipart/form-data" class="upload-image-form">

            

            <div>
            <label>Upload Cover: </label>
                <input type="file" name="newImage">
            </div>

            <div>
                <input type="submit" value="Upload" class="upload-button">
            </div>

        </form>
    </div>
</body>
</html>