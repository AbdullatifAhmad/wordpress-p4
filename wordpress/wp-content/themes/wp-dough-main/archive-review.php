<?php

$title = 'Nieuws archief';


$arguments = ['post_type' => 'review', 'numberposts' => 5, 'category' => 0, 'orderby' => 'date', 'order' => 'DESC'];
$newsItemCollection = get_posts($arguments);

var_dump($newsItemCollection);

// render('views/templates/news-archive.php', compact('title', 'newsItemCollection'));
