function setupTravelPage() {
    gotoplace = gotoplace.toLowerCase();
    if (gotoplace !== "" && gotoplace !== null) {
        showPlace(gotoplace);
    }
}

function showPlace(place) {
    $.ajax({
        url: serv_dir + "res/content/travel.json",
        dataType: "json",
        success: function(places) {
            var visitedPlaces = places.places;
            var display = null;
            for(var i = 0; i < visitedPlaces.length; i++) {
                if (visitedPlaces[i].id == place) {
                    display = visitedPlaces[i];
                    i = visitedPlaces.length;
                }
            }
            
            if (!display) {
                return;
            }
            
            var mainDiv = $('.main');
            mainDiv.empty();
            mainDiv.append($('<h1></h1>').text(display.place));
        }
    });
}