<?php
/*
 * Template Name: template review
 */

$title = get_the_title();
$content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));
?>


<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body>

<h1>Intro</h1>
<p>Welkom op de site van wonder. Op deze site kan je eigenlijk reviews zien van mensen uit de organisatie wonder</p>

</body>
</html>
