<?php
include '../databases/connection.php';
?>
<?php
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>
<?php
$id = $_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $query = "UPDATE complaints SET title='$title', description='$description' WHERE id=$id";
    if ($conn->query($query) === TRUE) {
        echo "Pengaduan berhasil diupdate!";
        header('Location: read.php');
    } else {
        echo "Error: " . $conn->error;
    }
}

$query = "SELECT * FROM complaints WHERE id=$id";
$result = $conn->query($query);
$data = $result->fetch_assoc();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Complaint</title>
    <link rel="stylesheet" href="../assets/css/update.css">
</head>
<body>
    <form method="POST">
        <h2>Update Complaint</h2>
        <input type="text" name="title" value="<?= htmlspecialchars($data['title']) ?>" placeholder="Enter Title" required>
        <textarea name="description" placeholder="Enter Description" required><?= htmlspecialchars($data['description']) ?></textarea>
        <button type="submit">Update</button>
        <p>Ensure all fields are filled before submission.</p>
    </form>
</body>
</html>