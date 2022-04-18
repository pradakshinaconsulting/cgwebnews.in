<div class="container-fluid">
    <h1 class="mt-4">Add Advertisement</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboatd/') ?>">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('admin/advertisement/') ?>">Advertisement</a></li>
        <li class="breadcrumb-item active">Add</li>
    </ol>

    <?php echo $this->session->flashdata('invalid'); ?>
    <?php echo validation_errors(); ?> 
    <?php echo form_open_multipart('admin/advertisement/add/'); ?>
    <div class="form-group">
        <label>Ads Title : </label>
        <?php echo form_input(array('class'=>'form-control','type'=>'text','name'=>'title','placeholder'=>'Ads Title','required'=>'required','value'=>isset($title)?($title):'')) ?>
    </div>
    <div class="form-group">
        <label>Area : </label>
        <select name="area" class="form-control">
            <option value="page-top">Page Top</option>
            <option value="page-top-two">Page Top Two</option>
            <option value="page-bottom">Page Bottom</option>
            <option value="side-top">Side Top</option>
            <option value="side-top-two">Side Top Two</option>
            <option value="side-bottom">Side Bottom</option>
            <option value="content-bottom">Content Bottom</option>
            <option value="content-bottom-two">Content Bottom Two</option>
            <option value="content-bottom-three">Content Bottom Three</option>
            <option value="content-bottom-four">Content Bottom Four</option>
            <option value="back-screen">Back Screen</option>
            <option value="cube-rotate">Cube Rotate</option>
            <option value="app-top">App Top</option>
            <option value="app-bottom">App Bottom</option>
            
        </select>
    </div>
    <div class="form-group">
        <label>Image : </label>
        <?php echo form_input(array('type'=>'file','class'=>'form-control','name'=>'ads_img','placeholder'=>'Ads Image','value'=>'')) ?>
    </div>
    <div class="form-group">
        <label>Till Date : </label>
        <?php echo form_input(array('class'=>'form-control','type'=>'date','name'=>'till_date','placeholder'=>'Till','required'=>'required','value'=>isset($till_date)?($till_date):'')) ?>
    </div>
    
    <div class="form-group">
        <?php echo form_input(array('class'=>'form-control btn-primary','type'=>'submit','value'=>'Publish')) ?>
    </div>
    
    <?php echo form_close(); ?>
</div>