<!DOCTYPE html>

<html>
    <head>
        <title>Random</title>
    </head>
    <body>
        <div class="main">
            <h1>Huuuuuh???</h1>
        </div>
        <script>
                var websites = [ "https://www.youtube.com/watch?v=QH2-TGUlwu4", "https://www.youtube.com/watch?v=8DbfUvcD6tc"];
            
                var indexChosen = Math.floor(Math.random() * websites.length);
            
                window.location.replace(websites[indexChosen]);
        </script>
    </body>
</html>