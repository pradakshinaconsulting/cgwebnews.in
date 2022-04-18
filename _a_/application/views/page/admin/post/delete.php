<div class="container-fluid">
    <h1 class="mt-4">Delete Post</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboatd/') ?>">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('admin/post/') ?>">Post</a></li>
        <li class="breadcrumb-item active">Delete</li>
    </ol>
    
    <h1 class="mb-4"><?php echo $post->post_title ?></h1>
    <img class="mb-4" src="<?= base_url('store/'.$post->post_img) ?>" width="100%" />
    
    <?php echo form_open('admin/post/delete/'.$post->id.'/'); ?>
    <?php echo form_input(array('type'=>'hidden','name'=>'status','value'=>'2')) ?>
    <div class="form-group">
        <?php echo form_input(array('class'=>'form-control btn-danger','type'=>'submit','value'=>'Confirm Delete')) ?>
    </div>
    <?php echo form_close(); ?>
</div>