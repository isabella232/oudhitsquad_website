<?php 

$errors = array();
if (empty($_POST['name'])) {
	$errors[] = 'Name is required';
} elseif (strlen($_POST['name']) < 5) {
	$errors[] = 'Name is too short';
}
if ( ! preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',$_POST['email'])) {
	$errors[] = 'Email is not valid';
}
/*
if (empty($_POST['site'])) {
	$errors[] = 'Site is required';
} elseif (strlen($_POST['site']) < 5) {
	$errors[] = 'Site is too short';
}
*/
if (empty($_POST['message'])) {
	$errors[] = 'Message is required';
} elseif (strlen($_POST['message']) < 5) {
	$errors[] = 'Message is too short';
}

if(empty($errors)) {
       if (mail('shabbypenguin@gmail.com', 'OUDHS Info', "From: {$_POST['name']}\nE-Mail: {$_POST['email']}\nSite: {$_POST['site']}\nMessage:\n{$_POST['message']}")) {
		header('Location: Thank_You.html');
	} else {
		$errors[] = 'Could not send message';
	}
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Submission Errors</title>
</head>
<body>
<h1>Submission Errors</h1>
<p>The following errors were encountered&hellip;</p>
<ul><li><?php echo implode('</li><li>', $errors); ?></li></ul>
<p><a href="contacts.shtml" onclick="history.go(-1);return false">Try Again</a></p>
</body>
</html>
