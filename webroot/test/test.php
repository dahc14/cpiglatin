<?php
	include('../../autoloader.php');

	$pigLatin = new \Dahc14\PigLatin\CPigLatin();
?>

<!doctype html>
<meta charset=utf8>
<title>CPigLatin Example</title>
<h1>CPigLatin Example</h1>
<p>
	<?php
		$word = "Daniel";
		
		echo $word . " becomes " . $pigLatin->word2PigLatin($word);
	?>
</p>