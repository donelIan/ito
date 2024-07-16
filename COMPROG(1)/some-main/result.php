<?php
include 'db.php';

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $query = "SELECT * FROM patients WHERE name = '$name'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $patient = $result->fetch_assoc();
    } else {
        echo "No patient found";
        exit;
    }
} else {
    echo "No patient selected";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Patient Details</title>
    <link rel="stylesheet" href="sult.css">
</head>
<body>
<a href="search.php"
class="btn btn-dark">back</a>
<div class="info-container">
    <h1>Patient Details</h1>
    <p>Name: <?php echo $patient['name']; ?></p>
    <p>Age: <?php echo $patient['age']; ?></p>
    <p>Address: <?php echo $patient['address']; ?></p>
    <p>Address: <?php echo $patient['gender']; ?></p>
    <p>Address: <?php echo $patient['contact']; ?></p>
    <p>Address: <?php echo $patient['birthplace']; ?></p>
    <p>Address: <?php echo $patient['nationality']; ?></p>
    <p>Address: <?php echo $patient['religion']; ?></p>
    <p>Address: <?php echo $patient['civil_status']; ?></p>
    <p>Address: <?php echo $patient['birthday']; ?></p>
    <p>Address: <?php echo $patient['blood']; ?></p>
    <p>Address: <?php echo $patient['diagnosis']; ?></p>
</div>
</body>
</html>
