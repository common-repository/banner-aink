<?php function BannerAinkSettings() { global $options; $options = get_option('BannerAink_option'); ?>
<div class="wrap">
<div class="icon32" id="icon-tools"><br/></div>
<h2><?php echo __('Banner Aink'); ?></h2>

<form method="post" id="mainform" action="">
<table class="widefat fixed" style="margin:25px 0;">
	<thead>
		<tr>
			<th scope="col" width="200px">Banner Aink Settings</th>
			<th scope="col">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="titledesc">Banner Aink Enable:</td>
			<td class="forminp">
				<select name="BannerAink_enable" id="BannerAink_enable" style="min-width:100px;">
					<?php if ($options[BannerAink_enable] == 'yes'){ ?>
						<option value="yes" selected="selected">Yes</option>
						<option value="no">No</option>
					<?php } else if ($options[BannerAink_enable] == 'no'){ ?>
						<option value="yes">Yes</option>
						<option value="no" selected="selected">No</option>
					<?php } else { ?>
						<option value="yes" selected="selected">Yes</option>
						<option value="no">No</option>
					<?php } ?>
				</select>
				<br /><small>If you do not want to show Banner Aink on your site, select "No".</small>
			</td>
		</tr><tr>
			<td class="titledesc">Banner Aink Timeout:</td>
			<td class="forminp">
				<input name="BannerAink_timeout" id="BannerAink_timeout" style="width:100px;" value="<?php echo $options[BannerAink_timeout]; ?>" type="text">
				<br /><small>Milliseconds between slide transitions. For example: "5000" (without quotes).</small>
			</td>
		</tr><tr>
			<td class="titledesc">Banner Aink Animation:</td>
			<td class="forminp">
				<select name="BannerAink_animation" id="BannerAink_animation" style="min-width:100px;">
						<option value="none" <?php if(($options[BannerAink_animation]==''||$options[BannerAink_animation]=='none')){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>none</option>
						<option value="fade" <?php if($options[BannerAink_animation]=='fade'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>fade</option>
						<option value="fadeout" <?php if($options[BannerAink_animation]=='fadeout'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>fadeout</option>
						<option value="scrollUp" <?php if($options[BannerAink_animation]=='scrollUp'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>scrollUp</option>
						<option value="scrollDown" <?php if($options[BannerAink_animation]=='scrollDown'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>scrollDown</option>
						<option value="scrollLeft" <?php if($options[BannerAink_animation]=='scrollLeft'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>scrollLeft</option>
						<option value="scrollRight" <?php if($options[BannerAink_animation]=='scrollRight'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>scrollRight</option>
						<option value="scrollHorz" <?php if($options[BannerAink_animation]=='scrollHorz'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>scrollHorz</option>
						<option value="scrollVert" <?php if($options[BannerAink_animation]=='scrollVert'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>scrollVert</option>
						<option value="slideX" <?php if($options[BannerAink_animation]=='slideX'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>slideX</option>
						<option value="slideY" <?php if($options[BannerAink_animation]=='slideY'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>slideY</option>
						<option value="shuffle" <?php if($options[BannerAink_animation]=='shuffle'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>shuffle</option>
						<option value="turnUp" <?php if($options[BannerAink_animation]=='turnUp'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>turnUp</option>
						<option value="turnDown" <?php if($options[BannerAink_animation]=='turnDown'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>turnDown</option>
						<option value="turnLeft" <?php if($options[BannerAink_animation]=='turnLeft'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>turnLeft</option>
						<option value="turnRight" <?php if($options[BannerAink_animation]=='turnRight'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>turnRight</option>
						<option value="zoom" <?php if($options[BannerAink_animation]=='zoom'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>zoom</option>
						<option value="fadeZoom" <?php if($options[BannerAink_animation]=='fadeZoom'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>fadeZoom</option>
						<option value="blindX" <?php if($options[BannerAink_animation]=='blindX'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>blindX</option>
						<option value="blindY" <?php if($options[BannerAink_animation]=='blindY'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>blindY</option>
						<option value="blindZ" <?php if($options[BannerAink_animation]=='blindZ'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>blindZ</option>
						<option value="growX" <?php if($options[BannerAink_animation]=='growX'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>growX</option>
						<option value="growY" <?php if($options[BannerAink_animation]=='growY'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>growY</option>
						<option value="curtainX" <?php if($options[BannerAink_animation]=='curtainX'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>curtainX</option>
						<option value="curtainY" <?php if($options[BannerAink_animation]=='curtainY'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>curtainY</option>
						<option value="cover" <?php if($options[BannerAink_animation]=='cover'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>cover</option>
						<option value="uncover" <?php if($options[BannerAink_animation]=='uncover'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>uncover</option>
						<option value="toss" <?php if($options[BannerAink_animation]=='toss'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>toss</option>
						<option value="wipe" <?php if($options[BannerAink_animation]=='wipe'){?>selected="selected" style="color:#000;font-weight:bold;display:block;"<?php } ?>>wipe</option>
				</select>
				<br /><small>Choose your transition type.</small>
			</td>
		</tr>
	</tbody>
</table>
<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="<?php get_option($options) ?>" />
<p class="submit bbot"><input name="save" type="submit" value="<?php esc_attr_e("Save Changes"); ?>" /></p>
</form>
</div>

	<div class="wrap"><hr /></div>

<div class="wrap">
<table class="widefat fixed" style="margin:25px 0;">
	<thead>
		<tr>
			<th scope="col" width="200px">Donate for Banner Aink</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="forminp">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ESUG594JDQJMC">
<img alt="" border="0" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/id_ID/i/scr/pixel.gif" width="1" height="1">
<p class="submit bbot"><input type="image" src="https://www.paypalobjects.com/WEBSCR-640-20110401-1/en_GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online."></p>
</form>					
			</td>
		</tr>
	</tbody>
</table>
</div>

<?php } function CreateNewBannerAink() {
global $BannerAink, $wpdb;

// check to prevent php "notice: undefined index" msg
if(isset($_GET['action'])) $theswitch = $_GET['action']; else $theswitch ='';

switch($theswitch) { case 'addBannerAink': ?>

<div class="wrap">
<div class="icon32" id="icon-themes"><br/></div>
<h2><?php _e('Create Banner Aink','k0z3y') ?></h2>

<?php
// check and make sure the form was submitted
if(isset($_POST['submitted'])) {

	 $insert = "INSERT INTO " . $wpdb->prefix . "banner_aink" .
			   " (images, url, title, status, created) " .
			   "VALUES ('" .
					$wpdb->escape($_POST['BannerAink_images']) . "','" .
					$wpdb->escape($_POST['BannerAink_url']) . "','" .
					$wpdb->escape($_POST['BannerAink_title']) . "','" .
					$wpdb->escape($_POST['BannerAink_status']) . "','" .
					gmdate('Y-m-d H:i:s') .
				"')";
	$results = $wpdb->query($insert);

if ($results) : ?>

<?php global $BannerAink_path; ?>
<p style="text-align:center;padding-top:50px;font-size:22px;">Creating your Banner Aink.....<br /><br /><img src="<?php echo $BannerAink_path; ?>/images/loading.gif" alt="" /></p><meta http-equiv="refresh" content="0; URL=?page=BannerAink_new">

<?php endif; } else { ?>

<form method="post" id="mainform" action="">
<table class="widefat fixed" style="margin:25px 0;">
	<thead>
		<tr>
			<th scope="col" width="200px">Banner Aink</th>
			<th scope="col">&nbsp;</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="titledesc">Banner Images URL:</td>
			<td class="forminp">
				<input name="BannerAink_images" id="BannerAink_images" style="width:90%;" type="text">
				<br /><small>Images URL for banner.<br />Example: "http://www.classifindo.com/images/468x60.png" (without quotes).</small>
			</td>
		</tr><tr>
			<td class="titledesc">Banner URL:</td>
			<td class="forminp">
				<input name="BannerAink_url" id="BannerAink_url" style="width:90%;" type="text">
				<br /><small>URL for site of banner.<br />Example: "http://www.classifindo.com" (without quotes).</small>
			</td>
		</tr><tr>
			<td class="titledesc">Banner Title:</td>
			<td class="forminp">
				<input name="BannerAink_title" id="BannerAink_title" style="width:90%;" type="text">
				<br /><small>Title for banner.<br />Example: "Best Classified Ads in Indonesia" (without quotes).</small>
			</td>
		</tr><tr>
			<td class="titledesc">Banner Status:</td>
			<td class="forminp">
				<select name="BannerAink_status" id="BannerAink_status" style="min-width:100px;" class="required">
					<option value="Active" selected="selected">Active</option>
					<option value="Inactive">Inactive</option>
				</select>
				<br /><small>If you do not want this banner live, select "Inactive".</small>
			</td>
		</tr>
	</tbody>
</table>
<p class="submit">
	<input class="btn button-primary" name="save" type="submit" value="<?php _e('Create New Banner', 'k0z3y') ?>" />
		&nbsp;&nbsp;&nbsp;
	<input name="cancel" type="button" onClick="location.href='?page=BannerAink_new'" value="<?php _e('Cancel','k0z3y')?>" />
	<input name="submitted" type="hidden" value="yes" />
</p>
</form>

<?php } ?>
</div>

<?php break; case 'editBannerAink': ?>

<div class="wrap">
<div class="icon32" id="icon-themes"><br/></div>
<h2>Edit Banner Aink</h2>

<?php if(isset($_POST['submitted']) && $_POST['submitted'] == 'yes') {

	$update = "UPDATE " . $wpdb->prefix . "banner_aink SET" .
			  " images = '" . $wpdb->escape($_POST['BannerAink_images']) . "'," .
			  " url = '" . $wpdb->escape($_POST['BannerAink_url']) . "'," .
			  " title = '" . $wpdb->escape($_POST['BannerAink_title']) . "'," .
			  " status = '" . $wpdb->escape($_POST['BannerAink_status']) . "'," .
			  " modified = '" . gmdate('Y-m-d H:i:s') . "'" .
			  " WHERE id ='" . $_GET['id'] ."'";
	$results = $wpdb->get_row($update);

?>
<?php global $BannerAink_path; ?>
<p style="text-align:center;padding-top:50px;font-size:22px;">Saving your changes.....<br /><br /><img src="<?php echo $BannerAink_path; ?>/images/loading.gif" alt="" /></p><meta http-equiv="refresh" content="0; URL=?page=BannerAink_new">

<?php } else { global $wpdb;

	$BannerAink = $wpdb->prepare("SELECT * "
			 . "FROM ". $wpdb->prefix . "banner_aink "
			 . "WHERE id='" . $_GET['id'] ."'");

?>

<form method="post" id="mainform" action="">
<table class="widefat fixed" style="margin:25px 0;">
	<thead>
		<tr>
			<th scope="col" width="200px">Banner Aink</th>
			<th scope="col">&nbsp;</th>
		</tr>
	</thead>
	<tbody>		
		<tr>
			<td class="titledesc">Banner Preview:</td>
			<td class="forminp">
				<?php foreach ($wpdb->get_results($BannerAink) as $Banner) { ?>
					<a href="<?php echo $Banner->url; ?>" target="_blank">
						<img src="<?php echo $Banner->images; ?>" title="<?php echo $Banner->title; ?>" style="max-width:468px;max-height:60px;" />
					</a>
				<?php } ?>
			</td>
		</tr><tr>
			<td class="titledesc">Banner Images URL:</td>
			<td class="forminp">
				<input name="BannerAink_images" id="BannerAink_images" style="width:90%;" type="text" value="<?php foreach ($wpdb->get_results($BannerAink) as $Banner) { ?><?php echo $Banner->images; ?><?php } ?>">
				<br /><small>Images URL for banner.<br />Example: "http://www.classifindo.com/wp-content/themes/classifindo/images/468x60.png" (without quotes).</small>
			</td>
		</tr><tr>
			<td class="titledesc">Banner URL:</td>
			<td class="forminp">
				<input name="BannerAink_url" id="BannerAink_url" style="width:90%;" type="text" value="<?php foreach ($wpdb->get_results($BannerAink) as $Banner) { ?><?php echo $Banner->url; ?><?php } ?>">
				<br /><small>URL for site of banner.<br />Example: "http://www.classifindo.com" (without quotes).</small>
			</td>
		</tr><tr>
			<td class="titledesc">Banner Title:</td>
			<td class="forminp">
				<input name="BannerAink_title" id="BannerAink_title" style="width:90%;" type="text" value="<?php foreach ($wpdb->get_results($BannerAink) as $Banner) { ?><?php echo $Banner->title; ?><?php } ?>">
				<br /><small>Title for banner.<br />Example: "Best Classified Ads in Indonesia" (without quotes).</small>
			</td>
		</tr><tr>
			<td class="titledesc">Banner Status:</td>
			<td class="forminp">
				<select name="BannerAink_status" id="BannerAink_status" style="min-width: 100px;" class="required">
					<?php foreach ($wpdb->get_results($BannerAink) as $Banner) { ?>
						<?php if ($Banner->status == 'Active') { ?>
							<option value="Active" selected="selected">Active</option>
							<option value="Inactive">Inactive</option>
						<?php } else if ($Banner->status == 'Inactive') { ?>
							<option value="Active">Active</option>
							<option value="Inactive" selected="selected">Inactive</option>
						<?php } ?>
					<?php } ?>
				</select>
				<br /><small>If you do not want this banner live, select "Inactive".</small>
			</td>
		</tr>
	</tbody>
</table>

<p class="submit">
	<input class="btn button-primary" name="save" type="submit" value="<?php _e('Save changes','k0z3y') ?>" />
		&nbsp;&nbsp;&nbsp;
	<input name="cancel" type="button" onClick="location.href='?page=BannerAink_new'" value="<?php _e('Cancel','k0z3y') ?>" />
	<input name="submitted" type="hidden" value="yes" />
</p>

</form>

<?php } ?>
</div>

<?php break; case 'delete':

	$delete = "DELETE FROM " . $wpdb->prefix . "banner_aink "
			. "WHERE id = '". $_GET['id'] ."'";
	$wpdb->query($delete);

?>
<?php global $BannerAink_path; ?>
<p style="text-align:center;padding-top:50px;font-size:22px;">Deleting Banner Aink.....<br /><br /><img src="<?php echo $BannerAink_path; ?>/images/loading.gif" alt="" /></p><meta http-equiv="refresh" content="0; URL=?page=BannerAink_new">

<?php break; default: global $BannerAink_path;

	$sql = "SELECT * "
		 . "FROM " . $wpdb->prefix . "banner_aink "
		 . "ORDER BY id desc";
	$results = $wpdb->get_results($sql);

?>

<style type="text/css">
a.edit {
	background:url('<?php echo $BannerAink_path; ?>/images/edit-grey.png') no-repeat;
	display:block;
	width:16px;
	height:16px;
	float:left;
	margin-left:17.6px;
}
a.edit:hover {
	background:url('<?php echo $BannerAink_path; ?>/images/edit.png') no-repeat;
}
a.delete {
	background:url('<?php echo $BannerAink_path; ?>/images/cross-grey.png') no-repeat;
	display:block;
	width:16px;
	height:16px;
	float:left;
	margin-left:5.5px;
}
a.delete:hover {
	background:url('<?php echo $BannerAink_path; ?>/images/cross.png') no-repeat;
}
</style>

<div class="wrap">
<div class="icon32" id="icon-themes"><br/></div>
<h2>Banner Aink&nbsp;<a class="button add-new-h2" href="?page=BannerAink_new&amp;action=addBannerAink">Add New Banner Aink</a></h2>


<table id="tblspacer" class="widefat fixed" style="margin:25px 0;">
	<thead style="width:100%;">
		<tr style="width:100%;">
			<th scope="col" style="width:20px;">&nbsp;</th>
			<th scope="col"><?php _e('Banner Images','k0z3y') ?></th>
			<th scope="col" style="width:150px;"><?php _e('Created on','k0z3y') ?></th>
			<th scope="col" style="width:50px;"><?php _e('Status','k0z3y') ?></th>
			<th scope="col" style="text-align:center;width:70px;"><?php _e('Actions','k0z3y') ?></th>
		</tr>
	</thead>
	<?php if ($results) { $rowclass = ''; $i=1; ?>
	<tbody id="list">
	<?php foreach( $results as $result ) { $rowclass = 'even' == $rowclass ? 'alt' : 'even'; ?>
		<tr class="<?php echo $rowclass ?>">
			<td style="padding-left:10px;"><?php echo $i ?>.</td>
			<td style="padding:10px 5.55px;"><a href="<?php echo ucfirst($result->url) ?>" target="_blank"><img src="<?php echo ucfirst($result->images) ?>" title="<?php echo ucfirst($result->title) ?>" style="max-width:450px;max-height:60px;" /></a></td>
			<td><?php echo mysql2date(get_option('date_format') .' '. get_option('time_format'), $result->created) ?></td>
			<td><?php echo ucfirst($result->status) ?></td>
			<td style="text-align:center">
				<a href="?page=BannerAink_new&amp;action=editBannerAink&amp;id=<?php echo $result->id ?>" class="edit" title="Edit"><span></span></a>&nbsp;&nbsp;&nbsp;<a onclick="return confirmBeforeDelete();" href="?page=BannerAink_new&amp;action=delete&amp;id=<?php echo $result->id ?>" class="delete" title="Delete"><span></span></a>
			</td>
		</tr>
	<?php $i++; } ?>
	</tbody>	
	<?php } else { ?>
		<tr>
			<td colspan="7">No Banner Aink found.</td>
		</tr>
	<?php } ?>

</table>
</div>

<?php } ?>

<script type="text/javascript">
	/* <![CDATA[ */
		function confirmBeforeDelete() { return confirm("Are you sure you want to delete this Banner?"); }
	/* ]]> */
</script>

<?php } ?>