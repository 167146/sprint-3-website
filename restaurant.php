<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: bisque;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        a {
            display: inline-block;
            background-color: darkslategray;
            color: white;
            padding: 10px 20px;
            text-decoration: wavy;
            border-radius: 5px;
            margin: 20px;
            transition: background-color 0.3s, color 0.3s;
        }
        a:hover {
            background-color: darkgrey;
        }
        .container {
            padding: 20px;
        }
        .content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .content p, .content ol, .content ul {
            grid-column: span 2;
            text-align: justify;
            color: #666;
            font-size: 1.2em;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto 20px auto;
        }
        h2, h3 {
            color: #444;
            grid-column: span 2;
            text-align: center;
        }
        h2 {
            font-size: 2em;
            margin-top: 40px;
        }
        h3 {
            font-size: 1.5em;
            margin-top: 30px;
        }
        .menu-image {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        ol, ul {
            text-align: left;
            max-width: 800px;
            margin: 0 auto 20px auto;
            padding-left: 20px;
        }
        li {
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            background-color: #2c3e50;
            border-radius: 5px;
            overflow: hidden;
        }
        th {
            color: white;
            padding: 10px;
            background-color: #34495e;
        }
        th a {
            color: white;
            text-decoration: none;
        }
        th a:hover {
            text-decoration: underline;
        }
    </style>
    <title>Restaurant</title>
</head>
<body>
    <a href="Booking.php">Book now</a>
    <div class="container">
        <div class="content">
            <img src="images/inside restaurant.jpg" alt="restaurant" width=1000 height=900>
            <p>Enjoy great food with family and friends.
            We offer delightful variety of international cuisine, well roasted coffees, teas, light meals, smoothies, desserts and superb pastries<br> under one roof of The Ilomilo Hotel Nairobi.</p>

            <h2>MENU</h2>

            <h3>BREAKFAST</h3>
            <img src="images/breakfast.jpeg" alt="breakfast"width=500 height=400>
            <ol>
                <li>GOODMORNING PLATTER - 1750<br>
                    Crispy bacon, sausage, saute potatoes, grilled
                    tomato, baked beans, toast, eggs cooked your style
                </li>
                <li>WELLNESS BREAKFAST - 2200<br>
                    Muesli, yoghurt or fresh milk, brown toast,
                    fruit platter, pancake and fresh juice
                </li>
                <li>EGGS - 750<br>
                    Choice of Omelette, Fried, Poached, Boiled or
                    Scrambled
                </li>
            </ol>

            <h3>SOUPS</h3>
            <img src="images/soups.jpeg" alt="soup" width=500 height=400>
            <ul>
                <li>Mushroom Soup - 600</li>
                <li>Pasta and Noodle Soup - 600</li>
                <li>Soup of the Day - 500</li>
            </ul>

            <h3>PIZZAS/PASTAS</h3>
            <img src="images/🤍.jpeg" alt="pizza" width=500 height=400>
            <ol>
                <li>Gold class (chefs special) - 1500<br>
                    Chicken, bacon, avocado and tomato slices
                </li>
                <li>Diablo - 1600<br>
                    Bell Pepper, Chicken, Ham
                </li>
                <li>Hawaiian - 1300<br>
                    Tomato, cheese, ham, pineapple and olives
                </li>
                <li>Kenyan Nyama Choma - 2800<br>
                    Grilled Beef Flakes, Onion Slaw
                </li>
                <li>Margherita - 1400<br>
                    Tomato, mozzarella and fresh basil
                </li>
                <li>Tandoori Chicken Pizza - 1600<br>
                    Tandoori chicken Pieces, onions and coriander
                </li>
                <li>Indiana Pizza - 1200<br>
                    Sweet corn, Bell pepper, Mushroom, chillies
                </li>
            </ol>

            <h3>DESSERTS</h3>
            <img src="images/Baileys Cookies and Cream Parfaits.jpeg" alt="desserts"width=500 height=400>
            <ul>
                <li>Apple Pie - 800</li>
                <li>Fruit Plate/Salad - 500</li>
            </ul>

            <h3>TEA</h3>
            <img src="images/tea.jpeg" alt="tea" width=500 height=400>
            <ul>
                <li>Black Masala Tea - 350</li>
                <li>Kenyan Tea Pot - 350</li>
                <li>Herbal Tea - 350</li>
                <li>English Tea - 350</li>
                <li>Masala Tea - 350</li>
                <li>Hot Lemon and Ginger - 350</li>
                <li>Iced Tea - 350</li>
            </ul>

            <h3>KIDS CORNER</h3>
            <ul>
                <li>Fish Fingers - 1250</li>
                <li>Chicken Nuggets - 1250</li>
                <li>Spaghetti & Meat Balls - 750</li>
                <li>Mash Potato with Bolognaise Sauce - 700</li>
                <li>Mini Beef Burger - 800</li>
                <li>Mini Pizza - 700</li>
                <li>Chips - 350</li>
            </ul>
            <img src="images/kids.jpeg" alt="kids" width=500 height=400 >
        </div>

        <table>
            <thead>
                <tr>
                    <th><a href="index.php">Home page</a></th>
                    <th><a href="resort.php">Resort</a></th>
                    <th><a href="Entertainment.php">Entertainment</a></th>
                    <th><a href="Bars and drinks.php">Bars and drinks</a></th>
                    <th><a href="Outdoor Catering.php">Outdoor Catering</a></th>
                </tr>
            </thead>
        </table>
    </div>
</body>
</html>
