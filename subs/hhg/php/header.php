<?php include 'fb1.php'; ?>

<div id="header">
    <span class="desktop" id="header-nav">
        <a href="<?php echo $serv_dir; ?>">Home</a> | 
        <a href="<?php echo $serv_dir . 'about'; ?>">About Us</a> |
        <a href="<?php echo $serv_dir . 'news'; ?>">News</a> |
        <a href="<?php echo $serv_dir . 'living-here'; ?>">Living Here</a> | 
        <a href="<?php echo $serv_dir . 'app-info'; ?>">App Info</a> | 
        <a href="<?php echo $serv_dir . 'faq'; ?>">FAQs</a> | 
        <a href="<?php echo $serv_dir . 'contact'; ?>">Contact Us</a>
    </span>
    
    <span class="mobile">
        <span id="mobile-text">Menu &#x25BC;</span>
    </span>
    
    <span class="boldmouseover" id="header-donate-link">
        <span class="desktop desktopdonateholder">
            <a target="_blank" href="https://mydonate.bt.com/charities/hinckleyhomelessgroup" class="desktopdonate">Donate here!</a>
            <br/><a target="_blank" href="https://mydonate.bt.com/charities/hinckleyhomelessgroup" class="desktopdonate smile">☺</a>
        </span>
        <a target="_blank" href="https://mydonate.bt.com/charities/hinckleyhomelessgroup" class="mobile mobiledonate">Click to donate</a>
        
        <script>
        //Expand:
        $('.desktopdonateholder').mouseenter(function() {
            $('.desktopdonateholder').animate(
                {
                    width: '240px',
                    height: '200px',
                    top: '70',
                    right: '25'
                }
            );
            
            $('.smile').fadeIn();
        });
        
        //Contract:
        $('.desktopdonateholder').mouseleave(function() {
            $('.desktopdonateholder').animate(
                {
                    width: '200px',
                    height: '150px',
                    top: '50',
                    right: '10'
                }
            );
            
            $('.smile').fadeOut();
        }); 
        </script>
        
    </span>
</div>

<div id="mobile-header">
    <ul class="nav-list" id="mobile-nav">
        <li><a href="<?php echo $serv_dir; ?>">Home</a></li>
        <li><a href="<?php echo $serv_dir . 'about'; ?>">About Us</a></li>
        <li><a href="<?php echo $serv_dir . 'news'; ?>">News</a></li>
        <li><a href="<?php echo $serv_dir . 'living-here'; ?>">Living Here</a></li>
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