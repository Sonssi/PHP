<?php require "partials/head.php"; ?>

<h2>Rekisteröidy</h2>

<div class = "inputarea">
<form action="/register" method="post">
    Etunimi: <input type ="text" name = "firstname" maxlenght= "30"><br>
    Sukunimi: <input types = "text" name = "lastname" maxlenght = "30"><br>
    Käyttäjänimi: <input type = "text" name = "username" maxlenght = "30"><br>
    Salasana: <input type = "text" name = "pasword" maxlenght = "30"><br>
    <input id="sendbutton" type="submit" value="Lähetä">
    </form>
    </div>

<?php require "partials/footer.php";?>    