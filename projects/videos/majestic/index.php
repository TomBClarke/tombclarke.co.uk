<!DOCTYPE html>

<html>
    <head>
        <title>Majestic Videos</title>
        <?php $comp_dir = "../../../"; include $comp_dir . 'php/coreimports.php'; ?>
        <script src="<?php echo $serv_dir; ?>js/video.js"></script>
        <script>
            var videos = [{ "title": "MRacing", "video": "mracing.mp4", "type": "mp4" }];
        </script>
    </head>
    <body onload="setupVideos();">
        <?php include $comp_dir . 'php/pageimports.php'; ?>
        <div class="main">
        </div>
    </body>
</html>