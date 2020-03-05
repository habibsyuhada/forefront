<!--==========================
  Intro Section
============================-->
<style type="text/css">
  .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
    background: none;
    color: #f25900;
    border-bottom: 4px solid #f25900;
    border-radius: 0px;
  }

  .nav-link{
    color: #000;
    font-weight: bold;
  }

  .nav-link:hover{
    color: #f25900;
  }

  .nav-link.disabled:hover{
    color: #6c757d;
    cursor: not-allowed !important;
  }

  /* The container */
  .container-checkbox {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 1rem;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  /* Hide the browser's default checkbox */
  .container-checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
  }

  /* Create a custom checkbox */
  .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
  }

  /* On mouse-over, add a grey background color */
  .container-checkbox:hover input ~ .checkmark {
    background-color: #ccc;
  }

  /* When the checkbox is checked, add a blue background */
  .container-checkbox input:checked ~ .checkmark {
    background-color: #f25900;
  }

  /* Create the checkmark/indicator (hidden when not checked) */
  .checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }

  /* Show the checkmark when checked */
  .container-checkbox input:checked ~ .checkmark:after {
    display: block;
  }

  /* Style the checkmark/indicator */
  .container-checkbox .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }
</style>

<div class="clearfix"></div>
<?php $this->load->view('_partial/navigation');?> 
<section id="section_focus" class="container px-4 mt-4 pt-4">
  <div class="row">
    <!-- <div class="col-md-3">
      <?php //$this->load->view('_partial/sidebar');?> 
    </div> -->

    <!-- Content -->
    <!-- <div class="col-md-12 pl-4 ml-4">
      <p class="mb-3">At Forefront, we believe that certification should be a value-added service. We are not merely offering a compliance audit, and we dedicate our expertise towards your business, so you feel that achieving certification means something and not just a badge on the wall.</p>
      <p class="mb-3">We will get back to you with the best quote as soon as possible. <strong>Please complete the form below to help us prepare the best quotation for you. </strong></p>
      <p class="mb-3">Please provide as much information as possible. Fields marked with an asterisk are mandatory.</p>

      <p class="mb-3">&nbsp;</p>

      <?php if($this->session->flashdata('success') == TRUE): ?>
      <div class="alert alert-success" role="alert">
        <b><?php echo $this->session->flashdata('success'); ?></b>
      </div>
      <?php endif; ?>
      
      <form action="<?php echo base_url() ?>home/free_quotation_new_process" method="POST">
        <div style="background-color:#f2f2f2; padding:20px">
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="first_name"  placeholder="First Name">
            </div>
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="last_name"   placeholder="Last Name">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <textarea rows="4" class="form-control border-orange border-2px" name="company"   placeholder="Company Name & Address" rows="4"></textarea>
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="postcode"   placeholder="Postcode">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="job_title"   placeholder="Job Title">
            </div>
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="email"   placeholder="E-mail">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="phone"   placeholder="Phone">
            </div>
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="website"   placeholder="Website">
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col">
              <input type="text" class="form-control border-orange border-2px" name="employee"   placeholder="How many employees do your organisation have?">
            </div>
          </div>

          Please tick below.<br>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="ISO 9001(QMS)" name="products[]">
            <label class="form-check-label" for="inlineCheckbox1">ISO 9001(QMS)</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="ISO 14001(EMS)" name="products[]">
            <label class="form-check-label" for="inlineCheckbox2">ISO 14001(EMS)</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="ISO 45001(OHSMS)" name="products[]">
            <label class="form-check-label" for="inlineCheckbox3">ISO 45001(OHSMS)</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="ISO 27001(ISMS)" name="products[]">
            <label class="form-check-label" for="inlineCheckbox4">ISO 27001(ISMS)</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Training" name="products[]">
            <label class="form-check-label" for="inlineCheckbox5">Training</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Other" name="products[]">
            <label class="form-check-label" for="inlineCheckbox6">Other</label>
          </div>

          <p class="mb-3">&nbsp;</p> 

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck" >
              <label class="form-check-label" for="gridCheck">
                At Forefront, We'd like to keep in touch by providing information that is relevant to you. We always keep your details safe and secure. You may unsubscribe from these communications at any time. Please verify our <a href="#" class="text-orange">Privacy Policy</a> for additional information.
              </label>
            </div>
          </div>
          <div class="form-row mb-3">
            <div class="col text-right">
              <button class="border-2px font-weight-bold btn btn-outline-dark text-center" type="submit">Submit</button>
            </div>
          </div>
        </div>
      </form>
    </div> -->
    <?php if($this->session->flashdata('success') == TRUE): ?>
    <div class="alert alert-success w-100" role="alert">
      <b class=" text-dark"><i class="fa fa-check"></i> <?php echo $this->session->flashdata('success'); ?></b>
    </div>
    <?php endif; ?>
    <div class="col-md-12 mt-4 py-2 border border-dark border-2px">
      <form action="<?php echo base_url() ?>home/free_quotation_new_process" method="POST">
        <ul class="nav nav-pills" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-item nav-link active" id="nav-information-tab" data-toggle="pill" href="#nav-information" role="tab" aria-controls="nav-information" aria-selected="true"><i class="fas fa-info-circle"></i>&nbsp; 1.Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link disabled" id="nav-company-tab" data-toggle="pill" href="#nav-company" role="tab" aria-controls="nav-company" aria-selected="false"><i class="fas fa-briefcase"></i>&nbsp; 2.Consultancy Detail</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link disabled" id="nav-profile-tab" data-toggle="pill" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fas fa-user"></i>&nbsp; 3.Contact Detail</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link disabled" id="nav-certification-tab" data-toggle="pill" href="#nav-certification" role="tab" aria-controls="nav-certification" aria-selected="false"><i class="fas fa-user"></i>&nbsp; 4.Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link disabled" id="nav-final-tab" data-toggle="pill" href="#nav-final" role="tab" aria-controls="nav-final" aria-selected="false"><i class="fa fa-check"></i>&nbsp; 4.Finalize</a>
          </li>
        </ul>
        <div class="tab-content mt-4" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab">
            <p class="mb-3 font-weight-bold">Join Our ACR (Associate Consultant Network) today</p>
            <p class="mb-3">To ensure that we deliver impartial certification services by accreditation standards, ForeFront Certification does not provide consultancy.</p>
            <p class="mb-3">So, whether you work for yourself or are part of a larger consultancy firm, we would love to hear from you.</p>
            <p class="mb-3">Download our <a href="https://www.forefrontcertification.co.uk/wp-content/uploads/2019/05/FF140-Consultancy-Form-v1-Mar-19.pdf" class="text-orange">ACR Application</a> form to apply today.</p>
            <p class="mb-4"></p>
            <p class="mb-4"></p>            
            <p class="mb-3">For more information please call contact below</p>
            <div class="row">
              <div class="col">
                <a class="mb-2 py-2 px-1 text-center text-white bg-dark border-2px border border-dark hover-effect-1 d-block">
                  <i class="fas fa-phone"></i> +622129349417
                </a>
              </div>
              <div class="col">
                <a class="mb-2 py-2 px-1 text-center text-white bg-dark border-2px border border-dark hover-effect-1 d-block">
                  <i class="far fa-envelope"></i> info@forefrontcertification.co.id
                </a>
              </div>
            </div>
            <br>
            <br>
            <button id="next_btn" type="button" onclick="next(1)" class="btn btn-orange rounded-0 float-right">Next <i class="fas fa-angle-double-right"></i></button>
          </div>
          <div class="tab-pane fade" id="nav-company" role="tabpanel" aria-labelledby="nav-company-tab">
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Business Name
                <input type="text" class="mt-2 form-control border-2px" name="business_name"   placeholder="Name">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Business Address
                <input type="text" class="mt-2 form-control border-2px" name="business_address"   placeholder="Address">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Postcode
                <input type="text" class="mt-2 form-control border-2px" name="business_postcode"   placeholder="Postcode">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Telphone
                <input type="text" class="mt-2 form-control border-2px" name="business_telphone"   placeholder="Telphone">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Email
                <input type="text" class="mt-2 form-control border-2px" name="business_email"   placeholder="Email">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Website
                <input type="text" class="mt-2 form-control border-2px" name="business_website"   placeholder="Website">
              </div>
            </div>
            <br>
            <br>
            <button id="next_btn" type="button" onclick="next(2)" class="btn btn-orange rounded-0 float-right">Next <i class="fas fa-angle-double-right"></i></button>
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Your Name
                <input type="text" class="mt-2 form-control border-2px" name="name"   placeholder="Name">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Your Job Title
                <input type="text" class="mt-2 form-control border-2px" name="job_title"   placeholder="Job Title">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Your Email
                <input type="text" class="mt-2 form-control border-2px" name="email"   placeholder="Email">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Your Telphone
                <input type="text" class="mt-2 form-control border-2px" name="telphone"   placeholder="Phone Number">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Your Qualification
                <input type="text" class="mt-2 form-control border-2px" name="qualification"   placeholder="Qualification">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Expertise and industry knowledge
                <!-- <input type="text" class="mt-2 form-control border-2px" name="qualification"   placeholder="Expertise and industry knowledge"> -->
                <textarea rows="4" class="mt-2 form-control border-2px" name="expertise"   placeholder="Expertise and industry knowledge"></textarea>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Applicable area (e.g. West Midlands, UK, Worldwide)
                <!-- <input type="text" class="mt-2 form-control border-2px" name="qualification"   placeholder="Applicable area (e.g. West Midlands, UK, Worldwide)"> -->
                <textarea rows="4" class="mt-2 form-control border-2px" name="applicable_area"   placeholder="Applicable area (e.g. West Midlands, UK, Worldwide)"></textarea>
              </div>
            </div>
            <br>
            <br>
            <button id="next_btn" type="button" onclick="next(3)" class="btn btn-orange rounded-0 float-right">Next <i class="fas fa-angle-double-right"></i></button>
          </div>
          <div class="tab-pane fade" id="nav-certification" role="tabpanel" aria-labelledby="nav-certification-tab">
            <div class="form-row justify-content-center mb-1">
              <div class="col-md">
                <p class="font-weight-bold text-center">Please tick below.</p>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                <label class="container-checkbox">ISO 9001(QMS)
                  <input type="checkbox" name="products[]" value="ISO 9001(QMS)">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-md">
                <label class="container-checkbox">ISO 14001(EMS)
                  <input type="checkbox" name="products[]" value="ISO 14001(EMS)">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-md">
                <label class="container-checkbox">ISO 45001(OHSMS)
                  <input type="checkbox" name="products[]" value="ISO 45001(OHSMS)">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                <label class="container-checkbox">ISO 27001(ISMS)
                  <input type="checkbox" name="products[]" value="ISO 27001(ISMS)">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-md">
                <label class="container-checkbox">Training
                  <input type="checkbox" name="products[]" value="Training">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-md">
                <label class="container-checkbox">Other
                  <input type="checkbox" name="products[]" value="Other">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
            <br>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Description
                <textarea rows="4" class="mt-2 form-control border-2px" name="description" rows="4"></textarea>
              </div>
            </div>
            <br>
            <br>
            <button id="next_btn" type="button" onclick="next(4)" class="btn btn-orange rounded-0 float-right">Next <i class="fas fa-angle-double-right"></i></button>
          </div>
          <div class="tab-pane fade" id="nav-final" role="tabpanel" aria-labelledby="nav-final-tab">
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                <strong>By using this form you agree with the storage and handling of your data by this website.</strong>
                <!-- <label class="container-checkbox"><strong>At Forefront, We'd like to keep in touch by providing information that is relevant to you. We always keep your details safe and secure. You may unsubscribe from these communications at any time. Please verify our <a href="#" class="text-orange">Privacy Policy</a> for additional information.</strong>
                  <input type="checkbox" >
                  <span class="checkmark"></span>
                </label> -->
              </div>
            </div>
            <br>
            <br>
            <button type="button" onclick="$(this).closest('form').submit();" class="btn btn-orange rounded-0 float-right"><i class="fa fa-check"></i> Submit</button>
            <!-- <a href="<?php //echo base_url() ?>home/free_quotation_new_process" class="btn btn-orange rounded-0 float-right"><i class="fa fa-check"></i> Submit</a> -->
          </div>
        </div>
      </form>
    </div>

  </div>
