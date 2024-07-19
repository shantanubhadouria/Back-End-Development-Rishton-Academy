<?php
include 'db.php';

$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pupil_id = $_POST['pupil_id'];
    $pupil_name = $_POST['pupil_name'];
    $address = $_POST['address'];
    $medical_information = $_POST['medical_information'];
    $email = $_POST['email'];
    $class_id = $_POST['class_id'];

    $sql = "UPDATE Pupils SET Pupil_Name='$pupil_name', Address='$address', Medical_Information='$medical_information', Email='$email', Class_id='$class_id' WHERE Pupil_id='$pupil_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Pupil record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    CloseCon($conn);
}
?>
