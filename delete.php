<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];

// Optional: confirm book exists before deletion
$result = $conn->query("SELECT * FROM books WHERE id=$id");
if ($result->num_rows > 0) {
    $conn->query("DELETE FROM books WHERE id=$id");
}

header("Location: read.php");
exit;
?>
