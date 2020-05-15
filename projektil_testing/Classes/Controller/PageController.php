<?php
namespace Projektil\ProjektilTesting\Controller;

use FluidTYPO3\Fluidpages\Controller\PageController as AbstractPageController;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Page Controller
 *
 * @route off
 */
class PageController extends AbstractPageController {
		
	public function __construct(){
		\TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump("Controller Test");
	}

	public function standardAction(){
		
	}
}
