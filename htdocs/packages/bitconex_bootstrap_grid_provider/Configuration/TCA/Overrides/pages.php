<?php
defined('TYPO3_MODE') || die();


/**
 * Default PageTS for GridProvider
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'bitconex_bootstrap_grid_provider',
    'Configuration/TsConfig/Page/All.tsconfig',
    'Bitconex Bootstrap Grid Provider'
);

