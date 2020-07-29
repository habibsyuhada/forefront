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
    <a href="<?php echo base_url() ?>certification/iso-45001" class="list-group-item list-group-item-action">ISO 45001:2018</a>
    <a href="<?php echo base_url() ?>certification/iso-27001" class="list-group-item list-group-item-action">ISO 27001:2013</a>
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
  <a href="#" class="list-group-item list-group-item-action <?php echo (strpos($menu_active, 'training') !== false ? 'active' : '') ?>">
    Training
    <button class="btn-child border-0" data-toggle="collapse" data-target="#collapseTraining" aria-expanded="<?php echo ($menu_active == 'certification' ? 'true' : 'false') ?>" aria-controls="collapseTraining" onclick="return false;">
      <i class="fas fa-chevron-down"></i>
    </button>
  </a>
  <div class="list-group child collapse <?php echo (strpos($menu_active, 'training') !== false ? 'show' : '') ?>" id="collapseTraining">
    <a href="#" class="list-group-item list-group-item-action">ISO 9001 Quality Management
      <button class="btn-child border-0 text-dark" data-toggle="collapse" data-target="#collapseTrainingISO9001" aria-expanded="<?php echo ($menu_active == 'trainingISO9001' ? 'true' : 'false') ?>" aria-controls="collapseTrainingISO9001" onclick="return false;">
        <i class="fas fa-chevron-down"></i>
      </button>
    </a>
    <div class="list-group child collapse <?php echo ($menu_active == 'trainingISO9001' ? 'show' : '') ?>" id="collapseTrainingISO9001">
      <a href="<?php echo base_url() ?>training/1-day-iso-90012015-awareness" class="list-group-item list-group-item-action">1 Day ISO 9001:2015 Foundation Course</a>
      <a href="<?php echo base_url() ?>training/2-day-iso-90012015-internal-auditor" class="list-group-item list-group-item-action">2 Day ISO 9001:2015 Internal Auditor</a>
      <a href="<?php echo base_url() ?>training/5-day-iso-90012015-irca-auditorlead-auditor" class="list-group-item list-group-item-action">5 Day ISO 9001:2015 Lead Auditor</a>
    </div>
    <a href="#" class="list-group-item list-group-item-action">ISO 14001 Environmental Management
      <button class="btn-child border-0 text-dark" data-toggle="collapse" data-target="#collapseTrainingISO14001" aria-expanded="<?php echo ($menu_active == 'trainingISO14001' ? 'true' : 'false') ?>" aria-controls="collapseTrainingISO14001" onclick="return false;">
        <i class="fas fa-chevron-down"></i>
      </button>
    </a>
    <div class="list-group child collapse <?php echo ($menu_active == 'trainingISO14001' ? 'show' : '') ?>" id="collapseTrainingISO14001">
      <a href="<?php echo base_url() ?>training/1-day-iso-140012015-awareness" class="list-group-item list-group-item-action">1 Day ISO 14001:2015 Foundation Course</a>
      <a href="<?php echo base_url() ?>training/2-day-iso-140012015-internal-auditor" class="list-group-item list-group-item-action">2 Day ISO 14001:2015 Internal Auditor</a>
    </div>
    <a href="#" class="list-group-item list-group-item-action">ISO 27001 Information Security Management
      <button class="btn-child border-0 text-dark" data-toggle="collapse" data-target="#collapseTrainingISO27001" aria-expanded="<?php echo ($menu_active == 'trainingISO27001' ? 'true' : 'false') ?>" aria-controls="collapseTrainingISO27001" onclick="return false;">
        <i class="fas fa-chevron-down"></i>
      </button>
    </a>
    <div class="list-group child collapse <?php echo ($menu_active == 'trainingISO27001' ? 'show' : '') ?>" id="collapseTrainingISO27001">
      <a href="<?php echo base_url() ?>training/iso-27001-information-security-management/1-day-iso-270012015-awareness-course" class="list-group-item list-group-item-action">1 Day ISO 27001:2013 Foundation Course</a>
      <a href="<?php echo base_url() ?>training/iso-27001-information-security-management/2-day-iso-270012013-internal-auditor" class="list-group-item list-group-item-action">2 Day ISO 27001:2013 Internal Auditor</a>
    </div>
    <a href="#" class="list-group-item list-group-item-action">ISO 45001 Health & Safety
      <button class="btn-child border-0 text-dark" data-toggle="collapse" data-target="#collapseTrainingISO45001" aria-expanded="<?php echo ($menu_active == 'trainingISO45001' ? 'true' : 'false') ?>" aria-controls="collapseTrainingISO45001" onclick="return false;">
        <i class="fas fa-chevron-down"></i>
      </button>
    </a>
    <div class="list-group child collapse <?php echo ($menu_active == 'trainingISO45001' ? 'show' : '') ?>" id="collapseTrainingISO45001">
      <a href="<?php echo base_url() ?>training/iso-45001-health-safety/iso-45001-foundation-course" class="list-group-item list-group-item-action">1 Day ISO 45001 Foundation Course</a>
      <a href="<?php echo base_url() ?>training/iso-45001-health-safety/iso-45001-auditor-transition-course" class="list-group-item list-group-item-action">2 Day ISO 45001 Auditor Transition Course</a>
      <a href="<?php echo base_url() ?>training/iso-45001-health-safety/2-day-iso-45001-internal-auditor-course" class="list-group-item list-group-item-action">2 Day ISO 45001 Internal Auditor Course</a>
      <a href="<?php echo base_url() ?>training/iso-45001-health-safety/iso-45001-auditor-conversion-course" class="list-group-item list-group-item-action">3 Day ISO 45001 Auditor Conversion Course</a>
      <a href="<?php echo base_url() ?>training/iso-45001-health-safety/iso-45001-lead-auditor-course" class="list-group-item list-group-item-action">5 Day ISO 45001 lead Auditor Course</a>
    </div>
    <a href="#" class="list-group-item list-group-item-action">IATF 16949:2016 Automotive
      <button class="btn-child border-0 text-dark" data-toggle="collapse" data-target="#collapseTrainingIATF16949" aria-expanded="<?php echo ($menu_active == 'trainingIATF16949' ? 'true' : 'false') ?>" aria-controls="collapseTrainingIATF16949" onclick="return false;">
        <i class="fas fa-chevron-down"></i>
      </button>
    </a>
    <div class="list-group child collapse <?php echo ($menu_active == 'trainingIATF16949' ? 'show' : '') ?>" id="collapseTrainingIATF16949">
      <a href="<?php echo base_url() ?>training/iatf-16949-automotive/1-day-iatf-ts-16949-awareness" class="list-group-item list-group-item-action">1 Day IATF 16949:2016 Foundation Course</a>
      <a href="<?php echo base_url() ?>training/iatf-16949-automotive/iatf-16949-internal-auditor-course" class="list-group-item list-group-item-action">3 Day IATF 16949:2016 Internal auditor course</a>
      <a href="<?php echo base_url() ?>training/iatf-16949-automotive/2-day-iatf-16949-transition-course" class="list-group-item list-group-item-action">2 Day IATF 16949:2016 Transition course</a>
    </div>
    <a href="#" class="list-group-item list-group-item-action">Business Improvement
      <button class="btn-child border-0 text-dark" data-toggle="collapse" data-target="#collapseTrainingBusiness" aria-expanded="<?php echo ($menu_active == 'trainingBusiness' ? 'true' : 'false') ?>" aria-controls="collapseTrainingBusiness" onclick="return false;">
        <i class="fas fa-chevron-down"></i>
      </button>
    </a>
    <div class="list-group child collapse <?php echo ($menu_active == 'trainingBusiness' ? 'show' : '') ?>" id="collapseTrainingBusiness">
      <a href="<?php echo base_url() ?>training" class="list-group-item list-group-item-action">8D Problem Solving</a>
      <a href="<?php echo base_url() ?>training" class="list-group-item list-group-item-action">Advanced Product Quality Planning (APQP)</a>
      <a href="<?php echo base_url() ?>training" class="list-group-item list-group-item-action">Production Part Approval Process (PPAP)</a>
      <a href="<?php echo base_url() ?>training" class="list-group-item list-group-item-action">5S</a>
      <a href="<?php echo base_url() ?>training" class="list-group-item list-group-item-action">Process FMEA</a>
      <a href="<?php echo base_url() ?>training" class="list-group-item list-group-item-action">Measurement Systems Analysis (MSA)</a>
      <a href="<?php echo base_url() ?>training" class="list-group-item list-group-item-action">Use of Minitab Software</a>
    </div>
    <a href="#" class="list-group-item list-group-item-action">AS 9100 Aerospace Quality Management
      <button class="btn-child border-0 text-dark" data-toggle="collapse" data-target="#collapseTrainingAS9100" aria-expanded="<?php echo ($menu_active == 'trainingAS9100' ? 'true' : 'false') ?>" aria-controls="collapseTrainingAS9100" onclick="return false;">
        <i class="fas fa-chevron-down"></i>
      </button>
    </a>
    <div class="list-group child collapse <?php echo ($menu_active == 'trainingAS9100' ? 'show' : '') ?>" id="collapseTrainingAS9100">
      <a href="<?php echo base_url() ?>training" class="list-group-item list-group-item-action">1 Day AS 9100:2016 Foundation Course</a>
      <a href="<?php echo base_url() ?>training" class="list-group-item list-group-item-action">2 Day AS 9100:2016 Internal Auditor course</a>
    </div>
  </div>
  <!-- <a href="#" class="list-group-item list-group-item-action">Training</a> -->
  <a href="<?php //echo base_url() ?>online-training" class="list-group-item list-group-item-action <?php echo ($menu_active == 'online-training' ? 'active' : '') ?>">
    Online Training
    <button class="btn-child border-0" data-toggle="collapse" data-target="#collapseOnlineTraining" aria-expanded="<?php echo ($menu_active == 'online-training' ? 'true' : 'false') ?>" aria-controls="collapseOnlineTraining" onclick="return false;">
      <i class="fas fa-chevron-down"></i>
    </button>
  </a>
  <!-- <div class="list-group child collapse <?php //echo ($menu_active == 'online-training' ? 'show' : '') ?>" id="collapseOnlineTraining">
    <a href="https://www.forefrontcertification.co.uk/online-training/health-safety/" class="list-group-item list-group-item-action">Health & Safety</a>
    <a href="https://www.forefrontcertification.co.uk/online-training/business-skills/" class="list-group-item list-group-item-action">Business Skills</a>
  </div> -->
  <a href="<?php echo base_url() ?>free-quotation" class="list-group-item list-group-item-action">Free Quotation</a>
