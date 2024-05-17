<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td{
            padding: 5px 10px;
            border: 1px solid grey;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    

    <table>
        <thead>
            <tr>
                <th>Currency</th>
                <th>Rate</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody id="demo"></tbody>
    </table>


    <script>
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            
            let data = JSON.parse(this.responseText);

            console.log(data)
            let html = '';

            for( key in data){
                console.log(data[key]);
                if(key == 'bpi'){
                    for(currency in data[key]){
                        html += `<tr>
                        <td>${currency}</td>
                        <td>${data[key][currency].rate}</td>
                        <td>${data[key][currency].description}</td>
                        </tr>`
                    }
                    document.getElementById("demo").innerHTML = html;
                }
            }
            // document.getElementById("demo").innerHTML = this.responseText;
        }
        // xhttp.open("GET", "https://ecom.test/php/get_students.php", true);
        xhttp.open("GET", "https://api.coindesk.com/v1/bpi/currentprice.json", true);
        xhttp.send();


        // window.location = "http://google.com";
    </script>

</body>
</html>