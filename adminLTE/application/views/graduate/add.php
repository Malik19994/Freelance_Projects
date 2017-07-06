<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Graduate Add</h3>
            </div>
            <?php echo form_open('graduate/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="name" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" class="form-control" id="name" />
							<span class="text-danger"><?php echo form_error('name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="age" class="control-label"><span class="text-danger">*</span>Age</label>
						<div class="form-group">
							<input type="text" name="age" value="<?php echo $this->input->post('age'); ?>" class="form-control" id="age" />
							<span class="text-danger"><?php echo form_error('age');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="message" class="control-label"><span class="text-danger">*</span>Message</label>
						<div class="form-group">
							<input type="text" name="message" value="<?php echo $this->input->post('message'); ?>" class="form-control" id="message" />
							<span class="text-danger"><?php echo form_error('message');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="added" class="control-label">Added</label>
						<div class="form-group">
							<input type="text" name="added" value="<?php echo $this->input->post('added'); ?>" class="form-control" id="added" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="graduated_on" class="control-label"><span class="text-danger">*</span>Graduated On</label>
						<div class="form-group">
							<input type="text" name="graduated_on" value="<?php echo $this->input->post('graduated_on'); ?>" class="form-control" id="graduated_on" />
							<span class="text-danger"><?php echo form_error('graduated_on');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="license_no" class="control-label"><span class="text-danger">*</span>License No</label>
						<div class="form-group">
							<input type="text" name="license_no" value="<?php echo $this->input->post('license_no'); ?>" class="form-control" id="license_no" />
							<span class="text-danger"><?php echo form_error('license_no');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>