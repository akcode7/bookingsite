<?php
include '../config/db_connect.php';

if (isset($_POST['location'])) {
    $location = $_POST['location'];

    $sql = "SELECT * FROM carlist WHERE car_pickup LIKE ? GROUP BY car_pickup";
    $stmt = $conn->prepare($sql);
    $location = "%$location%";
    $stmt->bind_param("s", $location);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      echo "<ul style='padding:8px;'>";
      while ($row = $result->fetch_assoc()) {
          echo "<li style='cursor: pointer;'>" . $row['car_pickup'] . "</li>";
      }
      echo "</ul>";
  } else {
      echo "<p>No results found</p>";
  }
}

if (isset($_POST['location_d'])) {
    $location_d = $_POST['location_d'];

    $sql = "SELECT * FROM carlist WHERE car_dropoff LIKE ? GROUP BY car_dropoff";
    $stmt = $conn->prepare($sql);
    $location_d = "%$location_d%";
    $stmt->bind_param("s", $location_d);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      echo "<ul style='padding:8px;'>";
      while ($row = $result->fetch_assoc()) {
          echo "<li style='cursor: pointer;'>" . $row['car_dropoff'] . "</li>";
      }
      echo "</ul>";
  } else {
      echo "<p>No results found</p>";
  }
}


$conn->close();
?>