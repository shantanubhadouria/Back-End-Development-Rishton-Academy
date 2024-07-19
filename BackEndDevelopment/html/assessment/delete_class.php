<?php
include 'db.php';

$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $class_id = $_POST['class_id'];

    $sql = "DELETE FROM Classes WHERE Class_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $class_id);

    if ($stmt->execute()) {
        echo "Class deleted successfully!";
    } else {
        echo "Error deleting class: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
