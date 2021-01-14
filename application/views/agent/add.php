<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Agent Add</h3>
            </div>
            <?php echo form_open('agent/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="centre_relais" class="control-label"><span class="text-danger">*</span>Centre</label>
						<div class="form-group">
							<select name="centre_relais" class="form-control">
								<option value="">select centre</option>
								<?php 
								foreach($all_centres as $centre)
								{
									$selected = ($centre['centre_id'] == $this->input->post('centre_relais')) ? ' selected="selected"' : "";

									echo '<option value="'.$centre['centre_id'].'" '.$selected.'>'.$centre['nom_centre'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('centre_relais');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_agent" class="control-label"><span class="text-danger">*</span>Nom Agent</label>
						<div class="form-group">
							<input type="text" name="nom_agent" value="<?php echo $this->input->post('nom_agent'); ?>" class="form-control" id="nom_agent" />
							<span class="text-danger"><?php echo form_error('nom_agent');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="contact" class="control-label"><span class="text-danger">*</span>Contact</label>
						<div class="form-group">
							<input type="text" name="contact" value="<?php echo $this->input->post('contact'); ?>" class="form-control" id="contact" />
							<span class="text-danger"><?php echo form_error('contact');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo $this->input->post('date_created'); ?>" class="has-datetimepicker form-control" id="date_created" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_update" class="control-label">Last Update</label>
						<div class="form-group">
							<input type="text" name="last_update" value="<?php echo $this->input->post('last_update'); ?>" class="has-datetimepicker form-control" id="last_update" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresse" class="control-label">Adresse</label>
						<div class="form-group">
							<textarea name="adresse" class="form-control" id="adresse"><?php echo $this->input->post('adresse'); ?></textarea>
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