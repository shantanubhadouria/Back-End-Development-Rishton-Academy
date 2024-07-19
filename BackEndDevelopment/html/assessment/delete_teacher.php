<?php
include 'db.php';

$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $teacher_id = $_POST['teacher_id'];

    $sql = "DELETE FROM Teachers WHERE Teacher_id='$teacher_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Teacher record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    CloseCon($conn);
}
?>
