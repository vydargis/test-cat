<?php if (!defined('UPDRAFTPLUS_DIR')) die('No direct access allowed'); ?>

<div id="updraft-upload-modal" title="UpdraftPlus - <?php _e('Upload backup', 'updraftplus');?>">
	<p><?php _e("Select the remote storage destinations you want to upload this backup set to", 'updraftplus');?>:</p>
	<form id="updraft_upload_form" method="post">
		<fieldset>
			<input type="hidden" name="backup_timestamp" value="0" id="updraft_upload_timestamp">
			<input type="hidden" name="backup_nonce" value="0" id="updraft_upload_nonce">

			<?php
				global $updraftplus;
				
				$service = $updraftplus->just_one(UpdraftPlus_Options::get_updraft_option('updraft_service'));
				if (is_string($service)) $service = array($service);
				if (!is_array($service)) $service = array();

				foreach ($service as $key => $value) {
					echo '<input class="updraft_remote_storage_destination" id="updraft_remote_'.$value.'" checked="checked" type="checkbox" name="updraft_remote_storage_destination_'. $value . '" value="'.$value.'"> <label for="updraft_remote_'.$value.'">'.$updraftplus->backup_methods[$value].'</label><br>';
				}
			?>
		</fieldset>
	</form>
	<p id="updraft-upload-modal-error"></p>
</div>