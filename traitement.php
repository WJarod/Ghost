<?php

session_start();

    $serveur = "localhost";
    $dbname = "GHOST_BDD";
    $user = "root";
    $pass = "root";
    
    $name = $_POST["user_name"];
    $prenom = $_POST["user_last_name"];
    $company = $_POST["user_company"];
    $phone = $_POST["user_phone"];
    $mail = $_POST["user_mail"];
    $site = $_POST["user_site_url"];
    $time = $_POST["time"];

    setcookie('nom', $_POST["user_name"], time()+3600*24*365);
    setcookie('prenom', $_POST["user_last_name"], time()+3600*24*365);
    setcookie('company', $_POST["user_company"], time()+3600*24*365);
    setcookie('tel', $_POST["user_phone"], time()+3600*24*365);
    setcookie('mail', $_POST["user_mail"], time()+3600*24*365);
    setcookie('site', $_POST["user_site_url"], time()+3600*24*365);


    $news = $_POST["ok_newsletter"];
    
    try{
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname",$user,$pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        //On insère les données reçues
        $sth = $dbco->prepare("
            INSERT INTO user(nom_user, prenom_user, company, tel, email, web_site, time, newsletter)
            VALUES(:nom_user, :prenom_user, :company, :tel, :email, :web_site, :time, :newsletter)");
        $sth->bindParam(':nom_user',$name);
        $sth->bindParam(':prenom_user',$prenom);
        $sth->bindParam(':company',$company);
        $sth->bindParam(':tel',$phone);
        $sth->bindParam(':email',$mail);
        $sth->bindParam(':web_site',$site);
        $sth->bindParam(':time',$time);
        $sth->bindParam(':newsletter',$news);

        $sth->execute();
        
    }
    catch(PDOException $e){
        echo 'Impossible de traiter les données. Erreur : '.$e->getMessage();
    }
?>


<?php include 'include/header.php'?>
        
    <section class="formBG">

        <section class="inf1">
            <h1 class="center1">Formulaire envoyé</h1>
            <h2 class="center1">Merci</h2>
        </section>

    </section>

<?php include 'include/footer.php'?>