<!DOCTYPE html>

<html>
    <head>
        <title>FAQs</title>
        <?php $comp_dir = "../"; include $comp_dir . 'php/coreimports.php'; ?>
        <script src="<?php print $serv_dir; ?>js/faqs.js"></script>
    </head>
    <body onload="loadFAQs();">
        <div class="main">
            <h1>FAQs - Click a question to find the answer</h1>
        </div>
        <?php include $comp_dir . 'php/footer.php'; ?>
    </body>
</html>