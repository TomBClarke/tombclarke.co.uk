<!DOCTYPE html>

<html>
    <head>
        <title>Travelling</title>
        <?php $comp_dir = "../"; include $comp_dir . 'php/coreimports.php'; ?>
        <script> var gotoplace = "<?php if(isset($_GET["place"])) { echo $_GET["place"]; } ?>";</script>
        <script src="<?php echo $serv_dir; ?>js/travel.js"></script>
    </head>
    <body onload="setupTravelPage();">
        <?php include $comp_dir . 'php/pageimports.php'; ?>
        <div class="main">
            <h1>Travelling is fantastic!</h1>
            <h2>I really enjoy travelling, and to help me remember I'm building this part of my website to share to fantastic times and places.</h2>
            <h2>Feel free to take a look at...</h2>
        </div>
    </body>
</html>