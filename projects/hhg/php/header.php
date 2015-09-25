<div id="header">
    <span class="desktop" id="header-nav">
        <a href="<?php echo $serv_dir; ?>">Home</a> | 
        <a href="<?php echo $serv_dir . 'about'; ?>">About Us</a> 
        <span id="desktop-text">| Living here | </span>
        <a href="<?php echo $serv_dir . 'app-info'; ?>">App Info</a> | 
        <a href="<?php echo $serv_dir . 'faq'; ?>">FAQs</a> | 
        <a href="<?php echo $serv_dir . 'contact'; ?>">Contact Us</a>
        
        <ul class="nav-list" id="desktop-nav">
            <li><a href="<?php echo $serv_dir . 'accommodation'; ?>">Accommodation</a></li>
            <li><a href="<?php echo $serv_dir . 'gallery'; ?>">Gallery</a></li>
            <li><a href="<?php echo $serv_dir . 'case-studies'; ?>">Case Studies</a></li>
            <li><a href="<?php echo $serv_dir . 'resident-content'; ?>">Resident Content</a></li>
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
            
            $('#desktop-nav').hide();
        </script>
    </span>
    
    <span class="mobile">
        <span id="mobile-text">Menu &#x25BC;</span>
    </span>
    
    <span class="boldmouseover" id="header-donate-link">
        <a target="_blank" href="https://mydonate.bt.com/charities/hinckleyhomelessgroup" class="desktop">Donate here!</a>
        <a target="_blank" href="https://mydonate.bt.com/charities/hinckleyhomelessgroup" class="mobile mobiledonate">Click to donate</a>
    </span>
</div>

<div id="mobile-header">
    <ul class="nav-list" id="mobile-nav">
        <li><a href="<?php echo $serv_dir; ?>">Home</a></li>
        <li><a href="<?php echo $serv_dir . 'about'; ?>">About Us</a></li>
        <li><a href="<?php echo $serv_dir . 'accommodation'; ?>">Accommodation</a></li>
        <li><a href="<?php echo $serv_dir . 'gallery'; ?>">Gallery</a></li>
        <li><a href="<?php echo $serv_dir . 'case-studies'; ?>">Case Studies</a></li>
        <li><a href="<?php echo $serv_dir . 'resident-content'; ?>">Resident Content</a></li>
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
            $('#mobile-text').text(switchArrow(document.getElementById('mobile-text').innerHTML));
        });

        $('#mobile-nav').hide();
    </script>
</div>