<?php

	if(isset($_POST['submit'])) {

		include_once 'db.inc.php';

		$first = mysqli_real_escape_string($mysqli, $_POST['first']);

		$last = mysqli_real_escape_string($mysqli, $_POST['last']);

		$email = mysqli_real_escape_string($mysqli, $_POST['email']);

		$number = mysqli_real_escape_string($mysqli, $_POST['number']);

		$school = mysqli_real_escape_string($mysqli, $_POST['school']);

		$mfootball = mysqli_real_escape_string($mysqli, $_POST['mfootball']);

		$wfootball = mysqli_real_escape_string($mysqli, $_POST['wfootball']);

		$mbasketball = mysqli_real_escape_string($mysqli, $_POST['mbasketball']);

		$wbasketball = mysqli_real_escape_string($mysqli, $_POST['wbasketball']);

		$voleyball = mysqli_real_escape_string($mysqli, $_POST['voleyball']);

		$badminton = mysqli_real_escape_string($mysqli, $_POST['badminton']);

		$squash = mysqli_real_escape_string($mysqli, $_POST['squash']);

		$tabletennis = mysqli_real_escape_string($mysqli, $_POST['tabletennis']);


		if (empty($first) || empty($last) || empty($email) || empty($number) || empty($school)) {
			header("Location: ../register_form.php?register=empty");
			exit();

		}

		elseif ((!preg_match("/^[a-zA-Z]*$/", $first))) {
			header("Location: ../register_form.php?register=charfirst&number=$number&school=$school&email=$email&last=$last");
			exit();

		}
		elseif ((!preg_match("/^[a-zA-Z]*$/", $last))) {
			header("Location: ../register_form.php?register=charlast&number=$number&school=$school&email=$email&first=$first");
			exit();

		}

		elseif (!preg_match('/^[0-9]{10}+$/', $number)) {
			header("Location: ../register_form.php?register=number&first=$first&last=$last&email=$email&school=$school");
			exit();
		}

        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))  {
        	header("Location: ../register_form.php?register=email&first=$first&last=$last&number=$number&school=$school");
        	exit();
		}
		else {
            $sql = "INSERT INTO reg (user_first, user_last, user_email, user_number, user_school, user_mfootball, user_wfootball, user_mbasketball, user_wbasketball, user_voleyball, user_badminton, user_squash, user_tabletennis) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
            $stmt = mysqli_stmt_init($mysqli);
            if(!mysqli_stmt_prepare($stmt, $sql)) {
              echo "SQL Error *_*";
            } else {
              mysqli_stmt_bind_param($stmt, "sssssssssssss", $first, $last, $email, $number, $school, $mfootball, $wfootball, $mbasketball, $wbasketball, $voleyball, $badminton, $squash, $tabletennis);
              mysqli_stmt_execute($stmt);
            }
              header("Location: ../register_form.php?register=success");
	}
}

 ?>
