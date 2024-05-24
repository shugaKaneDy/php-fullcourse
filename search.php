<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $userSearch = $_POST['usersearch'];

  try{
    require_once "includes/dbh.inc.php";


    $query = "SELECT * FROM comments WHERE username = :usersearch";

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":usersearch", $userSearch);

    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $pdo = null;
    $stmt = null;

  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }

} else {
  header("Location: ../index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

  <h3 class="text-center">Search result:</h3>
  <?php
    if(empty($results)) {
      echo "<div class = 'm-auto mt-5 container bg-light'>";
      echo "<p class = 'text-muted'>There were no results</p>";
      echo "</div>";
    } else {
      foreach ($results as $row) {
        echo "<div class = 'container bg-light mb-5'>";
        echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>";
        echo "<p>" . htmlspecialchars($row["comment_text"]) . "</p>";
        echo "<p>" . htmlspecialchars($row["created_at"]) . "</p>";
        echo "</div>";

      }
    }
  ?>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>