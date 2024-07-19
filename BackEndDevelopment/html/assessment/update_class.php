<?php
include 'db.php';

$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $class_id = $_POST['class_id'];
    $class_name = $_POST['class_name'];
    $capacity = $_POST['capacity'];
    $number_of_students = $_POST['number_of_students'];
    $number_of_teachers = $_POST['number_of_teachers'];

    $sql = "UPDATE Classes SET Class_Name=?, Capacity=?, Number_of_Students=?, Number_of_Teachers=? WHERE Class_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("siiii", $class_name, $capacity, $number_of_students, $number_of_teachers, $class_id);

    if ($stmt->execute()) {
        echo "Class updated successfully!";
    } else {
        echo "Error updating class: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>
