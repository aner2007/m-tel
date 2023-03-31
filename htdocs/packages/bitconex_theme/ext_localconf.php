<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['bitconex_theme'] = 'EXT:bitconex_theme/Configuration/RTE/Default.yaml';


/***************
 * include TSConfig (backend configuration)
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:bitconex_theme/Configuration/TsConfig/Page/All.tsconfig">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:bitconex_theme/Configuration/TsConfig/User/All.tsconfig">'
);

