<?php 
require 'includes/functions.php';
$page = isset($_GET['page']) ? $_GET['page'] : 0;

$selection = findPaged(6, 6*$page);
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
                <?php
                        foreach ($selection as $picture)
                        {
                            $src='images/medium/'. $picture['slug'] . '.jpg';
                        ?>

                        <a href="detail.php?id=<?php echo $picture['id'] ?>" title="Picture 1">

                            <img src = "<?php echo $src; ?>">
                        </a>
                        <?php 
                        }
                        ?>
            </div>
            <p id="pager">
                <a href="" class="btn">
                    Previous page
                </a>
                <a href="gallery.php" . <?php $selection ?> class="btn">
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
