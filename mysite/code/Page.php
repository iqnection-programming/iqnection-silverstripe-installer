<?php
	class Page extends SiteTree 
	{
	
		private static $db = array(
		);
	
		private static $has_one = array(
		);
	
		function onBeforeWrite()
		{
			if ($URLRedirects = $this->URLRedirects)
			{
				$RedirectURLs = explode("\n",$URLRedirects);
				$NewRedirectURLs = array();
				foreach($RedirectURLs as $RedirectURL)
				{
					$NewRedirectURL = preg_replace("#".addslashes(Director::absoluteBaseURL())."#","",$RedirectURL);
					// make sure there's a slash at the begining
					if (substr($NewRedirectURL,0,1) != "/") $NewRedirectURL = "/".$NewRedirectURL;
					str_replace("//","/",$NewRedirectURL);
					$NewRedirectURLs[] = $NewRedirectURL;
				}
				$this->URLRedirects = implode("\n",$NewRedirectURLs);
			}
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