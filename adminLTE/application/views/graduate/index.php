<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Graduates Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('graduate/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Name</th>
						<th>Email</th>
						<th>Age</th>
						<th>Message</th>
						<th>Added</th>
						<th>Graduated On</th>
						<th>License No</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($graduates as $g){ ?>
                    <tr>
						<td><?php echo $g['id']; ?></td>
						<td><?php echo $g['name']; ?></td>
						<td><?php echo $g['email']; ?></td>
						<td><?php echo $g['age']; ?></td>
						<td><?php echo $g['message']; ?></td>
						<td><?php echo $g['added']; ?></td>
						<td><?php echo $g['graduated_on']; ?></td>
						<td><?php echo $g['license_no']; ?></td>
						<td>
                            <a href="<?php echo site_url('graduate/edit/'.$g['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('graduate/remove/'.$g['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
