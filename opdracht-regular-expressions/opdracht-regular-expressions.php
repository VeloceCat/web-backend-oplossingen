<?php 
	
	$regex			=	'';
	$searchString	=	'';

	$result	=	false;


	if ( isset( $_POST[ 'submit' ] ) )
	{

		$regex			=	$_POST[ 'regex' ];
		$searchString	=	$_POST[ 'string' ];

		$replaceString	=	'<span>#</span>';

		$result 	=	preg_replace( '/' . $regex . '/', $replaceString, $searchString );
	}

?>

<!DOCTYPE html>
<html>
<head>
	
	<style>
		.result span
		{
			font-weight	:bold;
			color:	#FF0000;
		}
	</style>

</head>
	<body>
	

		<h1>Oplossing regular expressions</h1>
		
		
		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
			
			<ul>
				<li>
					<label for="regex">Regular expression</label>
					<input type="text" name="regex" id="regex" value="<?= $regex ?>">
				</li>
				<li>
					<label for="string">String</label>
					<input type="text" name="string" id="string" value="<?= $searchString ?>">
				</li>
			</ul>
			<input type="submit" name="submit">
		</form>

		<?php if ( $result ): ?>
			<p class="result"><?= $result ?></p>
		<?php endif ?>

	</body>
</html>