<!DOCTYPE html>

<html>
    <head>
        <title>Tom Clarke - Experience</title>
        <?php $comp_dir = "../"; include $comp_dir . 'php/coreimports.php'; ?>
        <script src="<?php echo $serv_dir; ?>js/experience.js"></script>
    </head>
    <body onload="initExperiences();">
        <?php include $comp_dir . 'php/pageimports.php'; ?>
        <div class="main">
            <h1>My Experience</h1>
            <h2 id="exp-nav"></h2>
            
            <div id="skills">
                <h1>Skills</h1>
                <h4></h4>
                <div class="section">
                    <table id="table-skills">
                        <tr>
                            <td class="table-skill-header">Skill</td>
                            <td class="table-skill-header">My Experience in it</td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div id="education">
                <h1>Education</h1>
                <h4></h4>
                <div class="section">
                    <table id="table-education">
                    </table>
                </div>
            </div>
            
            <div id="work">
                <h1>Work</h1>
                <h4>Jobs, Internships and Voluntary Positions</h4>
                <div class="section" id="work-div">
            </div>
                
            </div>
        </div>
    </body>
</html>