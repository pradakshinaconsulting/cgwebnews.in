<div class="container-fluid">

    <h1 class="mt-4">Edit Post</h1>

    <ol class="breadcrumb mb-4">

        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboatd/') ?>">Dashboard</a></li>

        <li class="breadcrumb-item"><a href="<?= base_url('admin/post/') ?>">Post</a></li>

        <li class="breadcrumb-item active">Edit Post</li>

    </ol>

    <?php echo $this->session->flashdata('invalid'); ?>

    <?php echo validation_errors(); ?> 

    <?php echo form_open_multipart('admin/post/edit/'.$post->id.'/'); ?>



    <div class="form-group">

        <label>Post Title : </label>

        <?php echo form_input(array('class'=>'form-control','type'=>'text','name'=>'post_title','placeholder'=>'Post Title','required'=>'required','value'=>isset($post->post_title)?($post->post_title):'')) ?>

    </div>
<div class="form-group">
        <label>Post Title English : </label>
        <?php echo form_input(array('class'=>'form-control','type'=>'text','name'=>'post_slug','placeholder'=>'Post Title English','required'=>'required','value'=>isset($post->post_slug)?($post->post_slug):'')) ?>
    </div>
    <div class="form-group">

        <label>Post Content : </label>

        <?php echo form_textarea(array('class'=>'form-control  richtext','name'=>'post_body','placeholder'=>'Post Content','value'=>isset($post->post_body)?($post->post_body):'')) ?>

    </div>

    

    <div class="form-group">

        <label>Featured Image : </label>

        <img src="<?= base_url('store/'.$post->post_img) ?>" height="100" />

    </div>

    

    <div class="form-group">

        <label>Upload : </label>

        <?php echo form_input(array('type'=>'file','class'=>'form-control','name'=>'post_img','placeholder'=>'Post Image','value'=>isset($post_img)?($post_img):'')) ?>

    </div>

    

    <div class="form-group">

        <label>Post Image 1 : </label>

        <img src="<?= base_url('store/'.$post->post_img_1) ?>" height="100" />

    </div>

    

    <div class="form-group">

        <label>Upload : </label>

        <?php echo form_input(array('type'=>'file','class'=>'form-control','name'=>'post_img_1','placeholder'=>'Post Image','value'=>isset($post_img_1)?($post_img_1):'')) ?>

    </div>

    

    <div class="form-group">

        <label>Post Image 2 : </label>

        <img src="<?= base_url('store/'.$post->post_img_2) ?>" height="100" />

    </div>

    

    <div class="form-group">

        <label>Upload : </label>

        <?php echo form_input(array('type'=>'file','class'=>'form-control','name'=>'post_img_2','placeholder'=>'Post Image','value'=>isset($post_img_2)?($post_img_2):'')) ?>

    </div>

    

    <div class="form-group">

        <label>Video URL : </label>

        <?php echo form_input(array('class'=>'form-control','type'=>'text','name'=>'post_video_link','placeholder'=>'Post Video','value'=>isset($post->post_video_link)?($post->post_video_link):'')) ?>

    </div>

    <div class="form-group">

        <label>Post Category : </label>

        <select name="category_id" class="form-control">

                    <?php 

                        foreach($categoryDataset as $category)

                        {

                            ?>

                    <option value="<?php echo $category->slug ?>" <?= (isset($post->category_id) && ($post->category_id == $category->id) )?('selected'):'' ?> ><?php echo $category->name ?></option>

                    <?php

                        }

                        

                        ?>

                </select>



    </div>
<div class="form-group">
        <label>Enable Copy Protection : </label>
        <select name="copy_protection" class="form-control">
            
            <option value="1"  <?= (isset($post->copy_protection) && ($post->copy_protection == "1") )?('selected'):'' ?>>Yes</option>
            <option value="0"  <?= (isset($post->copy_protection) && ($post->copy_protection == "0") )?('selected'):'' ?>>No</option>
            
            
        </select>
    </div>
    <div class="form-group">

                <?php echo form_input(array('class'=>'form-control btn-primary','type'=>'submit','value'=>'Update')) ?>

            </div>



    <?php echo form_close(); ?>

</div>

<script>

    CKEDITOR.replace('editor');

</script>