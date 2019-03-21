{% include header.md %}

# Controllers

The job of a controller is to listen for a request from the front-end, take the appropriate action, and return (or redirect) with its response. It serves as a reactionary mechanism for front-end calls.

Controllers are full of `actions`, which are the methods that specifically handle requests. A method _must_ begin with the prefix "action" in order to handle a request from the front-end.

There are three main purposes for a controller action...

1. Handle a form submission.
2. Handle an AJAX call.
3. Handle a complex routing maneuver.

## Forms

Craft has a series of standard controller actions built in, and all forms in the control panel submit to those pre-defined actions. It's possible for you to submit to those same controller actions from a front-end form... indeed, this is what Craft advises when you need to manage [entries](https://docs.craftcms.com/v3/dev/examples/entry-form.html) or [users](https://docs.craftcms.com/v3/dev/examples/user-profile-form.html) from the front-end.

But if you need to create a form which handles custom behavior, you'll want it to submit to a custom form action. Submitting your form to a custom controller action allows you to manage the submitted data in any way that you want. This might be a good solution for submitting data that goes beyond a simple entry or user submission.

## AJAX

Similarly, you can handle data submitted via an AJAX call. It's possible for you to require that the data was submitted in JSON format, and/or return the response in JSON as well. What you do with the data is entirely up to you.

## Routes

Occasionally, you may want to trigger some fancy behavior while navigating between two pages on the front-end. It's possible to route directly to a controller action, perform some custom PHP behavior, then continue on (or be redirected) to your final destination. If the route logic does not redirect to another URL, it can end by rendering a Twig template with some newly-declared variable values.

---

## Anonymous requests

By default, a user must be logged into Craft to ping a controller action. That doesn't inherently mean they need to be an _admin_, just that they need to be a logged in user of any kind.

However, it's possible to circumvent this and allow anonymous users to reach these controller actions. By setting the [`$allowAnonymous` property](https://docs.craftcms.com/api/v3/craft-web-controller.html#allowanonymous), you can allow anonymous access to specific (or all) controller actions.

---

As always, you may want to offload some of your logic to service methods if the controller action becomes too complex. Let the controller focus on handling the request, and process the heavy duty logic elsewhere!

{% include footer.md %}
