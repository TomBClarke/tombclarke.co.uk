<!DOCTYPE html>

<html>
    <head>
        <title>About Us</title>
        <?php $comp_dir = "../"; include $comp_dir . 'php/coreimports.php'; ?>
        <script src="<?php print $serv_dir; ?>js/policies.js"></script>
        <script src="<?php print $serv_dir; ?>js/multipage.js"></script>
        
        <script>
            var exps = [
                { "name": "Lawrence House", "id": "lh" },
                { "name": "Staff", "id": "staff" },
                { "name": "Management Committee", "id": "tmc" },
                { "name": "Trustees", "id": "palh" }
            ];
        </script>
        
    </head>
    <body onload="loadPolicies(); setupNav();">
        <div class="main">
            <h1>About Us</h1>
            <h2 id="about-nav"></h2>
            
            <div id="lh">
                <h1>Lawrence House</h1>
                <div class="section">
                    <p>Lawrence House is a medium stay (maximum stay is 12 months) supported accommodation project for homeless young people in the Hinckley &amp; Bosworth area of Leicestershire.</p>
                    <p>We provide accommodation for 12 single people between the ages of 16 and 25 of either sex.  </p>
                    <p>Hinckley Homeless Group came together and operates as a group of people interested and concerned about homelessness issues.  Our main activity is running Lawrence House which we founded in 1992 in conjunction with Leicester Housing Association.</p>
                    <p>The directors are all volunteer members of the Management Committee.</p>
                </div>
            </div>
            
            <div id="staff">
                <h1>Staff</h1>
                <div class="section">
                    <img class="staffpic" src="<?php print $serv_dir; ?>res/img/staff/sue.png"/>
                    <h3>Project Manager - Sue Clarke</h3>
                    <img class="staffpic" src="<?php print $serv_dir; ?>res/img/staff/linda.png"/>
                    <h3>Project Worker - Linda Cope</h3>
                    <img class="staffpic" src="<?php print $serv_dir; ?>res/img/staff/zoe.png"/>
                    <h3>Project Worker - Zoe Fisher</h3>
                    <h3>Domestic Assistant - Marie Blockley</h3>
                </div>
            </div>
            
            <div id="tmc">
                <h1>The Management Committee</h1>
                <div class="section">
                    <p>Hinckley Homeless Group consist of a small but dedicated team of volunteers who run Lawrence House, which has been successfully serving the community in Hinckley and Bosworth for over a decade, with the support of our local borough and county councils, as well as a large number of local community organisations and trusts.</p>
                    <p>The Group is a “company limited by guarantee”, but we are also a registered charity and non-profit-making company.   We do not have shareholders but we do have a formal structure of membership.  Our “Articles of Association” - the formal document which sets out what our aims are – allows anyone to become a member who is in sympathy with our objectives.
    </p>
                    <p>If you would like to be a formal member of HHG, you will be declaring your support for our work, will then have the right to come to General Meetings and vote for the committee (who are the company’s directors). In return, you will be accepting some responsibility for the financial affairs of the Company if it should fail – but all you will be doing by signing up is agreeing to pay £1 (one pound) if for any reason the Company fails.
    </p>
                    <p>We realise that not everyone who supports us will want to formally commit themselves in this way, and we fully understand that.  Everyone who supports our aims is very welcome to attend general meetings and be involved in what we do whether or not they are members of the Company.  But only members will be able to vote or join the committee.  If you would like to become a member of the Company, please contact the office.  You can cancel your membership at any time by notifying the Company Secretary at Lawrence House.
    </p>
                </div>
                
            </div>
            
            <div id="palh">
                <h1>Policies at Lawrence House</h1>
                <div class="section" id="policies">
                </div>
            </div>
        </div>
        <?php include $comp_dir . 'php/footer.php'; ?>
    </body>
</html>