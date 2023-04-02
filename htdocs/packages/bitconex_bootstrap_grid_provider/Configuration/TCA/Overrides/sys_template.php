<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'bitconex_bootstrap_grid_provider';

    /**
     * Default TypoScript for GridProvider
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Bitconex Bootstrap Grid Provider'
    );
});
