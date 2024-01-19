<!--//META DONNEES EN PHP-->
<?php $metaTitle = 'Contact'; ?>

<?php $metaDescription ='Me contacter';?>

<?php

// DECLARATIONS DES VARIABLES DU FORMULAIRE
$Civility= filter_input(INPUT_POST, "Civility" );
//echo $Civility ;
//echo '<br>';
$lastName= filter_input(INPUT_POST, "lastName", FILTER_SANITIZE_SPECIAL_CHARS );
/*echo $lastName ;
echo '<br>';*/
$firstName= filter_input(INPUT_POST, "firstName",FILTER_SANITIZE_SPECIAL_CHARS );
/*echo $firstName ;
echo '<br>';*/
$email= filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
/*echo $email;
echo '<br>';*/
$choice= filter_input(INPUT_POST,"choice");
/*echo $choice;
echo '<br>';*/
$userMessage= filter_input(INPUT_POST,"userMessage");
$lengthMessage = strlen(trim ($userMessage));
/*echo $userMessage;*/

$user = [ $Civility,$lastName, $firstName, $email,$choice,$userMessage];
//print_r($user);

date_default_timezone_set("Europe/Paris");
$date= date("Y-m-d-m-Y-H-i-s");
file_put_contents('contact_'.$date.'.txt', implode (" , ", $user) , FILE_APPEND);

?>

<!--// AJOUT DU HEADER-->
<?php include 'header.php';
?>
<body>
<!--// FORMULAIRE-->
<div class="Formulaire">
    <h1> Me contacter </h1>
    <form action="contact.php" method="POST">
        <div class="Description">
            <p> Ci-dessous un petit formulaire afin de me contacter <br>
                ou m'envoyer <a href="mailto:helene.finot@le-campus-numerique.fr">un E-mail</a>
                <br>
            </p>
        </div>
        <label for="Civility"> Civilité </label>
        <select name="Civility" id="Civility">
            <option value="" disabled selected hidden>Choisissez </option>
            <option value="Monsieur"> M. </option>
            <option value="Madame"> Mme</option>
        </select> <br>
<!--        // TEST CHAMP VIDE CIVILITE-->
        <?php
        if (empty ($Civility)){
            echo "<p> <span class = 'error'>  Veuillez remplir votre civilité </span> </p>";
        }
        ?>
        <div>
        <label for="mainID"> Nom </label>
            <input type="text" id="mainID" name="lastName" placeholder="Votre nom"> <br>
            <?php
            if (empty ($lastName)){
                echo "<p> <span class = 'error'>  Veuillez remplir votre nom </span> </p>";
            }
            ?>

        <label for="secondaryID"> Prénom </label>
            <input type="text" id="secondaryID" name="firstName" placeholder="Votre prénom"> <br>
            <?php
            if (empty ($firstName)){
                echo "<p> <span class = 'error'>  Veuillez remplir votre prénom </span> </p>";
            }
            ?>

            <label for="Mail"> E-mail </label>
            <input type="text" id="Mail" name="email" placeholder="Votre E-mail"> <br>
            <?php
            if (empty ($email)){
            echo " <p> <span class = 'error'> Veuillez remplir votre e-mail</span> </p>";
            }
            ?>
        </div>

        <div>
            <p> Merci de choisir la raison de votre contact ci-dessous</p>
            <?php
            if (empty ($choice)) {
                echo " <p> <span class = 'error'> Veuillez remplir la raison votre contact </span> </p>";
                echo "<br>";
            }
            ?>

            <input type="radio" id="choice1" name="choice" value="emploi"="required"/>
            <label for="choice1"> Proposition d'emploi</label>
            <input type="radio" id="choice2" name="choice" value="informations"/>
            <label for="choice2"> Demande d'information</label>
            <input type="radio" id="choice3" name="choice" value="prestations"/>
            <label for="choice3"> Prestations </label>
        </div>
        <div>
            <label for="msg"> Votre message :</label>
            <textarea id="msg" name="userMessage"></textarea>
            <?php
            if (empty($userMessage) || ($lengthMessage <= 5)){
                echo "<br>";
                echo "<p> <span class = 'error'> Veuillez remplir le champ vide (min. 5 caratères) </span> </p>";
            }
            ?>
        </div>
        <div class="Bouton">
            <button type="submit">Soumettre</button>
        </div>
      <!--  <label for="ID"> Nom </label>
        <input type="text" id="ID" name="nom" placeholder="Votre nom" required> <br>
        <label for="Mail"> E-mail </label>
        <input type="text" id="Mail" name="E-mail" placeholder="Votre E-mail" required><br>
        <label for="Sujet"> Objet </label>
        <select name="Sujet" id="Sujet" required>
            <option value="" disabled selected hidden>Choisissez le sujet de votre message</option>
            <option value="intéret"> Votre profil m'intérresse </option>
            <option value="à propos">Question à propos de votre profil</option>
            <option value="autre">Autre...</option>
        </select> <br>

        <label for="message"> Votre message </label> <br>
        <textarea id="message" name="message" placeholder="Bonjour,..." required> </textarea> <br>-->

<!--        <fieldset>
            <legend> Source </legend>
            <input type="checkbox" name="lieu" value="Drôme"> Drôme <br>
            <input type="checkbox" name="composant" value="Rhône-Alpes"> Rhône-Alpes<br>
            <input type="checkbox" name="composant" value="France"> France <br>
            <input type="checkbox" name="composant" value="Europe"> Europe <br>
            <input type="checkbox" name="composant" value="France"> Hors France
        </fieldset>

        <fieldset>-->
<!--            <legend> Préférence de contact </legend>
            <input type="radio" id="tel" name="contact" value="tel" checked>
            <label for="tel">Téléphone</label>
            <input type="radio" id="mail" name="contact" value="mail">
            <label for="mail"> E-mail </label>
            <input type="radio" id="pigeon" name="contact" value="pigeon">
            <label for="pigeon"> Pigeon voyageur </label>
        </fieldset>
        <div class="Bouton">
            <button type="submit">Envoyer</button>
        </div>-->

    </form>
</div>
<div class="Source">
</div>
<p> Vous pouvez me rencontrer <a
        href="https://www.google.com/maps/search/M3+Rovaltain+1+rue+Roland+Moreno+26300+Alixan/@44.9921948,4.9779401,17z/data=!3m1!4b1?entry=ttu"
        target="blank">ici</a>
</p>
</body>
<?php include 'footer.php';?>