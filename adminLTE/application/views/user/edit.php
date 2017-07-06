<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/edit/'.$user['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="graduated" value="1" <?php echo ($user['graduated']==1 ? 'checked="checked"' : ''); ?> id='graduated' />
							<label for="graduated" class="control-label">Graduated</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" class="form-control" id="email" />
							<span class="text-danger"><?php echo form_error('email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fname" class="control-label"><span class="text-danger">*</span>Fname</label>
						<div class="form-group">
							<input type="text" name="fname" value="<?php echo ($this->input->post('fname') ? $this->input->post('fname') : $user['fname']); ?>" class="form-control" id="fname" />
							<span class="text-danger"><?php echo form_error('fname');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lname" class="control-label"><span class="text-danger">*</span>Lname</label>
						<div class="form-group">
							<input type="text" name="lname" value="<?php echo ($this->input->post('lname') ? $this->input->post('lname') : $user['lname']); ?>" class="form-control" id="lname" />
							<span class="text-danger"><?php echo form_error('lname');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="phone" class="control-label"><span class="text-danger">*</span>Phone</label>
						<div class="form-group">
							<input type="text" name="phone" value="<?php echo ($this->input->post('phone') ? $this->input->post('phone') : $user['phone']); ?>" class="form-control" id="phone" />
							<span class="text-danger"><?php echo form_error('phone');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="added_on" class="control-label">Added On</label>
						<div class="form-group">
							<input type="text" name="added_on" value="<?php echo ($this->input->post('added_on') ? $this->input->post('added_on') : $user['added_on']); ?>" class="form-control" id="added_on" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="age" class="control-label"><span class="text-danger">*</span>Age</label>
						<div class="form-group">
							<input type="text" name="age" value="<?php echo ($this->input->post('age') ? $this->input->post('age') : $user['age']); ?>" class="form-control" id="age" />
							<span class="text-danger"><?php echo form_error('age');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="enrollment_id" class="control-label"><span class="text-danger">*</span>Enrollment Id</label>
						<div class="form-group">
							<input type="text" name="enrollment_id" value="<?php echo ($this->input->post('enrollment_id') ? $this->input->post('enrollment_id') : $user['enrollment_id']); ?>" class="form-control" id="enrollment_id" />
							<span class="text-danger"><?php echo form_error('enrollment_id');?></span>
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