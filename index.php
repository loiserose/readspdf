<?php
if(isset($_POST['submit']))
{
    header('Location:read.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reading pdf using php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
        <h1 class="hero">Read pdfs with php 💘😎😉</h1>
        </div>
        <br> <br> <br>
        <div class="wrapper">
            <img src="images/Untitled-1.psd" alt="image of a pdf" class="image" height="300px;" width="200px;">
        </div>
        <br> <br> <br>
        <div class="wrapper">
            <form action="" method="post">
                <button type="submit" name="submit" value="submit">Read pdf</button>
            </form>
        </div>
        <br><br><br>
        <div class="wrapper">
            <h3>All Made with Love by <span>Loiserose</span>❤️❤️❤️❤️🎀</h3>
        </div>
    </div>
</body>
</html>
