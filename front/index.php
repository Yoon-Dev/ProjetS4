<!DOCTYPE html>
<?php
require '../utils/conn.php';
chargerclass("../class/", "Manager");
chargerclass("../class/model/", "Page");
chargerclass("../class/model/", "Avis");
$manager = new Manager($conn);
$page = $manager->getPageModel();
$avis = $manager->getAvisModel();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BATPI</title>
        <link rel="stylesheet" href="../css/front.css" type="text/css" />
    </head>
    <body>
        <?php require "./components/navbar.php"; //NAVBAR ?>
        <section>
            <img src="<?php echo$page->getImg1Path(".")?>" alt="Illustration page d'accueil"></img>
        </section>
        <section>
            <h1>Texte de présentation</h1>
            <p><?php echo $page->presentation();?></p>
            <div>(Map)</div>
        </section>
        <section>
            <!--AVIS-->
            <?php foreach ($avis as &$val) { ?>
             <div>
                <p><?php echo $val->commentaire();?></p>
                    
                <p><?php echo$val->date();?>></p>
                    
                <p><?php echo$val->prenom();?>/></p>

                <p><?php echo$val->formation_effectue();?>/></p>
            </div>  
            <?php } ?>
        </section>
        <?php require "./components/footer.php"; //FOOTER ?>
        <!-- SCRIPTS -->
        <script type="text/javascript" src="../front.js"></script>
    </body>
</html>