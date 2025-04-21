<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM books WHERE id=$id");
$book = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $conn->query("UPDATE books SET title='$title', author='$author' WHERE id=$id");
    header("Location: read.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Book</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <h2 class="mb-4">✏️ Edit Book</h2>
  <form method="post">
    <div class="mb-3">
      <label class="form-label">Title</label>
      <input type="text" name="title" value="<?= $book['title']; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Author</label>
      <input type="text" name="author" value="<?= $book['author']; ?>" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-warning">Update Book</button>
    <a href="read.php" class="btn btn-secondary">Cancel</a>
  </form>
</div>
</body>
</html>
