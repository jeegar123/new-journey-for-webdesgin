<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>onepage</title>
    <link rel="stylesheet" href="index.css">
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> -->
</head>

<body>
    <h1 id="demo">Welcome To Ajax</h1>
    <button onclick="load()">check Database </button>

    <div>
        <input type="text" id="name" placeholder="enter name:" required>
        <button onclick="onSubmit()">Add text</button>
    </div>

    <div id="records">
        
    </div>



    <script>
        function load() {
            var http = new XMLHttpRequest();
            http.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if(this.responseText.length <3){
                        this.responseText ="Database connected Successfully";
                        document.getElementById("demo").innerHTML = this.responseText;
                    }
                
                }
            };
            http.open("GET", "database.php", true);
            http.send();
        }

        function onSubmit() {
            var inputData = document.getElementById("name");
            var records = document.getElementById("records");
            var name = inputData.value;

            var http = new XMLHttpRequest();
            http.onreadystatechange = function() {
                inputData.value = "";
                records.innerHTML =this.responseText;
            }
            http.open("GET", "add_to_db.php?name=" + name, true);
            http.send();
        }
    </script>
</body>

</html>