<?php


	class Page extends SiteTree 
	{
	
		private static $db = array(
		);
	
		private static $has_one = array(
		);
	
		public function onBeforeWrite()
		{
			$this->extend('hook_onBeforeWrite', $this);
			parent::onBeforeWrite();
		}
		
	}
	
	class Page_Controller extends ContentController 
	{
		
		private static $allowed_actions = array (
		);
	
		public function init()
		{
			parent::init();
		}
	}