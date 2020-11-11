<?php
namespace modules\businesslogic\services;

use craft\base\Component;

/**
 * More info about Services...
 *
 * https://doublesecretagency.github.io/craft-businesslogic/services
 */

/**
 * Business Logic Service
 *
 * When things get real (or at least really complex), then it's time to start using
 * the Service file. Some good reasons to use a Service method:
 *
 *     1. Your logic is super complex.
 *     2. You need to interact with the database.
 *     3. You want to call your service from some other plugin or module.
 *
 * If you find yourself needing to tap into the database for whatever reason, that logic
 * belongs here. Whether you're approaching the database with a custom Record (not included),
 * or you need to write a custom query to do the job, this is the place to make it happen.
 *
 * Your service methods can literally be anything you want them to be. Go nuts!
 */

class Example extends Component
{

    /**
     * This function can literally be anything you want.
     *
     * HOW TO USE IT
     * From any other plugin or module file, call it like this:
     *
     *     BusinessLogic::$instance->example->exampleService()
     *
     */
    public function exampleService()
    {
        return "I've got your data right here!";
    }

}
