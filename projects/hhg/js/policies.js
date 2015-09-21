function loadPolicies() {
    var policies = $.parseJSON($.ajax({
        url: serv_dir + "res/content/policies.json",
        async: false,
        dataType: "json"
    }).responseText).policies;
    
    policies.forEach(function(p, pi) {
        $('#policies').append(
            $('<h3 id=\'p' + pi + '\'></h3>').text(p.title + "▼")
        );
        $('#policies').append(
            $('<ul id=\'pl' + pi + '\'></ul>')
        );
        
        $('#p' + pi).on('click', function () {
            if ( $('#pl' + pi).is( ":hidden" ) ) {
                $('#pl' + pi).slideDown();
            } else {
                $('#pl' + pi).slideUp();
            }
            
            $('#p' + pi).text(switchArrow(document.getElementById('p' + pi).innerHTML));
        });
        
        $('#pl' + pi).hide();
        
        p.articles.forEach(function (a) {
            $('#pl' + pi).append(
                $('<li></li>').append(
                    $('<a></a>')
                        .attr('href', serv_dir + "res/policies/" + a.id + ".pdf")
                        .text(a.name)
                )
            );
        });
    });
}