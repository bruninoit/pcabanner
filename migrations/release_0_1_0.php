<?php
namespace bruninoit\pcabanner\migrations;
class release_0_1_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return isset($this->config['banner_header']);
	}
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\alpha2');
	}
	public function update_data()
	{
		return array(
			array('config.add', array('banner_header', '')),
			array('config.add', array('banner_footer', '')),
			array('config.add', array('banner_postr', '')),
			array('module.add', array(
				'acp',
				'ACP_CAT_DOT_MODS',
				'ACP_BANNER_CATEGORY'
			)),
			array('module.add', array(
				'acp',
				'ACP_BANNER_CATEGORY',
				array(
					'module_basename'	=> '\bruninoit\pcabanner\acp\main_module',
					'modes'			=> array('settings')
				),
			)),
		);
	}
}
