<?php
/*
Plugin Name: Sample User Directory
Plugin URI: http://stephanieleary.com/wordpress/plugins/sample-user-directory/
Description: Creates a directory of the site's users.
Version: 1.0
License: GPLv2
Author: Shohrab Hossain
Author URI: http://stephanieleary.com/
*/


function edu_contact_methods( $contactmethods ) {
 // Add some fields
 $contactmethods['title'] = 'Title';
 $contactmethods['phone'] = 'Phone Number';
 $contactmethods['twitter'] = 'Twitter Name (no @)';

 return $contactmethods;
}
add_filter( 'user_contactmethods', 'edu_contact_methods', 10, 1 );
/*------------------------------------*/
function edu_get_users() {
 $blogusers = get_users(array(
 'fields' => 'all_with_meta',
 'order' => 'ASC',
 'orderby' => 'nicename',
 ));
usort($blogusers, 'edu_user_sort');
 return $blogusers;
}
function edu_user_sort( $a, $b ) {
 return strcmp( $a->last_name, $b->last_name );
}

/*------------------------------------*/
function edu_users_table( $echo = true ) {
 $users = edu_get_users();
 $output = '<table cellspacing="1" id="user-directory">
 <thead>
 <tr>
 <th>'.__('Name', 'sample-user-directory' ).'</th>';
 $output .= '<th>'.__('Title', 'sample-user-directory' ).'</th>';
 $output .= '<th>'.__('Phone', 'sample-user-directory' ).'</th>';
 $output .= '<th>'.__('Email', 'sample-user-directory' ).'</th>';
 $output .= '<th>'.__('Twitter', 'sample-user-directory' ).'</th>';
 $output .= '</tr>
 </thead>
 <tbody>';

 foreach ($users as $user) {

 $name = join( ', ', array($user->first_name, $user->last_name) );
 if ( !empty( $user->user_url ) )
 $name = '<a href="'.esc_url( $user->user_url ).'">'.esc_html( $name ).'</a>';

 $output .= '<tr class="vcard" id="' . esc_attr( $user->user_nicename ) .'">';
 $output .= '<td class="fn uid">'.$name.'</td>';
 $output .= '<td class="title">' . esc_html($user->title) .'</td>';
 $output .= '<td class="tell">' . esc_html($user->phone) .'</td>';
 $output .= '<td class="email">';
 $output .= '<a href="mailto:' . esc_attr($user->user_email) .'">';
 $output .= esc_html($user->user_email) .'</a></td>';
 $output .= '<td class="twitter">';
 if ( !empty( $user->twitter ) )
 $output .= '<a href="http://twitter.com/'.esc_attr($user->twitter).'">@'
. esc_html($user->twitter) . '</a>';
 $output .= '</td>';
 $output .= '</tr>';
 }
 $output .= '</tbody>
 </table>';

 if ($echo) {
 echo $output;
 return;
 }

 return $output;
}

function edu_users_table_shortlink( $atts = null, $content = null ) {
 $content .= edu_users_table( false );
 return $content;
}
add_shortcode( 'users', 'edu_users_table_shortlink' );

add_action('admin_menu', 'edu_add_pages');
function edu_add_pages() {
 add_options_page( 'User Profile Visibility', 'User Profile Visibility',
'manage_options', 'edu_settings', 'edu_settings_screen' );
 register_setting( 'edu_settings', 'edu_settings_group', 'edu_settings_validate');
}
function edu_settings_screen() {
?>
<div class="wrap">
 <form method="post" id="sample_user_directory" action="options.php">
 <?php
 settings_fields('edu_settings_group');
 $options = get_option('edu_settings');
 if (empty($options))
 $options = array(
 'user_email' => '1',
 'user_url' => '1',
 'title' => '1',
 'phone' => '1',
 'twitter' => '1',
 );
 if ( current_user_can( 'manage_options' ) ) {
 ?>
 <h2><?php _e('User Profile Visibility' ); ?></h2>
 <p><?php _e('Please choose which profile fields should be visible in the user 
directory.'); ?></p>

 <!--form fields will go here -->
 <p class="submit">
 <input type="submit" value="<?php esc_attr_e( 'Update Options' ); ?>" class="
button-primary" />
 </p>

 <?php } // if current_user_can() ?>
 </form>
</div>
<?php
}
?>