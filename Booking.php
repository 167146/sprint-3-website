<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>
<body style="background-color: bisque;">
    <div align = "center">
    <h1 align = "center"> BOOKING DETAILS </h1>
    <label for="Fn">Fullname</label><br>
        <input type="text"id="fn" placeholder="Fullname"><br><br>

    </form><label for="Ag">Age</label><br>
    <input type="number"id="Ag" placeholder="Age"><br><br>

       
        <input type="text"id="email" placeholder="email adress"><br><br>
        <input type="number"id="No of people" placeholder="number of people"><br><br>
        <input type="date"id="date" placeholder="date"><br><br>
        <label for="no">Children</label><br>
        <input type="number"id="fn" placeholder="number of children"><br><br>
        </form><label for="Phone no">Phone number</label><br>
    <input type="phone"id="Phone" placeholder="Phone number"><br><br>

    </div>

    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Save Details Button</title>
<style>
  .save-button {
    padding: 10px 20px;
    background-color: darkslategray;
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-size: 16px;
  }

  .save-button:hover {
    background-color: darkgrey;
    color: #666;
  }
</style>
</head>
<body>
  <button class="save-button" onclick="saveDetails()">Save Details</button>

  <script>
    function saveDetails() {
      // Here you can add JavaScript code to handle saving details
      // For example, you can use AJAX to send data to the server
      alert('Details saved!'); // Example alert, replace with actual save logic
    }
  </script>

   
</body>
</html>

    
    
</body>
</html>