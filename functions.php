<?php
function swtv_setup() {
    //関数の中身
    add_theme_support('post-thumbnails');//アイキャッチ画像をON
}
add_action('after_setup_theme','swtv_setup') //after_setup_themeアクションフック※に登録
?>
