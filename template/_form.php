<!-- Account Page -->
<div class="account-page">
      <div class="container">
        <div class="row">
          <div class="col-2">
            <img src="assets/images/image1.png" width="100%" />
          </div>
          <div class="col-2">
            <div class="form-container">
              <div class="form-btn">
                <span onclick="login()">Login</span>
                <span onclick="register()">Register</span>
                <hr id="Indicator" />
              </div>

              <form id="LoginForm" action="login_proses.php" method="post">
                <input type="text" name="uname" placeholder="Username" />
                <input type="password" name="upass" placeholder="Password" />
                <button type="submit" class="btn">Login</button>
                <a href="">Forgot Password</a>
              </form>

              <form id="RegForm" action="../admin/register_proses.php">
              <input type="text" name="uname" placeholder="Username" />
                <input type="password" name="upass" placeholder="Password" />
                <button type="submit" class="btn">Register</button>
                <a href="">Forgot Password</a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

<script>
      var LoginForm = document.getElementById("LoginForm");
      var RegForm = document.getElementById("RegForm");
      var Indicator = document.getElementById("Indicator");

      function register() {
        RegForm.style.transform = "translateX(0px)";
        LoginForm.style.transform = "translateX(0px)";
        Indicator.style.transform = "translateX(100px)";
      }

      function login() {
        RegForm.style.transform = "translateX(300px)";
        LoginForm.style.transform = "translateX(300px)";
        Indicator.style.transform = "translateX(0px)";
      }
    </script>