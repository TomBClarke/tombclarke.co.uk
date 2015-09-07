function setupProjects() {
    $.each($('.section'), function(i, s) {
        s.id = "project" + i;
        var itemHolder = '#project' + i + ' > div';
        s.getElementsByTagName('span')[0].onclick = function() {
            if ($(itemHolder).is( ":hidden" ) ) {
                $(itemHolder).slideDown();
            } else {
                $(itemHolder).slideUp();
            }
            
        };
        $(itemHolder).hide();
    });
}