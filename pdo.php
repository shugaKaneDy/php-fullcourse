<?php
  session_start();
  require_once 'dbcon.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-4">
        <?php if(isset($_SESSION['message'])) : ?>
          <h5 class="alert alert-success"><?= $_SESSION['message'];?></h5>
        <?php 
          unset($_SESSION['message']);
          endif; ?>


        <div class="card">
          <div class="card-header">
            <h3>PHP PDO CRUD
              <a href="student-add.php" class="btn btn-primary float-end">Add Student</a>
            </h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Fullname</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Course</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $query = "SELECT * FROM students";
                    $stmt = $conn->prepare($query);
                    $stmt->execute();

                    $stmt->setFetchMode(PDO::FETCH_OBJ); // PDO::FETCH_ASSOC
                    $result = $stmt->fetchAll(); // PDO::FETCH_ASSOC
                    if($result) {

                      foreach($result as $row) {
                        ?>
                          <tr>
                            <td><?= $row->id; ?></td>
                            <td><?= $row->fullname; ?></td>
                            <td><?= $row->email; ?></td>
                            <td><?= $row->phone; ?></td>
                            <td><?= $row->course; ?></td>
                            <td>
                              <a class="btn btn-warning" href="student-edit.php?id=<?= $row->id; ?>">Edit</a>
                            </td>
                            <td>
                              <form action="code.php" method="POST">
                                <button type="submit" name="delete_student" value="<?= $row->id; ?>" class="btn btn-danger">Delete</button>
                              </form>
                            </td>
                          </tr>
                        <?php
                      }
                    } else {
                      ?>
                      <tr>
                        <td colspan="5">No record found</td>
                      </tr>
                      <?php
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlm
</body>
</html>