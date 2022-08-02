<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<meta name="format-detection" content="telephone=no" />
<!-- // meta情報 -->
<title><?php bloginfo('name')?></title>
<meta name="description" content="街の皆さまの笑顔を守るアットホームな歯医者さん" />
<meta name="keywords" content="" />
<!-- //ogp -->
<meta property="og:title" content="" />
<meta property="og:type" content="" />
<meta property="og:url" content="" />
<meta property="og:image" content="" />
<meta property="og:site_name" content="" />
<meta property="og:description" content="" />
<!-- // ファビコン -->
<link rel="”icon”" href="" />
<!-- //GoogleFont -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@500;700&display=swap" rel="stylesheet">
<!-- //css -->
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
<!-- //JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<?php wp_head();?>
</head>
<bod <?php body_class(); ?>>
<?php wp_body_open(); ?>



<?php if (is_front_page()) { ?>

<?php } elseif (is_page( 'about' )) { ?>
<?php } elseif (is_home() || is_single()) { ?>
<?php } elseif (is_page( 'staff' )) { ?>
<?php } elseif (is_page([ 'contact' , 'contact-thanks'])) { ?>
<?php } elseif (is_page([ 'reservation' , 'reservation-thanks'])) { ?>
<?php } else { ?>
<?php } ?>