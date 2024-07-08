

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('abstract art.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 350px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .form-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #444;
            color: #6A1B9A; /* Purple */
        }

        .form-container label {
            font-weight: 500;
            display: block;
            margin-bottom: 5px;
            text-align: left;
        }

        .form-container input[type="text"],
        .form-container input[type="number"],
        .form-container input[type="email"],
        .form-container input[type="date"],
        .form-container input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #333; /* Dark grey */
            border: none;
            border: radius 3px;;
            color:#444;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-bottom: 10px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #E64A19; /* Darker orange */
        }

        .form-container input[type="submit"]:nth-child(2) {
            background-color: #2196F3; /* Blue */
        }

        .form-container input[type="submit"]:nth-child(2):hover {
            background-color: #1976D2; /* Darker blue */
        }

        .form-container input[type="submit"]:nth-child(3) {
            background-color: #4CAF50; /* Green */
        }

        .form-container input[type="submit"]:nth-child(3):hover {
            background-color: #388E3C; /* Darker green */
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Booking Details</h1>
        <form method="POST" action="">
            <label for="id">Booking ID (for Update/Delete)</label>
            <input type="number" id="id" name="id" placeholder="Booking ID">

            <label for="fn">Fullname</label>
            <input type="text" id="fn" name="fullname" placeholder="Fullname" required>

            <label for="age">Age</label>
            <input type="number" id="age" name="age" placeholder="Age" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email address" required>

            <label for="no_of_people">Number of people</label>
            <input type="number" id="no_of_people" name="no_of_people" placeholder="Number of people" required>

            <label for="date">Date</label>
            <input type="date" id="date" name="date" required>

            <label for="children">Number of children</label>
            <input type="number" id="children" name="children" placeholder="Number of children" required>

            <label for="phone">Phone number</label>
            <input type="tel" id="phone" name="phone" placeholder="Phone number" required>

            <input type="hidden" name="action" value="create">
            <input type="submit" value="Create Booking">

            <input type="hidden" name="action" value="update">
            <input type="submit" value="Update Booking">

            <input type="hidden" name="action" value="delete">
            <input type="submit" value="Delete Booking">
        </form>
    </div>

    <?php
    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    include 'connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $action = $_POST['action'];
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : null;
        $age = isset($_POST['age']) ? $_POST['age'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $no_of_people = isset($_POST['no_of_people']) ? $_POST['no_of_people'] : null;
        $date = isset($_POST['date']) ? $_POST['date'] : null;
        $children = isset($_POST['children']) ? $_POST['children'] : null;
        $phone = isset($_POST['phone']) ? $_POST['phone'] : null;

        if ($action == "create") {
            // Create a new booking
            $stmt = $conn->prepare("INSERT INTO guest (guest_name, age, email, people, booking_date, children, phone) VALUES (?, ?, ?, ?, ?, ?, ?)");
            if ($stmt === false) {
                die("Error preparing the statement: " . $conn->error);
            }
            $stmt->bind_param("sisissi", $fullname, $age, $email, $no_of_people, $date, $children, $phone);
            if ($stmt->execute()) {
                echo "Booking successful!";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } elseif ($action == "update" && $id) {
            // Update an existing booking
            $stmt = $conn->prepare("UPDATE guest SET guest_name=?, age=?, email=?, people=?, booking_date=?, children=?, phone=? WHERE id=?");
            if ($stmt === false) {
                die("Error preparing the statement: " . $conn->error);
            }
            $stmt->bind_param("sisissii", $fullname, $age, $email, $no_of_people, $date, $children, $phone, $id);
            if ($stmt->execute()) {
                echo "Booking updated successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        } elseif ($action == "delete" && $id) {
            // Delete a booking
            $stmt = $conn->prepare("DELETE FROM guest WHERE id=?");
            if ($stmt === false) {
                diqe("Error preparing the statement: " . $conn->error);
            }
            $stmt->bind_param("i", $id);
            if ($stmt->execute()) {
                echo "Booking deleted successfully!";
            } else {
                echo "Error: " . $stmt->error;
            }
            $stmt->close();
        }
        // Close the connection
        $conn->close();
    }
    ?>
</body>
</html>
