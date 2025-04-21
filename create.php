<?php include 'db.php'; ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $conn->query("INSERT INTO books (title, author) VALUES ('$title', '$author')");
    header("Location: read.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Book</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <h2 class="mb-4">➕ Add New Book</h2>
  <form method="post">
    <div class="mb-3">
      <label class="form-label">Title</label>
      <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Author</label>
      <input type="text" name="author" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Add Book</button>
    <a href="read.php" class="btn btn-secondary">Back</a>
  </form>
</div>
</body>
</html>
