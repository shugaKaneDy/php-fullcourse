<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Data into database using php pdo</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-8 mt-4">
        <div class="card">
          <div class="card-header">

            <h3>Insert Data into database using PHP PDO
              <a href="pdo.php" class="btn btn-danger float-end">BACK</a>
            </h3>
          </div>
          <div class="card-body">

            <form action="code.php" method="POST">
                <div class="mb-2">
                  <label>Full Name</label>
                  <input type="text" name="fullname" class="form-control">
                </div>
                <div class="mb-2">
                  <label>Email</label>
                  <input type="text" name="email" class="form-control">
                </div>
                <div class="mb-2">
                  <label>Phone</label>
                  <input type="text" name="phone" class="form-control">
                </div>
                <div class="mb-2">
                  <label>Course</label>
                  <input type="text" name="course" class="form-control">
                </div>
                <div class="mb-2">
                  <button type="submit" name="save_student_btn" class="btn btn-primary">Save Student</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlm
</body>
</html>