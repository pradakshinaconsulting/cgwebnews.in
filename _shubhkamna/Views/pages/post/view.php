<section>
    <div class="card-blog ">
        <h5 class="card-title mb-4"><?= $post['post_title'] ?></h5>
        <p style="color: #C60C30"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;cgwebnews.in&nbsp;&nbsp;&nbsp;<i class="fas fa-eye"></i>&nbsp;&nbsp;<?php echo $post['count'] ?></p>
        <img src="<?= $post['post_img'] ?>" class="card-img-top mb-4" alt="<?= $post['post_title'] ?>" >
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
        <strong><a href="<?= site_url("category/".$post['category']['slug']) ?>" style="color:#e36c09"><?= $post['category']['name_hindi'] ?></a></strong>
        <div style="  height:1px ; margin-top : 10; margin-bottom:10px "></div>
        <?= $post['post_body'] ?>
        <?php 
            if($post['post_img_1'] != "")
            {
              ?>
        <img src="<?= $post['post_img_1'] ?>" class="card-img-top mb-4" alt="<?= $post['post_title'] ?>" >
        <?php 
            }
            
            ?>
        <?php 
            if($post['post_img_2'] != "")
            {
              ?>
        <img src="<?= $post['post_img_2'] ?>" class="card-img-top mb-4" alt="<?= $post['post_title'] ?>" >
        <?php 
            }
            
            ?>
        <?php 
            if($post['post_video_link'] != "")
            {
              ?>
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $post['post_video_link'] ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php 
            }
            
            ?>
        <div id="share"></div>
    </div>
    
</section>
<section class="mb-4">
                            <div class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php $i = 1; ?>
                                    <?php 
                                        foreach($advertisementList as $advertisement)
                                        {
                                          if($advertisement["area"] == "content-bottom")
                                          {
                                            ?>
                                    <div class="carousel-item <?php echo ($i == 1) ? ('active') : '' ?>" >
                                        <img src="<?= $advertisement["ads_img"] ?>" class="d-block w-100 rounded" alt="<?= "Pradakshina Consulting" ?>" loading="lazy">
                                    </div>
                                    <?php
                                        $i++;
                                        }
                                        }
                                        ?>
                                </div>
                            </div>
                        </section>
                        <section class="mb-4">
                            <div class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php $i = 1; ?>
                                    <?php 
                                        foreach($advertisementList as $advertisement)
                                        {
                                          if($advertisement["area"] == "content-bottom-two")
                                          {
                                            ?>
                                    <div class="carousel-item <?php echo ($i == 1) ? ('active') : '' ?>" >
                                        <img src="<?= $advertisement["ads_img"] ?>" class="d-block w-100 rounded" alt="<?= "Pradakshina Consulting" ?>" loading="lazy">
                                    </div>
                                    <?php
                                        $i++;
                                        }
                                        }
                                        ?>
                                </div>
                            </div>
                        </section>
                     
                        <section class="mb-4">
                            <div class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php $i = 1; ?>
                                    <?php 
                                        foreach($advertisementList as $advertisement)
                                        {
                                          if($advertisement["area"] == "content-bottom-three")
                                          {
                                            ?>
                                    <div class="carousel-item <?php echo ($i == 1) ? ('active') : '' ?>" >
                                        <img src="<?= $advertisement["ads_img"] ?>" class="d-block w-100 rounded" alt="<?= "Pradakshina Consulting" ?>" loading="lazy">
                                    </div>
                                    <?php
                                        $i++;
                                        }
                                        }
                                        ?>
                                </div>
                            </div>
                        </section>
<section >
      <div class="row">
    <?php 
        foreach($postList as $post)
        {
          ?>
    <div class="col-md-6">
        <a href="<?= site_url($post['id']."/".$post['post_slug']) ?>">
            <div class="card card-blog">
                <div class="card-image">
                    <img src="<?= $post['post_img'] ?>" class="card-img-top" alt="<?= $post['post_title'] ?>" loading="lazy">
                </div>
                <div class="content">
                    <p style="color: #e36c09"><strong><?= $post['category']['name_hindi'] ?></strong></p>
        <h5 class="card-title"><?= $post['post_title'] ?></h5>
        </div>
        </div>
        </a>
    </div>
    <?php
        }
        
        ?>
</div>
</section>