</section>
<script type="text/javascript">
  function next(number) {
    var res = 0;
    if(number == 1){
      change_fieldset();
    }
    else if(number == 2){
      $('#nav-company input').removeClass('is-invalid');
      $('#nav-company input').next().remove();
      if($('input[name=business_name]').val() == ""){
        $('#nav-company input[name=business_name]').addClass('is-invalid');
        $('#nav-company input[name=business_name]').after('<div class="invalid-feedback">Please provide this data.</div>');
        res++;
      }
      if($('input[name=business_address]').val() == ""){
        $('#nav-company input[name=business_address]').addClass('is-invalid');
        $('#nav-company input[name=business_address]').after('<div class="invalid-feedback">Please provide this data.</div>');
        res++;
      }
      if($('input[name=business_postcode]').val() == ""){
        $('#nav-company input[name=business_postcode]').addClass('is-invalid');
        $('#nav-company input[name=business_postcode]').after('<div class="invalid-feedback">Please provide this data.</div>');
        res++;
      }
      if($('input[name=business_telphone]').val() == ""){
        $('#nav-company input[name=business_telphone]').addClass('is-invalid');
        $('#nav-company input[name=business_telphone]').after('<div class="invalid-feedback">Please provide this data.</div>');
        res++;
      }
      if($('input[name=business_email]').val() == ""){
        $('#nav-company input[name=business_email]').addClass('is-invalid');
        $('#nav-company input[name=business_email]').after('<div class="invalid-feedback">Please provide this data.</div>');
        res++;
      }
      if($('input[name=business_website]').val() == ""){
        $('#nav-company input[name=business_website]').addClass('is-invalid');
        $('#nav-company input[name=business_website]').after('<div class="invalid-feedback">Please provide this data.</div>');
        res++;
      }
      if(res > 0){
      }
      else{
        change_fieldset();
      }
    }
    else if(number == 3){
      $('#nav-profile input').removeClass('is-invalid');
      $('#nav-profile input').next().remove();
      if($('input[name=name]').val() == ""){
        $('#nav-profile input[name=name]').addClass('is-invalid');
        $('#nav-profile input[name=name]').after('<div class="invalid-feedback">Please provide this data.</div>');
        res++;
      }
      if($('input[name=job_title]').val() == ""){
        $('#nav-profile input[name=job_title]').addClass('is-invalid');
        $('#nav-profile input[name=job_title]').after('<div class="invalid-feedback">Please provide this data.</div>');
        res++;
      }
      if($('input[name=email]').val() == ""){
        $('#nav-profile input[name=email]').addClass('is-invalid');
        $('#nav-profile input[name=email]').after('<div class="invalid-feedback">Please provide this data.</div>');
        res++;
      }
      if($('input[name=telphone]').val() == ""){
        $('#nav-profile input[name=telphone]').addClass('is-invalid');
        $('#nav-profile input[name=telphone]').after('<div class="invalid-feedback">Please provide this data.</div>');
        res++;
      }
      if($('input[name=qualification]').val() == ""){
        $('#nav-profile input[name=qualification]').addClass('is-invalid');
        $('#nav-profile input[name=qualification]').after('<div class="invalid-feedback">Please provide this data.</div>');
        res++;
      }
      if($('textarea[name=expertise]').val() == ""){
        $('#nav-profile textarea[name=expertise]').addClass('is-invalid');
        $('#nav-profile textarea[name=expertise]').after('<div class="invalid-feedback">Please provide this data.</div>');
        res++;
      }
      if($('textarea[name=applicable_area]').val() == ""){
        $('#nav-profile textarea[name=applicable_area]').addClass('is-invalid');
        $('#nav-profile textarea[name=applicable_area]').after('<div class="invalid-feedback">Please provide this data.</div>');
        res++;
      }
      if(res > 0){
      }
      else{
        change_fieldset();
      }
    }
    else if(number == 4){
      var check = $('#nav-certification input[type=checkbox]:checked').length;
      console.log(check);
      $('#nav-certification .invalid-feedback').remove();
      if(check == 0){
        $('#nav-certification textarea[name=description]').after('<div class="invalid-feedback text-center" style="display: block;"><br>Please tick one of many items.</div>');
      }
      else{
        change_fieldset();
      }
    }
  }

  function change_fieldset() {
    var before = $('a.nav-item.active');
    var next = $('a.nav-item.active').parent().next().find('a');

    $(next).removeClass('disabled');
    $(next).tab('show') // Select first tab
  }
</script>