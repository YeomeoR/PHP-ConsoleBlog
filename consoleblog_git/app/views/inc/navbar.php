<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
  <div class="container">
    <a class="navbar-brand" href="<?php echo URLROOT; ?>">
    <img src="../../../public/images/android-chrome-192x192.png" width="80" height="80" alt="">
  </a>
      <!-- <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://yeomeo.dev">Yeomeo.deV</a>
          </li>
        </ul>
        
        <ul class="navbar-nav ml-auto">
          <?php if(isset($_SESSION['user_id'])) : ?>
            <li class="nav-item">
              <a class="nav-link" href="#">Welcome back, <?php echo $_SESSION['user_name'] ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">Logout</a>
            </li>
          <?php else : ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
          </li>
          <?php endif; ?>
        </ul>
        </div>
      </div>
    </nav>