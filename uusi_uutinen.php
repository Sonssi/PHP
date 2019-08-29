<?php require "head.php"; ?>

<h2>Syötä uutinen</h2>
<form action=".php" method="get">
    Otsikko: <input type="text" name="name" maxlength=30><br>
    Uutinen:  <textarea type="newstext" rows="5" cols="30"></textarea><br>
    Kirjoittaja: <input type="text" name="writer" maxlenght=30><br>
    <label for >
    <input type
             <input type="submit" value="Lähetä">
</form>

<?php require "footer.php"; ?>