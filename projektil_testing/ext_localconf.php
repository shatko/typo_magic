<?php
defined('TYPO3_MODE') || die();

\FluidTYPO3\Flux\Core::registerProviderExtensionKey('Projektil.ProjektilTesting', 'Page');

/***************
 * Add default RTE configuration
 */
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['projektil_testing'] = 'EXT:projektil_testing/Configuration/RTE/Default.yaml';



/***************
 * PageTS
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:projektil_testing/Configuration/TsConfig/Page/All.tsconfig">');
