<?php /* Template Name: Password Reset Form */ global $wpdb, $current_user; get_currentuserinfo(); $user_ID  = $current_user->ID;
if ($user_ID) { //show only to logged in users
 
$redirect_url = $_GET['redirect_to'];
$check_val   = 'wp-admin';
$pos = strpos($redirect_url, $check_val);
if ($pos === false) {
 $redirect_url = $_GET['redirect_to'];
} else {
$site_url = get_site_url();
 $redirect_url = $site_url;
} ?><form class="form-horizontal user_form" id="wp_reset_password" method="post" action=""><div class="form-group">
<label class="control-label col-sm-3 col-xs-12">New Password:</label>
 
<div class="col-sm-9 col-xs-12">
  <input class="form-control" value="" name="resetnewpass" id="resetnewpass" type="password">
</div>
 
 </div>
 
<div class="form-group">
<label class="control-label col-sm-3 col-xs-12">Confirm Password:</label>
 
<div class="col-sm-9 col-xs-12">
  <input class="form-control" value="" name="restnewcpass" id="restnewcpass" type="password">
</div>
 
 </div>
 
<div class="form-group"><div class="col-sm-offset-3 col-sm-9 col-xs-12"><div class="formbtn">
 ;
  <input type="submit" id="resetsubmitbtn" class="newreset_password" name="submit" value="Update Password">
  </div>
</div></div></form>