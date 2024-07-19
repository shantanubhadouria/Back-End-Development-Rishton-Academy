<?php
include 'db.php';

$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacher_name = $_POST['teacher_name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $annual_salary = $_POST['annual_salary'];
    $background_check = isset($_POST['background_check']) ? 1 : 0;
    $class_id = $_POST['class_id'];

    $sql = "INSERT INTO Teachers (Name, Address, Phone_Number, Annual_Salary, Background_Check, Class_id)
    VALUES ('$teacher_name', '$address', '$phone_number', '$annual_salary', '$background_check', '$class_id')";

    if ($conn->query($sql) === TRUE) {
        echo "New teacher added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    CloseCon($conn);
}
?>
