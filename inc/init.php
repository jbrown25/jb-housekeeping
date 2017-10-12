<?php
	require_once INC . '/post-types.php';
	require_once INC . '/custom-header.php';
	require_once INC . '/customizer.php';
	require_once INC . '/template-tags.php';
	require_once INC . '/template-functions.php';
	require_once INC . '/page-functions.php';
	require_once INC . '/widgets/init-widgets.php';
	require_once INC . '/shortcodes.php';

	if ( defined( 'JETPACK__VERSION' ) ) {
		require_once INC . '/jetpack.php';
	}
