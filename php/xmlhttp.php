<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <script>
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            console.log( JSON.parse(this.responseText) );
            // document.getElementById("demo").innerHTML = this.responseText;
        }
        xhttp.open("GET", "https://ecom.test/php/get_students.php", true);
        xhttp.send();
    </script>

</body>
</html>