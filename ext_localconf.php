<?php

defined('TYPO3_MODE') or die();

$boot = function () {
    /**
     * Configure Plugin
     */
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Sethorax.dcp',
        'Pi1',
        [
            'DCP' => 'list'
        ]
    );

    /**
     * Add page layout view hook.
     */
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem'][$_EXTKEY] =
        \Sethorax\Dcp\Hooks\PageLayoutViewHook::class;
};

$boot();
unset($boot);
