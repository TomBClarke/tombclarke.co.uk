function setupStudies() {
    
    var studies = $.parseJSON($.ajax({
        url: serv_dir + "res/content/case-studies.json",
        async: false,
        dataType: "json"
    }).responseText).studies;
    
    studies.forEach(function(s, si) {
        $('.main').append(
                $('<h2 id=\'c' + si + '\'></h2>').text(s.study)
            );
        
        $('.main').append($('<div class=\'section\' id=\'t' + si + '\'></div>'));
        
        s.text.forEach(function (t) {
            $('#t' + si).append($('<p></p>').text(t));
        });
        
        $('#t' + si).append($('<h3></h3>').text("Outcomes:"));
        
        s.outcomes.forEach(function (t) {
            $('#t' + si).append($('<p></p>').text(t));
        });
        
        $('#c' + si).on('click', function () {
            if ( $('#t' + si).is( ":hidden" ) ) {
                $('#t' + si).slideDown();
            } else {
                $('#t' + si).slideUp();
            }
        });
        
        $('#t' + si).hide();
    });
}