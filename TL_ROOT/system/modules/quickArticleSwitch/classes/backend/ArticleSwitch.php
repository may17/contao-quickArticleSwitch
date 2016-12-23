<?php

namespace May17\quickArticleSwitch\Classes\Backend;

class ArticleSwitch extends \Backend
{
    public function addSwitch()
    {
        $article_id = \Input::get('id');
        $page_id = \ArticleModel::findByPk($article_id)->pid;
        $all_articleObj = \ArticleModel::findByPid($page_id);

        if ($all_articleObj->count() <= 1) {
            return;
        }

        $template_data = array(
            'articles' => array(),
            'choseLabel' => $GLOBALS['TL_LANG']['may17']['quickArticleSwitch']['choseText']
        );

        while ($all_articleObj->next()) {

            $template_data['articles'][] = array(
                'name' => $all_articleObj->title,
                'id' => $all_articleObj->id,
                'pid' => $all_articleObj->pid,
                'isCurrent' => ($all_articleObj->id === $article_id)
            );
        }

        $template_instance = new \BackendTemplate('be_quickarticleswitch');
        $template_instance->setData($template_data);
        return $template_instance->parse();
    }
}
