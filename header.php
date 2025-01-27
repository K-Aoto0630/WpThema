<?php
/*
 * Template Name: header.php
 */
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ;?></title>

    <!-- setting meta -->
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="canonical" href="">
    <link rel="icon" href="/favicon.ico" sizes="any">

    <!-- setting sns -->
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:site_name" content="">

</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>

<header class="header" id="header">

</header>
<main>