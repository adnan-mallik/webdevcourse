<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        /* div.abc p {
            color: red;
            font-family: sans-serif;
            font-weight: bold;
        } */

        /* #paragraph_1{
            color: red;
            font-family: sans-serif;
            font-weight: bold;
        }
        #paragraph_2{
            color: blue;
            font-family: sans-serif;
            font-weight: bold;
        }

        #heading{
            color: aqua;
        } */

        /* p [name="paragraph_1"] {
            color: red;
            font-family: sans-serif;
            font-weight: bold;
        } */

        /* div > p{
            color: red;
        } */

        div + p{
            color: red;
        }
    </style>
</head>
<body>
    
    <!-- <h2>Home Page</h2>
    <ul>
        <li><a href="/admin/login/login.html">Admin Login</a></li>
        <li><a href="/admin/signup/signup.html">Admin Signup</a></li>
        <li><a href="/client/login/login.html">Client Login</a></li>
        <li><a href="/client/signup/signup.html">Client Signup</a></li>
        <li><a href="/index.html">Home Page</a></li>
    </ul> -->

    <!-- <img src="https://static.thenounproject.com/png/3859979-200.png " alt=""> -->
    <!-- <img src="assets/images/1.png" alt=""> -->

    <!-- CTRL + / -->

    <!-- <p class="paragraph_1" id="paragraph_1" name="paragraph_1">This is paragraph</p>
    <p class="paragraph_2" id="paragraph_2" name="paragraph_2">This is paragraph</p>


    <h1 id="heading">This is heading</h1>
    <h1 id="heading">This is heading</h1>
    <h1 id="heading">This is heading</h1>
    <h1 id="heading">This is heading</h1>
    <h1 id="heading">This is heading</h1>
    <h1 id="heading">This is heading</h1> -->

    <!-- decendant selectors -->

    <!-- <div class="abc">
        <p>This is paragraph</p>
        <p>This is paragraph</p>
        <p>This is paragraph</p>
        <p>This is paragraph</p>
    </div>
    <span class="abc">
        <p>This is paragraph</p>
        <p>This is paragraph</p>
        <p>This is paragraph</p>
        <p>This is paragraph</p>
    </span>
    <div>
        <p>This is paragraph</p>
        <p>This is paragraph</p>
        <p>This is paragraph</p>
        <p>This is paragraph</p>
    </div> -->

    <!-- child selectors -->

    <!-- <h2>Child Selector</h2>

    <p>The child selector (>) selects all elements that are the children of a specified element.</p>

    <div>
        <p>Paragraph 1 in the div.</p>
        <p>Paragraph 2 in the div.</p>
        <section>
            not Child but Descendant
            <p>Paragraph 3 in the div (inside a section element).</p>
        </section>
            graph 4 in the div.</p>
    </div>

    <p>Paragraph 5. Not in a div.</p>
    <p>Paragraph 6. Not in a div.</p> -->


    <!-- Adjacent Sibling Selector -->
    <!-- <h2>Adjacent Sibling Selector</h2>

    <p>The + selector is used to select an element that is directly after another specific element.</p>
    <p>The following example selects the first p element that are placed immediately after div elements:</p>

    <div>
        <p>Paragraph 1 in the div.</p>
        <p>Paragraph 2 in the div.</p>
    </div> -->
<!-- 
    <p>Paragraph 3. After a div.</p>
    <p>Paragraph 4. After a div.</p>

    <div>
        <p>Paragraph 5 in the div.</p>
        <p>Paragraph 6 in the div.</p>
    </div>

    <p>Paragraph 7. After a div.</p>
    <p>Paragraph 8. After a div.</p> -->


    <div id="table"></div>

    <button id="get_table">Get Table</button>

    <script>

        // functions 

        // function declartion | function defination | function call


        // function add(a = 2, b = 6) {

        //     // let a = 2;
        //     // let b = 5;
            
        //     // let result = a + b;

        //     // console.log(result)

        //     return a + b;

        // }
        
        // function multiplication() {
        //     let x = 5;
        //     let y = 10;
            
        //     let result2 = x * y;
        // }


        // console.log( add(3, 10) ); // arguments
        // console.log( add() );
        
        
        // let data = '';

        // for (let i = 1; i < 11; i++) {
            
        //     data += "2 x " + i + " = " + i * 2 + "<br>";
            
        //     document.getElementById('table').innerHTML = data;
        // }

        // for( let i = 0; i < 11; i++ ) {

        //     for(j = 0; j <= i; j++){
        //         document.getElementById('table').innerHTML += '*';
        //     }

        //     document.getElementById('table').innerHTML += "<br>";
        // }

        // let a = 10;
        // let b = "10"; // strictly comparison operator

        // if( a === b){
        //     alert('values are equal')
        // }





        // function table(value, limit = 10){

        //     let table_html = '';
            
        //     for(i = 1; i <= limit; i++){
        //         // table_html += value + " x " + i + " = " + value * i + "<br>";
        //         // table_html = table_html + value + " x " + i + " = " + value * i + "<br>";

        //         table_html += `${value} x ${i} = ${value * i} <br>` // tamplate string
        //     }

        //     return table_html;
        // }



        // document.getElementById('get_table').addEventListener('click', function(){

        //     document.getElementById('table').innerHTML = table(9, 25);
        // })


        // let num = 50;

        // num += 20;

        // num = num + 20;

        // document.getElementById('table').innerText = "<h2>" + num + "</h2>";
        // document.getElementById('table').innerHTML = "<h2>" + num + "</h2>";
        // console.log(num);
        
        // arrays - index array
        // let arr1 = []
        let arr = [1, '2', null, 4, 5, 6, 7, 8, 9, 10];

        // for( let i = 0; i <= arr.length - 1; i++ ){
        //     console.log( arr[i] );
        // }
        // console.log( arr[9] );

        // for (index in arr) {
        //    console.log(index,"=>", arr[index]);
        // }

        // let obj = {
        //     key:value,
        //     key:value,
        // }

        let student = {
            "roll_number" : 1,
            "name": "Ali",
            "age": 24
        };

        // for(value of arr){
        //     console.log(arr.indexOf(value));
        // }


        // console.log( student.name );
        // console.log( student.age );
        // console.log( student["name"] );

        // for( key in student ){
        //     console.log(key, "=>", student[key]);
        // }

        let students = [
            {
                "roll_number" : 1,
                "name": "Ali",
                "age": 24
            },
            {
                "roll_number" : 2,
                "name": "Ahmad",
                "age": 23
            },
            {
                "roll_number" : 1,
                "name": "Haider",
                "age": 24
            }
        ];

        for (const student of students) {
            console.log(student.name);
            console.log(student.age);
        }

        // let a = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ]; // 10
        // let pk_cities = ["Sargodha", "Rawalpindi", "Islamabad", "Lahore", "Faisalabad"];

            // console.log( pk_cities.length )
            // pk_cities[ pk_cities.length ] = "Peshawar";
            // pk_cities[ pk_cities.length ] = "Gujrat";

            // pk_cities.push("Peshawar", "Gujrat", 20);
            // console.log( pk_cities );

            // objects
            // let person = {
            //     name: "Ahmed",
            //     age: 25,
            //     city: "Lahore"
            // }

            // objname.key

            // console.log( person.name );
            // console.log( person.age );
            // console.log( person.city );
            
        // for( i = 0; i < pk_cities.length ; i++){

        //     console.log( pk_cities[i] );
        // }
        // console.log( a[10] )
    </script>
</body>
</html>