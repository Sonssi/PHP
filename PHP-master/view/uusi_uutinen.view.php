<?php require "/partials/head.php"; ?>

<h2>Syötä uutinen</h2>

<div class= "inputarea">
<form action="uusi_uutinen" method="post">
    Otsikko: <input type="text" name="newstitle" maxlength=30><br>
    Uutinen:  <textarea type="newstext" rows="5" cols="30"></textarea><br>
    Kirjoittaja: <input type="text" name="writer" maxlenght=30><br>
    <label for ="news-time">Valitse artikkelin päivämäärä</label><br>
    <input type="datetime-local" id="meeting-time" name="newstime">
     <input id="sendbutton" type="submit" value="Lähetä"> <br>
     Poistopäivä: <input type="date" name="removedate">
</form>
</div>

<?php require "partials/footer.php"; ?>