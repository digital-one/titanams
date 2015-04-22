<?php
add_action("admin_menu", "setup_theme_admin_menus");
//enqueue the admin css styles


function setup_theme_admin_menus() {
    add_menu_page('Theme settings', 'Theme Settings', 'manage_options', 
        'theme_settings', 'theme_settings_page');
         
    add_submenu_page('theme_settings', 
        'Footer', 'Footer', 'manage_options', 
        'footer', 'theme_footer_settings'); 
}

function save_theme_settings(){
	$facebook_url = esc_attr($_POST["facebook_url"]);  
	$twitter_url = esc_attr($_POST["twitter_url"]); 
	$linkedin_url = esc_attr($_POST["linkedin_url"]);  
	$site_logo_url = esc_attr($_POST["site_logo_url"]);
	$site_logo_attachment_id = esc_attr($_POST["site_logo_attachment_id"]);
	update_option("facebook_url", $facebook_url);
	update_option("twitter_url", $twitter_url);
	update_option("linkedin_url", $linkedin_url);
	update_option("site_logo_url", $site_logo_url);
	update_option("site_logo_attachment_id", $site_logo_attachment_id);
}
// We also need to add the handler function for the top level menu
function theme_settings_page() {
    echo "Settings page";
}

function theme_footer_settings(){
	$london_tel = get_option("london_tel");
	$harrogate_tel = get_option("harrogate_tel");
	
	?>
	<div class="wrap">
        <?php screen_icon('themes'); ?> <h2>Footer</h2>
 
        <form method="POST" action="">
            <table class="form-table">
                <tr valign="top">
                    <th scope="row">
                        <label for="facebook_url">
                            Facebook:
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="facebook_url" size="46" value="<?php echo $facebook_url;?>"  />
                    </td>
                </tr>
                 <tr valign="top">
                    <th scope="row">
                        <label for="twitter_url">
                            Twitter:
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="twitter_url" size="46"  value="<?php echo $twitter_url;?>"  />
                    </td>
                </tr>
                 <tr valign="top">
                    <th scope="row">
                        <label for="linkedin_url">
                            LinkedIn:
                        </label> 
                    </th>
                    <td>
                        <input type="text" name="linkedin_url" size="46" value="<?php echo $linkedin_url;?>"  />
                    </td>
                </tr>
               
                 <tr valign="top">
                    <th scope="row">
                        <label for="upload_image">
                            Logo:
                        </label> 
                    </th>
                   <td>
                   	<?php
                   	$src='';
                   	$display='none';
                   	if($site_logo_attachment_id):
                   		$display="block";
                   		list($src,$w,$h) = wp_get_attachment_image_src($site_logo_attachment_id,'square-tn');
                   		endif;
 
                   	?>
<img src="<?php echo $src ?>" class="attachment-icon" style="display:<?php echo $display?>;" /><br />

                   	<label for="upload_image">
				<input class="attachment-url" type="text" size="36" name="site_logo_url" value="<?php echo $site_logo_url;?>" />
				<input class="attachment-select" type="button" value="Upload Image" />
				<br />Enter an URL or upload an image for the banner.
				</label><input type="hidden" class="attachment-id" name="site_logo_attachment_id" value="<?php echo $site_logo_attachment_id;?>" /></td>
                </tr>
                <tr><td>
    <input type="submit" value="Save settings" class="button-primary"/></td></tr>
            </table>
            <input type="hidden" name="update_settings" value="Y" />
        </form>
    </div>
    <?php
}
?>