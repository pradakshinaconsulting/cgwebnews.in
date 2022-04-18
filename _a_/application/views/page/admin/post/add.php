<div class="container-fluid">
    <h1 class="mt-4">Add Post</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboatd/') ?>">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('admin/post/') ?>">Post</a></li>
        <li class="breadcrumb-item active">Add Post</li>
    </ol>
    <?php echo $this->session->flashdata('invalid'); ?>
    <?php echo validation_errors(); ?> 
    <?php echo form_open_multipart('admin/post/add/'); ?>
    <div class="form-group">
        <label>Post Title : </label>
        <?php echo form_input(array('class'=>'form-control','type'=>'text','name'=>'post_title','placeholder'=>'Post Title','required'=>'required','value'=>isset($post_title)?($post_title):'')) ?>
    </div>
    <div class="form-group">
        <label>Post Title English : </label>
        <?php echo form_input(array('class'=>'form-control','type'=>'text','name'=>'post_slug','placeholder'=>'Post Title English','required'=>'required','value'=>isset($post_slug)?($post_slug):'')) ?>
    </div>
    <div class="form-group">
        <label>Post Content : </label>
        <?php echo form_textarea(array('class'=>'form-control richtext','name'=>'post_body','placeholder'=>'Post Content','value'=>isset($post_body)?($post_body):'')) ?>
    </div>
    <div class="form-group">
        <label>Featured Image : </label>
        <?php echo form_input(array('type'=>'file','class'=>'form-control','name'=>'post_img','placeholder'=>'Post Image','value'=>'')) ?>
    </div>
    <div class="form-group">
        <label>Post Image 1 : </label>
        <?php echo form_input(array('type'=>'file','class'=>'form-control','name'=>'post_img_1','placeholder'=>'Post Image','value'=>'')) ?>
    </div>
    <div class="form-group">
        <label>Post Image 2 : </label>
        <?php echo form_input(array('type'=>'file','class'=>'form-control','name'=>'post_img_2','placeholder'=>'Post Image','value'=>'')) ?>
    </div>
    <div class="form-group">
        <label>Video URL : </label>
        <?php echo form_input(array('class'=>'form-control','type'=>'text','name'=>'post_video_link','placeholder'=>'Post Video','value'=>isset($post_video_link)?($post_video_link):'')) ?>
    </div>
    <div class="form-group">
        <label>Post Category : </label>
        <select name="category_id" class="form-control">
            <?php 
                foreach($categoryDataset as $category)
                {
                    ?>
            <option value="<?php echo $category->slug ?>"  ><?php echo $category->name ?></option>
            <?php
                }
                
                ?>
        </select>
    </div>
    <div class="form-group">
        <label>Enable Copy Protection : </label>
        <select name="copy_protection" class="form-control">
            
            <option value="1"  >Yes</option>
            <option value="0"  >No</option>
            
        </select>
    </div>
    <div class="form-group">
        <?php echo form_input(array('class'=>'form-control btn-primary','type'=>'submit','value'=>'Publish')) ?>
    </div>
    <?php echo form_close(); ?>
</div>