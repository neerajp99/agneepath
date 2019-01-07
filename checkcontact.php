<html>
<head>
    <title>Check usesr</title>
    <link rel="stylesheet" href="styles/checkcontact.css">
</head>
<body>
    <table class="check_table">
        <tbody class="table-details">
         <?php

include "includes/dbh.inc.php";
$sql    = "select * from contact";
$result = mysqli_query($mysqli, $sql);
$check  = mysqli_num_rows($result);
if ($check > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $one      = $row['user_first'];
        $two      = $row['user_last'];
        $three    = $row['user_email'];
        $four     = $row['user_number'];
        $five     = $row['user_email'];
        echo "
                    <tr>
                    <td>$one</td>
                    <td>$two</td>
                    <td>$three</td>
                    <td>$four</td>
                    <td class='final-message'>$five</td>
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
