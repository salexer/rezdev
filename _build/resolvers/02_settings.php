<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if (!$transport->xpdo || !($transport instanceof xPDOTransport)) {
    return false;
}

$modx =& $transport->xpdo;
$success = false;
switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:
    case xPDOTransport::ACTION_UPGRADE:

        $error_page = null;
        if ($resource = $modx->getObject('modResource', array('alias' => 'error404'))) {
            $error_page = $resource->get('id');
        }


        $site_unavailable_page = null;
        if ($resource = $modx->getObject('modResource', array('alias' => 'error503'))) {
            $site_unavailable_page = $resource->get('id');
        }


        $unauthorized_page = null;
        if ($resource = $modx->getObject('modResource', array('alias' => 'error403'))) {
            $unauthorized_page = $resource->get('id');
        }



        $settings = array(
            'error_page' => $error_page,
            'site_unavailable_page' => $site_unavailable_page,
            'unauthorized_page' => $unauthorized_page,
            'friendly_alias_translit' => 'russian',
            'friendly_urls' => true,
            'global_duplicate_uri_check' => true,
            'friendly_urls_strict' => true,
            'use_alias_path' => true,
            'resource_tree_node_name' => 'menutitle',
            'resource_tree_node_tooltip' => 'menutitle',
            'automatic_alias' => true,
            'auto_check_pkg_updates' => false,
            'feed_modx_news_enabled' => false,
            'feed_modx_security_enabled' => false,
            'locale' => 'ru_RU.utf-8',
            'password_generated_length' => '6',
            'password_min_length' => '6',
            'publish_default' => true,
            'log_deprecated' => false,
            'manager_time_format' => 'H:i:s',
            'signupemail_message' => '<p>Здравствуйте [[+uid]],</p><p>Ваши данные для административного входа на [[+sname]]:</p>                <p><strong>Логин:</strong> [[+uid]]<br /><strong>Пароль:</strong> [[+pwd]]<br /></p>                <p>После того как вы войдете в административную часть MODX [[+surl]], вы можете изменить свой пароль.</p>                <p>С уважением, <br />Администрация сайта</p>',

            // pdoTools
            'pdotools_fenom_default' => true,
            'pdotools_fenom_modx' => true,
            'pdotools_fenom_parser' => true,
            'pdotools_fenom_php' => true,
            'admintools_theme' => 'dark',
            'admintools_check_elements_permissions' => false,
            'collections.mgr_datetime_format' => 'M d, H:i:s',
            'collections.mgr_time_format' => 'H:i:s',
        );

        foreach ($settings as $key => $value) {
            /* @var modSystemSetting $tmp */
            if (!$tmp = $modx->getObject('modSystemSetting', array('key' => $key))) {
                $tmp = $modx->newObject('modSystemSetting');
                $tmp->set('key',$key);
            }

            $tmp->set('value', $value);
            $tmp->save();
        }

        $success = true;
        break;
    case xPDOTransport::ACTION_UNINSTALL:
        $success = true;
        break;
}

return $success;