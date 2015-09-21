<div id="header">
    <span class="desktop" id="header-nav">
        <a href="<?php echo $serv_dir; ?>">Home</a> | 
        <a href="<?php echo $serv_dir . 'about'; ?>">About Us</a> 
        <span id="desktop-text">| Living here | </span>
        <a href="<?php echo $serv_dir . 'app-info'; ?>">Application Info</a> | 
        <a href="<?php echo $serv_dir . 'faq'; ?>">FAQs</a> | 
        <a href="<?php echo $serv_dir . 'contact'; ?>">Contact Us</a>
        
        <ul class="nav-list" id="desktop-nav">
            <li><a href="<?php echo $serv_dir . 'accommodation'; ?>">Accommodation</a></li>
            <li><a href="<?php echo $serv_dir . 'gallery'; ?>">Gallery</a></li>
            <li><a href="<?php echo $serv_dir . 'case-studies'; ?>">Case Studies</a></li>
            <li><a href="<?php echo $serv_dir . 'resident-content'; ?>">Resident Content</a></li>
            <li><a href="<?php echo $serv_dir . 'trustees'; ?>">Trustees</a></li>
        </ul>
        
        <script>
            $('#desktop-text').on('mouseover', function () {
                $('#desktop-nav').show();
            });
            
            $('#desktop-nav').children('li').each(function () {
                $(this).mouseover(function() {
                    $('#desktop-nav').show();
                });
                $(this).mouseout(function() {
                    $('#desktop-nav').hide();
                });
            });
            
//            $('#desktop-text').on('mouseout', function () {
//                    $('#desktop-nav').hide();
//            });
            
            $('#desktop-nav').hide();
        </script>
    </span>
    
    <span class="mobile">
        <span id="mobile-text">Menu <span id="nav-arrow">&#x25BC;</span></span>
    </span>
<!--
    <span id="header-social-links">
        <a target="_blank" href="http://www.lha.org.uk"><img src="<?php //echo $serv_dir; ?>res/img/lha.png"/></a>
        <a target="_blank" href="http://jobentreplus.gov.uk"><img src="<?php //echo $serv_dir; ?>res/img/jcp.png"/></a>
    </span>
-->
</div>

<ul class="nav-list" id="mobile-nav">
    <li><a href="<?php echo $serv_dir; ?>">Home</a></li>
    <li><a href="<?php echo $serv_dir . 'about'; ?>">About Us</a></li>
    <li><a href="<?php echo $serv_dir . 'accommodation'; ?>">Accommodation</a></li>
    <li><a href="<?php echo $serv_dir . 'gallery'; ?>">Gallery</a></li>
    <li><a href="<?php echo $serv_dir . 'case-studies'; ?>">Case Studies</a></li>
    <li><a href="<?php echo $serv_dir . 'resident-content'; ?>">Resident Content</a></li>
    <li><a href="<?php echo $serv_dir . 'trustees'; ?>">Trustees</a></li>
    <li><a href="<?php echo $serv_dir . 'app-info'; ?>">Application Info</a></li>
    <li><a href="<?php echo $serv_dir . 'faq'; ?>">FAQs</a></li>
    <li><a href="<?php echo $serv_dir . 'contact'; ?>">Contact Us</a></li>
</ul>

<script>
    $('#mobile-text').on('click', function () {
        if ( $('#mobile-nav').is( ":hidden" ) ) {
            $('#mobile-nav').show();
            $('.main').hide();
            $('#footer').hide();
        } else {
            $('#mobile-nav').hide();
            $('.main').show();
            $('#footer').show();
        }
    });

    $('#mobile-nav').hide();
</script>