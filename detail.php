<?php 
require 'includes/functions.php';
$id = isset($_GET['id']) ? $_GET['id'] : 0;


$photo = findOneById($id);

if (false === $photo) {
    exit("Identifiant introuvable");
}
$src='images/large/' . $photo['slug'] . '.jpg';
?>

<!doctype html>
<html lang="fr">
<head>
    <?php require ('includes/head.php');?>
</head>
<body id="detail">
    <header>
        <?php require ('includes/header.php');?>
    </header>
    <main>
        <div id="hero">
            <!-- Picture title -->
            <h1><?php echo $photo['title'];?></h1>
        </div>
        <div class="container">
            <figure>
                <!-- Picture file (large) -->
                <img src=<?php echo $src;?> >
                <!-- Picture date and location -->
                <figcaption><?php echo $photo['date'];?> - <?php echo $photo['location']?></figcaption>
            </figure>
            <!-- Picture description  -->
            <p><?php echo $photo['description'];?></p>
            <p id="pager">
                <a href="javascript:void(0)" class="btn disabled">
                    Previous shot
                </a>
                <a href="gallery.html" class="btn">
                    Next shot
                </a>
            </p>
        </div>
    </main>
    <footer>
       <?php require ('includes/footer.php');?>
    </footer>
</body>
</html>
