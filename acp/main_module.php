<?php
namespace bruninoit\pcabanner\acp;
class main_module
{
	var $u_action;
	function main($id, $mode)
	{
		global $db, $user, $auth, $template, $cache, $request;
		global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
		$user->add_lang('acp/common');
		$this->tpl_name = 'banner_body';
		$this->page_title = $user->lang('ACP_BANNER_TITLE');
		add_form_key('bruninoit/pcabanner');
		if ($request->is_set_post('submit'))
		{
			if (!check_form_key('bruninoit/pcabanner'))
			{
				trigger_error('FORM_INVALID');
			}
			$config->set('banner_header', $request->variable('banner_header', '', true));
			$config->set('banner_footer', $request->variable('banner_footer', '', true));
			$config->set('banner_post', $request->variable('banner_post', '', true));
			trigger_error($user->lang('ACP_BANNER_SAVED') . adm_back_link($this->u_action));
		}
		$template->assign_vars(array(
			'U_ACTION'				=> $this->u_action,
			'BANNER_HEADER'				=> $config['banner_header'],
			'BANNER_FOOTER'				=> $config['banner_footer'],
			'BANNER_POST'				=> $config['banner_post']
		));
	}
}
