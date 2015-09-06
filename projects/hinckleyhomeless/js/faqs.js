function loadFAQs () {
    var faqdata = $.parseJSON($.ajax({
        url: serv_dir + "res/content/faqs.json",
        async: false,
        dataType: "json"
    }).responseText).questions;
    
    faqdata.forEach(function(faq, faqi) {
        $('.main').
            append(
                $('<h2 id=\'q' + faqi + '\'></h2>').text(faq.question)
            );
        $('.main').
            append(
                $('<div class=\'section\' id=\'a' + faqi + '\'></div>')
                    .append(
                        $('<p></p>').text(faq.answer)
                    )
        );
        
        $('#q' + faqi).on('click', function () {
            if ( $('#a' + faqi).is( ":hidden" ) ) {
                $('#a' + faqi).slideDown();
            } else {
                $('#a' + faqi).slideUp();
            }
        });
        
        $('#a' + faqi).hide();
    });
}