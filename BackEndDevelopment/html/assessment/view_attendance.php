<?php
include 'db.php';

$conn = OpenCon();

$sql = "SELECT * FROM Attendance";
$result = mysqli_query($conn, $sql);

echo "<h1>Attendance Records</h1>";
echo "<table border='1'>
<tr>
<th>Attendance ID</th>
<th>Pupil ID</th>
<th>Class ID</th>
<th>Date</th>
<th>Status</th>
</tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['Attendance_id'] . "</td>";
    echo "<td>" . $row['Pupil_id'] . "</td>";
    echo "<td>" . $row['Class_id'] . "</td>";
    echo "<td>" . $row['Date'] . "</td>";
    echo "<td>" . $row['Status'] . "</td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>
