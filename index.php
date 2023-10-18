<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aziende</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  </head>
  
  <body class="dark-mode">
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-light">
      <h1 class="text-black">Aziende</h1>
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="create.php" class="nav-link">Create</a>
        </li>
      </ul>
    </nav><!-- /.navbar -->
      
    <main>
      <div>
        <!-- index dei record -->
        <?php

          include 'setting.php';

          try {
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            echo "<script>console.log('Connected successfully.');</script>";
          } 
          catch (PDOException $pe) {
              die("Could not connect to the database $dbname :" . $pe->getMessage());
          }

          $sql = 'SELECT * FROM companies';
          $query = $conn->query($sql);

          if ($query->rowCount() > 0) {
              $sql = "SELECT * FROM `companies`;";
              foreach ($conn->query($sql) as $row) {
                  echo $row['name'] . '<br>';
              }
            }
          $conn = null;
        ?>
      </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js" integrity="sha512-ubuT8Z88WxezgSqf3RLuNi5lmjstiJcyezx34yIU2gAHonIi27Na7atqzUZCOoY4CExaoFumzOsFQ2Ch+I/HCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  </body>
</html>
