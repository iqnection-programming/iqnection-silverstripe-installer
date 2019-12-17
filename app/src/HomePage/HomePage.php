<?php


class HomePage extends Page 
{
	private static $icon = "iqnection-pages/basepages:images/icons/home-page-icon.png";
	
	private static $db = [];
	
	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$fields->removeByName('MinisiteLayout');
		return $fields;
	}
}

