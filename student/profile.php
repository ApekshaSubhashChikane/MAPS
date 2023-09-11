<!DOCTYPE html>

<html>

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="author" content="">


      <!-- Bootstrap Core CSS -->
      <link href="../css/bootstrap.min.css" rel="stylesheet">
      <link href="../css/tempuserhome.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="../css/main.css" rel="stylesheet">

      <title>Home</title>
  </head>

  <body class = "index">
    <div id = "page-wrapper">

      <!-- Header -->
        <header id = "header" class = "alt" style="background-color:#f3f6fa;color:black;height:4%">
          <h1 id = "logo"><a href = "javascript:history.back()" class="button special">Back</a></h1>
          <nav id = "nav">
            <ul>
              <li class = "current"><a href = "#">Home</a></li>
              <li><a href = "#">User Profile</a></li>
              <li><a href = "#">Apply</a></li>
              <li><a href = "#">View Scholarship Status</a></li>
              <li><a href = "#" class = "button special">Logout</a></li>
            </ul>
          </nav>
        </header>

        <!-- Banner -->
        <section id="test">
        <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="bg1.jpg">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="bg2.jpg">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="bg3.jpg">
          <div class="text"></div>
        </div>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>

        <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
        </section>



        <!-- About (To be shifted on about page) -->
        <article id = "main">
          <header class = "special container">
            <span class = "icon fa-bar-chart-o"></span>
            <h2>Graph based info</h2>
            <img src="graph.png">

          </header>

          <section class="wrapper style2 container special-alt">
            <div class="row 50%">
              <div class="8u 12u(narrower)">

                <header>
                  <h2>INDIA'S LARGEST SCHOLARSHIP PLATFORM</h2>
                </header>
                <p><br><br><h2>INDIA'S LARGEST SCHOLARSHIP PLATFORM</h2></p>
                <p><a href="https://scholarships.gov.in/">Government Scholarships </a><br><br><br></p>
                <footer>
                  <ul class="buttons">
                    <li><a href="tempUserApply.php" class="button">Find Out More</a></li>
                  </ul>
                </footer>

              </div>
            </div>
          </section>

          <section class="wrapper style3 container special">

            <header class="major">
              <h2><strong>Find the best-fit scholarship</strong></h2>
              <h4>Choosing the right scholarship is a daunting task. Pick relevant scholarships and stand a chance to win.</h4>
            </header>

            <div class="row">
              <div class="6u 12u(narrower)">

                <section>
                  <a href="#" class="image featured"><img src="merit-based-scholarship.jpg" alt="" /></a>
                  <header>
                    <h3>Scholarships for merit students</h3>
                  </header>
                  <p>Aspirants whose score is high in the academic, artistic, atheletic and in other activities will be provided with scholarship wither by the private organization or by student intended institutes. Purely , this king is based on thee mmerit score of the aspirants</p>
                </section>

              </div>

              <div class="6u 12u(narrower)">

                <section>
                  <a href="#" class="image featured"><img src="PHYSICALLY-CHALLENGED-SCHOLARSHIPS.jpg" alt="" /></a>
                  <header>
                    <h3>Need based scholarships</h3>
                  </header>
                  <p>Aspirant who has financial economic problem to continue studies are given need based scholarship. Basically this scholarship is for aspirants who are ecnomically backward. The aspirants need to apply for this scholarship by filling the <b title="Free Application For Federal Students Aid">FAFSA</b></p>
                </section>

              </div>
            </div>

            <div class="row">
              <div class="6u 12u(narrower)">

                <section>
                  <a href="#" class="image featured"><img src="MINORITIES-SCHOLARSHIPS.jpg" alt="" /></a>
                  <header>
                    <h3>Student specific scholarship</h3>
                  </header>
                  <p>The specific scholarships are provided to specify category of the students with respected to race, sex, religion, family, medical history and many other factors. The most common category in this category is Minority scholarship.</p>
                </section>

              </div>

              <div class="6u 12u(narrower)">

                <section>
                  <a href="#" class="image featured"><img src="STUDY-BASED-SCHOLARSHIPS.jpg" alt="" /></a>
                  <header>
                    <h3>Career specific Scholarship</h3>
                  </header>
                  <p>The career specific scholarships mainly focuses on aspirants who wants to go for a specific field of study. Career specific scholarship will be provided by the college/university.</p>
                </section>

              </div>
            </div>

            <footer class="major">
              <ul class="buttons">
                <li><a href="#" class="button">Suggested Scholarships</a></li>
              </ul>
            </footer>

          </section>



          <section class="wrapper style5 container special">
            <header>
              <h2><strong>Most popular Cities</Strong></h2>
            <header>

            <div class="row1">
              <div class="column1">
                <a href="#">
                  <img src="ahm.jpg" alt="Ahmedabad" style="width:100%" >
                  <span style="display:block;">Scholarship in </span><b>Ahmedabad</b>
                </a>
              </div>
              <div class="column1">
                <a href="#">
                  <img src="mumbai.jpg" alt="Mumbai" style="width:100%">
                  <span style="display:block;">Scholarship in </span><b>Mumbai</b>
                </a>
              </div>
              <div class="column1">
               <a href="#">
                 <img src="chennai.jpg" alt="Chennai" style="width:100%">
                 <span style="display:block;">Scholarship in </span><b>Chennai</b>
               </a>
             </div>
            </div>
        </section>


          <section class="wrapper style1 container special">
              <div class="row">

                <div class="4u 12u(narrower)">
                  <section>
                    <header>
                      <h3>STATE WISE SCHOLARSHIPS</h3>
                    </header>
                    <footer style="padding-left: 50px; text-align: left;">
                      <ul>
                        <li><a href="#">Top Scholarships of Gujarat</a></li>
                        <li><a href="#">Top Scholarships of Maharashtra</a></li>
                        <li><a href="#">Top Scholarships of Uttar Pradesh</a></li>
                        <li><a href="#">Top Scholarships of Punjab</a></li>
                        <li><a href="#">Top Scholarships of Chennai</a></li>
                        <li><a href="#">Top Scholarships of Delhi</a></li>
                        <li><a href="#">Top Scholarships of Madhya Pradesh</a></li>
                        <li><a href="#">Top Scholarships of Andhra Pradesh</a></li>
                      </ul>
                    </footer>
                  </section>
                </div>

                </body>
</html>
