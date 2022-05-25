<?php
namespace modules\businesslogic\console\controllers;

use Craft;
use craft\console\Controller;

/**
 * More info about Controllers...
 *
 * https://doublesecretagency.github.io/craft-businesslogic/controllers
 */

/**
 * Business Logic Console Controller
 *
 * A console controller function can be run via command line, e.g. ./craft businesslogic/example-console/example
 */

class ExampleConsoleController extends Controller
{

    public function actionExample()
    {
        echo 'I am a console action';
    }

}
