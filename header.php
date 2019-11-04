<?php
//Webサイトに利用するHTMLのヘッダーのこと。
//ヘッダーナビゲーションのことではない。
//bodyは開始タグのみ

//共通で使うCSSのURL
$stylesheet_uri = get_stylesheet_uri();
?>

<!DOCTYPE html>
<html lang='ja'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='<?php echo $stylesheet_uri; ?>'>
    <?php 
    //WordPressで用意しているheadの内容
    wp_head(); 
    ?>
</head>

<body <?php body_class(); ?>>
<header>
    
</header>