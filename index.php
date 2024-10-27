<?php include 'calc.php' ?>
<?php include 'db.php' ?>
<?php include 'search.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Gold Calculator</title>

    <style>
        /* Same CSS styles as before... */
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        header nav {
            width: 100%;
            height: 45px;
            text-align: center;
            background: black;
            position: fixed;
            z-index: 1;
        }

        header .fa {
            display: none;
        }

        header nav ul {
            margin-top: 5px;
        }

        header nav ul li {
            list-style-type: none;
            display: inline-block;
            padding: 0.5em 1em;
        }

        header nav ul li a {
            color: white;
            text-transform: uppercase;
            font-size: 1em;
        }

        header nav ul li a:hover {
            color: lightblue;
            border-bottom: 2px solid white;
            transition: 0.8s;
        }

        #welcome {
            background: linear-gradient(rgba(4, 9, 13, 0.7), rgba(4, 9, 13, 0.7)), url("hbg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh; /* Full height for better responsiveness */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .text-box {
            text-align: center;
            color: white;
        }

        .logo {
            width: 50%;
            height: auto;
        }

        .scroll {
            border: 1px solid white;
            border-radius: 5px;
            padding: 0.5em 1em;
            font-size: 1em;
            font-weight: bold;
        }

        .scroll:hover {
            background: lightgray;
            color: black;
            transition: 0.5s;
        }

        section {
            padding: 2em 1em; /* Added padding for sections */
        }

        #chart {
            text-align: center;
            background: lightblue;
        }

        #chart h1 {
            padding: 2em 0;
        }

        #chart #table {
            width: 90%; /* Changed to responsive width */
            margin: 20px auto;
            padding: 1em;
            background: lightgray;
        }

        #calculator {
            background: lightgray;
        }

        #calculator h1 {
            padding: 1em 0;
        }

         #calculator form {
            max-width: 550px;
            margin: 0 auto;
            padding: 1em;
            background: lightblue;
        }

        #calculator label {
            font-weight: bold;
            font-size: 1em;
            display: block;
            margin-top: 1em;
        }

        #calculator input[type=number],
        select {
            width: 100%;
            padding: 0.5em;
            margin: 0.5em 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1em;
        }

        #calculator button {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            padding: 1em;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            font-size: 1em;
        }

        #calculator button:hover {
            background: black;
            transition: 0.5s;
        }

        #rates {
            text-align: center;
            background: lightblue;
        }

        #rates #lbl {
            border: 2px solid black;
            border-radius: 5px;
            background: white;
            font-weight: bold;
            padding: 0.75em 1em;
        }

        #rates #datetosearch {
            width: 80%; /* Wider input for better accessibility */
            padding: 0.5em;
            border: 2px solid black;
            border-radius: 5px;
            font-size: 1em;
            margin-top: 1em;
        }

        #rates #search {
            padding: 1em;
            border: 2px solid black;
            border-radius: 5px;
        }

        #rates #search:hover {
            background: blue;
            border: none;
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        #rates #table {
            width: 90%; /* Responsive width for the table */
            margin: 20px auto;
            padding: 1em;
            background: lightgray;
        }

        #contact {
            height: 100vh; /* Full height for better layout */
            background: #212226;
            border-bottom: 4px solid red;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .contact-content h1 {
            font-size: 2em;
            color: white;
        }

        .contact-content p {
            margin-top: 1em;
            font-size: 1.2em;
            font-style: italic;
            color: #dedaf0;
        }

        .contact-links {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 1em; /* Spacing above links */
        }

        .contact-links a {
            text-decoration: none;
            color: white;
            margin: 0.5em;
            font-size: 1em;
            padding: 0.5em;
            font-weight: bold;
            transition: color 0.3s;
        }

        .contact-links a:hover {
            color: lightblue; /* Change on hover */
        }

        @media (max-width: 600px) {
            header {
                display: flex;
                justify-content: flex-end;
            }

            header .fa {
                cursor: pointer;
                color: white;
                display: block;
                text-align: right;
                padding: 1em;
                background: black;    
            }

            header .nav-links {
                height: 100vh;
                width: 150px;
                background: black;
                position: absolute;
                top: 0;
                right: -180px;
                transition: 0.5s;
            }

            header nav ul li {
                display: block;
                color: white;        
                border-bottom: 2px solid white;
                padding: 1em;
            }

            header nav ul li:hover {
                background: #c7b04a;
                transition: 0.5s;
                cursor: pointer;
            }

            #calculator form {
                width: 90%; /* Adjusted for smaller screens */
            }

            #rates #datetosearch {
                width: 90%; /* Adjusted for smaller screens */
                margin-top: 20px;
            }

            #contact-content {
                padding: 2em 0; /* Adjusted padding for smaller screens */
            }

            #contact-links a {
