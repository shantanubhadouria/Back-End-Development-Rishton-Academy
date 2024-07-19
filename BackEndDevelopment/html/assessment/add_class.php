<?php
include 'db.php';

$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $class_name = $_POST['class_name'];
    $capacity = $_POST['capacity'];
    $number_of_students = $_POST['number_of_students'];
    $number_of_teachers = $_POST['number_of_teachers'];

    $sql = "INSERT INTO Classes (Class_Name, Capacity, Number_of_Students, Number_of_Teachers)
            VALUES ('$class_name', '$capacity', '$number_of_students', '$number_of_teachers')";

    if ($conn->query($sql) === TRUE) {
        echo "New class added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    CloseCon($conn);
}
?>
