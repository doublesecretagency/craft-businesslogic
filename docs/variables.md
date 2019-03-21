{% include header.md %}

{% raw %}
# Variables

The absolute simplest part of the module puzzle is the variable file. It allows you to quickly and easily render a value from PHP into a Twig template. The implementation can be as complex as you need or want it to be, but ultimately it's just a very simple tool for outputting a value to Twig.

Before you dive too deep, it's worth noting that many variable methods (especially the more complex ones) are simply wrappers for a related service method...

```php
public function myFunction($myVariable)
{
    return BusinessLogic::$instance->myServices->myFunction($myVariable);
}
```

You certainly don't _need_ to refer to a service method. If you want, all of your processing can be done within the variable method itself. But if you intend to write complex logic, or interact with records in a meaningful way, it's _highly_ recommended that you offload that logic to a services method.

---

## Basic example

In its simplest form, a variable method can simply return a static value.

```php
public function helloWorld()
{
    return "Hello World";
}
```

```twig
{# Outputs "Hello World" #}
{{ craft.businessLogic.helloWorld }}
```

## Intermediate example

More often, you'll use the variable to perform a simple task in PHP. Think of it like a Twig macro, but with all of the capabilities of PHP at your fingertips.

```php
public function add($a, $b)
{
    return $a + $b;
}
```

```twig
{# Outputs "7" #}
{{ craft.businessLogic.add(3, 4) }}
```

You can also `set` the returned value, and use it for more complicated purposes... 

```twig
{% set firstNumber = craft.businessLogic.add(3, 4) %}
{% set secondNumber = craft.businessLogic.add(5, 6) %}

{# Adds 7 + 11, outputs "18" #}
{{ firstNumber + secondNumber }}
```

## Expert example

It's worth mentioning that a variable method can return **any type**. The examples above show how to get a string or number, but you could also use variables to get an array or object!

```php
public function authorEntries($userId)
{
    $entries = \craft\elements\Entry::find()
        ->authorId($userId)
        ->all();
}
```

```twig
{# Get an array of entries written by the current user #}
{% set entries = craft.businessLogic.authorEntries(currentUser.id) %}
```

---

How you use the variable is completely up to you. Remember, if the logic gets too complex, offload it to a service method!
{% endraw %}

{% include footer.md %}
