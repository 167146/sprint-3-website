<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <style>
        body {
            background-image: url('abstract art.jpeg');
            background-size: cover; /* Ensures the background image covers the entire page */
            background-repeat: no-repeat; /* Prevents the background image from repeating */
            background-attachment: fixed; /* Keeps the background image fixed when scrolling */
        }

        .form-container {
            text-align: center;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background for better readability */
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>BOOKING DETAILS</h1>
        <form method="POST" action="">
            <label for="id">Booking ID (for Update/Delete)</label><br>
            <input type="number" id="id" name="id" placeholder="Booking ID"><br><br>

            <label for="fn">Fullname</label><br>
            <input type="text" id="fn" name="fullname" placeholder="Fullname" required><br><br>

            <label for="age">Age</label><br>
            <input type="number" id="age" name="age" placeholder="Age" required><br><br>

            <input type="email" id="email" name="email" placeholder="Email address" required><br><br>

            <label for="no_of_people">Number of people</label><br>
            <input type="number" id="no_of_people" name="no_of_people" placeholder="Number of people" required><br><br>

            <label for="date">Date</label><br>
            <input type="date" id="date" name="date" required><br><br>

            <label for="children">Number of children</label><br>
            <input type="number" id="children" name="children" placeholder="Number of children" required><br><br>

            <label for="phone">Phone number</label><br>
            <input type="tel" id="phone" name="phone" placeholder="Phone number" required><br><br>

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
                die("Error preparing the statement: " . $conn->error);
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

