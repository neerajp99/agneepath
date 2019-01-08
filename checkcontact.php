<html>
<head>
    <title>Check usesr</title>
    <link rel="stylesheet" href="styles/check_contact.css">
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
            <th class= "text-heading">Message</th>

          </tr>
        </thead>
        <tbody class="table-details">

         <?php

include "includes/dbh.inc.php";
$sql    = "select * from con";
$result = mysqli_query($mysqli, $sql);
$check  = mysqli_num_rows($result);
if ($check > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $zero     = $row['user_id'];
        $one      = $row['user_first'];
        $two      = $row['user_last'];
        $three    = $row['user_email'];
        $four     = $row['user_number'];
        $five     = $row['user_message'];
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
