<!DOCTYPE html>

<html>
    <head>
        <title>Dig Lazarus</title>
        <?php $comp_dir = "../../../"; include $comp_dir . 'php/coreimports.php'; ?>
        <script src="<?php echo $serv_dir; ?>js/video.js"></script>
        <script>
            var videos = [
                { "title": "20151218_223932", "video": "20151218_223932", "type": "mp4" },
                { "title": "20151224_192003", "video": "20151224_192003", "type": "mp4" },
                { "title": "20160116_233242", "video": "20160116_233242", "type": "mp4" }
            ];
        </script>
    </head>
    <body onload="setupVideos();">
        <?php include $comp_dir . 'php/pageimports.php'; ?>
        <div class="main">
        </div>
    </body>
</html>