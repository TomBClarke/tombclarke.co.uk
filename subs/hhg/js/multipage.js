function setupNav() {
    exps.forEach(function(e, i) {
        $('#about-nav').append(
            $('<p></p>')
                .text("• "  + e.name + " •")
                .attr("id", e.id + '-selector')
                .on("click", function() {
                    selectSection(i);
                })
        );
    });
    
    quickSelectSection(0);
}

function selectSection(index) {
    for(var i = 0; i < exps.length; i++) {
        if(i != index) {
            $('#' + exps[i].id).fadeOut();
            $('#' + exps[i].id + '-selector').css("text-decoration", "none");
        }
    }
    
    setTimeout((function() {
        $('#' + exps[index].id).fadeIn();
        $('#' + exps[index].id + '-selector').css("text-decoration", "underline");
    }), 500);
}

function quickSelectSection(index) {
    for(var i = 0; i < exps.length; i++) {
        if(i != index) {
            $('#' + exps[i].id).hide();
            $('#' + exps[i].id + '-selector').css("text-decoration", "none");
        }
    }
    
    setTimeout((function() {
        $('#' + exps[index].id).show();
        $('#' + exps[index].id + '-selector').css("text-decoration", "underline");
    }), 500);
}