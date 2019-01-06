<?php


  if(isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli,$_POST['email']);
    $number = mysqli_real_escape_string($mysqli,$_POST['number']);
    $message = mysqli_real_escape_string($mysqli, $_POST['message']);

    if (empty($name) || empty($email) || empty($number)) {
            header("Location: ../index.php?contact=empty");
            exit();
          }

          elseif (!preg_match("/^[a-zA-Z]*$/", $name)){
            header("Location: ../index.php?contact=char&email=$email&number=$number");
            exit();
          }
          elseif(!preg_match('/^[0-9]{10}+$/', $number)){
            header("Location: ../index.php?contact=number&name=$name&email=$email");
          }
          elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../index.php?contact=email&name=$name&number=$number");
            exit();
          }
          else {
            $sql = "INSERT INTO contact (user_name, user_email, user_number, user_message) VALUES (?, ?, ?, ?);";
            $stmt = mysqli_stmt_init($mysqli);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL Error *_*";
            } else {
              mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $number, $message);
              mysqli_stmt_execute($stmt);
            }
              header("Location: ../index.php?signup=success");
  }
}
 ?>
