<!DOCTYPE html>

<html>
    <head>
        <title>Tom Clarke - Projects</title>
        <?php $comp_dir = "../"; include $comp_dir . 'php/coreimports.php'; ?>
        <script> var gotoproject = "<?php if(isset($_GET["prj"])) { echo $_GET["prj"]; } ?>";</script>
        <script src="<?php echo $serv_dir; ?>js/projects.js"></script>
    </head>
    <body onload="setupProjects();">
        <?php include $comp_dir . 'php/pageimports.php'; ?>
        <div class="main">
            <h1>Projects</h1>
        </div>
    </body>
</html>