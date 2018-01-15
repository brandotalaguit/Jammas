
<?php echo validation_errors(); ?>
<?php echo form_open(site_url('computation/'.$this->uri->segment(2).'/edit'), array('class' =>'form-horizontal', 'role' => 'form')); ?>

<div class="row">
	<div class="col-sm-7">
		
		<div class="form-group">
			<label for="computation" class="col-sm-3 control-label">Computation</label>
			<div class="col-sm-7">
				<input type="text" name="computation" id="computation" class="form-control" placeholder="Computation" value="<?php echo set_value('computation', $computation->computation);?>">
			</div>
		</div>		

		<div class="form-group">
			<label for="remarks" class="col-sm-3 control-label">Remarks</label>
			<div class="col-sm-7">
				<input type="text" name="remarks" id="remarks" class="form-control" placeholder="Remarks" value="<?php echo set_value('remarks', $computation->remarks);?>">
			</div>
		</div>

		<div class="form-group">
			<label for="" class="col-sm-3"></label>
			<div class="col-sm-7">
			  <div class="btn-group">
				<button type="submit" name="btnAdd" value="submit" class="btn btn-primary btn-lg"><strong>SAVE CHANGES</strong></button>
				<a href="<?php echo site_url('computation')?>" class="btn btn-default btn-lg">Cancel</a>
			  </div>
			</div>			
		</div>

	</div>

</div>

<?php echo form_close(); ?>
