{% include header.md %}

# Installation

Installing a module in Craft 3 is a little more complex than installing a plugin in Craft 2. You can't simply add the folder in the right place and move on, there is a small amount of additional configuration required.

## Step 1: Add the files

1. Download this repo and unzip it.
2. Move the entire `businesslogic` folder into your `modules` directory.

If you put everything in the right place, it should look like this:

```
modules/
    businesslogic/
        controllers/
        resources/
        services/
        variables/
        BusinessLogic.php
```

💡 **Tip:** Need multiple modules? Just make a copy of the whole `businesslogic` folder and change the name! Make sure you consistently change all the naming and namespaces throughout your duplicate module.

## Step 2: Add to config

There are three places you _could_ do this, but it's only necessary in one. Which one you choose depends on how you are using the module.

- `config/web.php` - If you only intend to use the module for _web requests_, you can add it here.
- `config/console.php` - If you only intend to use the module for _console requests_, you can add it here.
- `config/app.php` - **This is the most likely place to add it.** The `app.php` file comes with Craft by default, and applies to _all scenarios_ where you may want to be using a custom module.

Once you've determined which config file you want to use, add these settings...

```php
use modules\businesslogic\BusinessLogic;

return [
    'modules' => [
        'businesslogic' => BusinessLogic::class,
    ],
    'bootstrap' => [
        'businesslogic',
    ]
];
``` 

If this is going to be your only module, you can **replace** the existing config settings with the ones shown above.

## Step 3: Add to Composer

Lastly, double-check that your `composer.json` file includes the following `autoload` settings...

```javascript
  "autoload": {
    "psr-4": {
      "modules\\": "modules/"
    }
  },
``` 

It should already look like this if you haven't changed anything, since this is how it's configured in a default Craft install.

Once you've done all of these things, you will want to update the Composer autoload mapping. Via command line, navigate to your project's root and enter this command...

```
composer dump-autoload -a
``` 

This will rebuild Composer's autoload mapping, allowing it to recognize your new module.

## Testing

Once you've got everything set up, you'll want to make sure it's wired up properly. As a simple test, we're going to hide the "All Entries" option from the Entries index page. (Don't worry, you can remove this test code afterwards!)

Open up the following file:

```
modules/businesslogic/BusinessLogic.php
```

Put these lines near the top of the file...

```php
use craft\elements\Entry;
use craft\events\RegisterElementSourcesEvent;
```

And put this in the existing `init` method...

```php
// Modify entry sources
Event::on(
    Entry::class,
    Entry::EVENT_REGISTER_SOURCES,
    function(RegisterElementSourcesEvent $event) {
        if ($event->context === 'index') {
            // Remove "All Entries" nav option
            foreach ($event->sources as $i => $source) {
                if (isset($source['key']) && ('*' == $source['key'])) {
                    unset($event->sources[$i]);
                }
            }
        }
    }
);
```

Finally, visit the Entries section in your control panel. If everything is working properly, the "All Entries" nav option will be gone! You will only see direct links to each individual section.

This change should take place immediately. Other than refreshing your browser, no other action should be necessary.

---

Assuming everything has gone according to plan, take a look at the rest of this Wiki for more information on using your new module. And if things _didn't_ go according to plan, hop over to the [Craft Discord](https://craftcms.com/discord) channel and start asking questions!

**Happy coding!** 🍺

{% include footer.md %}
