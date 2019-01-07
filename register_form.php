<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="styles/form.css">
      <title>Agneepath Registrations</title>
   </head>
   <body>
      <div class="register">
         <h1 class="register_heading">Agneepath 3.0 Registration</h1>
         <form class="register_form" action="includes/register.inc.php" method="POST">
            <br>
            <?php
            echo '<label for="first" class="cc">First Name:</label>';
                      if(isset($_GET['first'])) {
                                $first = $_GET['first'];
                                echo '<input type="text" name="first" value="" placeholder ="ex: john" required value="'.$first.'">';
                         } else {
                               echo '<input type="text" name="first" value="" placeholder ="ex: john" required>' ;

                         }
                       echo "<br />";




                       echo '<label for="last" class="cc">Last Name:</label>';
                       if(isset($_GET['last'])) {
                                 $last = $_GET['last'];
                                 echo '<input type="text" name="last" value="" placeholder = "ex: Jaxon" required value="'.$last.'">';
                          } else {
                                echo '<input type="text" name="last" value="" placeholder ="ex: Jaxon" required>' ;

                          }
                        echo "<br />";




                        echo '<label for="email" class="cc">Email:</label>';
                        if(isset($_GET['email'])) {
                                  $email = $_GET['email'];
                                  echo '<input type="text" name="email" value="" placeholder ="ex: abc@xyz.org" required value="'.$email.'">';
                           } else {
                                 echo '<input type="text" name="email" value="" placeholder ="ex: abc@xyz.org" required >' ;

                           }
                         echo "<br />";




                         echo '<label for="number" class="cc">Mobile Number:</label>';
                         if(isset($_GET['number'])) {
                                   $number = $_GET['number'];
                                   echo '<input type="text" name="number" value="" placeholder ="ex: 98198-19887" required value="'.$number.'">';
                            } else {
                                  echo '<input type="text" name="number" value="" placeholder ="ex: 98198-19887" required>' ;

                            }
                          echo "<br />";



                          echo '<label for="school" class="cc">School/College:</label>';
                          if(isset($_GET['first'])) {
                                    $first = $_GET['first'];
                                    echo '<input type="text" name="school" value="" placeholder ="ex: Ashoka University" required value="'.$first.'">';
                             } else {
                                   echo '<input type="text" name="school" value="" placeholder ="ex: Ashoka University" required>' ;

                             }
                           echo "<br />";
                           echo '

                           <label for="events" class="cc">Events you are registering for:</label>
                           <br>
                           <br>

                           <div class="checkbox">
                              <label class="checks">
                              <input type="radio" name ="mfootball" value="Men Football" /><i class="helper"></i>Men\'s Football
                              </label>
                           </div>
                           <div class="checkbox">
                              <label class="checks">
                              <input type="checkbox" name ="wfootball" value="Women Football" /><i class="helper"></i>Women\'s Football
                              </label>
                           </div>
                           <div class="checkbox">
                              <label class="checks">
                              <input type="checkbox" name ="mbasketball" value="Men Basketball" /><i class="helper"></i>Men\'s Basketball
                              </label>
                           </div>
                           <div class="checkbox">
                              <label class="checks">
                              <input type="checkbox" name ="wbasketball" value="Women Football" /><i class="helper"></i>Women\'s Basketball
                              </label>
                           </div>
                           <div class="checkbox">
                              <label class="checks">
                              <input type="checkbox" name ="voleyball" value="Volleyball"/><i class="helper"></i>Volleyball
                              </label>
                           </div>
                           <div class="checkbox">
                              <label class="checks">
                              <input type="checkbox" name ="badminton" value="Badminton"/><i class="helper"></i>Badminton
                              </label>
                           </div>
                           <div class="checkbox">
                              <label class="checks">
                              <input type="checkbox" name ="squash" value="Squash"/><i class="helper"></i>Squash
                              </label>
                           </div>
                           <div class="checkbox">
                              <label class="checks">
                              <input type="checkbox" name ="tabletennis" value="Table Tennis"/><i class="helper"></i>Table Tennis
                              </label>
                           </div>
                           <br>
                           <br>
                           <button type="submit" name="submit">Submit</button>

                           ';


              if (!isset($_GET['register'])) {
              exit();
              } else {
              $registerCheck =  $_GET['register'];

              if ($registerCheck == "empty") {
                echo "<p class = 'error hm'>*You did not fill in all the fields.</p>";
              }
              elseif ($registerCheck == "charfirst") {
                echo "<p class = 'error hm '>*You used invalid character in First Name.</p>";
              }
              elseif ($registerCheck == "charlast") {
                echo "<p class = 'error hm '>*You used invalid character in Last Name.</p>";
              }
              elseif ($registerCheck == "email") {
                echo "<p class = 'error hm'>*You used an invalid email.</p>";
              }
              elseif ($registerCheck == "number") {
                echo "<p class = 'error hm'>*You used an invalid mobile number.</p>";
              }
              elseif ($registerCheck == "success") {
                echo "<p class = 'success hm'>*Successfully Registered!!</p>";
              }

            } ?>
         </form>
      </div>

      <script type="text/javascript" src="scripts/main.js">

      </script>
   </body>
</html>
