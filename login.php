
<!DOCTYPE HTML>
<html>
  <head>
    <title>Login | eStore
    </title>
    <?php include 'system/meta_scripts.php'; ?>
  </head>
  <body>
    <div class="wrap">
      <div class="container">
        <?php include 'system/header_top_menu.php'; ?>
        <div class="col-sm-3 header-top-right">
          <?php include 'system/nav_menu.php'; ?>
          <div class="clearfix">
          </div>
        </div>
        <?php include 'system/header_boot_menu.php'; ?>
        <div class="content">
          <div class="content_box">
            <div class="men">
              <div class="register">
                <div class="register-top-grid">
                  <h1>LOGIN
                  </h1>
                  <div class="panel-body">
                    <p>Login to make a purchase.
                    </p>
                    <form method="post" action="#">
                      <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" data-bind="textinput: email">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" pattern=".{6,}" data-bind="textinput: password">
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary" name="submit" data-bind="click: submit">
                      </div>
                    </form>
                  </div>
                  <div class="panel-footer">Don't have an account yet?
                    <a href="signup.php">Register
                    </a>
                  </div>
                </div>
              </div>
              <div class="clearfix">
              </div>
            </div>
          </div>
        </div>
        </body>
      </html>
