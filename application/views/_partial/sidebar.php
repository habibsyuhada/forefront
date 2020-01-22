<div class="list-group">
  <a href="<?php echo base_url() ?>" class="list-group-item list-group-item-action <?php echo ($menu_active == 'home' ? 'active' : '') ?>">Home</a>
  <a href="<?php echo base_url() ?>about" class="list-group-item list-group-item-action <?php echo ($menu_active == 'about' ? 'active' : '') ?>">
    About
    <button class="btn-child border-0" data-toggle="collapse" data-target="#collapseAbout" aria-expanded="<?php echo ($menu_active == 'about' ? 'true' : 'false') ?>" aria-controls="collapseAbout" onclick="return false;">
      <i class="fas fa-chevron-down"></i>
    </button>
  </a>
  <div class="list-group child collapse <?php echo ($menu_active == 'about' ? 'show' : '') ?>" id="collapseAbout">
    <a href="<?php echo base_url() ?>about/why-us" class="list-group-item list-group-item-action">Why choose ForeFront Certification?</a>
    <a href="<?php echo base_url() ?>about/ukas-accreditation" class="list-group-item list-group-item-action">UKAS Accreditation</a>
  </div>
  <a href="<?php echo base_url() ?>certification" class="list-group-item list-group-item-action <?php echo ($menu_active == 'certification' ? 'active' : '') ?>">
    Certification
    <button class="btn-child border-0" data-toggle="collapse" data-target="#collapseCertification" aria-expanded="<?php echo ($menu_active == 'certification' ? 'true' : 'false') ?>" aria-controls="collapseCertification" onclick="return false;">
      <i class="fas fa-chevron-down"></i>
    </button>
  </a>
  <div class="list-group child collapse <?php echo ($menu_active == 'certification' ? 'show' : '') ?>" id="collapseCertification">
    <a href="<?php echo base_url() ?>certification/iso-90012015" class="list-group-item list-group-item-action">ISO 9001:2015</a>
    <a href="<?php echo base_url() ?>certification/iso-140012015" class="list-group-item list-group-item-action">ISO 14001:2015</a>
    <a href="<?php echo base_url() ?>certification/iso-45001" class="list-group-item list-group-item-action">ISO 45001</a>
    <a href="<?php echo base_url() ?>certification/iso-27001" class="list-group-item list-group-item-action">ISO 27001</a>
    <a href="<?php echo base_url() ?>certification/benefits-of-certification" class="list-group-item list-group-item-action">Benefits of Certification</a>
  </div>
  <a href="<?php echo base_url() ?>support" class="list-group-item list-group-item-action <?php echo ($menu_active == 'support' ? 'active' : '') ?>">
    Support
    <button class="btn-child border-0" data-toggle="collapse" data-target="#collapseSupport" aria-expanded="<?php echo ($menu_active == 'support' ? 'true' : 'false') ?>" aria-controls="collapseSupport" onclick="return false;">
      <i class="fas fa-chevron-down"></i>
    </button>
  </a>
  <div class="list-group child collapse <?php echo ($menu_active == 'support' ? 'show' : '') ?>" id="collapseSupport">
    <a href="<?php echo base_url() ?>support/certification-process" class="list-group-item list-group-item-action">Certification Process</a>
    <a href="<?php echo base_url() ?>support/transfer-your-certification" class="list-group-item list-group-item-action">Transfer your certification</a>
  </div>
  <a href="#" class="list-group-item list-group-item-action">Training</a>
  <!-- <a href="<?php echo base_url() ?>online-training" class="list-group-item list-group-item-action <?php echo ($menu_active == 'online-training' ? 'active' : '') ?>">
    Online Training
    <button class="btn-child border-0" data-toggle="collapse" data-target="#collapseOnlineTraining" aria-expanded="<?php echo ($menu_active == 'online-training' ? 'true' : 'false') ?>" aria-controls="collapseOnlineTraining" onclick="return false;">
      <i class="fas fa-chevron-down"></i>
    </button>
  </a> -->
  <div class="list-group child collapse <?php echo ($menu_active == 'online-training' ? 'show' : '') ?>" id="collapseOnlineTraining">
    <a href="https://www.forefrontcertification.co.uk/online-training/health-safety/" class="list-group-item list-group-item-action">Health & Safety</a>
    <a href="https://www.forefrontcertification.co.uk/online-training/business-skills/" class="list-group-item list-group-item-action">Business Skills</a>
  </div>
  <a href="<?php echo base_url() ?>free-quotation" class="list-group-item list-group-item-action">Free Quotation</a>
</div>
<p class="mb-3">&nbsp;</p>

<div style="border: 1px solid #ccc; padding: 5px; margin-bottom: 20px;">
  <div style="background-color: #fafafa; text-align: center; padding: 10px;">
    <h5 style="color: #3e4c57; margin: 0px; padding: 0px;">Need A Quote</h5>
    <div style="padding: 10px 20px; font-size: 12.5px; color: #fd7902; background-color: #fafafa; font-weight: 500;">
      <p>Fill out this short form and a team member will be in touch</p>
      <div style="background-color: #000; color: white; padding: 2px; margin: auto; margin-bottom: 10PX; font-weight: bold; letter-spacing: 2px; margin-top: 10px;">GET A QUICK QUOTE</div>
    </div>
  </div>
</div>

<div><a href="#"><img style="width: 100%; border: 1px solid #ccc; margin-bottom: 10PX;" src="<?php echo base_url() ?>assets/img/Why-Choose-Us-2-1.png" alt="Fore Front Certifications" border="0"></a></div>

<div><a href="#"><img style="width: 100%; border: 1px solid #ccc;" src="<?php echo base_url() ?>assets/img/Why-Choose-Us-5-2.png" alt="Fore Front Certifications" border="0"></a></div>