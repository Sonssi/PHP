<?php require "partials/head.php"; ?>

<h2>Rekisteröidy</h2>

<div class = "inputarea">
<form action="/register" method="post">
    Etunimi: <input type ="text" name = "firstname" maxlenght= "30">
    Sukunimi: <input types = "text" name = "lastname" maxlenght = "30">
    Käyttäjänimi: <input type = "text" name = "username" maxlenght = "30">
    Salasana: <input type = "text" name = "pasword" maxlenght = "255">
    </form>
    </div>

<?php require "partials/footer.php";?>    