function initExperiences() {
    setupSkills();
}

function setupSkills() {
    var skills = $.parseJSON($.ajax({
        url: serv_dir + "res/content/skills.json",
        async: false,
        dataType: "json"
    }).responseText).skills;
    
    skills.forEach(function(s) {
        var tr = $('<tr></tr>');
        
        tr.append(
            $('<td></td>')
                .attr("class", "td-skill")
                .text(s.name)
        );
        
        tr.append(
            $('<td></td>')
                .attr("class", "td-exp")
                .text(s.detail)
        );
        
        $('#table-skills').append(tr);
    });
}