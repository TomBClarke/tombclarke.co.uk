<!DOCTYPE html>

<html>
    <head>
        <title>About Us</title>
        <?php $comp_dir = "../"; include $comp_dir . 'php/coreimports.php'; ?>
        <script src="<?php print $serv_dir; ?>js/multipage.js"></script>
        <script src="<?php print $serv_dir; ?>js/gallery.js"></script>
        <script src="<?php print $serv_dir; ?>js/case-studies.js"></script>
        
        <script>
            var exps = [
                { "name": "Accommodation", "id": "acc" },
                { "name": "Gallery", "id": "gall" },
                { "name": "Case Studies", "id": "cs" },
                { "name": "Resident Content", "id": "rc" }
            ];
        </script>
    </head>
    <body onload="createGallery(); setupStudies(); setupNav();">
        <div class="main">
            <h1>Living at Lawrence House</h1>
            <h2 id="about-nav"></h2>
            
            <div id="acc">
                <h1>Accommodation</h1> 
                <div class="section">
                    <p>Lawrence House provides a private room for each individual, with a range of communal facilities, including bathrooms, toilets, kitchens, laundry and a communal lounge, complete with pool table, games, books, TV and other items kindly donated to us. Lawrence House is a No Smoking building in all public areas. Smoking is allowed in some of the resident’s rooms only.
    </p>
                    <p>A key-worker system is operated, which offers the young people living here the support that they feel is necessary in many areas of their lives, such as benefits, budgeting, life skills, family relationships, and career choices. In addition to this, there is always a member of staff on duty and available to give support and advice or just to listen.
    </p>
                    <p>A staff member is on duty at all times, with sleeping night cover to deal with emergencies.
    </p>
                    <p>The maximum time a person can stay at Lawrence House is 12 months.
    </p>
                    <p>Throughout their stay at the project, each young person will be encouraged and supported by staff who work alongside them on a resettlement package, with the objective of securing move on to independent accommodation.  This resettlement package includes an opportunity to save into Hinckley Homeless Group’s Bond Scheme.
    </p>
                    <p>After leaving Lawrence House, advice and support is still available from the project if the person moving on feels they require this. For residents moving on into independent accommodation this advice is offered as Outreach via their Key Worker
    </p>
                </div>
            </div>
            
            <div id="gall">
                <h1>Gallery of Lawrence House</h1>
                <div class="section">
                    <div id="galleryIMGHolder">
                        <img class="webPic" id="galleryIMG" src=""></img>
                    </div>
                    <br/>
                    <h3>Picture <span id="curPic">x</span> of <span id="picSum">y</span></h3>
                    <button class="gallerybuttons" id="left" onclick="advancePic(-1, false);"><h3>&larr;</h3></button>
                    <button class="gallerybuttons" id="right" onclick="advancePic(1, false);"><h3>&rarr;</h3></button>
                </div>
            </div>
            
            <div id="cs">
                <h1>Case Studies - Click a study to see what happened</h1>
            </div>
            
            <div id="rc">
                <h2><a href="<?php echo $serv_dir; ?>res/pdf/resident_hand_book.pdf">View our Resident Handbook &#9658;</a></h2>
                <h2><a href="<?php echo $serv_dir; ?>res/pdf/poetry_book.pdf">View our Poem Book &#9658;</a></h2>
                <h2>Some resident collages:</h2>
                <img class="webPic picwithborder" src="../res/img/collages/resident_collage_1.JPG"/>
                <img class="webPic picwithborder" src="../res/img/collages/resident_collage_2.JPG"/>
                <img class="webPic picwithborder" src="../res/img/collages/resident_collage_3.JPG"/>
            </div>
        </div>
        <?php include $comp_dir . 'php/footer.php'; ?>
    </body>
</html>