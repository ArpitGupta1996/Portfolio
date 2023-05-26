@include('layouts.header')

  <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      @include('layouts.sidebar')
      
      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h2>About Me</h2>
            <div class="line-dec"></div>
            <span
              >I am a positive, enthusiastic and competent Web Developer who, over the years, has built up a diverse range of skills, qualities and attributes that guarantee I will perform highly in this role. I have extensive experience working both alone and as part of a team on often time-sensitive, challenging web development projects that require outstanding creative and technical capabilities and the ability to ensure all work is optimized across a wide range of platforms. </span
            >
          </div>
          <div class="left-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-image">
                  <img src="assets/images/left-image.jpg" alt="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-text">
                  <h4>Reflux HTML CSS Template</h4>
                  <p>
                    Donec tristique feugiat lacus, at sollicitudin nunc euismod
                    sed. Mauris viverra, erat non sagittis gravida, elit dui
                    mollis ante, sit amet eleifend purus ligula eget eros. Sed
                    tincidunt quam vitae neque pharetra dignissim eget ut
                    libero.
                  </p>
                  <div class="white-button">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="right-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-text">
                  <h4>Sed sagittis rhoncus velit</h4>
                  <p>
                    Pellentesque habitant morbi tristique senectus et netus et
                    malesuada fames ac turpis egestas. Vestibulum fermentum
                    eleifend nibh, vitae sodales elit finibus pretium.
                    Suspendisse potenti. Ut sollicitudin risus a sollicitudin
                    semper.
                  </p>
                  <div class="white-button">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-image">
                  <img src="assets/images/right-image.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      @include('layouts.third_slide')

      @include('mywork')

      @include('contact')
    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
  </body>
</html>
