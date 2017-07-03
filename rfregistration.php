<?php
/**
 * @copyright Copyright (c) 2017 Danila Shkerin (dscelt@gmail.com)
 * @license GNU General Public License version 2 or later
*/

defined('JPATH_BASE') or die;

/**
 * Plugin to cover Russian federal law about agreement on processing personal data
 * @package Joomla.Plugins
 * @subpackage User.RfRegistration
 * @since 3.0
*/
class plgUserRfRegistration extends JPlugin {
	
	public function onContentPrepareForm($form, $data) {
		var_dump($form->getName());
		if($form->getName() != 'com_users.registration') {
			return;
		}
		
		$this->loadLanguage();
		$form->loadFile(dirname(__FILE__).'/forms/form.xml');
	}
	
}
