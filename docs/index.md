{% include header.md %}

# Overview

Craft 3 introduced the concept of a **module**, which didn't previously exist in Craft 2. Back then, custom business logic was simply packaged into a unique plugin, and tossed into the `/plugins` directory alongside all of your other plugins.

But now, the branches have diverged. In Craft 3, a plugin is (almost always) something that was downloaded via the Plugin Store. Plugins are broadly purposed, to accommodate the needs of many sites instead of just one. Gone are the days of adding a custom plugin alongside your other downloaded plugins.

Instead, you'll want to install a module to accommodate your site's custom business logic.  For all intents and purposes, a module is nearly identical to a plugin in Craft 3. While the architecture between the two is very similar, there are distinct pros & cons of using a module instead of a plugin.

## Pros

- **It is more integral to your site.** While the rest of your plugins are more ephemeral (the files can be destroyed and replaced), a module is as tightly tied to your project as any of your Twig templates. You'll likely keep your `vendor` folder ignored by Git, but your `modules` folder will be fully committed.
- **It can't be disabled and/or uninstalled.** Which is probably a good thing, if the logic is integral to your site working properly.

## Cons

- **It's harder to share with other projects.** Not impossible, but harder. However, that's usually a non-issue for custom business logic, where the functionality is geared _specifically_ to the needs of just one particular site.
- **There's no native "Settings" page or CP section.** Most modules won't need these things anyway. And if you do, creating your own CP section or "Settings" page isn't too bad.

It's worth noting that the architecture of this Business Logic Module is designed to _exactly_ match the standard architecture of a plugin. You could theoretically use this module template to develop a plugin, just as easily as you can with a module.

{% include footer.md %}
