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
        
        data.forEach(function(p, pi) {
            var tr = $('<tr></tr>');

            var tdp = $('<td></td>')
                .attr("id", "name" + pi)
                .attr("class", "name")
                .text(people[pi]);

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
                        .prop('selectedIndex', ((locations.indexOf(p) > -1) ? locations.indexOf(p) : 0))
                        .change(updateJSON)
                );

            tr.append(tdp, tdf, tdl);
            $('#tivTable').append(tr);
        });
    } catch (e) {var resetData = {
            "peoplelocations": [
                "at home",
                "at home",
                "at home",
                "at home",
                "at home",
                "at home",
                "at home",
                "at home"
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
    updateData(this.id.replace("select", ""), this[this.selectedIndex].value);
    
    var dataToSave = { "peoplelocations": data };
    
    var update = $.ajax({
        url: "update.php",
        data: ({ json: JSON.stringify(dataToSave) }),
        async: false
    }).responseText;
}

function updateData(index, newLocation) {
    data[index] = newLocation;
}