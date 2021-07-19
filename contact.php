<?php

session_start();

$_POST["user_name"];
$_POST["user_last_name"];
$_POST["user_company"];
$_POST["user_phone"];
$_POST["user_mail"];
$_POST["user_site_url"];
$_POST["type_morning"];
$_POST["type_evening"];
$_POST["ok_newsletter"];

?>

<?php include 'include/header.php'?>
        <section class="formBG">

                <form method="post" id="test" action="traitement.php">
                    <div class="gauche">
                        <label for="firstname">First Name</label>
                        <img id="err0"></img>
                        <br>
                        <input class="taille" type="text" id="name" name="user_name" pattern="[a-zA-ZÀ-ÿ- ]{1,35}">
                    </div>
                    <div class="droite">
                        <label for="lastname">Last Name</label>
                        <img id="err1"></img>
                        <br>
                        <input class="taille" type="text" id="lastname" name="user_last_name" pattern="[a-zA-ZÀ-ÿ- ]{1,35}">
                    </div>
                    <div class="gauche">
                        <label for="company">Company</label>
                        <img id="err2"></img>
                        <br>
                        <input class="taille" type="text" id="Company" name="user_company" pattern="[a-zA-ZÀ-ÿ- ]{1,35}">
                    </div>
                    <div class="droite">
                        <label for="phone">Phone Number</label>
                        <img id="err3"></img>
                        <br>
                        <input class="taille" type="tel" id="phone" name="user_phone" placeholder="phone" pattern="(01|02|03|04|05|06|07|08|09)[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}[ \.\-]?[0-9]{2}">
                    </div>
                    <div class="gauche">
                        <label for="mail">Email Address</label>
                        <img id="err4"></img>
                        <br>
                        <input class="taille" type="email" id="mail" name="user_mail" placeholder="email" >
                    </div>
                    <div class="droite">
                        <label for="url">You Website <span id="URL">Please include https://</span></label>
                        <img id="err5"></img>
                        <br>
                        <input class="taille" type="text" id="url" name="user_site_url" placeholder="url">
                    </div>
                    <div class="gauche">
                        <p>When is the best time of day to reach you ?</p>
                        <input type="radio" name="time" id="time1">
                        <label for="morning">Morning</label><img id="err6"></img>
                        <br>
                        <input type="radio" name="time" id="time2">
                        <label for="evening">Evening</label><img id="err6"></img>
                    </div>
                    <div class="gauche">
                        <p>Would you like to recieve our email newsletter</p>
                        <input type="checkbox" name="ok_newsletter" id="newsletter">
                        <label for="newsletter">Sure!</label>
                    </div>
                    <div class="gauche">
                        <input id="button_Submit" type="submit" value="Submit" />
                    </div>
                    
                </form>
        </section>
<?php include 'include/footer.php'?>