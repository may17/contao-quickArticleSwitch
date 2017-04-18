<?php

if(Input::get('do') === 'article') {
    $GLOBALS['TL_DCA']['tl_content']['list']['global_operations']['quickArticleSwitch'] = array(
        'button_callback' => array('May17\quickArticleSwitch\Classes\Backend\ArticleSwitch', 'addSwitch')
    );
}
