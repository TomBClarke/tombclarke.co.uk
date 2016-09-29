function setupTravelPage() {
    gotoplace = gotoplace.toLowerCase();
    if (gotoplace !== "" && gotoplace !== null) {
        showPlace(gotoplace);
    }
}

function showPlace(place) {
    var mainDiv = $('.main');
    // Given all is good, clear the page first...
    mainDiv.empty();
    
    mainDiv.append($('<h1></h1>').text(place));
}