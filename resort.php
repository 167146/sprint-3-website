<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resort</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url("images/pool.jpeg");
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Soft shadow */
        }
        .slideshow-container {
            position: relative;
            max-width: 100%;
            margin-bottom: 20px;
        }
        .slides {
            display: none;
        }
        .slides img {
            width: 100%;
            height: 400px; /* Adjust this value to set the desired height */
            object-fit: cover; /* Ensures the images maintain aspect ratio */
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            background-color: rgba(0, 0, 0, 0.8);
        }
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0, 0, 0, 0.6);
        }
        h1, h2, h3, h4 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: bisque;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            margin-bottom: 10px;
        }
        a {
            display: inline-block;
            background-color: darkslategray;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        a:hover {
            background-color: darkgrey;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="slideshow-container">
            <div class="slides fade">
                <img src="opening.jpg" alt="hotel and resort">
            </div>
            <div class="slides fade">
                <img src="opening.jpg" alt="Single bed">
            </div>
            <div class="slides fade">
                <img src="15 Cozy Cabin Decor Ideas for a Warm Winter - Nikki's Plate.jpeg" alt="Family house">
            </div>
            <div class="slides fade">
                <img src="Welcome to our hotels in Agra, India _ Radisson Hotels.jpeg" alt="Couple room">
            </div>
            <div class="slides fade">
                <img src="Therapist applying massage oil on be.jpeg" alt="Spa">
            </div>
            <div class="slides fade">
                <img src="download (20).jpeg" alt="Gym">
            </div>

            <!-- Add more slides as needed -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <h1>SUITES</h1>
        <p>Our spacious suites give a feel of an executive apartment with added luxuries and a well-stocked mini bar, deluxe bath products, better bedding, and an enhanced work station.</p>

        <table>
            <thead>
                <tr>
                    <th>ROOM</th>
                    <th>PRICES</th>
                    <th>PEOPLE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Suite</td>
                    <td>26000</td>
                    <td>3 people</td>
                </tr>
                <tr>
                    <td>Family house</td>
                    <td>35000</td>
                    <td>5-7 people</td>
                </tr>
                <tr>
                    <td>Friend block</td>
                    <td>37000</td>
                    <td>12 people</td>
                </tr>
                <tr>
                    <td>Couple room</td>
                    <td>18000</td>
                    <td>2 people</td>
                </tr>
                <tr>
                    <td>Single room</td>
                    <td>15000</td>
                    <td>1 person</td>
                </tr>
            </tbody>
        </table>

        <div>
            <h2><i>GYM & SPA</i></h2>
            <p>Explore a world of beauty, health, and well-being in our expansive Spa & Fitness Centre.</p>
            
            <h3>SPA SERVICES</h3>
            <p>Rejuvenating facials, invigorating body scrubs, and soothing massages inspired by African traditions.</p>
            <ul>
                <li>Backspoke Massage - Ksh 7250</li>
                <li>Aroma Massage - Ksh 7500</li>
                <li>Hot Stone Massage - Ksh 9500</li>
                <li>Deep Massage - Ksh 7500</li>
                <li>Foot Reflex - Ksh 4050</li>
                <li>Couple's Massage - price on request</li>
            </ul>
            
            <h3>FITNESS AND POOL</h3>
            <p>Enjoy an invigorating workout at our modern fitness centre, complete with a heated swimming pool.</p>
            
            <h2>SPA MEMBERSHIP</h2>
            <p>Spa memberships are available at Ilomilo The Spa from monthly packages to annual programs.</p>
            <ul>
                <li>GOLD MEMBERSHIP</li>
                <li>SILVER MEMBERSHIP</li>
                <li>RED LIFESTYLE PACKAGE</li>
                <li>SIX MONTH MEMBERSHIP</li>
                <li>GROUP CLASSES AT THE FITNESS CENTRE</li>
            </ul>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th><a href="index.php">Home</a></th>
                    <th><a href="restaurant.php">Restaurant</a></th>
                    <th><a href="Entertainment.php">Entertainment</a></th>
                    <th><a href="Bars and drinks.php">Bars and Drinks</a></th>
                    <th><a href="Outdoor Catering.php">Outdoor Catering</a></th>
                </tr>
            </thead>
        </table>
    </div>
    
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("slides");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            slides[slideIndex-1].style.display = "block";  
        }
    </script>
</body>
</html>
