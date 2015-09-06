<!-- Meta Stuff -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Setup dir -->
<?php
    //For when using localhost:
    $serv_dir = "/tombclarke/projects/hinckleyhomeless/";
    //For when using the proper server:
//    $serv_dir = "/";
?>

<script> var serv_dir = "<?php print $serv_dir; ?>"; </script>

<!-- Icon -->
<link rel="icon" href="<?php echo $serv_dir; ?>res/img/favicon.png">

<!-- CSS -->
<link type="text/css" rel="stylesheet" href="<?php echo $serv_dir; ?>css/main.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $serv_dir; ?>css/main_bars.css"/>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- PHP Includes -->
<?php include $comp_dir . 'php/header.php'; ?>