<?php
session_start();
require "connection.php";

if (isset($_GET["mp"])) {

  $search = $_GET["mp"];

  $query = "SELECT * FROM `contact`
        INNER JOIN `user` ON contact.user_email=user.email ";

  $p_rs = Database::search($query . "WHERE `code` LIKE '%" . $search . "%'");
  $p_num = $p_rs->num_rows;
  if ($p_num == 0) {
    echo ("There is not that kind a Booking");
  } else {

    for ($x = 0; $x < $p_num; $x++) {
      $p_data = $p_rs->fetch_assoc();

      ?>

      <div class="col-12">
        <div class="row  mt-3 mb-3">
          <div class="col-1 col-lg-1 bg-transparent py2 text-end">
            <span class="fs-4 fw-bold text-white">
              <?php echo $p_data["id"]; ?>
            </span>
          </div>
          <div class="col-3 d-none d-lg-block bg-black py-2 rounded-start">
            <span class="fs-5 fw-bold text-white">
              <?php echo $p_data["detail"]; ?>
            </span>
          </div>
          <div class="col-2 col-lg-2 py2 bg-transparent">
            <span class="fs-4 fw-bold text-white">
              <?php echo $p_data["code"]; ?>
            </span>
          </div>
          <div class="col-4 col-lg-2 d-lg-block bg-black py-2">
            <span class="fs-4 fw-bold text-light">
              <?php echo $p_data["fname"] . " " . $p_data["lname"]; ?>
            </span>
          </div>
          <div class="col-3 col-lg-2 d-lg-block py-2 bg-transparent">
            <span class="fs-4 fw-bold text-white">
              <?php echo $p_data["mobile"]; ?>
            </span>
          </div>
          <div class="col-2 d-none d-lg-block bg-black py-2 rounded-end">
            <span class="fs-4 fw-bold text-light">
              <?php echo $p_data["date_time"]; ?>
            </span>
          </div>
        </div>
      </div>

      <?php

    }

  ?>
  <?php
  }
}

?>