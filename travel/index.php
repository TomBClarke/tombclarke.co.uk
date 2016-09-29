<!DOCTYPE html>

<html>
    <head>
        <title>Travelling</title>
        <?php $comp_dir = "../"; include $comp_dir . 'php/coreimports.php'; ?>
    </head>
    <body>
        <?php include $comp_dir . 'php/pageimports.php'; ?>
        
        <?php
            $showingPlace = false;
            $place = null;
        
            if(isset($_GET["place"])) {
                $rawjson = file_get_contents($comp_dir . 'res/content/travel.json');
                $places = json_decode($rawjson);
                $placesList = $places->places;
                foreach ($placesList as $placeTest) {
                    if ($placeTest->id == $_GET["place"]) {
                        $place = $placeTest;
                        break;
                    }
                }
            }
        
            if ($place == null) {
        ?>
        
        <div class="main">
            <h1>Travelling is fantastic!</h1>
            <h2>I really enjoy travelling, and to help me remember where I've been I'm building this part of my website to share to fantastic times and places.</h2>
            <h2>Feel free to take a look at...</h2>
        </div>
        
        <?php
            } else {
        ?>
        
        <div class="main">
            <h1><?php echo $place->place; ?></h1>
            <h2>I was here <?php echo $place->visited; ?>.</h2>
        </div>
        
        <?php
                // Need to print out text/images...
            }
        ?>
    </body>
</html>