
  <!--==========================
    Footer
  ============================-->
  <section class="container px-4">
    <div class="row m-0">
      <div class="col-md">
        <h2 class="pt-4 m-0 text-center"><i class="far fa-arrow-alt-circle-right"></i> Need a Quote? <span class="text-orange">Click Here</span></h2>
      </div>
    </div>  
  </section>
  <hr>
  <section class="container px-4">
    <div class="row m-0">
      <div class="col-md-3">
        <h4 class="font-weight-bold">Forefront</h4>
        <ul class="list-unstyled m-0" style="font-size: 14px; line-height: 32px">
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> Vision</a></li>
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> UKAS Accreditation</a></li>
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> Certification Schemes</a></li>
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> Logo Downloads</a></li>
        </ul>
        <hr>
        <a href="#" class="btn btn-flat btn-outline-dark rounded-0"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="btn btn-flat btn-outline-dark rounded-0"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="btn btn-flat btn-outline-dark rounded-0"><i class="fab fa-twitter"></i></a>
        <a href="#" class="btn btn-flat btn-outline-dark rounded-0"><i class="fab fa-linkedin-in"></i></a>
        <hr>
        <h5 class="font-weight-bold">Company Number</h5>
        <h4 class="font-weight-bold text-orange">9014372</h4>
      </div>
      <div class="col-md-3">
        <h4 class="font-weight-bold">ISO Certification</h4>
        <ul class="list-unstyled m-0" style="font-size: 14px; line-height: 32px">
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> ISO 9001:2015</a></li>
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> ISO 14001:2015</a></li>
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> ISO 45001</a></li>
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> ISO 27001</a></li>
        </ul>
        <img src="<?php echo base_url(); ?>assets/img/download_20170727_170602-1.jpg" width="100">
      </div>
      <div class="col-md-3">
        <h4 class="font-weight-bold">Training</h4>
        <ul class="list-unstyled" style="font-size: 14px; line-height: 32px">
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> ISO 9001:2015 Internal Auditor</a></li>
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> ISO 9001:2015 Transition</a></li>
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> ISO 9001:2015 Foundation</a></li>
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> ISO 14001 Internal Auditor</a></li>
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> Root Cause Analysis &#038; 8D</a></li>
          <li><a href="#" class="text-orange"><i class="fab fa-creative-commons-nd text-dark"></i> ISO 9001:2015 Lead Auditor<div style="margin-left: 15px; margin-top: -10px;">(IRCA Certified)</div></a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <h4 class="font-weight-bold">Locations</h4>
        <p>Kensington, London, Coventry, West Midlands, Birmingham, Bristol, Avon, Leeds, West Yorkshire; Aberdeen, Scotland, Glasgow, Scotland, Manchester, Southampton, Hampshire, Reading, Berkshire, Greenwich, London, Exeter, Devon, Chatham, Kent, Northamptonshire</p>
      </div>
    </div>
  </section>
  <footer id="footer_copy" class="footer_copy">
    <div class="container my-4 py-3">
      <div class="row m-0 justify-content-between">
        <div class="col-auto">
          <div class="float-left">
            &copy; 2020 ForeFront Certification. All Rights Reserved.<br>
            <a href="#">Designed By Webkraft Solutions</a>
          </div>
        </div>

        <div class="col-auto">
          <div class="row">
            <div class="col-auto">
              <a href="#">Terms and Conditions</a>
            </div>
            <div class="col-auto">
              <a href="#">Rules and Regulations</a>
            </div>
            <div class="col-auto">
              <a href="#">Impartiality</a>
            </div>
            <div class="col-auto">
              <a href="#">Privacy Policies</a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <script type="text/javascript">
    $(document).ready(function (){
        // Stick the header at top on scroll
      $("#header").sticky({
        topSpacing: 0,
        zIndex: '50'
      });

      // Initiate superfish on nav menu
      $('.nav-menu').superfish({
        animation: {
          opacity: 'show'
        },
        speed: 400
      });

      // Mobile Navigation
      if ($('#nav-menu-container').length) {
        var $mobile_nav = $('#nav-menu-container').clone().prop({
          id: 'mobile-nav'
        });
        $mobile_nav.find('> ul').attr({
          'class': '',
          'id': ''
        });
        $('body').append($mobile_nav);
        $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
        $('body').append('<div id="mobile-body-overly"></div>');
        $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');
        $('#mobile-nav').find('i.fa-caret-down').hide();

        $(document).on('click', '.menu-has-children i', function (e) {
          $(this).next().toggleClass('menu-item-active');
          $(this).nextAll('ul').eq(0).slideToggle();
          $(this).toggleClass("fa-chevron-up fa-chevron-down");
        });

        $(document).on('click', '#mobile-nav-toggle', function (e) {
          $('body').toggleClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').toggle();
        });

        $(document).click(function (e) {
          var container = $("#mobile-nav, #mobile-nav-toggle");
          if (!container.is(e.target) && container.has(e.target).length === 0) {
            if ($('body').hasClass('mobile-nav-active')) {
              $('body').removeClass('mobile-nav-active');
              $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
              $('#mobile-body-overly').fadeOut();
            }
          }
        });
      } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
        $("#mobile-nav, #mobile-nav-toggle").hide();
      }
  
    });
  </script>
</body>
</html>