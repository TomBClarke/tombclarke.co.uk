var exps = ["Skills", "Education", "Work"];

function initExperiences() {
    setupSkills();
    setupEducation();
    setupWork();
    setupNavigation();
}

function setupSkills() {
    $.ajax({
        url: serv_dir + "res/content/skills.json",
        dataType: "json",
        success: function(skills) {
            skills.skills.forEach(function(s) {
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
    });
}

function setupEducation() {
    $.ajax({
        url: serv_dir + "res/content/education.json",
        dataType: "json",
        success: function(education) {
            education.education.forEach(function(e) {
                var tr = $('<tr></tr>');

                tr.append(
                    $('<td><img src=\"' + serv_dir + 'res/img/logos/' + e.logo + '.png\"></img></td>')
                        .attr("class", "td-ed-pic")
                        .attr("rowspan", "3")
                );

                tr.append(
                    $('<td></td>')
                        .attr("class", "td-ed-name")
                        .text(e.name)
                );

                $('#table-education').append(tr);

                tr = $('<tr></tr>');

                tr.append(
                    $('<td></td>')
                        .attr("class", "td-ed-time")
                        .text(e.time)
                );

                $('#table-education').append(tr);

                tr = $('<tr></tr>');

                var accomplished = $('<td></td>').attr("class", "td-ed-acc");
                e.accomplished.forEach(function(a) {
                    accomplished.append(
                        $('<p></p>').text(a)
                    );
                });

                tr.append(accomplished);

                $('#table-education').append(tr);
            });
        }
    });
}

function setupWork() {
    $.ajax({
        url: serv_dir + "res/content/work.json",
        dataType: "json",
        success: function(work) {
            work.work.forEach(function(w) {
                $('#work-div').append(
                    $('<img class=\"work-logo\" src=\"' + serv_dir + 'res/img/logos/' + w.logo + '.png\"></img>')
                );

                $('#work-div').append(
                    $('<a target=\"_blank\" href=\"' + w.link + '\"><h2>' + w.place + '</h2></a>')
                );

                $('#work-div').append(
                    $('<h2></h2>').text(w.title)
                );

                $('#work-div').append(
                    $('<h4></h4>').text(w.time + ' | ' + w.type)
                );

                $('#work-div').append(
                    $('<h4></h4>').text(w.responsibilities)
                );
            });
        }
    });
}

function setupNavigation() {
    exps.forEach(function(e, i) {
        $('#exp-nav').append(
            $('<span></span>')
                .text(e)
                .attr("id", e + "-selector")
                .on("click", function() {
                    selectSection(i);
                })
        );
        
        if(i < exps.length - 1)
            $('#exp-nav').append(" - ");
    });
    
    selectSection(0);
}

function selectSection(index) {
    for(var i = 0; i < exps.length; i++) {
        if(i != index) {
            $('#' + exps[i].toLowerCase()).fadeOut();
            $('#' + exps[i] + '-selector').css("text-decoration", "none");
        }
    }
    
    setTimeout((function() {
        $('#' + exps[index].toLowerCase()).fadeIn();
        $('#' + exps[index] + '-selector').css("text-decoration", "underline");
    }), 500);
}