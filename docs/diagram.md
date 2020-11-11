{% include header.md %}

# The Anatomy of a Module

Modules and plugins come in various shapes and sizes. This diagram simply illustrates the _most common_ components, and how they all tie together.

![](https://raw.githubusercontent.com/doublesecretagency/craft-businesslogic/master/businesslogic/resources/img/diagram.png)

**Controllers** receive data input from the front-end, whereas **variables** output data into your Twig templates. **Services** do most of the complex work in between.

**Models** and **records** (not included in this module template) are more traditional objects, containing data about a specific "thing". Records are designed to read & write rows to the database, whereas models are simply useful containers for passing objects around between components.

{% include footer.md %}
