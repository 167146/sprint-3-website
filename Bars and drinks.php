<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velvet Lounge and Bar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/cocktails.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .container {
            max-width: 1000px;
            margin: auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Adding a semi-transparent white background for better readability */
            border-radius: 10px; /* Adding rounded corners to the container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Adding a subtle shadow effect */
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
        img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-top: 20px;
            border-radius: 10px; /* Adding rounded corners to images */
        }
        h3 {
            text-align: center;
            color: #333;
            margin-top: 20px;
        }
        p {
            color: #666;
            text-align: justify;
            margin-top: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: bisque;
        }
        th a, td a {
            text-decoration: none;
            color: white;
        }
        th a:hover, td a:hover {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <a href="Booking.php">Book now</a>
        <img src="longe_bar_banner.jpg" alt="Wine">
    </div>
    <h3>VELVET LOUNGE AND BAR</h3>
    <div class="container">
        <table>
            <tr>
                <td>
                    <img src="Artdeco interior bar.jpeg" alt="Bar">
                </td>
                <td valign="middle">
                    <p>Welcome to The Velvet Lounge, let the smooth melodies of live jazz music serenade your senses as you sip on expertly crafted cocktails, each one a masterpiece in its own right.</p>
                    <p>Allow our skilled bartenders to guide you on a journey through our extensive selection of spirits, from rare single malt whiskies to artisanal small-batch gins. Or perhaps you prefer to explore our curated wine list, showcasing the finest vintages from around the globe.</p>
                    <p>Whether you're seeking a romantic rendezvous or a lively night out with friends, The Velvet Lounge promises an unforgettable experience where every moment is steeped in sophistication and style.</p>
                </td>
            </tr>
        </table>

        <table>
            <thead>
                <tr>
                    <th><a href="index.php">Home</a></th>
                    <th><a href="restaurant.php">Restaurant</a></th>
                    <th><a href="resort.php">Resort</a></th>
                    <th><a href="Entertainment.php">Entertainment</a></th>
                    <th><a href="Outdoor Catering.php">Outdoor Catering</a></th>
                </tr>
            </thead>
        </table>
    </div>
</body>
</html>
