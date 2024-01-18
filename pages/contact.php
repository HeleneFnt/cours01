<?php $metaTitle = 'Contact'; ?>

<?php $metaDescription ='Me contacter';?>

<body>

<?php include 'header.php'; ?>

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
        <select name="Civility" id="Civility" required>
            <option value="" disabled selected hidden>Choisissez </option>
            <option value="man"> M. </option>
            <option value="woman"> Mme</option>
        </select> <br>
        <div>
        <label for="mainID"> Nom </label>
            <input type="text" id="mainID" name="mainID" placeholder="Votre nom" required> <br>
        <label for="secondaryID"> Prénom </label>
            <input type="text" id="secondaryID" name="firstname" placeholder="Votre prénom" required> <br>
        <label for="Mail"> E-mail </label>
            <input type="text" id="Mail" name="E-mail" placeholder="Votre E-mail" required> <br>
        </div>

        <div>
            <p> Merci de choisir la raison de votre contact ci-dessous</p>
            <input type="radio" id="choice1" name="choice" value="work" required="required"/>
            <label for="choice1"> Proposition d'emploi</label>
            <input type="radio" id="choice2" name="choice" value="work"/>
            <label for="choice2"> Demande d'information</label>
            <input type="radio" id="choice3" name="choice" value="work"/>
            <label for="choice3"> Prestations </label>
        </div>
        <div>
            <label for="msg"> Votre message :</label>
            <textarea id="msg" name="user_message"></textarea>
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
<?php include 'footer.php' ?>