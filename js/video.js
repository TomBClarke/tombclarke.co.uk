function setupVideos() {
    videos.forEach(function(v) {
        var main = $('.main');
        main.append(
            $('<h1></h1>').text(v.title)
        );

        var section = $('<div></div>').attr('class', 'section');

        section.append(
            $('<video controls></video>')
                .text('Your browser does not support the video tag.')
                .append($('<source></source>')
                    .attr('src', v.video + '.' + v.type)
                    .attr('type', 'video/' + v.type)
                   )
        );

        section.append(
            $('<a download></a>')
                .attr('href', v.video + '.' + v.type)
                .text('(Download video)')
        );


        main.append(section);
    });
}