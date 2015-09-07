function setupProjects() {
    $.each($('.section'), function(i, s) {
        s.getElementsByTagName('span')[0].onclick = function() {
                if ( s.getElementsByTagName('div')[0].is( ":hidden" ) ) {
                    s.getElementsByTagName('div')[0].slideDown();
                } else {
                    s.getElementsByTagName('div')[0].slideUp();
                }
        };
    });
}