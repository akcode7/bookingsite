<?php
include '../config/db_connect.php';

if (isset($_POST['location'])) {
    $location = $_POST['location'];

    $sql = "SELECT * FROM addressess WHERE locations LIKE ?";
    $stmt = $conn->prepare($sql);
    $location = "%$location%";
    $stmt->bind_param("s", $location);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      echo "<ul>";
      while ($row = $result->fetch_assoc()) {
          echo "<li style='cursor: pointer;'>" . $row['locations'] . "</li>";
      }
      echo "</ul>";
  } else {
      echo "<p>No results found</p>";
  }
}

$conn->close();
?>