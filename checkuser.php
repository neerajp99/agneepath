<html>
<head>
    <title>Check usesr</title>
    <link rel="stylesheet" href="styles/checkuser.css">
</head>
<body>
    <table class="check_table">
        <tbody class="table-details">
         <?php

include "includes/db.inc.php";
$sql    = "select * from register";
$result = mysqli_query($mysqli, $sql);
$check  = mysqli_num_rows($result);
if ($check > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $one      = $row['user_first'];
        $two      = $row['user_last'];
        $three    = $row['user_email'];
        $four     = $row['user_number'];
        $five     = $row['user_school'];
        $six      = $row['user_mfootball'];
        $seven    = $row['user_wfootball'];
        $eight    = $row['user_mbasketball'];
        $nine     = $row['user_wbasketball'];
        $ten      = $row['user_badminton'];
        $eleven   = $row['user_squash'];
        $twelve   = $row['user_tabletennis'];
        $thirteen = $row['user_voleyball'];
        echo "
                    <tr>
                    <td>$one</td>
                    <td>$two</td>
                    <td>$three</td>
                    <td>$four</td>
                    <td>$five</td>
                    <td>$six</td>
                    <td>$seven</td>
                    <td>$eight</td>
                    <td>$nine</td>
                    <td>$ten</td>
                    <td>$eleven</td>
                    <td>$twelve</td>
                    <td>$thirteen</td>
                </tr>

        ";

    }
}
?>
        </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
