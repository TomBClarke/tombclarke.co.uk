var imgs,
    imgIndex = 0,
    imgSum;

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
}

function advancePic(n) {
    imgIndex = (imgIndex + n) % (imgSum);
    if(imgIndex == -1)
        imgIndex = imgSum - 1;
    
    $('#galleryIMG').attr("src", imgs[imgIndex]);
    $('#curPic').text(imgIndex + 1);
}