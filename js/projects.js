function setupProjects() {
    var projects = $.parseJSON($.ajax({
        url: serv_dir + "res/content/projects.json",
        async: false,
        dataType: "json"
    }).responseText).projects;
    
    var maindiv = $('.main');
    
    projects.forEach(function(p, pi) {
        var div = $('<div></div>')
                    .attr('id', p.id)
                    .attr('class', 'prooject');

        div.append(
            $('<h2></h2>').text(p.title)
        );
        
        div.append(
            $('<h4></h4>').text(p.date)
        );
        
        var section = $('<div></div>').attr('class', 'section');
        
        section.append(
            $('<img></img>')
                .attr('class', 'project-img')
                .attr('src', serv_dir + 'res/img/projects/' + p.img)
        );
        
        var controls = $('<h3></h3>');
        if(p.link) {
            controls.append(
                $('<a></a>')
                    .attr('href', p.link)
                    .text('View here ►')
            );
            controls.append(' | ');
        }
        
        controls.append(
            $('<span></span>')
                .attr('class', 'expandcontrol')
                .attr('id', 'expand_' + p.id)
                .text('Read about this ▼')
        );
        
        section.append(controls);
        
        var info = $('<div></div>').attr('id', 'info_' + p.id);
        
        p.content.forEach(function(c, ci) {
            info.append(
                $('<p></p>').text(c)
            );
        });
        
        if(p.links) {
            var links = $('<p></p>').text('Links: ');
            
            p.links.forEach(function(l, li) {
                links.append(
                    $('<a></a>')
                        .attr('href', l.link)
                        .attr('target', '_blank')
                        .text(l.text)
                );
                
                if(li < p.links.length - 1)
                    links.append(', ');
            });
            
            info.append(links);
        }
        
        section.append(info);
        div.append(section);
        maindiv.append(div);
        
        $('#info_' + p.id).hide();
        
        $('#expand_' + p.id).on('click', function() {
            if ($('#info_' + p.id).is( ":hidden" ) ) {
                $('#info_' + p.id).slideDown();
            } else {
                $('#info_' + p.id).slideUp();
            }
            
            this.innerHTML = (switchArrow(this.innerHTML));
        });
    });
}