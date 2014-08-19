<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2004 Peter Russ (peter.russ@4dfx.de)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
/**
 * Plugin '3 Column (4D f/x)' for the 'fdfx_3cols' extension.
 *
 * @author	Peter Russ <peter.russ@4dfx.de>
 */


require_once (t3lib_extMgm::extPath("fdfx_3cols","pi1/class.tx_fdfx3cols_pi1.php"));

class tx_fdfx4cols_pi1 extends tx_fdfx3cols_pi1 {
	var $prefixId = "tx_fdfx4cols_pi1";		// Same as class name
	var $scriptRelPath = "pi1/class.tx_fdfx4cols_pi1.php";	// Path to this script relative to the extension dir.
	var $extKey = "fdfx_4cols";	// The extension key.


	/**
	 * Main entry point
	 */
	function main($content,$conf)	{
		$this->conf=$conf;
		$this->pi_setPiVarDefaults();

		$content=parent::main($content,$this->conf);

        $subpartArray = array();
        $subpartArray["###CONTENT_RIGHTMOST###"]  = $this->_parse('tx_fdfx4cols_rightcolumn');
		//PRS+ 19.07.2005
		//added EditIcon
		$subpartArray["###CONTENT_RIGHTMOST###"] = $this->pi_getEditIcon($subpartArray["###CONTENT_RIGHTMOST###"],"tx_fdfx2cols_height,tx_fdfx4cols_rightcolumn","Edit item",$this->cObj->data,'tt_content');
		//PRS- 19.07.2005

        $content = $this->cObj->substituteMarkerArrayCached($content, $subpartArray, array(), array());

        // finally return the content
        return $this->pi_wrapInBaseClass($content);
	}
}



if (defined("TYPO3_MODE") && $TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/fdfx_4cols/pi1/class.tx_fdfx4cols_pi1.php"])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]["XCLASS"]["ext/fdfx_4cols/pi1/class.tx_fdfx4cols_pi1.php"]);
}

?>