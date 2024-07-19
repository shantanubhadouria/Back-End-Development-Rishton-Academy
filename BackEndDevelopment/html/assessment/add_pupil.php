<?php
include 'db.php';

$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pupil_name = $_POST['pupil_name'];
    $address = $_POST['address'];
    $medical_information = $_POST['medical_information'];
    $email = $_POST['email'];
    $class_id = $_POST['class_id'];

    // Check if the class exists
    $class_check_sql = "SELECT * FROM Classes WHERE Class_id = '$class_id'";
    $class_check_result = $conn->query($class_check_sql);

    if ($class_check_result->num_rows > 0) {
        // Insert the pupil if the class exists
        $sql = "INSERT INTO Pupils (Pupil_Name, Address, Medical_Information, Email, Class_id)
                VALUES ('$pupil_name', '$address', '$medical_information', '$email', '$class_id')";

        if ($conn->query($sql) === TRUE) {
            echo "New pupil added successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error: The class ID '$class_id' does not exist in the Classes table.";
    }

    CloseCon($conn);
}
?>
