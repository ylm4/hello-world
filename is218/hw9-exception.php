<!DOCTYPE html>
<html>
<body>
<h1> Example of a file that exists. </h1>
<?php
	if (!file_exists("homework9.txt")) {
		die("File not found");
	} else {
		$file= fopen("homework9.txt","r");
		print "File successfully opened!";
	}
print_r($file=fopen("homework9.txt"));
?>

<h1> Example of a file that DOES NOT exist. </h1>
<?php
	if (!file_exists("homewoek9.txt")) {
		die ("File not found");
	} else {
		$file= fopen("homewoek9.txt", "r");
		print "File successfully opened!";
	}


?>

<?php
class FileExistException extends Exception { }
class FileReadException extends Exception { }
$filename = 'homework9.txt';
try {
	try{
		$text = file_get_contents($filename);
        	if ($text === false) {
			throw new Exception();
		}
	}
	catch (Exception $e) {
		if (!file_exists($filename)) {
			throw new FileExistException($filename . " does not exist.");
		}
		elseif(!is_readable($filename)) {
			throw new FileReadException($filename . " is not readable.");
		}
		else {
			throw new Exception("Unknown error accessing file.");
		}
	}
}
catch (FileExistException $fe) {
	echo $fe->getMessage();
	error_log($fe->getTraceAsString());
}
catch (FileReadException $fr) {
	echo $fr->getMessage();
	error_log($fr->getTraceAsString());
}
?>
