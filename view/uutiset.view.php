<?php require "partials/head.php";?>

<h2>Lue uutiset</h2>

<!--pdo, news on olemassa -->


<?php
    foreach($allnews as $newsitem){
        echo "<div calss='newsitem'>";
        echo "<h3>", $newsitem["otsikko"], "</3>";

        echo"</div>";
    }
?>
<?php require "partials/footer.php"; ?>