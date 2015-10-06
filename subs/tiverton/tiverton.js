var data,
    people,
    locations;

function initTable() {
    try {
        locations = $.parseJSON($.ajax({
            url: "locations.json",
            async: false,
            dataType: "json"
        }).responseText).locations;

        people = $.parseJSON($.ajax({
            url: "people.json",
            async: false,
            dataType: "json"
        }).responseText).people;

        data = $.parseJSON($.ajax({
            url: "peoplelocations.json",
            async: false,
            dataType: "json"
        }).responseText).peoplelocations;
        
        people.forEach(function(p, pi) {
            var tr = $('<tr></tr>');

            var tdp = $('<td></td>')
                .attr("id", "name" + pi)
                .attr("class", "name")
                .text(p);

            var tdf = $('<td></td>')
                .attr("id", "filler" + pi)
                .attr("class", "filler")
                .text("is");

            var tdl = $('<td></td>')
                .attr("id", "location" + pi)
                .attr("class", "location")
                .append(
                    getSelectOptions()
                        .attr('id', 'select' + pi)
                        .prop('selectedIndex', ((locations.indexOf(data[pi]) > -1) ? locations.indexOf(data[pi]) : 0))
                        .change(updateJSON)
                );

            tr.append(tdp, tdf, tdl);
            $('#tivTable').append(tr);
        });
        
        window.onfocus = updateData;
        updateLastUpdated();
        keepUpdated();
    } catch (e) {var resetData = {
            "peoplelocations": [
                "at home",
                "at home",
                "at home",
                "at home",
                "at home",
                "at home",
                "at home",
                "at home",
                "at their real home"
            ]
        }
        
        var update = $.ajax({
            url: "update.php",
            data: ({ json: JSON.stringify(resetData) }),
            async: false
        }).responseText;
        
        initTable();
    }
}

function getSelectOptions() {
    var select = $('<select></select>');
    locations.forEach(function(l) {
        select.append(
            $("<option></option>")
                .attr("value", l)
                .text(l)
        )
    });
    
    return select;
}

function updateJSON() {
    var index = this.id.replace("select", "");
    var newVal = this[this.selectedIndex].value;
    
    //updateData();
    
    data[index] = newVal;
    
    var dataToSave = { "peoplelocations": data };
    
    var updateText = $.ajax({
        url: "update.php",
        data: ({ json: JSON.stringify(dataToSave) }),
        async: true
    }).responseText;
    
    var id = this.id;
    $('#uploadPerson').text(people[parseInt(id.substr(id.length - 1, id.length - 1))]);
    $('#uploadLocation').text(this[this.selectedIndex].value);
    
    showfade('uploadInfo');
}

function updateLastUpdated() {
    var currentdate = new Date(); 
    var datetime = currentdate.getDate() + "/"
                    + (currentdate.getMonth()+1)  + "/" 
                    + currentdate.getFullYear() + " @ "  
                    + currentdate.getHours() + ":"  
                    + currentdate.getMinutes() + ":" 
                    + currentdate.getSeconds();
    $('#lastUpdated').text(datetime);
}

function updateData() {
    data = $.parseJSON($.ajax({
        url: "peoplelocations.json",
        async: false,
        dataType: "json"
    }).responseText).peoplelocations;

    data.forEach(function(p, pi) {
        $('#select' + pi).prop('selectedIndex', ((locations.indexOf(p) > -1) ? locations.indexOf(p) : 0))
    });
    
    showfade('refrehfeedback');
    updateLastUpdated();
}

function showfade(id) {
    $('#' + id).show();
    setTimeout(function() {
        $('#' + id).fadeOut();
    }, 1500);
}

function keepUpdated() {
    setTimeout(function() {
        updateData();
        keepUpdated();
    }, 180000);
}