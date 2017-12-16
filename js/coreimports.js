function switchArrow(txt) {
    //▼;
    //▲;
    //►;
    return txt.substring(0, txt.length - 1) + ((txt.indexOf("▼") > -1) ? "▲" : "▼");
}

// Hide advertisement...
setTimeout(function(){ $('div').last().remove(); }, 1);
