<?php
defined('TYPO3_MODE') || die();

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['tool_provider'] = 'EXT:tool_provider/Configuration/RTE/Default.yaml';


/***************
 * include TSConfig (backend configuration)
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tool_provider/Configuration/TsConfig/Page/All.tsconfig">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:tool_provider/Configuration/TsConfig/User/All.tsconfig">'
);

