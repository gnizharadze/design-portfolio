<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=IBM+Plex+Mono:wght@400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@400;600&family=Ubuntu&display=swap"
      rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=IBM+Plex+Mono:wght@400;700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:wght@400;600&family=Raleway:ital@0;1&family=Ubuntu&display=swap"
      rel="stylesheet"/>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <section class="header">
      <header class="header-section">
        <div class="header-content">
          <nav class="navmenu">
            <a href="#">Home</a>
            <a href="#">Case Studies </a>
            <a href="#">Testimonials</a>
            <a href="#">Recent work</a>
            <a href="#">Get In Touch</a>
          </nav>
          <div class="social">
            <img src="./Images/LinkedIn.png" alt="LinkedIn" />
            <img src="./Images/Behance.png" alt="Behance" />
            <img src="./Images/Twitter.png" alt="Twitter" />
          </div>
        </div>
        <div class="hamburger-menu">
          <input type="checkbox" id="menu" />
          <label for="menu">
            <div class="hamburger-menu-icon">&#9776;</div>
          </label>
          <div class="sidebar-nav">
            <nav class="sidebar-nav-menu">
              <a href="#">Home</a>
              <a href="#">Case Studies </a>
              <a href="#">Testimonials</a>
              <a href="#">Recent work</a>
              <a href="#">Get In Touch</a>
            </nav>
            <div class="sidebar-nav-social">
              <img src="./Images/LinkedIn.png" alt="LinkedIn" />
              <img src="./Images/Behance.png" alt="Behance" />
              <img src="./Images/Twitter.png" alt="Twitter" />
            </div>
          </div>
        </div>
      </header>
    </section>

    <section class="name-image">
      <div class="name">
        <h1 class="your-name">Giorgi Nizharadze</h1>
        <p class="intro">
          Intro text: Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
        <button class="get-started">
          <a href="#">Let's get started ></a>
        </button>
      </div>
      <div class="portrait">
        <img src="./Images/portrait.jpeg" alt="image" />
      </div>
    </section>

    <section class="work-with">
      <div class="bottom">
        <p class="work">Worked with</p>
        <div class="clients">
          <img src="./Images/Logo 1.png" alt="" />
          <img src="./Images/Logo 2.png" alt="" />
          <img src="./Images/Logo 3.png" alt="" />
          <img src="./Images/Logo 4.png" alt="" />
          <img src="./Images/Logo 5.png" alt="" />
        </div>
      </div>
    </section>
  </body>
</html>
