<?php require "partials/head.php"?>

<h2>Login</h2>

<div class= "inputarea">
<form action="/login" method="post">
    Käyttäjänimi: <input type="text" namr="username" maxlenght=30><br>
    Salasana: <input type="submit" value="Lähetä">
</form>
</div>

<?php require "partials/footer.php";?>