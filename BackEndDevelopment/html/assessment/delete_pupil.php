<?php
include 'db.php';

$conn = OpenCon();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pupil_id = $_POST['pupil_id'];

    $sql = "DELETE FROM Pupils WHERE Pupil_id='$pupil_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Pupil record deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    CloseCon($conn);
}
?>
