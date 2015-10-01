<!DOCTYPE html>

<html>
    <head>
        <title>Hinckley Homeless Group</title>
        <?php $comp_dir = ""; include $comp_dir . 'php/coreimports.php'; ?>
        <script src="<?php print $serv_dir; ?>js/news.js"></script>
    </head>
    <body onload="setupNews(2);">
        <table id="fronttable">
            <tr>
                <td>
                    <div class="main">
                        <h1>Welcome to Lawrence House - Hinckley Homeless Group</h1>
                        <img class="webPic" id="frontPic" src="res/img/front.jpg"/>
                        <h2>Providing a safe environment for homeless young people.</h2>
                        <h2><a href="res/pdf/leaflet.pdf">View our leaflet &#9658;</a></h2>
                        <h2><a href="contact">Get in contact &#9658;</a></h2>
                    </div>
                </td>
                <td>
                    <div class="main frontnews" id="news">

                    </div>
                </td>
            </tr>
        </table>
        <?php include $comp_dir . 'php/footer.php'; ?>
    </body>
</html>