<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
    <head>
        <title>Projects</title>
        <?php $comp_dir = "../"; include $comp_dir . 'php/coreimports.php'; ?>
        <script src="<?php echo $serv_dir; ?>js/interactiveprojects.js"></script>
    </head>
    <body onload="setupProjects();">
        <div class="main">
            <h1>Projects</h1>
            <div class="project">
                <h2>Hincley Homeless Group Website</h2>
                <h4>September 2015</h4>
                <div class="section">
                    <img class="project-img" src="../res/img/projects/hhg.png"/>
                    <h3><a href="hhg">View here (beta) &#9658;</a> | <span>Read about this &#x25BC;</span></h3>
                    <div>
                        <p>As charity work, I have been working on a new website for Hinckley Homeless Group. For now, this link here is so the directors can see what I've done to see if they'd like to use it as the full site in place of their current site.</p>
                        <p>It is therefore worth noting that because this is effectively a development version lots of this could change, and at request will. To me, an important part of this website is to be mobile compatible, so please do view the website on a normal PC and a mobile phone to experience it in both 'modes'.</p>
                    </div>
                </div>
                <h2>Majestic Summer Internship 2015</h2>
                <h4>July to September 2015</h4>
                <div class="section">
                    <img class="project-img" src="../res/img/projects/majesticseo-logo-black-white-large.png"/>
                    <h3><a href="majestic">View here &#9658;</a> | <span>Read about this &#x25BC;</span></h3>
                    <div>
                        <p>Myself, <a target="_blank" href="http://mishawagner.com">Misha Wagner</a> and <a target="_blank" href="http://linkedin.com/in/rowanphilip">Rowan Cole</a> worked as a team at Majestic to create interesting data visualisations using D3.js. Majsetic also hired a journalist, <a target="_blank" href="https://twitter.com/pupulchatterjee">Pupul Chatterjee</a>, to write blogs about what we created. Through out the 10 weeks, we used HTML, CSS, PHP, Java, JavaScript, MySQL with D3 and, of course, the Majestic API.</p>
                        <p>My favourite projects from the experience was 'Round The Clock', 'The Majestic Universe', 'MRacing' and (to be announced). While MRacing was built using canvas elements in HTML 5, all of the projects taught me a lot about how to handle the large amount of data we were getting back from the Majestic API, process it using JavaScript and display it using D3. MRacing was also a great learning curve as it was the largest game I'd ever worked on, along with using canvas elements which was also new to me.</p>
                        <p>I was also given the opportunity to go to <a target="_blank" href="http://leedshack.org">Leeds Hack</a> to represent Majestic as a sponsor, where I introduced Majestic to the attendees, was on hand to set hackers up with Majestic accounts, act as technical support and have discussions with them about what they could do as projects, and was responsible for selecting winner for our prizes and awarding them.</p>
                    </div>
                </div>
                <h2>BrumHack 2.0 - WebFite</h2>
                <h4>April 2015</h4>
                <div class="section">
                    <img class="project-img" src="../res/img/projects/webfite.png"/>
                    <h3><span>Read about this &#x25BC;</span></h3>
                    <div>
                        <p>Myself, Rowan Cole, Cameron Angus and Sebastian Dică as a team completed our first 24-hour hackathon - BrumHack 2.0. This is where me, Rowan and Misha first met Majestic and got a chance to use their data to do whateve we wanted. So, my team decided to make a fighting game with player atributes decided by website statistics determined from Majestic's data.</p>
                        <p>We finally settled on a list of websites the player could chose from, and attributes like strength and speed we determined by their various scores on Majestic (for example Trust Flow). We built our game in Unity and C# (which I was lead programmer in), but to deal with the web modules of C# not being supported by Unity we created seperate C# programs to use the connectors to query the Majestic API. Once we had the data, two players could battle their chosen websites until a winner was decided.</p>
                        <p>This experience was fantastic for me, as I learnt a lot of new things about programming, obviously with a focus on C# and game design, met Majestic who I kept in contact with and eventually completed a very successful summer internship with, and was introduced to 'hackathons'. What I learnt at the event has helped in many ways and opened server new doors already, and made me want to do many more hacks in the future, the next one being BrumHack 3 in October.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>