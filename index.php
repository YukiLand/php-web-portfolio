<?php 
require 'includes/functions.php';
$page = isset($_GET['page']) ? $_GET['page'] : 0;

$selection = findPaged(4, 12);
?>


<!doctype html>
<html lang="fr">
<head>
  <?php require ('includes/head.php');?>
</head>
<body id="home">
    <header>
       <?php require ('includes/header.php');?>
    </header>
    <main>
        <div id="hero">
            <h1>I love photography</h1>
        </div>
        <div class="container">
            <div class="row">
                <div id="content" class="column">
                    <h2 class="content-head">Lorem ipsum dolor sit amet</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                        gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
                    </p>
                    <p>
                        Aliquam sed dolor mi. Maecenas eu tortor neque. Phasellus ornare, purus sit
                        amet ultricies fermentum, erat ex sollicitudin odio, at aliquam quam ex non
                        risus. Quisque sit amet tincidunt nisl. Quisque mauris nisl, interdum quis
                        dapibus nec, blandit eget augue. Cras fringilla, enim sed euismod scelerisque,
                        leo tellus viverra massa, nec congue sem nisi ut turpis. Nam eu ipsum sed eros
                        fringilla maximus a non augue. Orci varius natoque penatibus et magnis dis
                        parturient montes.
                    </p>
                </div><!-- end first column -->
                <div class="column">
                    <p class="content-head pictures">
                        <a class="btn" href="gallery.html" title="See all pictures">
                            See all shots
                        </a>
                    </p>
                    <div id="pictures">
                        <?php
                        foreach ($selection as $picture)
                        {
                            $src='images/small/'. $picture['slug'] . '.jpg';
                        ?>

                        <a href="detail.php?id=<?php echo $picture['id'] ?>" title="Picture 1">

                            <img src = "<?php echo $src; ?>">
                        </a>
                        <?php 
                        }
                        ?>
                    </div>
                </div><!-- end second column -->
            </div><!-- end row -->
            <p id="home-contact">
                <a class="button" href="contact.html" title="Formulaire de contact">
                    Contact me
                </a>
            </p>
        </div>
    </main>
    <footer>
        <?php require ('includes/footer.php');?>
    </footer>
</body>
</html>
