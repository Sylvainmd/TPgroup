    <?php
        include('head.php');
    ?>

    <?php
       include('nav.php');
    ?>

          
    <form action="contact.php" method="post">

        <label for="prenom">Prenom:</label><br>
        <input type="text" id="prenom" name="prenom"><br>

        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom">
        
        <div class="form-example">
            <input type="submit" value="Envoyer">
        </div>
    </form>

          
    <?php
        echo $_POST['prenom'] . ' ' . $_POST['nom'];
    ?>

    <?php
        include('footer.php');
    ?>