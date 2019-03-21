{% include header.md %}

# Services

Your service methods are a blank slate. What they do, and how they do it, are 100% up to you. While this component is the easiest to describe, it is ultimately the most open and flexible piece of the module puzzle.

```php
public function myFunction()
{
    return "This can return literally anything.";
}
```

You can call a service method from any other PHP file. In fact, it's very common for other components to frequently refer back to service methods, in order to lighten the load for other, more specialized tasks.

```php
BusinessLogic::$instance->myServices->myFunction()
```

For example, it's extremely common for variable methods to simply serve as a wrapper for a service method. This allows you to call up some complex PHP logic from a Twig template, with the variable method acting as the middleman.

Similarly, you can (and often will) call a service method from within a controller action. This allows the controller action to focus on its core task, responding to a request from the front-end.

## Why use a service method

You can use service method methods for whatever you like, but these are some of the best reasons for doing so:

1. **Your logic is very complex.** Any logic more than a few lines long is a reasonable candidate for being moved to a service method.
2. **You need to write to the database.** If you have a need to write to the database, or interact with records in any meaningful way, then the best place to do so is within a service method.
3. **You want the logic to be reusable.** You may have a chunk of code which needs to be called from separate places (ie: multiple controller actions). This makes the logic a good candidate for being offloaded to a service method.
4. **You want to access the logic from an external plugin or module.** Putting your logic in a service method makes it more easily available from other places.

---

It's impossible to cover every scenario for service methods. Within the context of PHP, the possibilities are endless! 

{% include footer.md %}
