var imgs,
    imgIndex = 0,
    imgSum,
    scrollImages = true;

function createGallery() {
    var imgsstring = $.ajax({
        url: serv_dir + "php/getimgsforgallery.php",
        async: false,
    }).responseText;
    
    imgs = imgsstring.split("|");
    
    for(var i = 0; i < imgs.length; i++) {
        imgs[i] = serv_dir + "res/img/gallery/" + imgs[i];
    }
    
    $('#galleryIMG').attr("src", imgs[0]);
    imgSum = imgs.length;
    
    $('#curPic').text(imgIndex + 1);
    $('#picSum').text(imgSum);
    
    beginAutoScroll();
}

function advancePic(n, continuetoscroll) {
    scrollImages = continuetoscroll;
    
    imgIndex = (imgIndex + n) % (imgSum);
    if(imgIndex == -1)
        imgIndex = imgSum - 1;
    
    $("#galleryIMG").fadeOut(500, function() {
        $(this).attr("src", imgs[imgIndex]);
        $(this).load(function () {
            $(this).fadeIn(500);
        });
    });
    
    $('#curPic').text(imgIndex + 1);
}

function beginAutoScroll() {
    setTimeout(function() {
        if(scrollImages) {
            advancePic(1, true);
            beginAutoScroll();
        }
    }, 4000);
}