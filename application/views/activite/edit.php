<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Activite Edit</h3>
            </div>
			<?php echo form_open('activite/edit/'.$activite['acti_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="centre_relais" class="control-label">Centre</label>
						<div class="form-group">
							<select name="centre_relais" class="form-control">
								<option value="">select centre</option>
								<?php 
								foreach($all_centres as $centre)
								{
									$selected = ($centre['centre_id'] == $activite['centre_relais']) ? ' selected="selected"' : "";

									echo '<option value="'.$centre['centre_id'].'" '.$selected.'>'.$centre['nom_centre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="vaccin_sid" class="control-label">Vaccin</label>
						<div class="form-group">
							<select name="vaccin_sid" class="form-control">
								<option value="">select vaccin</option>
								<?php 
								foreach($all_vaccins as $vaccin)
								{
									$selected = ($vaccin['vacc_id'] == $activite['vaccin_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$vaccin['vacc_id'].'" '.$selected.'>'.$vaccin['nom'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom" class="control-label"><span class="text-danger">*</span>Nom</label>
						<div class="form-group">
							<input type="text" name="nom" value="<?php echo ($this->input->post('nom') ? $this->input->post('nom') : $activite['nom']); ?>" class="form-control" id="nom" />
							<span class="text-danger"><?php echo form_error('nom');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="type_activite" class="control-label">Type Activite</label>
						<div class="form-group">
							<input type="text" name="type_activite" value="<?php echo ($this->input->post('type_activite') ? $this->input->post('type_activite') : $activite['type_activite']); ?>" class="form-control" id="type_activite" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_debut" class="control-label"><span class="text-danger">*</span>Date Debut</label>
						<div class="form-group">
							<input type="text" name="date_debut" value="<?php echo ($this->input->post('date_debut') ? $this->input->post('date_debut') : $activite['date_debut']); ?>" class="has-datepicker form-control" id="date_debut" />
							<span class="text-danger"><?php echo form_error('date_debut');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_fin" class="control-label"><span class="text-danger">*</span>Date Fin</label>
						<div class="form-group">
							<input type="text" name="date_fin" value="<?php echo ($this->input->post('date_fin') ? $this->input->post('date_fin') : $activite['date_fin']); ?>" class="has-datepicker form-control" id="date_fin" />
							<span class="text-danger"><?php echo form_error('date_fin');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo ($this->input->post('date_created') ? $this->input->post('date_created') : $activite['date_created']); ?>" class="has-datetimepicker form-control" id="date_created" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_update" class="control-label">Last Update</label>
						<div class="form-group">
							<input type="text" name="last_update" value="<?php echo ($this->input->post('last_update') ? $this->input->post('last_update') : $activite['last_update']); ?>" class="has-datetimepicker form-control" id="last_update" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo ($this->input->post('observation') ? $this->input->post('observation') : $activite['observation']); ?></textarea>
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