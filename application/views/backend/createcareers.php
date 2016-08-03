<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Create careers</h4>
</div>
<form class='col s12' method='post' action='<?php echo site_url("site/createcareerssubmit");?>' enctype= 'multipart/form-data'>
<div class="row">
<div class="input-field col s6">
<label for="title">title</label>
<input type="text" id="title" name="title" value='<?php echo set_value('title');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s12">
<textarea name="experience" class="materialize-textarea" length="400"><?php echo set_value( 'experience');?></textarea>
<label>experience</label>
</div>
</div>
<div class="row">
<div class="input-field col s12">
<textarea name="qualification" class="materialize-textarea" length="400"><?php echo set_value( 'qualification');?></textarea>
<label>qualification</label>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="openings">openings</label>
<input type="text" id="openings" name="openings" value='<?php echo set_value('openings');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="openings">order</label>
<input type="text" id="order" name="order" value='<?php echo set_value('order');?>'>
</div>
</div>
<div class="row">
<div class="input-field col s12">
<textarea name="area" class="materialize-textarea" length="400"><?php echo set_value( 'area');?></textarea>
<label>area</label>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<button type="submit" class="btn btn-primary waves-effect waves-light blue darken-4">Save</button>
<a href="<?php echo site_url("site/viewcareers"); ?>" class="btn btn-secondary waves-effect waves-light red">Cancel</a>
</div>
</div>
</form>
</div>
