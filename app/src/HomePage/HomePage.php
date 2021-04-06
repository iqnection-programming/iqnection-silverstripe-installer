<?php


class HomePage extends Page 
{
	private static $icon_class = 'font-icon-p-home';

	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$fields->removeByName('MinisiteLayout');
		return $fields;
	}
}

