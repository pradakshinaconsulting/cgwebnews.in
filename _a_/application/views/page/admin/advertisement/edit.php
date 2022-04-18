<div class="container-fluid">
    <h1 class="mt-4">Advertisement Updates</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboatd/') ?>">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="<?= base_url('admin/advertisement/') ?>">Advertisement</a></li>
        <li class="breadcrumb-item active">Edit</li>
    </ol>
    <?php echo $this->session->flashdata('invalid'); ?>
    <?php echo validation_errors(); ?> 
    <?php echo form_open_multipart('admin/advertisement/edit/'.$adsDataset->id.'/'); ?>

    <div class="form-group">
        <h2><?php echo $adsDataset->title ?></h2>
        
    </div>
    <div class="form-group">
        <img src="<?= base_url('store/'.$adsDataset->ads_img) ?>" style="max-height: 400px;"/>
    </div>
    
    <div class="form-group">
        <select name="status" class="form-control">
            <option value="1">Published</option>
            <option value="2">On Hold</option>
            <option value="3">Delete</option>
            
        </select>
    </div>
    <div class="form-group">
        <label>Till Date : </label>
        <?php echo form_input(array('class'=>'form-control','type'=>'date','name'=>'till_date','placeholder'=>'Till','required'=>'required','value'=>isset($adsDataset->till_date)?($adsDataset->till_date):'')) ?>
    </div>
    
    <div class="form-group">
                <?php echo form_input(array('class'=>'form-control btn-primary','type'=>'submit','value'=>'Update')) ?>
            </div>

    <?php echo form_close(); ?>
</div>