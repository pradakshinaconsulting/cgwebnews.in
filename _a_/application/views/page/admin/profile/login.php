<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-4">
                <div class="section-padding">
                    <?php echo $this->session->flashdata('invalid'); ?>
                    <?php echo validation_errors(); ?> 
                    <?php echo form_open('admin/login/'); ?>
                    <div class="form-group">
                        <?php echo form_input(array('class'=>'form-control','name'=>'login_id','placeholder'=>'Email id / Contact No','value'=>isset($login_id)?($login_id):'')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_input(array('class'=>'form-control','type'=>'password','name'=>'password','placeholder'=>'Password','value'=>isset($password)?($password):'')) ?>
                    </div>
                    <div class="form-group">
                        <?php echo form_input(array('class'=>'form-control btn-primary','type'=>'submit','value'=>'Login')) ?>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</section>