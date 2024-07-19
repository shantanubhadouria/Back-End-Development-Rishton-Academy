<?php
include 'db.php';

$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacher_id = $_POST['teacher_id'];
    $teacher_name = $_POST['teacher_name'];
    $address = $_POST['address'];
    $phone_number = $_POST['phone_number'];
    $annual_salary = $_POST['annual_salary'];
    $background_check = isset($_POST['background_check']) ? 1 : 0;
    $class_id = $_POST['class_id'];

    $sql = "UPDATE Teachers SET Name='$teacher_name', Address='$address', Phone_Number='$phone_number', Annual_Salary='$annual_salary', Background_Check='$background_check', Class_id='$class_id' WHERE Teacher_id='$teacher_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Teacher record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    CloseCon($conn);
}
?>
