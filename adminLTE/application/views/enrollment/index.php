<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Enrollments Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('enrollment/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>DriverName</th>
						<th>Driverlicense</th>
						<th>Date</th>
						<th>Graduate Date</th>
						<th>Enrolled On</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($enrollments as $e){ ?>
                    <tr>
						<td><?php echo $e['id']; ?></td>
						<td><?php echo $e['driverName']; ?></td>
						<td><?php echo $e['driverlicense']; ?></td>
						<td><?php echo $e['date']; ?></td>
						<td><?php echo $e['graduate_date']; ?></td>
						<td><?php echo $e['enrolled_on']; ?></td>
						<td>
                            <a href="<?php echo site_url('enrollment/edit/'.$e['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('enrollment/remove/'.$e['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
