<div class="container">

  <p>This is a protected page!</p>
  <h3><?php echo $_SESSION['username']; ?></h3>
  <p><?php echo $_SESSION['bio']; ?></p>
  <a class="btn btn-primary" href="/auth/logout">Log Out</a>

</div>