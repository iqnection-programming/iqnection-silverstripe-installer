<?php

use SilverStripe\ORM;
use SilverStripe\Forms;
	
class MySiteConfigExtension extends ORM\DataExtension 
{
	private static $db = [];

	public function updateCMSFields(Forms\FieldList $fields) 
	{
		
	}
}