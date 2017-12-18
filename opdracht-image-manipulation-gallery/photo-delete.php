<?php
	session_start();

	function __autoload( $classname )
	{
		require_once( $classname . '.php' );
	}

	$connection 	=	 new PDO( 'mysql:host=localhost;dbname=opdracht-image-manipulation', 'vincent', 'vincent' );

	if ( isset( $_POST[ 'submit' ] ) )
	{
		$filename	=	$_POST[ 'file_name' ];

		$db = new Database( $connection );

		$deleteQuery	=	'UPDATE gallery
								SET is_archived = 1
								WHERE id = :id';

		$deleteTokens	=	array( ':id' => $_POST[ 'id' ] );

		$delete	=	$db->query( $deleteQuery, $deleteTokens );

		# MOVE TO BIN
		$moveOriginal 	=	rename( 'uploads/img/' . $filename, 'uploads/bin/' . $filename );

		$moveThumbnail 	=	rename( 'uploads/img/thumbnails/thumbnail-' . $filename, 'uploads/bin/thumbnail-' . $filename );

		if ( $delete && $moveOriginal && $moveThumbnail )
		{
			$message	=	new Message( 'success', 'De foto is succesvol uit de database verwijderd.'  );
			header( 'location: gallery.php' );
		
		}
		else
			$message	=	new Message( 'error', 'De foto kon niet uit de galerij verwijderd worden. Probeer opnieuw.'  );
			header( 'location: gallery.php' );
		


	}

?>