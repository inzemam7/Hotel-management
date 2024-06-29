<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>1 star Hotel details</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <style>
    .button {
      text-align: center;
      padding: 0.5rem;
      border-radius: 1rem;
      background-color: #816C61;
      margin: 30px auto;
      width: 115px;
    }

    .button:hover {
      background-color: #e7dfc6;
    }
  </style>
</head>

<body>
  <?php require 'navv/navdet.php' ?>
  <div style="background-color: #e7dfc6; padding: 20px; border-radius: 40px; display: grid; margin:20px;">
  <?php
 

// Include the common database connection script
require 'dbconnect.php';

// Get the hotel_id from the URL
$hotel_id = isset($_GET['hotel_id']) ? intval($_GET['hotel_id']) : 0;

if ($hotel_id > 0) {
    // SQL query to select the hotel details
    $sql = "SELECT * FROM hotel WHERE hotel_id = $hotel_id";
    $result = $conn->query($sql);

    // Check if there are results
    if ($result->num_rows > 0) {
        // Fetch the hotel details
        $row = $result->fetch_assoc();
        
        // Display the hotel details
        echo "<h1>Hotel Details</h1>";
        echo "<p><strong>Hotel ID:</strong> " . $row["hotel_id"] . "</p>";
        echo "<p><strong>Hotel Name:</strong> " . $row["hotel_name"] . "</p>";
        echo "<p><strong>Hotel Type:</strong> " . $row["hotel_type"] . "</p>";
        echo "<p><strong>Hotel Staff:</strong> " . $row["hotel_staff"] . "</p>";
        echo "<p><strong>Hotel contact:</strong> " . $row["contact"] . "</p>";
        echo "<p><strong>Hotel Address:</strong> " . $row["hotel_address"] . "</p>";
        echo "<p><strong>Hotel City:</strong> " . $row["hotel_city"] . "</p>";
    } else {
        echo "No hotel found with the given ID.";
    }
} else {
    echo "Invalid hotel ID.";
}

// Close the database connection
$conn->close();
?>
</div>
  <?php require 'include/footer.php' ?>
</body>
</html>