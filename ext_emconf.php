<?php

########################################################################
# Extension Manager/Repository config file for ext "fdfx_4cols".
#
# Auto generated 02-03-2011 17:37
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => '4 Columns',
	'description' => 'Extension of fdfx_3cols.  Adds an additional right column.  RTE enabled. DIV or plain table template controlls the rendering providing 4 different layout options. Each element is styled with CSS.

fdfx_3cols must be installed first!',
	'category' => 'fe',
	'shy' => 0,
	'version' => '0.0.1',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'tt_content',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Michael Cannon',
	'author_email' => 'michael@typo3vagabond.com',
	'author_company' => 'TYPO3 Vagabond',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '3.6.3-0.0.0',
			'php' => '4.3.3-0.0.0',
			'fdfx_3cols' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:12:{s:12:"ext_icon.gif";s:4:"a5b1";s:17:"ext_localconf.php";s:4:"528c";s:14:"ext_tables.php";s:4:"7e1b";s:14:"ext_tables.sql";s:4:"1673";s:28:"ext_typoscript_constants.txt";s:4:"b76e";s:24:"ext_typoscript_setup.txt";s:4:"5e83";s:16:"locallang_db.php";s:4:"c0ae";s:20:"tpl.3column.div.html";s:4:"793e";s:16:"tpl.3column.html";s:4:"71fb";s:14:"doc/manual.pdf";s:4:"8167";s:14:"doc/manual.sxw";s:4:"274f";s:30:"pi1/class.tx_fdfx4cols_pi1.php";s:4:"ed72";}',
);

?>