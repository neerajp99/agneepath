<html>
<head>
    <title>Check usesr</title>
    <link rel="stylesheet" href="styles/check_user.css">
</head>
<body>
    <table class="check_table">
        <thead>
            <tr>
              <th class= "text-heading">ID</th>
              <th class="text-heading">First Name</th>
              <th class="text-heading">Last Name</th>
              <th class="text-heading">Email</th>
              <th class= "text-heading">Contact</th>
              <th class="text-heading">School</th>
              <th class="text-heading">mFootball</th>
              <th class="text-heading">wFootball</th>
              <th class= "text-heading">mBasketball</th>
              <th class="text-heading">wBasketball</th>
              <th class="text-heading">Badminton</th>
              <th class="text-heading">Squash</th>
              <th class= "text-heading">Table Tennis</th>
              <th class="text-heading">Volleyball</th>
            </tr>
          </thead>

        <tbody class="table-details">
         <?php

include "includes/db.inc.php";
$sql    = "select * from register";
$result = mysqli_query($mysqli, $sql);
$check  = mysqli_num_rows($result);
if ($check > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $zero     = $row['user_id'];
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
                    <td>$zero</td>
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
