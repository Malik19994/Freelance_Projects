<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Enrollment Add</h3>
            </div>
            <?php echo form_open('enrollment/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="driverName" class="control-label"><span class="text-danger">*</span>DriverName</label>
						<div class="form-group">
							<input type="text" name="driverName" value="<?php echo $this->input->post('driverName'); ?>" class="form-control" id="driverName" />
							<span class="text-danger"><?php echo form_error('driverName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="driverlicense" class="control-label"><span class="text-danger">*</span>Driverlicense</label>
						<div class="form-group">
							<input type="text" name="driverlicense" value="<?php echo $this->input->post('driverlicense'); ?>" class="form-control" id="driverlicense" />
							<span class="text-danger"><?php echo form_error('driverlicense');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label"><span class="text-danger">*</span>Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo $this->input->post('date'); ?>" class="has-datetimepicker form-control" id="date" />
							<span class="text-danger"><?php echo form_error('date');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="graduate_date" class="control-label"><span class="text-danger">*</span>Graduate Date</label>
						<div class="form-group">
							<input type="text" name="graduate_date" value="<?php echo $this->input->post('graduate_date'); ?>" class="has-datepicker form-control" id="graduate_date" />
							<span class="text-danger"><?php echo form_error('graduate_date');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="enrolled_on" class="control-label">Enrolled On</label>
						<div class="form-group">
							<input type="text" name="enrolled_on" value="<?php echo $this->input->post('enrolled_on'); ?>" class="has-datetimepicker form-control" id="enrolled_on" />
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