<!DOCTYPE html>
<html>

<?php
session_start();
require "connection.php";

if (isset($_SESSION["Aduser"])) {

?>
<!--head tags -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Manage Users | ADMIN | Blue Dots Travel</title>

  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="style.css" />

  <link rel="icon" href="images/logo-icon.png">
</head>
<!--head tags -->

<body class="bg-black Adminmain-body">

  <div class="container-fluid">
    <div class="row">


      <div class="col-12 border-0 border-end border-1 border-primary">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item fw-bold"><a href="adminPanel.php">Back to Dashboard</a></li>
            <li class="breadcrumb-item active text-light" aria-current="page">User Management page</li>
          </ol>
        </nav>
      </div>

      <div class="col-12 mt-2">
        <div class="row">
          <div class="offset-0 offset-lg-3 col-12 col-lg-6 mb-3">
            <div class="row">
              <div class="col-9">
                <input type="text" class="form-control bg-black border border-2 border-light fw-bold text-light" id="mu" placeholder="Search users here.........." />
              </div>
              <br /><br />
              <div class="col-9 col-lg-3 d-grid mb-lg-1">
                <button class="btn bg-dark border border-2 border-warning text-warning fw-bold text-uppercase" onclick="searchMU();">Search Users</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 mt-3 mb-3">
        <div class="row">
          <div class="col-2 col-lg-1 bg-transparent py2 text-end">
            <span class="fs-4 fw-bold text-white">#</span>
          </div>
          <div class="col-2 d-none d-lg-block bg-black py-2 rounded-start">
            <span class="fs-4 fw-bold text-light text-uppercase">Profile Image</span>
          </div>
          <div class="col-4 col-lg-2 py2 bg-transparent">
            <span class="fs-4 fw-bold text-white">User name</span>
          </div>
          <div class="col-4 col-lg-2 d-lg-block bg-black py-2">
            <span class="fs-4 fw-bold text-light">Email</span>
          </div>
          <div class="col-2 d-none d-lg-block py-2 bg-transparent">
            <span class="fs-4 fw-bold text-white">Mobile</span>
          </div>
          <div class="col-2 d-none d-lg-block bg-black py-2 rounded-end">
            <span class="fs-4 fw-bold text-danger">Registered Date</span>
          </div>
          <div class="col-2 col-lg-1 bg-transparent"></div>
        </div>
      </div>
      <div class="col-12" id="searchResults">

        <?php
$query = "SELECT * FROM `user`";
$query1 = "SELECT * FROM `profile_image`";
$pageno;

if (isset($_GET["page"])) {
    $pageno = $_GET["page"];
} else {
    $pageno = 1;
}

$user_rs = Database::search($query);
$user_num = $user_rs->num_rows;

$pro_rs = Database::search($query1);
$pro_data = $pro_rs->fetch_assoc();

$results_per_page = 3;
$number_of_pages = ceil($user_num / $results_per_page);

$page_results = ($pageno - 1) * $results_per_page;
$selected_rs = Database::search($query . " LIMIT " . $results_per_page . " OFFSET " . $page_results . "");

$selected_num = $selected_rs->num_rows;

for ($x = 0; $x < $selected_num; $x++) {
    $selected_data = $selected_rs->fetch_assoc();

    $pro_img_rs = Database::search("SELECT * FROM `profile_image`
                WHERE `user_email` = '" . $selected_data["email"] . "';");

    $pro_img_data = $pro_img_rs->fetch_assoc();

    ?>
          <div class="row  mt-3 mb-3">
            <div class="col-2 col-lg-1 bg-transparent py2 text-end">
              <span class="fs-4 fw-bold text-white"><?php echo $x + 1; ?></span>
            </div>
            <div class="col-2 d-none d-lg-block bg-black py-2">
              <img src="<?php echo $pro_img_data["path"]; ?>" class="rounded-circle" style="height: 90px;margin-left: 60px;" />
            </div>
            <div class="col-4 col-lg-2 py2 bg-transparent">
              <span class="fs-4 fw-bold text-white text-uppercase"><?php echo $selected_data["fname"]; ?></span>
            </div>
            <div class="col-4 col-lg-2 d-lg-block bg-black py-2">
              <span class="fs-6 fw-bold text-light"><?php echo $selected_data["email"]; ?></span>
            </div>
            <div class="col-2 d-none d-lg-block py-2 bg-transparent">
              <span class="fs-4 fw-bold text-white"><?php echo $selected_data["mobile"]; ?></span>
            </div>
            <div class="col-2 d-none d-lg-block bg-black py-2">
              <span class="fs-4 fw-bold text-danger"><?php echo $selected_data["join_date"]; ?></span>
            </div>
            <div class="col-2 col-lg-1 bg-transparent py-2 d-grid">

              <?php

    if ($selected_data["status"] == 1) {
        ?>
                <button id="UB<?php echo $selected_data['email']; ?>" class="btn bg-black rounded-circle border border-2 border-danger text-danger fw-bold" onclick="blockUser('<?php echo $selected_data['email']; ?>');"><i class="bi bi-exclamation-diamond-fill fs-1"></i></button>
              <?php

    } else {
        ?>
                <button id="UB<?php echo $selected_data['email']; ?>" class="btn bg-black rounded-circle border border-2 border-success text-success fw-bold" onclick="blockUser('<?php echo $selected_data['email']; ?>');"><i class="bi bi-patch-check-fill fs-1"></i></button>
              <?php
}
    ?>

            </div>
          </div>


        <?php
}
?>

        <!--  -->
        <div class="offset-2 offset-lg-3 col-8 col-lg-6 text-center mb-3">
          <nav aria-label="Page navigation example">
            <ul class="pagination pagination-lg justify-content-center">
              <li class="page-item">
                <a class="page-link bg-black fw-bold" href="<?php if ($pageno <= 1) {
    echo ("#");
} else {
    echo "?page=" . ($pageno - 1);
}?>" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>
              <?php

for ($x = 1; $x <= $number_of_pages; $x++) {
    if ($x == $pageno) {
        ?>
                  <li class="page-item active">
                    <a class="page-link bg-black fw-bold" href="<?php echo "?page=" . ($x) ?>"><?php echo $x; ?></a>
                  </li>
                <?php
} else {
        ?>
                  <li class="page-item">
                    <a class="page-link bg-black fw-bold" href="<?php echo "?page=" . ($x) ?>"><?php echo $x; ?></a>
                  </li>
              <?php
}
}

?>

              <li class="page-item">
                <a class="page-link bg-black fw-bold" href="<?php if ($pageno >= $number_of_pages) {
    echo ("#");
} else {
    echo "?page=" . ($pageno + 1);
}?>" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <!--  -->

      </div>
    </div>
  </div>

  <script src="bootstrap.bundle.js"></script>
  <script src="main.js"></script>
</body>

</html>
<?php
} else {
  header("location:adminSignin.php");
}
?>