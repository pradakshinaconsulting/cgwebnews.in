<section>
  <div class="container">
    
<div class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <?php $i = 1; ?>
      <?php 
      
      foreach($advertisementList as $advertisement)
      {
        if($advertisement["area"] == "page-top")
        {
        ?>
          
        <div class="carousel-item <?php echo ($i == 1) ? ('active') : '' ?>" >
          <img src="<?= $advertisement["ads_img"] ?>" class="d-block w-100 rounded" alt="..." loading="lazy">
        </div>
        <?php
        $i++;
        }
      }
      
      
      ?>
        
    </div>
</div>
    
  </div>
</section>
<section>
    <div class="container">
        <div class="section-padding">
            <div class="row">
                <?php 
                    foreach($postList as $post)
                    {
                      
                      ?>
             
                <div class="col-md-4 mb-4">
                    <a href="<?= site_url($post['id']."/".$post['post_slug']) ?>">
                        <div class="card blog-card">
                          
                            <img src="<?= $post['post_img'] ?>" class="card-img-top" alt="<?= $post['post_title'] ?>" loading="lazy">
                            <div class="card-body">
                                <h5 class="card-title"><?= $post['post_title'] ?></h5>
                            </div>
                        </div>
                      
                    </a>
                </div>
             
                <?php
                    }
                    
                    ?>
            </div>
        </div>
    </div>
</section>
<section class="d-flex justify-content-center">
  <?= $pager->links() ?>
</section>
