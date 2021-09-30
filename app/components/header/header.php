<nav class="navbar is-light" role="navigation" aria-label="main navigation">
  <div class="container">
<div class="navbar-brand">
    <div class="header__logo">
      <?=$this->component('logo')?>
    </div>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <?php if (isUser()): ?>
      <div class="navbar-start">
        <a class="navbar-item">
          Home
        </a>

        <a class="navbar-item">
          Documentation
        </a>

        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            More
          </a>

          <div class="navbar-dropdown">
            <a class="navbar-item">
              About
            </a>
            <a class="navbar-item">
              Jobs
            </a>
            <a class="navbar-item">
              Contact
            </a>
            <hr class="navbar-divider">
            <a class="navbar-item">
              Report an issue
            </a>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <?php if (isUser()): ?>
            <p>Welcome, <?=$_SESSION['user']['firstName'] ? $_SESSION['user']['firstName'] : 'User'?></p>
            <a class="button is-light" href="/user/logout">
              Logout
            </a>
          <?php else: ?>
            <a class="button is-link" href="/user/signup">
              <strong>Sign up</strong>
            </a>
            <a class="button is-light" href="/user/login">
              Log in
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
        </div>
</nav>