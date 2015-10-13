function setupNews(_n) {
    var news = $.parseJSON($.ajax({
        url: serv_dir + "res/content/news.json",
        async: false,
        dataType: "json"
    }).responseText).stories;

    var div = $('#news');
    
    var n = _n;
    if(!n) {
        div.append($('<h1></h1>').text("Lawrence House News:"));
        
        n = news.length;
        
        var datesd = $('<h2></h2>').attr('class', 'newsdates desktop');
        
        datesd.append($('<h3></h3>').text("Jump to date:"));
        
        news.forEach(function(n, ni) {
            var date = $('<p></p>')
                            .on('click', function() { location.hash = '#' + n.date; } )
                            .attr('class', 'datenav')
                            .text(n.date);
            
            datesd.append(date);
        });
        
        div.append(datesd);
        
        var datesm = $('<h2></h2>').attr('class', 'mobile');
        
        datesm.append($('<h3></h3>').text("Jump to date:"));
        
        news.forEach(function(n, ni) {
            var date = $('<span></span>')
                            .on('click', function() { location.hash = '#' + n.date; } )
                            .attr('class', 'datenav')
                            .text(n.date);
            
            datesm.append(date);
            
            if(ni < news.length - 1)
                datesm.append(", ");
        });
        
        div.append(datesm);
    } else {
        div.append($('<h1></h1>').text("Latest news:"));
    }
        
    for(var i = 0; i < n; i++) {
        var story = news[i];
        
        if (!(i == 0))
            div.append($('<h1></h1>').text("-"));
        
        div.append($('<h1></h1>').attr('id', story.date).text(story.headline));
        div.append($('<h2></h2>').text(story.date));
        
        var section = $('<div></div>').attr('class', 'section newssection');
        
        if(!_n && story.pic)
            section.append(
                $('<img></img>')
                    .attr('src', serv_dir + 'res/img/news/' + story.pic)
                    .attr('class', 'news-pic')
            );
        
        story.text.forEach(function(t) {
            section.append($('<p></p>').text(t));
        });
        
        var linkspan = $('<p></p>').text("Links: ");
        story.links.forEach(function(l, li) {
            var a  = $('<a></a>')
                            .attr("href", l.link)
                            .attr('target', '_blank')
                            .text(l.title);
            
            linkspan.append(a);
            if(li < story.links.length - 1)
                linkspan.append(", ");
        });
        section.append(linkspan);
        
        var fb = $('<div></div>')
                        .attr('class', 'fb-share-button')
                        .attr('data-href', 'http://hhg.tombclarke.co.uk/news/#' + story.date)
                        .attr('data-layout', 'button_count');
        var fbholder = $('<div></div>')
                            .attr('class', 'fb-holder')
                            .append(fb);
        
        section.append(fbholder);
        
        div.append(section);
    }   
}