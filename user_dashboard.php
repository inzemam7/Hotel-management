<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      html {
            background-color: #E9F1F7;
        }
    </style>
</head>
<body>

<?php require 'navv/nav2.php' ?>
<div style="text-align: center;">
  <h2>YOUR SELECTED ROOM</h2>
</div>
<div style="background-color: #e7dfc6; padding: 20px; border-radius: 40px; display: grid;">
<?php
// Include the connection script
include 'dbconnect.php';

// Get the room id from the URL parameter
$room_id = isset($_GET['room_id']) ? intval($_GET['room_id']) : 0;

// Validate the room id
if ($room_id <= 0) {
    echo "Invalid room ID. or You might have not selected a room";
    exit;
}

// SQL to fetch the room details
$sql = "SELECT room_id, hotel_id, room_no, room_type, room_price, room_availability FROM Room WHERE room_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $room_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if the room exists
if ($result->num_rows > 0) {
    // Fetch the room data
    $row = $result->fetch_assoc();
    echo "<h1>Room Details</h1>";
    echo "<p>Room ID: " . $row["room_id"] . "</p>";
    echo "<p>Hotel ID: " . $row["hotel_id"] . "</p>";
    echo "<p>Room Number: " . $row["room_no"] . "</p>";
    echo "<p>Type: " . $row["room_type"] . "</p>";
    echo "<p>Price: ₹" . $row["room_price"] . "</p>";
    echo "<p>Available: " . ($row["room_availability"] ? 'Yes' : 'No') . "</p>";
    //echo "<p>Your check in date: " . $row["check_in_date"] . "</p>";
    //echo "<p>Your check out date: " . $row["check_out_date"] . "</p>";
} else {
    echo "No room found with the specified ID.";
}

// Close the connection
$conn->close();
?>

<div>
  <h2>YOUR SELECTED ROOM HAS BEEN BOOKED</h2>

</div>


<?php require 'include/footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>  
</body>
</html>