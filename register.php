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
        <label for="first" class="cc">First Name</label>
        <br>
        <input type="text" name="first" value="" placeholder ='ex: john' required>
        <br>
        <label for="last" class="cc">Last Name</label>
        <br>
        <input type="text" name="last" value="" placeholder ='ex: Sins' required>
        <br>
        <label for="email" class="cc">Email</label>
        <br>
        <input type="text" name="email" value="" placeholder ='ex: abc@xyz.org' required>
        <br>
        <label for="number" class="cc">Mobile Number</label>
        <br>
        <input type="text" name="number" value="" placeholder ='ex: 98198-19887' required>
        <br>
        <label for="school" class="cc">School/College</label>
        <br>
        <input type="text" name="school" value="" placeholder ='ex: Ashoka University' required>
        <br>
        <label for="events" class="cc">Events you are registering for:</label>
        <br>
        <br>
        <div class="checkbox">
      <label class="checks">
        <input type="checkbox" /><i class="helper"></i>Men's Football
      </label>
    </div>
    <div class="checkbox">
  <label class="checks">
    <input type="checkbox" /><i class="helper"></i>Women's Football
  </label>
</div>
<div class="checkbox">
<label class="checks">
<input type="checkbox" /><i class="helper"></i>Men's Basketball
</label>
</div>
<div class="checkbox">
<label class="checks">
<input type="checkbox" /><i class="helper"></i>Women's Basketball
</label>
</div>
<div class="checkbox">
<label class="checks">
<input type="checkbox"/><i class="helper"></i>Volleyball
</label>
</div>
<div class="checkbox">
<label class="checks">
<input type="checkbox" /><i class="helper"></i>Badminton
</label>
</div><div class="checkbox">
<label class="checks">
<input type="checkbox"/><i class="helper"></i>Squash
</label>
</div>
<div class="checkbox">
<label class="checks">
<input type="checkbox"/><i class="helper"></i>Table Tennis
</label>
</div>
<br>
<br>
<button type="submit" name="submit">Submit</button>


      </form>

    </div>




  </body>
</html>
