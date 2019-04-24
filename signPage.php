<!DOCTYPE html>
<?php 
include ('db_connection.php');
?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Sign up-OceanStar</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="assets/fonts/sourcesanspro-font.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    />
  </head>
  <body class="form-v8">
    <div>
      <header id="header">
        <div class="logo"><a href="index.html">OcaenStar Co.</a></div>
      </header>
    </div>
    <div class="page-content">
      <div class="form-v8-content">
        <div class="form-right">
          <div class="tab">
            <div class="tab-inner">
              <button class="tablinks" onclick="openTab(event, 'sign-up')">
                Sign Up
              </button>
            </div>
            <div class="tab-inner">
              <button
                class="tablinks"
                onclick="openTab(event, 'sign-in')"
                id="defaultOpen"
              >
                Sign In
              </button>
            </div>
          </div>
          <form
            class="form-detail"
            action="signPage.php"
            method="post"
            autocomplete="off"
          >
           <?php include('errors.php'); ?> 
            <div class="tabcontent" id="sign-up">
              <div class="form-row">
                <label class="form-row-inner">
                  <input
                    type="text"
                    name="first_name"
                    id="first_name"
                    class="input-text"
                    required
                  />
                  <span class="label">First Name</span>
                  <span class="border" style="margin-left: 15px;"></span>
                </label>
              </div>
              <div class="form-row">
                <label class="form-row-inner">
                  <input
                    type="text"
                    name="last_name"
                    id="last_name"
                    class="input-text"
                    required
                  />
                  <span class="label">Last Name</span>
                  <span class="border"></span>
                </label>
              </div>
              <div class="form-row">
                <label class="form-row-inner">
                  <input
                    type="text"
                    name="your_email"
                    id="your_email"
                    class="input-text"
                    required
                  />
                  <span class="label">E-Mail</span>
                  <span class="border"></span>
                </label>
              </div>

              <div class="form-row">
                <label class="form-row-inner">
                  <input
                    type="password"
                    name="password"
                    id="password"
                    class="input-text"
                    required
                  />
                  <span class="label">Password</span>
                  <span class="border"></span>
                </label>
              </div>
              <div class="form-row">
                <label class="form-row-inner">
                  <input
                    type="password"
                    name="comfirm_password"
                    id="comfirm_password"
                    class="input-text"
                    required
                  />
                  <span class="label">Confirm Password</span>
                  <span class="border"></span>
                </label>
              </div>
              <div class="form-row-last">
                <input
                  type="submit"
                  name="register"
                  class="register"
                  value="Sign Up"
                />
              </div>
            </div>
          </form>
          <?php include('errors.php'); ?> 
          <form class="form-detail" action="#" method="post" autocomplete="off">
            <div class="tabcontent" id="sign-in">
              <div class="form-row">
                <label class="form-row-inner">
                  <input
                    type="text"
                    name="your_email_1"
                    id="your_email_1"
                    class="input-text"
                    required
                  />
                  <span class="label">E-Mail</span>
                  <span class="border" style="width: 70%"></span>
                </label>
              </div>
              <div class="form-row">
                <label class="form-row-inner">
                  <input
                    type="password"
                    name="password"
                    id="password_1"
                    class="input-text"
                    required
                  />
                  <span class="label">Password</span>
                  <span class="border" style="width: 70%"></span>
                </label>
              </div>
              <div class="form-row">
                <span class="reset"
                  >Forget you password?<a
                    href="reset"
                    target="_parent"
                    class="reset"
                  >
                    Reset Password</a
                  ></span
                >
              </div>
              <div class="form-row-last">
                <input
                  type="submit"
                  name="register"
                  class="register"
                  value="Sign In"
                />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <script type="text/javascript">
      function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
      }

      // Get the element with id="defaultOpen" and click on it
      document.getElementById("defaultOpen").click();
    </script>
  </body>
</html>
