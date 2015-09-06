<?php
    $imgs = scandir('../res/img/gallery');
    for($i = 0; $i < count($imgs); $i++) {
        if(isIMG($imgs[$i], ".jpg")) {
            echo $imgs[$i];
            if($i < count($imgs) - 1)
                echo "|";
        }
    }

    function isIMG($img, $extension) {
        return !(strpos($img, $extension) === false);
    }
?>