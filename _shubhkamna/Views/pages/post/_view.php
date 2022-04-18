<section class="mb-4">
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
                    <img src="<?= $advertisement["ads_img"] ?>" class="d-block w-100 rounded" alt="...">
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
        <div class="row">
            <div class="col-md-8 mb-4">
                <div >
                    
                        <h3><?= $post['post_title'] ?></h3>
                    
                    <img src="<?= $post['post_img'] ?>" class="card-img-top" alt="<?= $post['post_title'] ?>" loading="lazy" >
                    <div style=" height:1px ; margin-top : 10; margin-bottom:10px "></div>
                        <?php 
                            foreach($advertisementList as $advertisement)
                            {
                              if($advertisement["area"] == "back-screen")
                              {
                              ?>
                        <div style="height:400px;background: url(<?= $advertisement["ads_img"] ?>) no-repeat center center fixed; ">
                        </div>
                        <?php
                            }
                            }
                            
                            
                            ?>
                        <div style="  height:1px ; margin-top : 10; margin-bottom:10px "></div>
                        
                        <?= $post['post_body'] ?>
                   
                </div>
                <div id="share"></div>
                <div class="carousel slide mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php $i = 1; ?>
                        <?php 
                            foreach($advertisementList as $advertisement)
                            {
                              if($advertisement["area"] == "content-bottom")
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
            <div class="col-md-4 mb-4">
                <div class="carousel slide mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php $i = 1; ?>
                        <?php 
                            foreach($advertisementList as $advertisement)
                            {
                              if($advertisement["area"] == "side-top")
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
                <div class="carousel slide mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php $i = 1; ?>
                        <?php 
                            foreach($advertisementList as $advertisement)
                            {
                              if($advertisement["area"] == "side-top-two")
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
                <div class="carousel slide mb-4" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php $i = 1; ?>
                        <?php 
                            foreach($advertisementList as $advertisement)
                            {
                              if($advertisement["area"] == "side-bottom")
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
                        <div class="card">
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
<div class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php $i = 1; ?>
        <?php 
            foreach($advertisementList as $advertisement)
            {
              if($advertisement["area"] == "content-bottom-two")
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
<div class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php $i = 1; ?>
        <?php 
            foreach($advertisementList as $advertisement)
            {
              if($advertisement["area"] == "content-bottom-three")
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