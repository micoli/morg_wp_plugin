<?php
/*
Plugin Name: Wordpress morg plugin framework
Plugin URI: http://craft.micoli.org
Description: Basic plugin interface class<->wordpress
Author: o.michaud
Version: 0.1
Author URI: http://craft.micoli.org
*/
include "QDDB.php";
include "JSONAPI.php";

function  db($db){
	print "<pre>";
	print_r($db);
	print "</pre>";

}
class morg_wp_tools{
	static function object2array($result){
		$array = array();
		foreach ($result as $key=>$value){
			if (is_object($value)){
				$array[$key]=self::object2array($value);
			}elseif (is_array($value)){
				$array[$key]=self::object2array($value);
			}else{
				$array[$key]=$value;
			}
		}
		return $array;
	}
}
class morg_wp_plugin{
	var $prefix = "";
	var $pluginName="";
	var $adminMenu=array();

	static public function getSmarty($path){
		require_once(dirname(__FILE__) . '/smarty/Smarty.class.php');
		$smarty = new Smarty();
		$smarty->template_dir	= dirname($path);
		$smarty->compile_dir	= dirname(__FILE__).'/tmp/';
		if(!file_exists($smarty->compile_dir)){
			mkdir($smarty->compile_dir);
			chmod($smarty->compile_dir,0755);
		}
		return $smarty;
	}


	function __construct(){
		if($this->pluginName==""){
			$this->pluginName= get_class($this);
		}
		if ( is_admin() ){
			foreach($this->adminMenu as $slug=>$menuItem){
				add_action('admin_menu', array($this,'admin_actions__'.$slug));
			}
		}
		foreach(get_class_methods($this) as $method){
			if(preg_match("!^shortcode__(.*)!",$method,$match)){
				add_shortcode($this->prefix.'_'.$match[1], array($this,$method));
			}
			if(preg_match("!^wp_add_action__(.*)__(.*)!",$method,$match)){
				add_action($match[1], array($this,$method));
			}
			if(preg_match("!^wp_enqueue_script__(.*)!",$method,$match)){
				$this->$method();
			}
			
			if(preg_match("!^wp_ajax__(.*)!",$method,$match)){
				add_action('wp_ajax_'.$match[1], array($this,$method));
			}
			if(preg_match("!^wp_ajax_nopriv__(.*)!",$method,$match)){
				add_action('wp_ajax_'.$match[1], array($this,$method));
				add_action('wp_ajax_nopriv_'.$match[1], array($this,$method));
			}
			
			if(preg_match("!^wp_add_filter__(.*)__(.*)!",$method,$match)){
				add_filter($match[1], array($this,$method));
			}
		}
	}
	
	public function __call($name, $arguments){
		if(preg_match("!admin_actions__(.*)!",$name,$match)){
			add_options_page($this->adminMenu[$match[1]]["page_title"],$this->adminMenu[$match[1]]["menu_title"], 'manage_options', $match[1], array($this,$this->adminMenu[$match[1]]["function"]));
		}
	}
}
?>