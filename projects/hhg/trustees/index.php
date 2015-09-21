<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
    <head>
        <title>Trustees</title>
        <?php $comp_dir = "../"; include $comp_dir . 'php/coreimports.php'; ?>
        <script src="<?php print $serv_dir; ?>js/policies.js"></script>
    </head>
    <body onload="loadPolicies();">
        <div class="main">
            <h1>Policies at Lawrence House</h1>
            <div class="section" id="policies">
            </div>
        </div>
        <?php include $comp_dir . 'php/footer.php'; ?>
    </body>
</html>