
<?php
require "libraries/Helppers.php";
    if(isset($_POST['newstitle'], $_POST['newstext'], $_POST['writer'], $_POST['newstime'], $_POST['removedate']))
        $title = $_POST['newstitle'];
        $text = $_POST['newstext'];
        $writer = $_POST['writer'];
        $time = $_POST['newstime'];
        $removetime = $_POST['removedate'];

        $cleantitle = cleanUp($title);
        $cleantext = cleanUp($text);
        $cleanwriter = cleanUp($writer);
        $cleantime = cleanUp($time);
        $cleanremovetime = cleanUp($removetime);

        $sql = "INSERT INTO uutinen (otsikko,sisalto, kirjoituspvm";

        $statement = $pdo->prepare($sql);
        $statement -> execute([$cleantitle, $cleantext, $cleanwriter, $cleantime, $cleanremove]);

        if($statement != FALSE) {
            echo "Insert onnistui";
        } else {
            echo "Insert meni pieleen";
        }
    }