<form class="form-inline" role="form" method="post" action="<?php site_url('deduction_category') ?>">

			<div class="input-group">
				<div class="col-sm-3">
	            <label for="date_filter" class="control-label pull-right" style="margin-top:7px">Date Filter</label>
	          	</div>
	            <input type="date" class="form-control" name="date_start" id="date_start" placeholder="Date Start" style="display:inline-block;width:38%">
	            <input type="date" class="form-control" name="date_end" id="date_end" placeholder="Date End" style="display:inline-block;width:37%">
	            <span class="input-group-btn">
	                <button class="btn btn-default" name="btn_filter" type="submit" value="Search"><span class="fa fa-search"></span></button>
	            </span>
	        </div>
	     
</form>