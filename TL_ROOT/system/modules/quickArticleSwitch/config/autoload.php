<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'May17',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'May17\quickArticleSwitch\Classes\Backend\ArticleSwitch' => 'system/modules/quickArticleSwitch/classes/backend/ArticleSwitch.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_quickarticleswitch' => 'system/modules/quickArticleSwitch/templates/backend',
));
