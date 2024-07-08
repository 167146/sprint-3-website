<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entertainment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('images/safari.jpeg');
            background-size: cover; /* Ensures the background image covers the entire viewport */
            background-position: center; /* Centers the background image */
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background for content readability */
            border-radius: 10px; /* Rounded corners for container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for container */
        }
        video {
            width: 100%;
            display: block; /* Ensures video is treated as a block element */
            margin: 0 auto; /* Centers the video horizontally */
            border-radius: 10px; /* Rounded corners for video */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); /* Shadow effect for video */
        }
        h1 {
            color: #333;
            font-size: 2em;
            text-align: center;
            margin-bottom: 10px;
        }
        p {
            color: #666;
            text-align: justify;
            margin-bottom: 20px;
            padding: 0 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background for readability */
            border-radius: 5px; /* Rounded corners for paragraphs */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for paragraphs */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: bisque;
        }
        th a, td a {
            display: block;
            text-decoration: none;
            color: #333;
        }
        th a:hover, td a:hover {
            color: #666;
        }
        a {
            display: inline-block;
            background-color: darkslategray;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            color: white;
        }
        a:hover {
            background-color: darkgrey;
        }
    </style>
</head>
<body>
    <div class="container">
        <video controls>
            <source src="safarivideo.mp4" type="video/mp4"> 
        </video>
        <h1><i>SAFARI</i></h1>
        <p>The Ilomilo Hotel philosophy of authentic experiences in exotic locales is perfectly embodied in our meticulously cultivated selection of safaris, cultural immersions and beach holidays.

            We welcome you to explore some of the most legendary settings in Africa  through the lens of these captivating adventures. Find yourself mingling with welcoming locals, marvelling at magnificent landscapes and wildlife, savouring the finest in ethnic cuisine and, above all, immersing yourself in the surroundings on a truly personal level. 
            Each getaway has been carefully designed to provide the extraordinary service, comfort, dining, activities and entertainment that ensure a once-in-a-lifetime experience and a trip that will leave you inspired for your next journey.
            
            Let Ilomilo Hotel show you our corner of the world from a unique and exclusive perspective.</p>

        <table>
            <thead>
                <tr>
                    <th><a href="index.php">Home page</a></th>
                    <th><a href="restaurant.php">Restaurant</a></th>
                    <th><a href="resort.php">Resort</a></th>
                    <th><a href="Bars and drinks.php">Bars and drinks</a></th>
                    <th><a href="Outdoor Catering.php">Outdoor Catering</a></th>
                </tr>
            </thead>
        </table>
    </div>
</body>
</html>