</div>
<p class="mb-3">&nbsp;</p>

<div style="border: 1px solid #ccc; padding: 5px; margin-bottom: 20px;">
  <div style="background-color: #fafafa; text-align: center; padding: 10px;">
    <h5 style="color: #3e4c57; margin: 0px; padding: 0px;">Need A Quote</h5>
    <div style="padding: 10px 20px; font-size: 12.5px; color: #fd7902; background-color: #fafafa; font-weight: 500;">
      <p>Fill out this short form and a team member will be in touch</p>
      <a href="<?php echo base_url() ?>free-quotation"><div style="background-color: #000; color: white; padding: 2px; margin: auto; margin-bottom: 10PX; font-weight: bold; letter-spacing: 2px; margin-top: 10px;">GET A QUICK QUOTE</div></a>
    </div>
  </div>
</div>

<div><a href="#"><img style="width: 100%; border: 1px solid #ccc; margin-bottom: 10PX;" src="<?php echo base_url() ?>assets/img/Why-Choose-Us-2-1.png" alt="Fore Front Certifications" border="0"></a></div>

<div><a href="<?php echo base_url() ?>certification"><img style="width: 100%; border: 1px solid #ccc;" src="<?php echo base_url() ?>assets/img/Why-Choose-Us-5-2.png" alt="Fore Front Certifications" border="0"></a></div>