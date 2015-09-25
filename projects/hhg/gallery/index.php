<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
    <head>
        <title>Gallery</title>
        <?php $comp_dir = "../"; include $comp_dir . 'php/coreimports.php'; ?>
        <script src="<?php print $serv_dir; ?>js/gallery.js"></script>
    </head>
    <body onload="createGallery();">
        <div class="main">
            <h1>Gallery of Lawrence House</h1>
            <div class="section">
                <img class="webPic" id="galleryIMG" src=""></img>
                <br/>
                <h3>Picture <span id="curPic">x</span> of <span id="picSum">y</span></h3>
                <button class="gallerybuttons" id="left" onclick="advancePic(-1, false);"><h3>&larr;</h3></button>
                <button class="gallerybuttons" id="right" onclick="advancePic(1, false);"><h3>&rarr;</h3></button>
            </div>
        </div>
        <?php include $comp_dir . 'php/footer.php'; ?>
    </body>
</html>