<?php include 'calc.php' ?>
<?php include 'db.php' ?>
<?php include 'search.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Gold Calculator</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        header nav {
            width: 100%;
            height: 45px;
            text-align: center;
            background: black;
            position: fixed;
            z-index: 1;
        }

        header .fa {
            display: none;
        }

        header nav ul {
            margin-top: 5px;
            transition: transform 0.5s ease;
        }

        header nav ul li {
            list-style-type: none;
            display: inline-block;
            padding: 0.5em 1em;
        }

        header nav ul li a {
            color: white;
            text-transform: uppercase;
            font-size: 1em;
        }

        header nav ul li a:hover {
            color: lightblue;
            border-bottom: 2px solid white;
            transition: 0.8s;
        }

        header .nav-links {
            display: none; /* Hide by default */
            flex-direction: column;
            position: absolute;
            top: 45px; /* Below the nav */
            right: 0;
            background: black;
            width: 150px;
            border-radius: 0 0 5px 5px; /* Rounded bottom corners */
            overflow: hidden; /* Prevent overflow */
        }

        header .nav-links.show {
            display: flex; /* Show when toggled */
        }

        #welcome {
            background: linear-gradient(rgba(4, 9, 13, 0.7), rgba(4, 9, 13, 0.7)), url("hbg.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* (rest of your CSS remains unchanged...) */

        @media (max-width: 600px) {
            header nav ul {
                display: none; /* Hide on mobile by default */
            }

            header .fa {
                cursor: pointer;
                color: white;
                display: block;
                text-align: right;
                padding: 1em;
                background: black;    
            }

            header nav ul li {
                display: block;
                color: white;        
                border-bottom: 2px solid white;
                padding: 1em;
            }

            header nav ul li:hover {
                background: #c7b04a;
                transition: 0.5s;
                cursor: pointer;
            }
        }

    </style>
</head>
<body>
    <header>
        <nav>
            <i class="fa fa-bars" aria-hidden="true" onclick="showMenu()"></i>
            <div class="nav-links" id="nav-links">
                <i class="fa fa-times" aria-hidden="true" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="#welcome">Home</a></li>
                    <li><a href="#chart">Chart</a></li>
                    <li><a href="#calculator">Calculator</a></li>
                    <li><a href="#rates">Rates</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <br><br>

    <section id="welcome">
        <div class="text-box">
            <img class="logo" src="https://res.cloudinary.com/dh6tyu7fp/image/upload/v1730055253/logo_hqvjgp.png" alt="">
            <h1>Find Gold Price</h1><br>
            <a href="#calculator" class="scroll">Let's Calculate</a>
        </div>
    </section>

    <section id="chart">
        <h1 align="center">Gold Chart</h1>
        <table id="table" border="1">
            <tr>
                <th>Quantity</th>
                <th>Equals</th>
            </tr>
            <tr>
                <td>1 Vori</td>
                <td>11.66 Gram</td>
            </tr>
            <tr>
                <td>1 Vori</td>
                <td>16 Ana</td>
            </tr>
            <tr>
                <td>1 Ana</td>
                <td>6 Roti</td>
            </tr>
            <tr>
                <td>1 Roti</td>
                <td>10 Point</td>
            </tr>
        </table>
    </section>

   <section id="calculator">
    <h1 align='center'>Gold Calculator</h1>
    <form id="myForm" onsubmit="calculateTotal(event)">
        <label for="carat">Select Carat:</label><br>
        <select id="carat" name="carat" required>
            <option value="">None</option>
            <option value="22">22 Carat</option>
            <option value="21">21 Carat</option>
            <option value="18">18 Carat</option>
        </select><br>

        <label for="pergramprice">Per Gram Price:</label><br>
        <input type="number" name="pergramprice" id="pergramprice" readonly /><br>

        <label for="voriprice">Per Vori Price:</label><br>
        <input type="number" name="voriprice" id="voriprice" readonly /><br>

        <label for="voriquantity">Enter Vori Quantity</label><br>
        <input type="number" name="voriquantity" id="voriquantity" required /><br>

        <label for="anaquantity">Enter Ana Quantity</label><br>
        <input type="number" name="anaquantity" id="anaquantity" required /><br>

        <label for="rotiquantity">Enter Roti Quantity</label><br>
        <input type="number" name="rotiquantity" id="rotiquantity" required /><br>

        <label for="pointquantity">Enter Point Quantity</label><br>
        <input type="number" name="pointquantity" id="pointquantity" required /><br>

        <button type="submit" name="submit">Calculate Total</button>

        <p align="center" style="font-weight: bold;">Total Taka</p>
        <p align="center">
            <input readonly="readonly" id="result" name="result" style="font-weight: bold; text-align: center; font-size: medium;" value="0" />
        </p>
    </form>
</section>

<section id="rates">
        <h1 align="center">Gold Price Updates Chart</h1><br><br><br>
        <label for="datetosearch" id="lbl">Check rate of a date</label>
        <input type="date" name="datetosearch" id="datetosearch">
        <button type="submit" name="submit" id="search"><i class="fa fa-search"></i></button>

        <table id="table" border="1">
            <tr>
                <th>CARAT</th>
                <th>Per Gram Price</th>
                <th>Per Bhori / Vori Price</th>
                <th>Date</th>
            </tr>
            <tr>
                <td>22/22 CARAT</td>
                <td>৳ 6,300</td>
                <td>৳ 73,483</td>
                <td>22 August 2021</td>
            </tr>
            <tr>
                <td>21/21 CARAT</td>
                <td>৳ 6,030</td>
                <td>৳ 70,334</td>
                <td>22 August 2021</td>
            </tr>
            <tr>
                <td>18/18 CARAT</td>
                <td>৳ 5,280</td>
                <td>৳ 61,586</td>
                <td>22 August 2021</td>
            </tr>
        </table>
    </section>

    <section id="contact">
        <div class="contact-content">
            <h1>Contact Us</h1>
            <p>try any...</p>
        </div>
        <div class="contact-links">
            <a href="https://www.facebook.com/mohammadrahman.khan.75/" target="_blank" id="profile-link"><i class="fa fa-facebook"></i> Facebook</a>
            <a href="https://github.com/mrkhandipu393" target="_blank" id="profile-link"><i class="fa fa-github"></i> Github</a>
            <a href="https://www.linkedin.com/in/m-r-khan-dipu-0b379220a/" target="_blank" id="profile-link"><i class="fa fa-linkedin"></i> Linkedin</a>
            <a href="mailto: mrkhandipubijoy@gmail.com" target="_blank" id="profile-link"><i class="fa fa-at"></i> Send Mail</a>
            <a href="#" target="_blank" id="profile-link"><i class="fa fa-mobile-phone"></i> Call Us</a>
        </div>
    </section>

<script>
    // Function to set the price values when carat is selected
    document.getElementById('carat').addEventListener('change', function() {
        let perGramPrice, perVoriPrice;
        const caratValue = this.value;

        if (caratValue == "22") {
            perGramPrice = 6300;
            perVoriPrice = 73483;
        } else if (caratValue == "21") {
            perGramPrice = 6030;
            perVoriPrice = 70334;
        } else if (caratValue == "18") {
            perGramPrice = 5280;
            perVoriPrice = 61586;
        }

        document.getElementById('pergramprice').value = perGramPrice || '';
        document.getElementById('voriprice').value = perVoriPrice || '';
    });

    // AJAX function to calculate total
    function calculateTotal(event) {
        event.preventDefault(); // Prevent form from reloading page
        const formData = new FormData(document.getElementById("myForm"));

        fetch("calc.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(result => {
            document.getElementById("result").value = result; // Display result in output field
        })
        .catch(error => console.error("Error:", error));
    }
 function showMenu() {
            document.getElementById('nav-links').classList.add('show');
        }

        // Function to hide the menu
        function hideMenu() {
            document.getElementById('nav-links').classList.remove('show');
        }

</script>
</body?
</html>
