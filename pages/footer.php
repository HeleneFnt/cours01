<footer>

    <div class="Boutons">
        <form action="hobby.php">
            <button type="submit"> Mon hobby </button>
        </form>
        <form action="contact.php">
            <button type="submit"> Me contacter </button>
        </form>
    </div>

 <p> La première fois que vous vous êtes connecté(e) était le : <?= $_SESSION['dateFirstVisit']; ?> </p>


</footer>