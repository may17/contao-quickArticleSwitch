<?php

namespace May17\quickArticleSwitch\Classes\Backend;

class ArticleSwitch extends \Backend {
  public function addSwitch()
  {
    $article_id = \Input::get('id');
    $page_id = \ArticleModel::findByPk(CURRENT_ID)->pid;
    $all_articleObj =  \ArticleModel::findByPid($page_id);

    if($all_articleObj->count() <= 1) {
      return;
    }

    $template_data = array(
      'articles' => array()
    );

    while($all_articleObj->next()) {
      if($all_articleObj->id !== CURRENT_ID) {
        $template_data['articles'][] = array(
          'name' => $all_articleObj->title,
          'id' => $all_articleObj->id,
          'pid' => $all_articleObj->pid,
        );
      }
    }

    $template_instance = new \BackendTemplate('be_quickarticleswitch');
    $template_instance->setData($template_data);
    return $template_instance->parse();
  }
}
