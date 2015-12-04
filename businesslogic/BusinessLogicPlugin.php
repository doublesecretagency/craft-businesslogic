<?php
namespace Craft;

class BusinessLogicPlugin extends BasePlugin
{

	public function getName()
	{
		return 'Business Logic for '.craft()->getSiteName();
	}

	public function getDescription()
	{
		return 'Custom business logic for this unique website.';
	}

	public function getDocumentationUrl()
	{
		return 'https://github.com/lindseydiloreto/craft-businesslogic';
	}

	public function getVersion()
	{
		return '¯\_(ツ)_/¯';
	}

	public function getSchemaVersion()
	{
		return '0.0.0';
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
