<?php
namespace Craft;

class BusinessLogicPlugin extends BasePlugin
{

	public function getName()
	{
		return 'Business Logic for '.craft()->getSiteName();
	}

	public function getVersion()
	{
		return '¯\_(ツ)_/¯';
	}

	public function getDeveloper()
	{
		return craft()->getSiteName();
	}

	public function getDeveloperUrl()
	{
		return 'https://github.com/lindseydiloreto/craft-businesslogic';
	}

}
