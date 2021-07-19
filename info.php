<?php session_start();

    include 'include/header.php';
?>
<section class="formBG">
    <section class="info">
        <div class="gauche">
            <h3>Nom : <?= $_COOKIE['nom']?></h3>
        </div>

        <div class="gauche">
            <h3>Prénom : <?= $_COOKIE['prenom']?></h3>
        </div>

        <div class="gauche">
            <h3>Company : <?= $_COOKIE['company']?></h3>
        </div>

        <div class="droite1">
            <h3>Tel : <?= $_COOKIE['tel']?></h3>
        </div>

        <div class="droite2">
            <h3>Email : <?= $_COOKIE['mail']?></h3>
        </div>

        <div class="droite3">
            <h3>Site Web : <?= $_COOKIE['site']?></h3>
        </div>
    </section>
</section>
<?php include 'include/footer.php'?>
