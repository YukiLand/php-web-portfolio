<?php 
require 'includes/functions.php';
$id = isset($_GET['id']) ? $_GET['id'] : 0;



echo getCount();
?>

<html lang="fr">
<head>
    <?php require ('includes/head.php');?>
</head>
<body id="gallery">
    <header>
        <?php require ('includes/header.php');?>
    </header>
    <main>
        <div id="hero">
            <h1>My greatest shots</h1>
        </div>
        <div class="container">
            <div id="pictures">
                <a href="detail.html" title="Picture 1">
                    <img src="css/medium.jpg" alt="Picture 1">
                    <br>Picture 1
                </a>
                <a href="detail.html" title="Picture 2">
                    <img src="css/medium.jpg" alt="Picture 2">
                    <br>Picture 2
                </a>
                <a href="detail.html" title="Picture 3">
                    <img src="css/medium.jpg" alt="Picture 3">
                    <br>Picture 3
                </a>
                <a href="detail.html" title="Picture 4">
                    <img src="css/medium.jpg" alt="Picture 4">
                    <br>Picture 4
                </a>
                <a href="detail.html" title="Picture 5">
                    <img src="css/medium.jpg" alt="Picture 5">
                    <br>Picture 5
                </a>
                <a href="detail.html" title="Picture 6">
                    <img src="css/medium.jpg" alt="Picture 6">
                    <br>Picture 6
                </a>
            </div>
            <p id="pager">
                <a href="javascript:void(0)" class="btn disabled">
                    Previous page
                </a>
                <a href="gallery.html" class="btn">
                    Next page
                </a>
            </p>
        </div>
    </main>
    <footer>
       <?php require ('includes/footer.php');?>
    </footer>
</body>
</html>
