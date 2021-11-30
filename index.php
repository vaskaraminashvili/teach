<?php
require_once 'test.php';
$sql = "SELECT * FROM products";
$result = mysqli_query($con, $sql);

    function pd($obj)
    {

        print "<div align='left'><font face='Verdana' color='//536f8c' size='3'><pre>";
        print_r($obj);
        print "</pre></font></div>";
        die;

    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <div class="container">
        <div class="row">
            <?php
                while($row = mysqli_fetch_assoc($result)) {

                    // var_dump($row);
                    // die;
            ?>
                <?php if ($row['title'] && $row['description']) { ?>
                    <div class="col-xs-12 col-md-6 col-xl-4 mb-5">
                        <div class="card">
                          <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title'] ?></h5>
                            <p class="card-text"><?php echo $row['description']?></p>
                            <a href="welcome.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>

        </div>
    </div>

</body>
</html>


<?php /*
                <?php if ($row['title'] && $row['description']) { ?>
                    <div class="col-xs-12 col-md-6 col-xl-4 mb-5">
                        <div class="card">
                          <img src="<?php echo $row['image']?>" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']?></h5>
                            <p class="card-text"><?php echo $row['description']?></p>
                            <a href="welcome.php" class="btn btn-primary">Go somewhere</a>
                          </div>
                        </div>
                    </div>
                <?php } ?>


*/ ?>
