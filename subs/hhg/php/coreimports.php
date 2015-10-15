<!-- Meta Stuff -->
<meta http-equiv="Content-Type"   content="text/html; charset=utf-8" />
<!--<meta name="viewport"             content="width=device-width, initial-scale=1">-->
<meta property="og:url"           content="http://www.hinckleyhomeless.com/" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Hinckley Homeless Group" />
<meta property="og:description"   content="Welcome to Lawrence House. We provide a safe environment for homeless young people." />
<meta property="og:image"         content="http://www.hinckleyhomeless.com/res/img/front.jpg" />

<!-- Setup dir -->
<?php
    //For when using localhost:
    $serv_dir = "/hinckleyhomeless/";
    //For when using the proper server:
//    $serv_dir = "/";
?>

<script> var serv_dir = "<?php print $serv_dir; ?>"; </script>

<!-- Icon -->
<link rel="icon" href="<?php echo $serv_dir; ?>res/img/logos/favicon.png">

<!-- CSS -->
<link type="text/css" rel="stylesheet" href="<?php echo $serv_dir; ?>css/main.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $serv_dir; ?>css/main_bars.css"/>

<!-- JS -->
<script src="<?php print $serv_dir; ?>js/coreimports.js"></script>

<!-- JQuery -->
<script src="<?php print $serv_dir; ?>js/jquery.js"></script>

<!-- PHP Includes -->
<?php include $comp_dir . 'php/header.php'; ?>