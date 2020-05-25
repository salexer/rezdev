<?php
/** @var xPDOTransport $transport */
/** @var array $options */
/** @var modX $modx */
if ($transport->xpdo) {
    $modx =& $transport->xpdo;

    $dev = MODX_BASE_PATH . 'Extras/rezdev/';
    /** @var xPDOCacheManager $cache */
    $cache = $modx->getCacheManager();
    if (file_exists($dev) && $cache) {
        if (!is_link($dev . 'assets/components/rezdev')) {
            $cache->deleteTree(
                $dev . 'assets/components/rezdev/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_ASSETS_PATH . 'components/rezdev/', $dev . 'assets/components/rezdev');
        }
        if (!is_link($dev . 'core/components/rezdev')) {
            $cache->deleteTree(
                $dev . 'core/components/rezdev/',
                ['deleteTop' => true, 'skipDirs' => false, 'extensions' => []]
            );
            symlink(MODX_CORE_PATH . 'components/rezdev/', $dev . 'core/components/rezdev');
        }
    }
}

return true;