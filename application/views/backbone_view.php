<script type="text/javascript" src="assets/bb-js/jquery-2.0.3.min.js"></script>
<script type="text/javascript">
	function edit(element) {
	var parent=$(element).parent().parent();
	var sibl=$(element).siblings();
	//var placeholder=$(parent).find('.text-info').text();
	//hide label
	$(parent).find('label').hide();
	//show input, set placeholder
	var input=$(parent).find('.input-medium');
	$(input).show();
	$(element).hide();
	$(sibl).show();
	//$(input).attr('placeholder', placeholder);
	}

	function editField(element){

	}

	function editField(element){
		
	}
</script>

<table class="control-group">
	<tr>
		<td>
			<label style="float: left;" for="name" class="control-label"><p class="text-info"><?php echo $userdata['name']; ?><i class="icon-star"></i></p></label>
			<input style="float: left; display:none;" type="text" placeholder='<?php echo $userdata['name']; ?>' class="input-medium" >
		</td>
		<td class="controls">
			<a href="#" class="editButton" onclick="edit(this);">Edit</a>
			<a href="#" style="float: left; display:none;" onclick="editField(this);">EditThis</a>
			<a href="#" style="float: left; display:none;" onclick="cancleFeild(this);">Cancle</a>
		</td>
	</tr>
	<tr>
		<td><?php $gender=array('1'=>'Male','2'=>'Female','3'=>'Other') ?>
			<label style="float: left;" for="name" class="control-label"><p class="text-info"><?php echo $gender[$userdata['gender']]; ?><i class="icon-star"></i></p></label>
			<select class="input-medium" style="float: left; display:none;" >
			<?php foreach ($gender as $key => $value) { ?>
				<option value='<?php echo $key ?>' <?php if($userdata['gender']==$key){ ?> selected='selected' <?php } ?> ><?php echo $value ?></option>
			<?php } ?>
			</select>
		</td>
		<td class="controls">
			<a href="#" onclick="edit(this);">Edit</a>
			<a href="#" style="float: left; display:none;" onclick="editField(this);">EditThis</a>
			<a href="#" style="float: left; display:none;" onclick="cancleFeild(this);">Cancle</a>
		</td>
	</tr>
</table>