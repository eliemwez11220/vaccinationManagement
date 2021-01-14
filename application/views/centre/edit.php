<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Centre Edit</h3>
            </div>
			<?php echo form_open('centre/edit/'.$centre['centre_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nom_centre" class="control-label"><span class="text-danger">*</span>Nom Centre</label>
						<div class="form-group">
							<input type="text" name="nom_centre" value="<?php echo ($this->input->post('nom_centre') ? $this->input->post('nom_centre') : $centre['nom_centre']); ?>" class="form-control" id="nom_centre" />
							<span class="text-danger"><?php echo form_error('nom_centre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="contact" class="control-label"><span class="text-danger">*</span>Contact</label>
						<div class="form-group">
							<input type="text" name="contact" value="<?php echo ($this->input->post('contact') ? $this->input->post('contact') : $centre['contact']); ?>" class="form-control" id="contact" />
							<span class="text-danger"><?php echo form_error('contact');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="medecin_responsable" class="control-label"><span class="text-danger">*</span>Medecin Responsable</label>
						<div class="form-group">
							<input type="text" name="medecin_responsable" value="<?php echo ($this->input->post('medecin_responsable') ? $this->input->post('medecin_responsable') : $centre['medecin_responsable']); ?>" class="form-control" id="medecin_responsable" />
							<span class="text-danger"><?php echo form_error('medecin_responsable');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ville_centre" class="control-label">Ville Centre</label>
						<div class="form-group">
							<input type="text" name="ville_centre" value="<?php echo ($this->input->post('ville_centre') ? $this->input->post('ville_centre') : $centre['ville_centre']); ?>" class="form-control" id="ville_centre" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo ($this->input->post('date_created') ? $this->input->post('date_created') : $centre['date_created']); ?>" class="has-datetimepicker form-control" id="date_created" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_update" class="control-label">Last Update</label>
						<div class="form-group">
							<input type="text" name="last_update" value="<?php echo ($this->input->post('last_update') ? $this->input->post('last_update') : $centre['last_update']); ?>" class="has-datetimepicker form-control" id="last_update" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="adresse" class="control-label">Adresse</label>
						<div class="form-group">
							<textarea name="adresse" class="form-control" id="adresse"><?php echo ($this->input->post('adresse') ? $this->input->post('adresse') : $centre['adresse']); ?></textarea>
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