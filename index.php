<!DOCTYPE html>
<?php 
include ('db_connection.php');
?>
<html>
  <head>
    <title>OceanStar Company</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body>
    <div> <?php if (isset($_SESSION['success'])) : ?> 
    <div>
      <h3>
        <?php echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>

</h3>
</div>
<?php endif ?>
<?php if (isset($_SESSION["email"])); ?> 
<!-- <?php endif ?> -->
  </div> 
    
    <!-- Header -->
    <header id="header">
      <div class="logo"><a href="index.html">OcaenStar Co.</a></div>
      <a href="#menu"><span>Menu</span></a>
    </header>

    <!-- Nav -->
    <nav id="menu">
      <ul class="links">
        <li><a href="index.html">Home</a></li>
        <li><a href="AboutUS.html">About Us</a></li>
        <li><a href="Packages.html">Packages</a></li>
        <li><a href="login-register.html">Sign In</a></li>
        <li><a href="index.php?logout='1'">log out</a></li>
      </ul>
    </nav>

    <!-- Banner -->
    <!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
    <section id="banner" class="bg-img" data-bg="banner.jpg">
      <div class="inner">
        <header>
          <h1>Inspiring Destination Within Your Reach</h1>
        </header>
      </div>
      <a href="#one" class="more">Learn More</a>
    </section>

    <!-- One -->
    <section id="one" class="wrapper post bg-img" data-bg="banner2.jpg">
      <div class="inner">
        <article class="box">
          <header>
            <h2>***our tours*****</h2>
            <p>01.01.2017</p>
          </header>
          <div class="content">
            <p>
              Scelerisque enim mi curae erat ultricies lobortis donec velit in
              per cum consectetur purus a enim platea vestibulum lacinia et elit
              ante scelerisque vestibulum. At urna condimentum sed vulputate a
              duis in senectus ullamcorper lacus cubilia consectetur odio proin
              sociosqu a parturient nam ac blandit praesent aptent. Eros
              dignissim mus mauris a natoque ad suspendisse nulla a urna in
              tincidunt tristique enim arcu litora scelerisque eros suspendisse.
            </p>
          </div>
          <footer>
            <a href="generic.html" class="button alt">Learn More</a>
          </footer>
        </article>
      </div>
      <a href="#two" class="more">Learn More</a>
    </section>

    <!-- Two -->
    <section id="two" class="wrapper post bg-img" data-bg="banner3.jpg">
      <div class="inner">
        <article class="box">
          <header>
            <h2>"**flights**"</h2>
            <p>12.21.2016</p>
          </header>
          <div class="content">
            <p>
              Scelerisque enim mi curae erat ultricies lobortis donec velit in
              per cum consectetur purus a enim platea vestibulum lacinia et elit
              ante scelerisque vestibulum. At urna condimentum sed vulputate a
              duis in senectus ullamcorper lacus cubilia consectetur odio proin
              sociosqu a parturient nam ac blandit praesent aptent. Eros
              dignissim mus mauris a natoque ad suspendisse nulla a urna in
              tincidunt tristique enim arcu litora scelerisque eros suspendisse.
            </p>
          </div>
          <footer>
            <a href="generic.html" class="button alt">Learn More</a>
          </footer>
        </article>
      </div>
      <a href="#three" class="more">Learn More</a>
    </section>

    <!-- Three -->
    <section id="three" class="wrapper post bg-img" data-bg="banner4.jpg">
      <div class="inner">
        <article class="box">
          <header>
            <h2>*hotel services*****</h2>
            <p>11.11.2016</p>
          </header>
          <div class="content">
            <p>
              Scelerisque enim mi curae erat ultricies lobortis donec velit in
              per cum consectetur purus a enim platea vestibulum lacinia et elit
              ante scelerisque vestibulum. At urna condimentum sed vulputate a
              duis in senectus ullamcorper lacus cubilia consectetur odio proin
              sociosqu a parturient nam ac blandit praesent aptent. Eros
              dignissim mus mauris a natoque ad suspendisse nulla a urna in
              tincidunt tristique enim arcu litora scelerisque eros suspendisse.
            </p>
          </div>
          <footer>
            <a href="generic.html" class="button alt">Learn More</a>
          </footer>
        </article>
      </div>
      <a href="#four" class="more">Learn More</a>
    </section>

    <!-- Four -->
    <section id="four" class="wrapper post bg-img" data-bg="banner5.jpg">
      <div class="inner">
        <article class="box">
          <header>
            <h2>***renting cars****</h2>
            <p>10.30.2016</p>
          </header>
          <div class="content">
            <p>
              Scelerisque enim mi curae erat ultricies lobortis donec velit in
              per cum consectetur purus a enim platea vestibulum lacinia et elit
              ante scelerisque vestibulum. At urna condimentum sed vulputate a
              duis in senectus ullamcorper lacus cubilia consectetur odio proin
              sociosqu a parturient nam ac blandit praesent aptent. Eros
              dignissim mus mauris a natoque ad suspendisse nulla a urna in
              tincidunt tristique enim arcu litora scelerisque eros suspendisse.
            </p>
          </div>
          <footer>
            <a href="generic.html" class="button alt">Learn More</a>
          </footer>
        </article>
      </div>
    </section>

    <!-- Footer -->
    <footer id="footer">
      <div class="inner">
        <h2>Contact Me</h2>

        <form action="#" method="post">
          <div class="field half first">
            <label for="name">Name</label>
            <input name="name" id="name" type="text" placeholder="Name" />
          </div>
          <div class="field half">
            <label for="email">Email</label>
            <input name="email" id="email" type="email" placeholder="Email" />
          </div>
          <div class="field">
            <label for="message">Message</label>
            <textarea
              name="message"
              id="message"
              rows="6"
              placeholder="Message"
            ></textarea>
          </div>
          <ul class="actions">
            <li>
              <input value="Send Message" class="button alt" type="submit" />
            </li>
          </ul>
        </form>

        <ul class="icons">
          <li>
            <a
              href="http://www.Twitter.com"
              target="_blank"
              class="icon round fa-twitter"
              ><span class="label">Twitter</span></a
            >
          </li>
          <li>
            <a
              href="http://wwww.facebook.com"
              target="_blank"
              class="icon round fa-facebook"
              ><span class="label">Facebook</span></a
            >
          </li>
          <li>
            <a
              href="http://www.Instagram.com"
              target="_blank"
              class="icon round fa-instagram"
              ><span class="label">Instagram</span></a
            >
          </li>
        </ul>

        <div class="copyright">
          &copy; OceanStar company 2019 . Design: Hayat & Ghadir Technologies .
        </div>
      </div>
    </footer>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/skel.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>
   
  </body>
</html>
