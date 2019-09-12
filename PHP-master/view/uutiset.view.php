<?php rewuire "partials/head.php";?>

<h2>Lue uutiset</h2>

<!--pdo, news on olemassa -->PASSWORD_DEFAULT


<?php
    foreach($allnews as $newsitem){
        echo "<div calss='newsitem'>";
        echo "<h3>", $newsitem["otsikko"], "</3>";

        echo"</div>";
    }
?>
<?php require "partials/footer.php"; ?>