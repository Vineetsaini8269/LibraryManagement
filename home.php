
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library Management System</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {

      background-color:lightblue;
      opacity: 100%;
      
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 50px 0;
    }

    h1 {
      font-size: 36px;
    }

    h2 {
      font-size: 24px;
      font-style: italic;
    }


    nav {
      background-color: #444;
      text-align: center;
    }

    nav ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    nav li {
      display: inline-block;
      padding: 20px;
    }

    nav a {
      color: #fff;
      text-decoration: none;
    }

    main {
      padding: 30px;
    }

    .testimonial-section {
      text-align: center;
      margin-bottom: 30px;
    }

    .testimonial {
      background-color: #f0f0f0;
      padding: 20px;
      border-radius: 5px;
      margin: 10px;
    }

    .social-proof {
      text-align: center;
      margin-bottom: 30px;
    }

    .partner-logos {
      display: flex;
      justify-content: center;
    }

    .partner-logos1 {
      display: flex;
      justify-content: space-between;
    }

    .partner-logos img {
      width: 100px;
      margin: 10px;
    }

    .partner-logos1 img {
      width: 100px;
      margin: 10px;
    }
    .latest-updates {
      text-align: center;
    }

    .blog-post {
      background-color: #f0f0f0;
      padding: 20px;
      border-radius: 5px;
      margin: 10px;
    }

    .read-more {
      color: #ff6600;
      text-decoration: none;
    }

    footer {
      background-color: #444;
      color: #fff;
      text-align: center;
      padding: 20px 0;
    }

    .footer-content {
      display: flex;
      justify-content: space-around;
    }

    .contact-info,
    .social-media,
    .useful-resources {
      margin: 10px;
    }

    .dropbtn {
      background-color: blue;
      color: white;
      padding: 8px 15px;
      font-size: 16px;
      border: none;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <header>
  <div class="partner-logos1">
       
        <img src="https://github.githubassets.com/images/modules/profile/achievements/pull-shark-default.png" alt="kmlesh 1">
      
    <h2>Library Management System<br>Empowering Knowledge, Connecting Minds</h2>
    <h4></h4>
   
</div>
  </header>

  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a> </li>
      <li> <a href="./Student/loginS.php">
          <h2 class="dropbtn">Student login</h2>
        </a></li>
      <li> <a href="./Admin/loginA.php">
          <h2 class="dropbtn">Admin login</h2>
        </a></li>


    </ul>
  </nav>

  <main>
    <!-- Your main content goes here -->
    <section class="testimonial-section">
      <h3>What Our Users Say</h3>
      <div class="testimonial">
        <p>"This library has been a game-changer for me. I can easily find and borrow books for my studies. Highly recommended!"</p>
        <p><em>- John Doe, Student</em></p>
      </div>
      <div class="testimonial">
        <p>"The library management system has streamlined our processes and made book management a breeze. Great job!"</p>
        <p><em>- Jane Smith, Librarian</em></p>
      </div>
    </section>

    <section class="social-proof">
      <h3>Trusted by</h3>
      <div class="partner-logos">
        <!-- Add partner logos here -->
        <img src="https://github.githubassets.com/images/modules/profile/achievements/pull-shark-default.png" alt="Partner 1">
        <img src="https://github.githubassets.com/images/modules/profile/achievements/quickdraw-default--light.png" alt="Partner 2">
        <img src="https://avatars.githubusercontent.com/u/111336085?s=400&u=785f872d58fa0eade6a5447c521aea15b81368fc&v=4" alt="Partner 3">
      </div>
    </section>

    <section class="latest-updates">
      <h3>Latest Updates</h3>
      <div class="blog-post">
        <h4>How to Make the Most of Your Library Membership</h4>
        <p> kmlesh</p>
        <a href="#" class="read-more">Read More</a>
      </div>
      <div class="blog-post">
        <h4>Top 10 Must-Read Books for this Summer</h4>
        <p>kmlesh</p>
        <a href="#" class="read-more">Read More</a>
      </div>

    </section>
  </main>

  <footer>
    <div class="footer-content">
      <div class="contact-info">
        <h4>Contact Us</h4>
        <p>Email:kamleshlodhi9302@gmail.com</p>
        <p>Phone: +1 123-456-7890</p>
      </div>
      <div class="social-media">
        <h4>Follow Us</h4>
        <!-- Add social media links here -->
        <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
        <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
        <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
      </div>
      <div class="useful-resources">
        <h4>Useful Resources</h4>
        <!-- Add useful resource links here -->
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
      </div>
    </div>
  </footer>

  <script>

  </script>
</body>

</html>