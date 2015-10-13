<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Who's in?</title>
        <link rel="icon" href="favicon.png">
        <link type="text/css" rel="stylesheet" href="tiverton.css"/>
        <script src="tiverton.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    </head>
    <body onload="initTable();">
        <div class="main">
            <p id="title">Who's in at Tiverton?</p>
            <table id="tivTable">
            </table>
            <div id="updateinfo">
                <button onclick="updateData();">Refresh</button>
                <p>Last refreshed: <span id="lastUpdated"></span></p>
            </div>
        </div>
        <div class="greenbox" id="refrehfeedback">
            <p>Refreshed!</p>
        </div>
        <div class="greenbox" id="uploadInfo">
            <p>Updated <span id="uploadPerson"></span>'s location to <span id="uploadLocation"></span>.</p>
        </div>
        <div class="greenbox" id="errorinfo">
            <p>When the data was loaded, there was an error and the data was reset to default.</p>
        </div>
    </body>
</html>