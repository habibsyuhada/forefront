<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url(); ?>assets/img/FF_FAVICON.png" type="image/png">
	<title>Forefront | <?php echo $meta_title; ?></title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendors/flaticon/flaticon.css">
	<!-- main css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css?v=06022020">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/popper.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/stellar.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/isotope/isotope-min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/animate-css/wow.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/mail-script.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/smooth-scroll.polyfills.min.js"></script>
  <!--gmaps Js-->
  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="<?php echo base_url(); ?>assets/js/gmaps.min.js"></script> -->  

	<style type="text/css">
		.card-advantage{
			box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
		}
		.form-control:focus{
			border-color: #e45447;
			box-shadow: none;
		}
		.nice-select{
			border: 1px solid #ced4da
		}
    .container-fluid{
      max-width: 1200px;
    }
	</style>
	<!-- checkbox -->
	<style>
    body{
      color: #343A40;
    }
    /* The container */
    .container_checkbox {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 16px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container_checkbox input {
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
    .container_checkbox:hover input ~ .checkmark {
      background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container_checkbox input:checked ~ .checkmark {
      background-color: #e45447;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    /* Show the checkmark when checked */
    .container_checkbox input:checked ~ .checkmark:after {
      display: block;
    }

    /* Style the checkmark/indicator */
    .container_checkbox .checkmark:after {
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

    a.text-orange:hover{
      color: #000 !important;
    }
    .border-orange{
      border-color: #f25900 !important;
    }
    .border-white{
      border-color: #ffffff !important;
    }
    .text-orange{
      color: #f25900 !important;
    }
    .bg-orange{
      background-color: #f25900;
    }
    .btn-orange{
      color: #fff;
      background-color: #f25900;
      border-color: #f25900;
    }
    .btn-outline-orange{
      color: #f25900;
      border-color: #f25900;
    }
    .btn-outline-orange:hover{
      color: #fff;
      background-color: #f25900;
      border-color: #f25900;
    }

    .border-2px{
      border-width: 2px !important;
    }

    .text-black{
      color: #000 !important;
    }

    .main-title h1.text-white:after, .main-title h1.text-white:before{
      background: #ffffff;
    }

    .medsos{
      position: fixed;
      bottom: 50%;
      right: 0px;
      transform: translateY(50%);
      z-index: 2;
    }

    /*Hover Effect*/
    .hover-effect-1{
      transition: all .2s linear;
      cursor: pointer;
    }
    .border-dark.hover-effect-1:hover, .border-dark.hover-effect-1:focus{
     /* animation: pulse-effect-dark 0.3s;
      box-shadow: 0 0 0 2rem rgba(0,0,0,0),
      inset 0 0 0 6rem #343a40;*/
      color: #ffffff !important;
      background: #343a40 !important;
    }
    /*@keyframes pulse-effect-dark {
      0% { 
        box-shadow: 0 0 0 0 #343a40; 
      }
    }*/
    .border-orange.hover-effect-1:hover, .border-orange.hover-effect-1:focus{
      /*animation: pulse-effect-orange 0.3s;
      box-shadow: 0 0 0 2rem rgba(0,0,0,0),
      inset 0 0 0 6rem #f25900;*/
      color: #ffffff !important;
      background: #f25900;
    }
    /*@keyframes pulse-effect-orange {
      0% { 
        box-shadow: 0 0 0 0 #f25900; 
      }
    }*/
    .bg-orange .border-white.hover-effect-1:hover, .bg-orange .border-white.hover-effect-1:focus{
      /*animation: pulse-effect-orange-to-white 0.3s;
      box-shadow: 0 0 0 2rem rgba(0,0,0,0),
      inset 0 0 0 6rem #ffffff;*/
      color: #f25900;
      background: #ffffff;
    }
    /*@keyframes pulse-effect-orange-to-white {
      0% { 
        box-shadow: 0 0 0 0 #ffffff; 
      }
    }*/
    .bg-dark .border-white.hover-effect-1:hover, .bg-dark .border-white.hover-effect-1:focus{
      /*animation: pulse-effect-dark-to-white 0.3s;
      box-shadow: 0 0 0 2rem rgba(0,0,0,0),
      inset 0 0 0 6rem #ffffff;*/
      color: #343a40;
      background: #ffffff;
    }
    /*@keyframes pulse-effect-dark-to-white {
      0% { 
        box-shadow: 0 0 0 0 #ffffff; 
      }
    }*/

    /*Sidebar*/
    .list-group > a{
      border-radius: 0px !important;
      border: 2px solid #343A40;
      border-top-width: 0 !important;
      padding: 10px;
      font-size: 16px;
      color: #000;
      transition: all .2s linear;
    }
    .list-group:not(.child) > a:first-child{
      border-top-width: 2px !important;
    }
    .list-group .btn-child{
      background: rgba(0,0,0,0.2);
      height: 100%;
      width: 70px;
      display: block;
      position: absolute;
      right: 0;
      top: 0;
      cursor: pointer;
    }
    .list-group .btn-child i{
      display: inline-block;
      position: absolute;
      top: 50%;
      left: 0;
      width: 100%;
      margin-top: -8px;
      text-align: center;
      color: #fff;
    }
    .list-group > a.active{
      background: #f25900;
      border-color: #343A40;
    }
    .list-group.child a{
      background: #ECECEC;
    }
    .list-group > a:not(.active):hover{
      background: #2B3035;
      color: #fff;
    }
    /*Sidebar END*/
  </style>
</head>