<style type="text/css">
  .list-group a{
    border-radius: 0px !important;
    border: 1px solid rgba(0, 0, 0, 0.3);
    background: #494a4a;
    color: #fff;
  }
  .list-group .btn-child{
    background: rgba(0, 0, 0, 0.2);
    height: 100%;
    width: 70px;
    display: block;
    position: absolute;
    right: 0;
    top: 0;
  }
  .list-group .btn-child i{
    display: inline-block;
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    margin-top: -8px;
    text-align: center;
  }
  .list-group a.active{
    background: #000;
    border: 1px solid rgba(0, 0, 0, 0.3);
  }
  .list-group.child a{
    background: #fff;
    color: #000;
  }
  .list-group a:hover{
    background: rgba(0, 0, 0, 0.3)
  }
</style>
<!--==========================
  Intro Section
============================-->
<div class="clearfix"></div>
<section class="container-fluid py-4 border-bottom mb-4" style="background: rgba(247, 247, 247, 0.45)">
  <div class="row py-4 my-4">
    <div class="col">
      <h1 class="text-black text-center"><?php echo $meta_title ?></h1>
      <div class="text-center">
        <a href="#" class="text-black">Home</a> &nbsp; <i class="fas fa-angle-right"></i> &nbsp; <a href="#" class="text-black">About</a>
      </div>
    </div>
  </div>
</section>
<section class="container px-4 mt-4 pt-4">
  <div class="row">
    <div class="col-md-3">
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action active">Home</a>
        <a href="#" class="list-group-item list-group-item-action">About<span class="btn-child"><i class="fas fa-chevron-down"></i></span></a>
        <div class="list-group child">
          <a href="#" class="list-group-item list-group-item-action">About</a>
          <a href="#" class="list-group-item list-group-item-action">About</a>
        </div>
        <a href="#" class="list-group-item list-group-item-action">About</a>
      </div>
    </div>
  </div>
</section>