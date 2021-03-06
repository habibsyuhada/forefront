<section class="border-bottom banner_area" style="background: rgba(247, 247, 247, 0.45);">
  <div class="container-fluid p-0" style="max-width: unset">
    <div class="row py-4 m-0 banner_inner d-flex align-items-center" style="background: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url(<?php echo base_url(); ?>assets/img/new/Training_2.jpg); background-attachment: fixed; background-position: center; background-size: cover;">
      <div class="col">
        <h1 class="text-black text-center"><?php echo $meta_title ?></h1>
        <div class="text-center font-weight-bold">
          <?php 
            foreach($navigation as $key => $value){
              $navigation[$key] = '<a href="'.$value['link'].'" class="text-black">'.$value['text'].'</a>';
            }
            echo join('&nbsp; <i class="fas fa-angle-right text-black"></i> &nbsp;', $navigation);
          ?>
        </div>
      </div>
    </div>
  </div>
</section>