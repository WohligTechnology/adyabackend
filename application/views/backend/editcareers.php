<div class="row">
<div class="col s12">
<h4 class="pad-left-15 capitalize">Edit careers</h4>
</div>
</div>
<div class="row">
<form class='col s12' method='post' action='<?php echo site_url("site/editcareerssubmit");?>' enctype= 'multipart/form-data'>
<input type="hidden" id="normal-field" class="form-control" name="id" value="<?php echo set_value('id',$before->id);?>" style="display:none;">
<div class="row">
<div class="input-field col s6">
<label for="title">title</label>
<input type="text" id="title" name="title" value='<?php echo set_value('title',$before->title);?>'>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<label>experience</label>
<textarea name="experience" placeholder="Enter text ..."><?php echo set_value( 'experience',$before->experience);?></textarea>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<label>qualification</label>
<textarea name="qualification" placeholder="Enter text ..."><?php echo set_value( 'qualification',$before->qualification);?></textarea>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="openings">openings</label>
<input type="text" id="openings" name="openings" value='<?php echo set_value('openings',$before->openings);?>'>
</div>
</div>
<div class="row">
<div class="input-field col s6">
<label for="openings">order</label>
<input type="text" id="order" name="order" value='<?php echo set_value('order',$before->order);?>'>
</div>
</div>
<div class="row">
<div class="col s12 m6">
<label>area</label>
<textarea name="area" placeholder="Enter text ..."><?php echo set_value( 'area',$before->area);?></textarea>
</div>
</div>
<div class="row">
<div class="col s6">
<button type="submit" class="btn btn-primary waves-effect waves-light  blue darken-4">Save</button>
<a href='<?php echo site_url("site/viewcareers"); ?>' class='btn btn-secondary waves-effect waves-light red'>Cancel</a>
</div>
</div>
</form>
</div>
