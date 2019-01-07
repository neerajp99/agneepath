<?php


  if(isset($_POST['submit'])) {

    include_once 'dbh.inc.php';

    $first = mysqli_real_escape_string($mysqli, $_POST['first']);
    $last = mysqli_real_escape_string($mysqli, $_POST['last']);
    $email = mysqli_real_escape_string($mysqli,$_POST['email']);
    $number = mysqli_real_escape_string($mysqli,$_POST['number']);
    $message = mysqli_real_escape_string($mysqli, $_POST['message']);


    if (empty($first) || empty($email) || empty($number) || empty($last)) {
            header("Location: ../index.php?contact=empty");
            exit();
          }

          elseif (!preg_match("/^[a-zA-Z]*$/", $first)){
            header("Location: ../index.php?contact=firstchar&email=$email&number=$number&last=$last");
            exit();
          }
          elseif (!preg_match("/^[a-zA-Z]*$/", $last)){
            header("Location: ../index.php?contact=lastchar&email=$email&number=$number&first=$first");
            exit();
          }
          elseif(!preg_match('/^[0-9]{10}+$/', $number)){
            header("Location: ../index.php?contact=number&first=$first&last=$last&email=$email");
          }
          elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../index.php?contact=email&first=$first&last=$last&number=$number");
            exit();
          }
          else {
            $sql = "INSERT INTO con (user_first, user_last, user_email, user_number, user_message) VALUES (?, ?, ?, ?, ?);";
            $stmt = mysqli_stmt_init($mysqli);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL Error *_*";
            } else {
              mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $number, $message);
              mysqli_stmt_execute($stmt);
            }
              header("Location: ../index.php?contact=success");
  }
}



 ?>
