<?php


class HomePage extends Page 
{
	private static $db = [];
	
	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$fields->removeByName('MinisiteLayout');
		return $fields;
	}
}

