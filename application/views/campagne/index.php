<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Campagnes Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('campagne/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Camp Id</th>
						<th>Designation</th>
						<th>Type Campagne</th>
						<th>Date Debut</th>
						<th>Date Fin</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>Description</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($campagnes as $c){ ?>
                    <tr>
						<td><?php echo $c['camp_id']; ?></td>
						<td><?php echo $c['designation']; ?></td>
						<td><?php echo $c['type_campagne']; ?></td>
						<td><?php echo $c['date_debut']; ?></td>
						<td><?php echo $c['date_fin']; ?></td>
						<td><?php echo $c['date_created']; ?></td>
						<td><?php echo $c['last_update']; ?></td>
						<td><?php echo $c['description']; ?></td>
						<td>
                            <a href="<?php echo site_url('campagne/edit/'.$c['camp_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('campagne/remove/'.$c['camp_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
