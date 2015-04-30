<?php
	class HomePage extends Page {
	
		private static $db = array(
			"BannerContent" => "HTMLText"
		);
		
		public function getCMSFields()
		{
			$fields = parent::getCMSFields();
			$fields->addFieldToTab("Root.Content.Main", new HTMLEditorField("BannerContent", "Banner Content"),"Content");
			return $fields;
		}
	}
	
	class HomePage_Controller extends Page_Controller {	
		public function init() {
			parent::init();
		}
	}
