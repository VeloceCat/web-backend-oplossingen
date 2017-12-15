<?php

	session_start();

	function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}

	$logout	=	User::logout();

	if ( $logout )
	{
		$logoutMessage	=	new Message('success', 'U bent uitgelogd. Tot de volgende keer!');
		header( 'location: login-form.php' );
	}

?>
