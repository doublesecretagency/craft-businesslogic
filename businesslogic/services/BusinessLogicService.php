<?php
namespace Craft;

/**
 * OFFICIAL DOCUMENTATION:
 * http://buildwithcraft.com/docs/plugins/services
 */

/**
 * Business Logic Service
 * 
 * When things get real (or at least really complex), then it's time to start using
 * the Service file. Some good reasons to use a Service method:
 *
 *     1. Your logic is super complex.
 *     2. You need to interact with the database.
 *     3. You want to call your service from some other plugin.
 * 
 * If you find yourself needing to tap into the database for whatever reason, that logic
 * belongs here. Whether you're approaching the database with a custom Record (not included),
 * or you need to write a custom query to do the job, this is the place to make it happen.
 *
 * Your service methods can literally be anything you want them to be. Go nuts!
 */

class BusinessLogicService extends BaseApplicationComponent
{
	
	/**
	 * This function can literally be anything you want.
	 *
	 * HOW TO USE IT
	 * From any other plugin file, call it like this:
	 *
	 *     craft()->businessLogic->exampleService()
	 *
	 */
	public function exampleService()
	{
		return "I've got your data right here!";
	}

}
