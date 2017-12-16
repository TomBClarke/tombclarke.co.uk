<!-- Meta Stuff -->
<meta http-equiv="Content-Type"   content="text/html; charset=utf-8" />
<meta name="viewport"             content="width=device-width, initial-scale=1" />
<meta name="theme-color" content="#202020">
<meta name="msapplication-navbutton-color" content="#202020">
<meta name="apple-mobile-web-app-status-bar-style" content="#202020">
<link type="text/plain" rel="author" href="http://www.tombclarke.co.uk/humans.txt" />
<meta property="og:url"           content="http://www.tombclarke.co.uk/" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Tom Clarke" />
<meta property="og:description"   content="Hi, I'm Tom, I study Computer Science at the University of Birmingham, and am looking for great projects to work on." />
<meta property="og:image"         content="http://www.tombclarke.co.uk/res/img/me_circle.png" />
<meta name="keywords"             content="TomBClarke, Tom B Clarke, Tom Clarke, Computer Science, projects, work, student, university, year in industry, developer">

<!-- Setup dir -->
<?php
    // This is to support some aweful code I wrote when I began this project, but is effort to remove. I guess it could in theory be useful at some point...
    $serv_dir = "/"; 
?>

<script> var serv_dir = "<?php print $serv_dir; ?>"; </script>

<!-- Icon -->
<link rel="icon" sizes="500x500" href="<?php echo $serv_dir; ?>res/img/me_circle.png">

<!-- CSS -->
<link type="text/css" rel="stylesheet" href="<?php echo $serv_dir; ?>css/main.css"/>
<link type="text/css" rel="stylesheet" href="<?php echo $serv_dir; ?>css/main_bars.css"/>

<!-- JQuery -->
<script src="<?php print $serv_dir; ?>js/jquery.js"></script>

<!-- JS -->
<script src="<?php print $serv_dir; ?>js/coreimports.js"></script>

<?php

function makeImg($src, $id, $class) {
    return "<img src='" . $src . "' id='" . $id . "' class='" . $class . "' />";
}

function makeText($text) {
    return "<p>" . $text . "</p>";
}

function makeLink($text, $link, $newTab) {
    $string = "<a href='" . $link . "' ";
    if ($newTab)
        $string = $string . "target='_blank' ";
    return $string . ">" . $text . "</a>";
}

?>