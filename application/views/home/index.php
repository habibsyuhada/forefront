<style type="text/css">
  .owl-dots {
    margin-top: 5px;
    text-align: center;
    z-index: -100000;
  }

  .owl-dot {
    display: inline-block;
    margin: 0 5px;
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #ddd !important;
  }

  .owl-dot.active {
    background-color: #50d8af !important;
  }
</style>
<!--==========================
  Intro Section
============================-->
<section class="container bg-success">
  <div class="owl-carousel owl-theme">
    <div class="item" style="height: 30vw; max-height: 393px">
      <img src="<?php echo base_url(); ?>assets/img/slide_banner/bb-3.jpg" width="100%">
    </div>
    <div class="item" style="height: 30vw; max-height: 393px">
      <img src="<?php echo base_url(); ?>assets/img/slide_banner/bb-3.jpg" width="100%">
    </div>
  </div>
</section>
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:true,
    dots:true,
    items: 1,
  });
</script>