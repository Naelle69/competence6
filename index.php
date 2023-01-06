<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <!-- STYLE CSS-->
        <!-- <link rel="stylesheet" href="css/style.css" /> -->
        <link rel="stylesheet" href="css/typo.css" />
        <!-- <link rel="stylesheet" href="css/mediasqueries.css" /> -->
        <!-- TAILWIND CSS-->
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Site Pok'Gourmet</title>
    </head>


    <body>
        <div id="header">
            <!-- contenu homepage -->
            <?php include("header/contenuhomepage.php"); ?>
            <!-- navbar web -->
            <?php include("header/navbar.php"); ?>
        </div>

        <div id="offres">
            <!-- section nos offres -->
            <?php include("nosoffres/nosplats.php"); ?>
            <?php include("nosoffres/nosextras.php"); ?>
        </div>

        <div id="nosideesrecettes">
            <!-- section nos idees recettes -->
            <?php include("nosideesrecettes/nosrecettes.php"); ?>
        </div>

        <div id="promotion">
            <!-- section promotion -->
            <?php include("promotion/promotion.php"); ?>
        </div>

        <div id="avis">
            <!-- section avis -->
            <?php include("avis/avis.php"); ?>
        </div>

        <div id="astuces">
            <!-- section astuces -->
            <?php include("astuces/astuces.php"); ?>
        </div>

        <div id="contactez">
            <!-- section nous contacter -->
            <?php include("contacteznous/contacteznous.php"); ?>
        </div>

        <div id="avantages">
            <!-- section avantages -->
            <?php include("avantages/avantages.php"); ?>
        </div>

        <div id="footer">
            <!-- section footer -->
            <?php include("footer/footer.php"); ?>
        </div>


    <!-- Tailwind Elements JS -->
    <script type="text/javascript" src="js/index.min.js"></script>
    <!-- Custom scripts -->
     <script type="text/javascript"></script>
    </body>
</html> 