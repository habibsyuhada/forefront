<section class="container-fluid py-4 border-bottom mb-4" style="background: rgba(247, 247, 247, 0.45)">
  <div class="row py-4">
    <div class="col">
      <h1 class="text-black text-center"><?php echo $meta_title ?></h1>
      <div class="text-center">
        <?php 
          foreach($navigation as $key => $value){
            $navigation[$key] = '<a href="'.$value['link'].'" class="text-black">'.$value['text'].'</a>';
          }
          echo join('&nbsp; <i class="fas fa-angle-right"></i> &nbsp;', $navigation);
        ?>
      </div>
    </div>
  </div>
</section>