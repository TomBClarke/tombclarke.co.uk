function setupStudies() {
    
    var studies = $.parseJSON($.ajax({
        url: serv_dir + "res/content/case-studies.json",
        async: false,
        dataType: "json"
    }).responseText).studies;
    
    studies.forEach(function(s, si) {
        
        var table = $('<table></table>');
        var tdp = $('<td></td>').attr("class", "cstd");
        tdp.append($('<h2 id=\'c' + si + '\'></h2>').text(s.study));
        var tdt = $('<td></td>').attr("class", "cstd");
        tdt.append($('<img class=\"csperson\" id=\'p' + si + '\'></img>').attr("src", serv_dir + "res/img/people/" + s.gender + "-silhouette.png"));
        table.append(tdt, tdp);
        $('.main').append(table);
        
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
        
        $('#p' + si).on('click', function () {
            if ( $('#t' + si).is( ":hidden" ) ) {
                $('#t' + si).slideDown();
            } else {
                $('#t' + si).slideUp();
            }
        });
        
        $('#t' + si).hide();
    });
}