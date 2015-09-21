<div id="header">
    <span class="desktop" id="header-nav">
        <a href="<?php echo $serv_dir; ?>">Home</a> | 
        <a href="<?php echo $serv_dir; ?>projects">Projects</a> |
        <a href="<?php echo $serv_dir; ?>experience">Expereince</a>
    </span>
    
    <span class="mobile">
        <span id="mobile-text">Menu &#x25BC;</span>
    </span>
    
    <span id="header-social-links">
        <a target="_blank" href="http://linkedin.com/in/tombclarke"><img src="<?php echo $serv_dir; ?>res/img/linkedin_logo.png"/></a>
        <a target="_blank" href="http://twitter.com/tombclarke"><img src="<?php echo $serv_dir; ?>res/img/twitter_logo.png"/></a>
        <a target="_blank" href="<?php echo $serv_dir; ?>res/files/CV.pdf"><img src="<?php echo $serv_dir; ?>res/img/cv.png"/></a>
    </span>
</div>

<div id="mobile-header">
    <ul class="nav-list" id="mobile-nav">
        <li><a href="<?php echo $serv_dir; ?>">Home</a></li>
        <li><a href="<?php echo $serv_dir; ?>projects">Projects</a></li>
        <li><a href="<?php echo $serv_dir; ?>experience">Expereince</a></li>
    </ul>

    <script>
        $('#mobile-text').on('click', function () {
            if ( $('#mobile-nav').is( ":hidden" ) ) {
                $('#mobile-nav').show();
                $('.main').hide();
            } else {
                $('#mobile-nav').hide();
                $('.main').show();
            }
            $('#mobile-text').text(switchArrow(document.getElementById('mobile-text').innerHTML));
        });

        $('#mobile-nav').hide();
    </script>
</div>