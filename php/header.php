<div id="header">
    <span class="desktop" id="header-nav">
        <a href="<?php echo $serv_dir; ?>">Home</a> | 
        <a href="<?php echo $serv_dir; ?>projects">Projects</a> | 
        <a href="<?php echo $serv_dir; ?>experience">Experience</a> | 
        <a href="<?php echo $serv_dir; ?>travel">Travelling</a>
    </span>
    
    <span class="mobile" id="mobile-header-holder-text">
        <span>
            <p id="mobile-header-text">Menu &#x25BC;</p>
        </span>
    </span>
    
    <span id="header-social-links">
        <a target="_blank" href="https://github.com/TomBClarke"><img src="<?php echo $serv_dir; ?>res/img/github.png"/></a>
        <a target="_blank" href="https://linkedin.com/in/tombclarke"><img src="<?php echo $serv_dir; ?>res/img/linkedin_logo.png"/></a>
        <a target="_blank" href="https://twitter.com/tombclarke"><img src="<?php echo $serv_dir; ?>res/img/twitter_logo.png"/></a>
        <a target="_blank" href="<?php echo $serv_dir; ?>res/files/CV.pdf"><img src="<?php echo $serv_dir; ?>res/img/cv.png"/></a>
    </span>
</div>

<div id="mobile-header">
    <ul class="nav-list" id="mobile-nav">
        <li><a href="<?php echo $serv_dir; ?>">Home</a></li>
        <li><a href="<?php echo $serv_dir; ?>projects">Projects</a></li>
        <li><a href="<?php echo $serv_dir; ?>experience">Experience</a></li>
        <li><a href="<?php echo $serv_dir; ?>travel">Travelling</a></li>
    </ul>

    <script>
        $('#mobile-header-text').on('click', function () {
            if ( $('#mobile-nav').is( ":hidden" ) ) {
                $('#mobile-nav').show();
                $('.main').hide();
            } else {
                $('#mobile-nav').hide();
                $('.main').show();
            }
            $('#mobile-header-text').text(switchArrow(document.getElementById('mobile-header-text').innerHTML));
        });

        $('#mobile-nav').hide();
    </script>
</div>