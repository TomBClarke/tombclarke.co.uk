<!-- Meta Stuff -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Setup dir -->
<?php
    $serv_dir = "/tombclarke/";
    $comp_dir = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT') . "tombclarke/";
?>

<script> var serv_dir = "<?php print $serv_dir; ?>"; </script>

<!-- Icon -->
<link rel="icon" href="<?php echo $serv_dir; ?>res/img/favicon.png">

<!-- CSS -->
<link type="text/css" rel="stylesheet" href="<?php echo $serv_dir; ?>css/main.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $serv_dir; ?>css/main_bars.css"/>

<!-- PHP Includes -->
<?php include $comp_dir . 'php/header.php'; ?>
<?php include $comp_dir . 'php/footer.php'; ?>