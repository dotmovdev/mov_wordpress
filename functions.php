<?php 
//Wordpressの具体的な機能を決める

//HTML5によるマークアップ
add_theme_support('html5', array('gallery','caption'));
//Feedリンクの自動生成
add_theme_support('automatic-feed-links');
//アイキャッチ画像を有効にする
add_theme_support('post-thumbnails');

//カスタムメニュー
register_nav_menu('header-nav', 'ヘッダーナビゲーション');
register_nav_menu('footer-nav', 'フッターナビゲーション');
?>