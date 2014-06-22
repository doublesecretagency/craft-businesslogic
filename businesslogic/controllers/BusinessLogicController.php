<?php
namespace Craft;

/**
 * OFFICIAL DOCUMENTATION:
 * http://buildwithcraft.com/docs/plugins/controllers
 */

/**
 * Business Logic Controller
 *
 * Controller methods get a little more complicated... There are several ways to access them:
 *
 *     1. Submitting a form can trigger a controller action.
 *     2. Using an AJAX request can trigger a controller action.
 *     3. Routing to an action URL will trigger a controller action.
 *
 * A controller can do many things, but be wary... If your logic gets too complex, you may want
 * to off-load much of it to the Service file.
 */

class BusinessLogicController extends BaseController
{

	/**
	 * For a normal form submission, send it here.
	 *
	 * HOW TO USE IT
	 * The HTML form in your template should include this hidden field:
	 *
	 *     <input type="hidden" name="action" value="businessLogic/exampleFormSubmit">
	 *
	 */
	public function actionExampleFormSubmit()
	{
		// ... whatever you want to do with the submitted data...
		$this->redirect('thankyou/page/url');
	}

	/**
	 * When you need AJAX, this is how to do it.
	 *
	 * HOW TO USE IT
	 * In your front-end JavaScript, POST your AJAX call like this:
	 *
	 *     // example uses jQuery
	 *     $.post('actions/businessLogic/exampleAjax' ...
	 *
	 * Or if your plugin is doing something within the control panel,
	 * you've got a built-in function available which Craft provides:
	 *
	 *     Craft.postActionRequest('businessLogic/exampleAjax' ...
	 *
	 */
	public function actionExampleAjax()
	{
		$this->requireAjaxRequest();
		// ... whatever your AJAX does...
		$response = array('response' => 'Round trip via AJAX!');
		$this->returnJson($response);
	}

	/**
	 * Routing lets you set extra variables when you load a Twig template.
	 *
	 * HOW TO USE IT
	 * Put this in your config/routes.php file:
	 *
	 *     'your/route' => array('action' => 'businessLogic/exampleRoute')
	 *
	 */
	public function actionExampleRoute()
	{
		// ... whatever your route accomplishes...
		$twigVariable = 'I added this with a route!';
		$this->renderTemplate('your/destination/template', array(
			'twigVariable' => $twigVariable
		));
	}

}
