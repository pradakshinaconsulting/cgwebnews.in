<section>
  
    <?php 
        foreach($postList as $post)
        {
          ?>
    <div>
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
    <div>
        <ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-2505945327780324"
     data-ad-slot="1405626688"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    <?php 
        }
        
        ?>


</section>
<div class="d-flex justify-content-center">
    <?= $pager->links() ?>
</div>
