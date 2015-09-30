<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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