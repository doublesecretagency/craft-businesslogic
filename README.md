# Business Logic ~~plugin~~ module template for Craft CMS

_It's a module about nothing..._

## Uhh... what?

When building a Craft website for your clients, you may find that you occasionally need to write some quick PHP to solve a problem. The good news... Craft lets you write any PHP you want via a custom plugin or module! The bad news... Putting together a module just to write some simple business logic can be kind of a pain, and the effort often feels like overkill.

## What do you mean by "business logic"?

The term **business logic** is common in the software world... It basically means, "any processing logic which is unique to this specific company".

It's a boring topic, so [I'll let Wikipedia explain it...](https://en.wikipedia.org/wiki/Business_logic)

## So really, what does this module do?

It does whatever you want it to do. It's a very simple **template**, designed to give you the basic tools you need to create a quick PHP-based interaction with the rest of your website. What you write inside this module is entirely up to you, and we expect that every website will have its own unique implementation. Go nuts!

## What's included?

### Variables

If you just need to pull some data into your template, or want to run a quick process before handing an array (or string, or whatever) back to your template, then variables might be the way to go! [More about Variables...](https://doublesecretagency.github.io/craft-businesslogic/variables)

### Controllers

You might need a submitted form to do something special, or have an AJAX call with some simple back-end logic to sort out. Putting that stuff into a controller will let you work your magic behind the scenes. [More about Controllers...](https://doublesecretagency.github.io/craft-businesslogic/controllers)

### Services

No serious module is complete without a services layer. When things start to get a little crazy with your business logic, try moving large chunks of it to the services file. And if you decide that you need to create any records (or interact with the database at all), then you'll definitely want to put that logic into the services file! [More about Services...](https://doublesecretagency.github.io/craft-businesslogic/services)

## What _isn't_ included?

Field Types, Records, Models, Element Types... Basically anything that seems unnecessary for the vast majority of business logic needs. If you're capable of determining that your business logic requires something as complex as an Element Type, we figure that you're smart enough to know how to build it from scratch.

***

## How to Install

For complete installation instructions, check out [the docs...](https://doublesecretagency.github.io/craft-businesslogic/installation)

***

## Fork Me!

Think this template can be improved? Go ahead and fork it! Pull requests are welcome, just keep a few simple goals in mind...

 - This module is designed to be ultra **simple**!
 - Only the basic needs of business logic need to be met... If a developer requires something more complex, it's assumed that they are capable enough to add those features.
 - Documentation is important! The components of this plugin should explain what they do, so any Craft noob can figure out how to shove some quick PHP in there and be on their merry way.

***

Thanks for checking it out! And feel free to also grab [our favorite plugin of all time...](https://github.com/mattstauffer/happybrad)
