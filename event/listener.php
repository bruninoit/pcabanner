<?php
namespace bruninoit\pcabanner\event;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
class listener implements
EventSubscriberInterface{
protected $config;
//protected $db;
//protected $table_prefix;
//protected $request;
//protected $search_engines;
protected $template;
//protected $auth;
//protected $user;
//protected $root_path;
//protected $phpEx;


public function __construct(\phpbb\config\config $config, \phpbb\template\template $template)
{
$this->config = $config;
//$this->db = $db;
$this->template = $template;
//$this->auth = $auth;
//$this->user = $user;
//$this->root_path = $root_path;
//$this->phpEx = $phpEx ;
}

static public function getSubscribedEvents()
{
return array(
'core.user_setup' => 'setup',
); //cambio evento
}
public function setup($event) {
//file di lingua
$lang_set_ext = $event['lang_set_ext'];
$lang_set_ext[] = array(
'ext_name' => 'bruninoit/pcabanner',
'lang_set' => 'common',
);
$event['lang_set_ext'] = $lang_set_ext;
//lingua end

//codice start
$header=$this->config['banner_header'];
$footer=$this->config['banner_footer'];
$post=$this->config['banner_post'];
$this->template->assign_var('BANNER_HEADER', $header);
$this->template->assign_var('BANNER_FOOTER', $footer);
$this->template->assign_var('BANNER_POST', $post);
//banner tra primo e secondo post
//codice end
}
}
