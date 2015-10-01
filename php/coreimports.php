<!-- Meta Stuff -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:url"           content="http://www.tombclarke.co.uk/" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Tom Clarke" />
<meta property="og:description"   content="Computer Science student at the University of Birmingham and developer. Looking for amazing oppertunities in life." />
<meta property="og:image"         content="http://www.tombclarke.co.uk/res/img/me_full.png" />

<!-- Setup dir -->
<?php
    //For when using localhost:
    $serv_dir = "/tombclarke/";
    //For when using the proper server:
//    $serv_dir = "/";
?>

<script> var serv_dir = "<?php print $serv_dir; ?>"; </script>

<!-- Icon -->
<link rel="icon" href="<?php echo $serv_dir; ?>res/img/favicon.png">

<!-- CSS -->
<link type="text/css" rel="stylesheet" href="<?php echo $serv_dir; ?>css/main.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $serv_dir; ?>css/main_bars.css"/>

<!-- JS -->
<script src="<?php print $serv_dir; ?>js/coreimports.js"></script>

<!-- JQuery -->
<script src="<?php print $serv_dir; ?>js/jquery.js"></script>

<!-- PHP Includes -->
<?php include $comp_dir . 'php/header.php'; ?>
<?php include $comp_dir . 'php/footer.php'; ?>