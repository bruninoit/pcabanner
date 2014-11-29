<?php
namespace bruninoit\pcabanner\acp;
class main_info
{
	function module()
	{
		return array(
			'filename'	=> '\bruninoit\pcabanner\acp\main_module',
			'title'		=> 'ACP_BANNER_TITLE',
			'version'	=> '0.1.0-a1',
			'modes'		=> array(
				'settings'	=> array('title' => 'ACP_BANNER_TITLE', 'auth' => 'ext_bruninoit/pcabanner && acl_a_board', 'cat' => array('ACP_BANNER_TITLE')),
			),
		);
	}
}
