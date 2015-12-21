<!DOCTYPE html>

<html>
    <head>
        <title>Majestic Videos</title>
        <?php $comp_dir = "../../../"; include $comp_dir . 'php/coreimports.php'; ?>
        <script src="<?php echo $serv_dir; ?>js/video.js"></script>
        <script>
            var videos = [
                { "title": "WebBubbles", "video": "webbubbles", "type": "mp4" },
                { "title": "Topic Tree", "video": "topictree", "type": "mp4" },
                { "title": "Round the Clock", "video": "roundtheclock", "type": "mp4" },
                { "title": "The Majestic Universe", "video": "majesticuniverse", "type": "mp4" },
                { "title": "The Majestic Universe (with access token)", "video": "majesticuniversepaid", "type": "mp4" },
                { "title": "Link Degrees", "video": "linkdegrees", "type": "mp4" },
                { "title": "Link Pulse", "video": "linkpulse", "type": "mp4" },
                { "title": "MRacing", "video": "mracing", "type": "mp4" },
                { "title": "Anchor Topics", "video": "anchortopics", "type": "mp4" },
                { "title": "Keyword Comparator", "video": "keywordcomparator", "type": "mp4" },
                { "title": "Social Explorer", "video": "socialexplorer", "type": "mp4" }
            ];
        </script>
    </head>
    <body onload="setupVideos();">
        <?php include $comp_dir . 'php/pageimports.php'; ?>
        <div class="main">
        </div>
    </body>
</html>