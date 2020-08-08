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

  input[type="radio"] {
    -webkit-appearance: checkbox;
    -moz-appearance: checkbox;
    -ms-appearance: checkbox;     /* not currently supported */
    -o-appearance: checkbox;      /* not currently supported */
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
              <textarea class="form-control border-orange border-2px" name="company"   placeholder="Company Name & Address" rows="4"></textarea>
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
              <input type="email" class="form-control border-orange border-2px" name="email"   placeholder="E-mail">
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
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="ISO 45001:2018(OHSMS)" name="products[]">
            <label class="form-check-label" for="inlineCheckbox3">ISO 45001:2018(OHSMS)</label>
          </div>
          <div class="form-check form-check-inline pl-3">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="ISO 27001:2013(ISMS)" name="products[]">
            <label class="form-check-label" for="inlineCheckbox4">ISO 27001:2013(ISMS)</label>
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
            <a class="nav-item nav-link disabled" id="nav-standard-tab" data-toggle="pill" href="#nav-standard" role="tab" aria-controls="nav-standard" aria-selected="false"><i class="fas fa-shapes"></i>&nbsp; 2.Standard(s) Requirement</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link disabled" id="nav-company-tab" data-toggle="pill" href="#nav-company" role="tab" aria-controls="nav-company" aria-selected="false"><i class="fas fa-briefcase"></i>&nbsp; 3.Organization Activities</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link disabled" id="nav-activities-tab" data-toggle="pill" href="#nav-activities" role="tab" aria-controls="nav-activities" aria-selected="false"><i class="fas fa-certificate"></i>&nbsp; 4.Organization Activities</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link disabled" id="nav-contact-tab" data-toggle="pill" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fas fa-user"></i>&nbsp; 5.Contact Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link disabled" id="nav-additional-tab" data-toggle="pill" href="#nav-additional" role="tab" aria-controls="nav-additional" aria-selected="false"><i class="fas fa-plus"></i>&nbsp; 6.Additional Information</a>
          </li>
          <li class="nav-item">
            <a class="nav-item nav-link disabled" id="nav-finalize-tab" data-toggle="pill" href="#nav-finalize" role="tab" aria-controls="nav-finalize" aria-selected="false"><i class="fas fa-check-square"></i>&nbsp; 7.Finalize</a>
          </li>
        </ul>
        <div class="tab-content mt-4" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab">
            <p class="mb-3">At Forefront, we believe that certification should be a value-added service. We are not merely offering a compliance audit, and we dedicate our expertise towards your business, so you feel that achieving certification means something and not just a badge on the wall.</p>
            <p class="mb-3">We will get back to you with the best quote as soon as possible. <strong>Please complete the form below to help us prepare the best quotation for you. </strong></p>
            <p class="mb-3">Please provide as much information as possible.</p>
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
          <div class="tab-pane fade" id="nav-standard" role="tabpanel" aria-labelledby="nav-standard-tab">
            <div class="form-row justify-content-center mb-1">
              <div class="col-md">
                <p class="font-weight-bold">Select your management system</p>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                <label class="container-checkbox">ISO 9001:2015
                  <input type="radio" name="management_system" value="ISO 9001:2015">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-md">
                <label class="container-checkbox">ISO 14001:2015
                  <input type="radio" name="management_system" value="ISO 14001:2015">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-md">
                <label class="container-checkbox">ISO 45001:2018
                  <input type="radio" name="management_system" value="ISO 45001:2018">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-md">
                <label class="container-checkbox">ISO 27001:2013
                  <input type="radio" name="management_system" value="ISO 27001:2013">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Type of management system
                <label class="container-checkbox">Single e.g. ISO9001 only
                  <input type="radio" name="type_management_system" value="Single e.g. ISO9001 only">
                  <span class="checkmark"></span>
                </label>
                <label class="container-checkbox">Fully Integrated e.g. One system with integrated documents policy, audits, management review
                  <input type="radio" name="type_management_system" value="Fully Integrated e.g. One system with integrated documents policy, audits, management review">
                  <span class="checkmark"></span>
                </label>
                <label class="container-checkbox">Partially Integrated e.g. management review is partially integrated
                  <input type="radio" name="type_management_system" value="Partially Integrated e.g. management review is partially integrated">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Type of application (please select from the following options)
                <label class="container-checkbox">New
                  <input type="radio" name="type_application" value="New">
                  <span class="checkmark"></span>
                </label>
                <label class="container-checkbox">Renewal
                  <input type="radio" name="type_application" value="Renewal">
                  <span class="checkmark"></span>
                </label>
                <label class="container-checkbox">Scope Extension
                  <input type="radio" name="type_application" value="Scope Extension">
                  <span class="checkmark"></span>
                </label>
                <label class="container-checkbox">Transfer (please attach your latest certificate(s) & report(s) here
                  <input type="radio" name="type_application" value="Transfer (please attach your latest certificate(s) & report(s) here">
                  <span class="checkmark"></span>
                </label>
                <div class="form-row justify-content-center mb-3 pl-4">
                  <div class="col-md-12">
                    Browse your certificate(s), if more than one certificate, please combine into 1 file
                    <div class="custom-file mb-3">
                      <input type="file" class="custom-file-input" name="file1" onChange="$('#input_file1.custom-file-label').html($(this).val())">
                      <label class="custom-file-label" id="input_file1">Choose file</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    Browse your certificate(s), if more than one certificate, please combine into 1 file
                    <div class="custom-file mb-3">
                      <input type="file" class="custom-file-input" name="file2" onChange="$('#input_file2.custom-file-label').html($(this).val())">
                      <label class="custom-file-label" id="input_file2">Choose file</label>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label class="container-checkbox">Skip, I want to send it latter
                      <input type="checkbox" name="skip_input_file" value="Skip, I want to send it latter">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Write your standard reference here (e.g. ISO 9001:2015 & ISO 14001:2015)
                <input type="text" class="mt-2 form-control border-2px" name="standard_reference">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Issued by?
                <input type="text" class="mt-2 form-control border-2px" name="issued_by">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                When will you be ready for a Stage one review
                <input type="date" class="mt-2 form-control border-2px" name="issued_by">
              </div>
            </div>
            <br>
            <br>
            <button id="next_btn" type="button" onclick="next(2)" class="btn btn-orange rounded-0 float-right">Next <i class="fas fa-angle-double-right"></i></button>
          </div>
          <div class="tab-pane fade" id="nav-company" role="tabpanel" aria-labelledby="nav-company-tab">
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Your Organization Name
                <input type="text" class="mt-2 form-control border-2px" name="company_name">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Scope of Business
                <textarea class="mt-2 form-control border-2px" name="scope_company" rows="3"></textarea>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md-6">
                <label>Address (Site 1)</label>
                <textarea class="form-control border-2px" name="scope_company" rows="4"></textarea>
              </div>
              <div class="col-md">
                <div>Country</div>
                <select id="country" class="mb-1 mt-2 w-100 form-control border-2px" onchange="load_state(this.value)">
                  <option>----</option>
                </select>
                <div>Province/State</div>
                <select id="state" class="mb-1 mt-2 w-100 form-control border-2px" onchange="load_city(this.value)">
                  <option>----</option>
                </select>
              </div>
              <div class="col-md">
                <div>City</div>
                <select id="city" class="mb-1 mt-2 w-100 form-control border-2px">
                  <option>----</option>
                </select>
                <div>Postal Code</div>
                <input type="text" class="mt-2 form-control border-2px" name="postal_code" placeholder="">
              </div>
            </div>
            <div class="form-row justify-content-center mb-1">
              <div class="col-md">
                <p class="font-weight-bold">Are you multisite with a central function?</p>
              </div>
              <div class="col-md">
                <p class="font-weight-bold">How Many</p>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                <label class="container-checkbox">Yes
                  <input type="radio" name="is_multisite" value="Yes">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-md">
                <label class="container-checkbox">No
                  <input type="radio" name="is_multisite" value="No">
                  <span class="checkmark"></span>
                </label>
              </div>
              <div class="col-md-6">
                <select id="city" class="w-100 form-control border-2px">
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                </select>
              </div>
            </div>
            <br>
            <br>
            <button id="next_btn" type="button" onclick="next(3)" class="btn btn-orange rounded-0 float-right">Next <i class="fas fa-angle-double-right"></i></button>
          </div>
          <div class="tab-pane fade" id="nav-activities" role="tabpanel" aria-labelledby="nav-activities-tab">
            <table class="table text-center">
              <thead>
                <tr>
                  <th></th>
                  <th>Full Time (Permanent)</th>
                  <th>Part Time (PKWT)</th>
                  <th>Total Shift</th>
                  <th>Work On Site</th>
                  <th>Work Off Site</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>Management (Mgr, Dir, etc.)</th>
                  <td><input type="number" class="form-control col-fulltime" value="0" onchange="sum_each_col_act('fulltime')"></td>
                  <td><input type="number" class="form-control col-parttime" value="0" onchange="sum_each_col_act('parttime')"></td>
                  <td><input type="number" class="form-control col-totalshift" value="0" onchange="sum_each_col_act('totalshift')"></td>
                  <td><input type="number" class="form-control col-workonsite" value="0" onchange="sum_each_col_act('workonsite')"></td>
                  <td><input type="number" class="form-control col-workoffsite" value="0" onchange="sum_each_col_act('workoffsite')"></td>
                </tr>
                <tr>
                  <th>Administration (HR, Secretary, etc.)</th>
                  <td><input type="number" class="form-control col-fulltime" value="0" onchange="sum_each_col_act('fulltime')"></td>
                  <td><input type="number" class="form-control col-parttime" value="0" onchange="sum_each_col_act('parttime')"></td>
                  <td><input type="number" class="form-control col-totalshift" value="0" onchange="sum_each_col_act('totalshift')"></td>
                  <td><input type="number" class="form-control col-workonsite" value="0" onchange="sum_each_col_act('workonsite')"></td>
                  <td><input type="number" class="form-control col-workoffsite" value="0" onchange="sum_each_col_act('workoffsite')"></td>
                </tr>
                <tr>
                  <th>IT</th>
                  <td><input type="number" class="form-control col-fulltime" value="0" onchange="sum_each_col_act('fulltime')"></td>
                  <td><input type="number" class="form-control col-parttime" value="0" onchange="sum_each_col_act('parttime')"></td>
                  <td><input type="number" class="form-control col-totalshift" value="0" onchange="sum_each_col_act('totalshift')"></td>
                  <td><input type="number" class="form-control col-workonsite" value="0" onchange="sum_each_col_act('workonsite')"></td>
                  <td><input type="number" class="form-control col-workoffsite" value="0" onchange="sum_each_col_act('workoffsite')"></td>
                </tr>
                <tr>
                  <th>Support Staff (Finance, Logistic, etc.)</th>
                  <td><input type="number" class="form-control col-fulltime" value="0" onchange="sum_each_col_act('fulltime')"></td>
                  <td><input type="number" class="form-control col-parttime" value="0" onchange="sum_each_col_act('parttime')"></td>
                  <td><input type="number" class="form-control col-totalshift" value="0" onchange="sum_each_col_act('totalshift')"></td>
                  <td><input type="number" class="form-control col-workonsite" value="0" onchange="sum_each_col_act('workonsite')"></td>
                  <td><input type="number" class="form-control col-workoffsite" value="0" onchange="sum_each_col_act('workoffsite')"></td>
                </tr>
                <tr>
                  <th>Sales (Marketing, etc.)</th>
                  <td><input type="number" class="form-control col-fulltime" value="0" onchange="sum_each_col_act('fulltime')"></td>
                  <td><input type="number" class="form-control col-parttime" value="0" onchange="sum_each_col_act('parttime')"></td>
                  <td><input type="number" class="form-control col-totalshift" value="0" onchange="sum_each_col_act('totalshift')"></td>
                  <td><input type="number" class="form-control col-workonsite" value="0" onchange="sum_each_col_act('workonsite')"></td>
                  <td><input type="number" class="form-control col-workoffsite" value="0" onchange="sum_each_col_act('workoffsite')"></td>
                </tr>
                <tr>
                  <th>QC/QA/HSE Officer</th>
                  <td><input type="number" class="form-control col-fulltime" value="0" onchange="sum_each_col_act('fulltime')"></td>
                  <td><input type="number" class="form-control col-parttime" value="0" onchange="sum_each_col_act('parttime')"></td>
                  <td><input type="number" class="form-control col-totalshift" value="0" onchange="sum_each_col_act('totalshift')"></td>
                  <td><input type="number" class="form-control col-workonsite" value="0" onchange="sum_each_col_act('workonsite')"></td>
                  <td><input type="number" class="form-control col-workoffsite" value="0" onchange="sum_each_col_act('workoffsite')"></td>
                </tr>
                <tr>
                  <th>Labourers (Operator, Technician, etc.)</th>
                  <td><input type="number" class="form-control col-fulltime" value="0" onchange="sum_each_col_act('fulltime')"></td>
                  <td><input type="number" class="form-control col-parttime" value="0" onchange="sum_each_col_act('parttime')"></td>
                  <td><input type="number" class="form-control col-totalshift" value="0" onchange="sum_each_col_act('totalshift')"></td>
                  <td><input type="number" class="form-control col-workonsite" value="0" onchange="sum_each_col_act('workonsite')"></td>
                  <td><input type="number" class="form-control col-workoffsite" value="0" onchange="sum_each_col_act('workoffsite')"></td>
                </tr>
                <tr>
                  <th>Driver/ Helper/ Asst.</th>
                  <td><input type="number" class="form-control col-fulltime" value="0" onchange="sum_each_col_act('fulltime')"></td>
                  <td><input type="number" class="form-control col-parttime" value="0" onchange="sum_each_col_act('parttime')"></td>
                  <td><input type="number" class="form-control col-totalshift" value="0" onchange="sum_each_col_act('totalshift')"></td>
                  <td><input type="number" class="form-control col-workonsite" value="0" onchange="sum_each_col_act('workonsite')"></td>
                  <td><input type="number" class="form-control col-workoffsite" value="0" onchange="sum_each_col_act('workoffsite')"></td>
                </tr>
                <tr>
                  <th>Other</th>
                  <td><input type="number" class="form-control col-fulltime" value="0" onchange="sum_each_col_act('fulltime')"></td>
                  <td><input type="number" class="form-control col-parttime" value="0" onchange="sum_each_col_act('parttime')"></td>
                  <td><input type="number" class="form-control col-totalshift" value="0" onchange="sum_each_col_act('totalshift')"></td>
                  <td><input type="number" class="form-control col-workonsite" value="0" onchange="sum_each_col_act('workonsite')"></td>
                  <td><input type="number" class="form-control col-workoffsite" value="0" onchange="sum_each_col_act('workoffsite')"></td>
                </tr>
                <tr>
                  <th>Subtotal</th>
                  <td><input type="number" class="form-control sum-fulltime" value="0" readonly></td>
                  <td><input type="number" class="form-control sum-parttime" value="0" readonly></td>
                  <td><input type="number" class="form-control sum-totalshift" value="0" readonly></td>
                  <td><input type="number" class="form-control sum-workonsite" value="0" readonly></td>
                  <td><input type="number" class="form-control sum-workoffsite" value="0" readonly></td>
                </tr>
              </tbody>
            </table>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                TOTAL Site 1
                <input type="number" class="mt-2 form-control border-2px" name="total_site" readonly>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Additional Comment
                <input type="text" class="mt-2 form-control border-2px" name="add_comment">
              </div>
            </div>
            <br>
            <br>
            <button id="next_btn" type="button" onclick="next(4)" class="btn btn-orange rounded-0 float-right">Next <i class="fas fa-angle-double-right"></i></button>
          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Your Name
                <input type="text" class="mt-2 form-control border-2px" name="name">
              </div>
              <div class="col-md">
                Title
                <input type="text" class="mt-2 form-control border-2px" name="title">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Position
                <input type="text" class="mt-2 form-control border-2px" name="position">
              </div>
              <div class="col-md">
                Phone (incl. ext. or your mobile phone number)
                <input type="text" class="mt-2 form-control border-2px" name="phone">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Email
                <input type="email" class="mt-2 form-control border-2px" name="email">
              </div>
              <div class="col-md">
                Website (Organization)
                <input type="text" class="mt-2 form-control border-2px" name="website">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Main Language
                <input type="email" class="mt-2 form-control border-2px" name="main_language">
              </div>
              <div class="col-md">
                How did you hear about us?
                <input type="text" class="mt-2 form-control border-2px" name="how_you_hear_us">
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                Do you use any Consultant services?
                <label class="container-checkbox">Yes
                  <input type="radio" name="use_consultant" onchange="change_use_consultant(this.value)" value="Yes">
                  <span class="checkmark"></span>
                </label>
                <label class="container-checkbox">No (management system is internally developed & managed)
                  <input type="radio" name="use_consultant" onchange="change_use_consultant(this.value)" value="No" checked>
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
            <div id="use_consultant_form" style="display: none;">
              <div class="form-row justify-content-center mb-3">
                <div class="col-md">
                  Consultant Name
                  <input type="email" class="mt-2 form-control border-2px" name="consultant_name">
                </div>
                <div class="col-md">
                  Contact Number
                  <input type="text" class="mt-2 form-control border-2px" name="consultant_phone">
                </div>
              </div>
              <div class="form-row justify-content-center mb-3">
                <div class="col-md">
                  Email
                  <input type="email" class="mt-2 form-control border-2px" name="consultant_email">
                </div>
                <div class="col-md">
                  Website
                  <input type="text" class="mt-2 form-control border-2px" name="consultant_website">
                </div>
              </div>
            </div>
            <br>
            <br>
            <button id="next_btn" type="button" onclick="next(5)" class="btn btn-orange rounded-0 float-right">Next <i class="fas fa-angle-double-right"></i></button>
            <!-- <a href="<?php //echo base_url() ?>home/free_quotation_new_process" class="btn btn-orange rounded-0 float-right"><i class="fa fa-check"></i> Submit</a> -->
          </div>
          <div class="tab-pane fade" id="nav-additional" role="tabpanel" aria-labelledby="nav-additional-tab">
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                ISO 9001 (Only) – State clauses that may not be applicable including justification?<br>
                <small>E.g. 8.3 Design and development of products and services, 7.1.5.2 Measurement traceability</small>
                <textarea class="mt-2 form-control border-2px" name="additional_info1" rows="3"></textarea>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                ISO 14001 (Only) – State any environmental concerns from your Interested Parties?
                <textarea class="mt-2 form-control border-2px" name="additional_info2" rows="3"></textarea>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                ISO 14001 (Only) –  State the potential environmental accidents that could arise and the impact these have?
                <textarea class="mt-2 form-control border-2px" name="additional_info3" rows="3"></textarea>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                ISO 14001 (Only) – Do you have environmental aspects requiring consents or any regulated conditions
                <textarea class="mt-2 form-control border-2px" name="additional_info4" rows="3"></textarea>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                ISO 14001 (Only) – Do you have environmental aspects requiring consents or any regulated conditions (please send in copies)
                <textarea class="mt-2 form-control border-2px" name="additional_info5" rows="3"></textarea>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                ISO14001 and ISO45001 (Only) – State the main hazardous material and the applicable legislation for your processes.
                <textarea class="mt-2 form-control border-2px" name="additional_info6" rows="3"></textarea>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                ISO45001 (Only) - Does your business handle, produce, use or store dangerous substances(including toxic, oxidising, explosive, flammable, etc.) in large quantities and could therefore be subject to COMAH (Control of Major Accident Hazards)?
                <textarea class="mt-2 form-control border-2px" name="additional_info7" rows="3"></textarea>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                ISO45001 (Only) - Provide details of the key hazards and risks associated with your activities and processes including the relevant legal obligations.
                <textarea class="mt-2 form-control border-2px" name="additional_info8" rows="3"></textarea>
              </div>
            </div>
            <div class="form-row justify-content-center mb-3">
              <div class="col-md-12">
                <label class="container-checkbox">Skip, We will contact you latter about this information
                  <input type="checkbox" name="skip_input_file" value="Skip, We will contact you latter about this information">
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>
            <br>
            <br>
            <button id="next_btn" type="button" onclick="next(6)" class="btn btn-orange rounded-0 float-right">Next <i class="fas fa-angle-double-right"></i></button>
            <!-- <a href="<?php //echo base_url() ?>home/free_quotation_new_process" class="btn btn-orange rounded-0 float-right"><i class="fa fa-check"></i> Submit</a> -->
          </div>
          <div class="tab-pane fade" id="nav-finalize" role="tabpanel" aria-labelledby="nav-finalize-tab">
            <div class="form-row justify-content-center mb-3">
              <div class="col-md">
                <strong>At Forefront, We'd like to keep in touch by providing information that is relevant to you. We always keep your details safe and secure. You may unsubscribe from these communications at any time. Please verify our <a href="#" class="text-orange">Privacy Policy</a> for additional information.</strong>
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
    change_fieldset();
    // if(number == 1){
    //   change_fieldset();
    // }
    // else if(number == 2){
    //   $('#nav-standard input').removeClass('is-invalid');
    //   $('#nav-standard input').next().remove();
    //   if($('input[name=first_name]').val() == ""){
    //     $('#nav-standard input[name=first_name]').addClass('is-invalid');
    //     $('#nav-standard input[name=first_name]').after('<div class="invalid-feedback">Please provide this data.</div>');
    //     res++;
    //   }
    //   if($('input[name=last_name]').val() == ""){
    //     $('#nav-standard input[name=last_name]').addClass('is-invalid');
    //     $('#nav-standard input[name=last_name]').after('<div class="invalid-feedback">Please provide this data.</div>');
    //     res++;
    //   }
    //   if($('input[name=email]').val() == ""){
    //     $('#nav-standard input[name=email]').addClass('is-invalid');
    //     $('#nav-standard input[name=email]').after('<div class="invalid-feedback">Please provide this data.</div>');
    //     res++;
    //   }
    //   if($('input[name=phone]').val() == ""){
    //     $('#nav-standard input[name=phone]').addClass('is-invalid');
    //     $('#nav-standard input[name=phone]').after('<div class="invalid-feedback">Please provide this data.</div>');
    //     res++;
    //   }
    //   if($('input[name=job_title]').val() == ""){
    //     $('#nav-standard input[name=job_title]').addClass('is-invalid');
    //     $('#nav-standard input[name=job_title]').after('<div class="invalid-feedback">Please provide this data.</div>');
    //     res++;
    //   }
    //   if(res > 0){
    //   }
    //   else{
    //     change_fieldset();
    //   }
    // }
    // else if(number == 3){
    //   $('#nav-company input').removeClass('is-invalid');
    //   $('#nav-company input').next().remove();
    //   if($('input[name=company_name]').val() == ""){
    //     $('#nav-company input[name=company_name]').addClass('is-invalid');
    //     $('#nav-company input[name=company_name]').after('<div class="invalid-feedback">Please provide this data.</div>');
    //     res++;
    //   }
    //   if($('input[name=company_address]').val() == ""){
    //     $('#nav-company input[name=company_address]').addClass('is-invalid');
    //     $('#nav-company input[name=company_address]').after('<div class="invalid-feedback">Please provide this data.</div>');
    //     res++;
    //   }
    //   if($('input[name=website]').val() == ""){
    //     $('#nav-company input[name=website]').addClass('is-invalid');
    //     $('#nav-company input[name=website]').after('<div class="invalid-feedback">Please provide this data.</div>');
    //     res++;
    //   }
    //   if($('input[name=employee]').val() == ""){
    //     $('#nav-company input[name=employee]').addClass('is-invalid');
    //     $('#nav-company input[name=employee]').after('<div class="invalid-feedback">Please provide this data.</div>');
    //     res++;
    //   }
    //   if(res > 0){
    //   }
    //   else{
    //     change_fieldset();
    //   }
    // }
    // else if(number == 4){
    //   var check = $('#nav-activities input[type=checkbox]:checked').length;
    //   console.log(check);
    //   $('#nav-activities .invalid-feedback').remove();
    //   if(check == 0){
    //     $('#nav-activities textarea[name=description]').after('<div class="invalid-feedback text-center" style="display: block;"><br>Please tick one of many items.</div>');
    //   }
    //   else{
    //     change_fieldset();
    //   }
    // }
  }

  function change_fieldset() {
    var before = $('a.nav-item.active');
    var next = $('a.nav-item.active').parent().next().find('a');

    $(next).removeClass('disabled');
    $(next).tab('show') // Select first tab
  }

  var auth_token;
  $.ajax({
    url: 'https://www.universal-tutorial.com/api/getaccesstoken',
    type: 'GET',
    headers: {
      "Accept": "application/json",
      "api-token": "WZgwMpC4v4G_wkcwU9OeBSUrTwFwwRdriwTJDwjcQGvgw2GeTiv733eMTkGeI3zl48M",
      "user-email": "habibsyuhada.1109@gmail.com"
    },
    success: function(res) {
      auth_token = res.auth_token;
      load_countries(auth_token);
      $("select").niceSelect("destroy");
    }
  });

  function load_countries(auth_token){
    $.ajax({
      url: 'https://www.universal-tutorial.com/api/countries/',
      type: 'GET',
      headers: {
        "Authorization": "Bearer "+auth_token,
        "Accept": "application/json"
      },
      success: function(res) {
        var option = "<option>----</option>";
        jQuery.each(res, function() {
          console.log(this.country_name);
          option += "<option value='"+this.country_name+"'>"+this.country_name+"</option>"
        });
        $('#country').html(option);
      }
    });
  }

  function load_state(country) {
    $.ajax({
      url: 'https://www.universal-tutorial.com/api/states/'+country,
      type: 'GET',
      headers: {
        "Authorization": "Bearer "+auth_token,
        "Accept": "application/json"
      },
      success: function(res) {
        var option = "<option>----</option>";
        jQuery.each(res, function() {
          console.log(this.state_name);
          option += "<option value='"+this.state_name+"'>"+this.state_name+"</option>"
        });
        $('#state').html(option);
      }
    });
  }

  function load_city(state) {
    $.ajax({
      url: 'https://www.universal-tutorial.com/api/cities/'+state,
      type: 'GET',
      headers: {
        "Authorization": "Bearer "+auth_token,
        "Accept": "application/json"
      },
      success: function(res) {
        var option = "<option>----</option>";
        jQuery.each(res, function() {
          console.log(this.city_name);
          option += "<option value='"+this.city_name+"'>"+this.city_name+"</option>"
        });
        $('#city').html(option);
      }
    });
  }

  function change_use_consultant(use_consultant) {
    if(use_consultant == "Yes"){
      $("#use_consultant_form").slideDown();
    }
    else if(use_consultant == "No"){
      $("#use_consultant_form").slideUp();
    }
  }

  function sum_each_col_act(column) {
    var sum = 0;
    $(".col-"+column).each(function(){
      sum = parseInt(sum) + parseInt(this.value);
    });
    $(".sum-"+column).val(parseInt(sum));
    sum_all_one_site();
  }

  function sum_all_one_site() {
    var sum = 0;
    var fulltime = $(".sum-fulltime").val();
    var parttime = $(".sum-parttime").val();
    var totalshift = $(".sum-totalshift").val();
    var workonsite = $(".sum-workonsite").val();
    var workoffsite = $(".sum-workoffsite").val();
    $("input[name=total_site]").val(parseInt(fulltime)+parseInt(parttime)+parseInt(totalshift)+parseInt(workonsite)+parseInt(workoffsite));
  }
</script>