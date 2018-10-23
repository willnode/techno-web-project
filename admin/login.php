<?php
include './login-proses.php';

if (!$haslogin) {
?>
<form method="post" class="login" action="login-proses.php">
  <div class="imgcontainer">
    <img src="../images/SmartFriend.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="name"><b>Username</b></label>
    <input type="text" placeholder="Masukkan Username" name="name" required>
    <br>
    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Masukkan Password" name="pass" required>
    <br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container">
  	<button type="submit" class="btn">🔑 Login</button>
  </div>
</form>
<?php } ?>