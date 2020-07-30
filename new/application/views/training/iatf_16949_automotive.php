<!--==========================
  Intro Section
============================-->
<div class="clearfix"></div>
<?php $this->load->view('_partial/navigation');?> 
<section class="container px-4 mt-4 pt-4">
  <div class="row">
    <div class="col-md-3">
      <?php $this->load->view('_partial/sidebar');?> 
    </div>

    <!-- Content -->
    <div class="col-md pl-4 ml-4">
      <h4 class="font-weight-bold">Training courses for IATF 16949:2016 Automotive</h4>
      <p class="mb-3">
        <img src="<?php echo base_url(); ?>assets/img/isots2.jpg" class="float-right" width="400">
      </p>
      <p class="mb-3">
        The IATF 16949:2016 standard is a global technical specification and quality management standard for the automotive industry. It replaced TS 16949 in October 2016. The standard focuses on ‘customer specific requirements’ which are specific to automotive-related products. There is an emphasis on defect prevention, reducing variation and waste in processes.
      </p>
      <p class="mb-3">
        <strong>16949:2016 gives the requirements for the application of ISO 9001:2015 by suppliers in the automotive sector</strong>
      </p>
      <br>
      <br>
      <h4 class="font-weight-bold">Courses Offered</h4>
      <a href="<?php echo base_url() ?>training/iatf-16949-automotive/1-day-iatf-ts-16949-awareness" class="mb-2 py-1 px-1 bg-light border-2px border border-dark text-dark hover-effect-1 d-block">
        1 Day IATF 16949:2016 Foundation Course
      </a>
      <a href="<?php echo base_url() ?>training/iatf-16949-automotive/iatf-16949-internal-auditor-course" class="mb-2 py-1 px-1 bg-light border-2px border border-dark text-dark hover-effect-1 d-block">
        3 Day IATF 16949:2016 Internal auditor course
      </a>
      <a href="<?php echo base_url() ?>training/iatf-16949-automotive/2-day-iatf-16949-transition-course" class="mb-2 py-1 px-1 bg-light border-2px border border-dark text-dark hover-effect-1 d-block">
        2 Day IATF 16949:2016 Transition course
      </a>
    </div>
  </div>
</section>