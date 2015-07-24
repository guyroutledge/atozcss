---
layout: post_page
title: "Sass Variables"
alias: /sass-vars
date: 2015-03-11
wistiaId: fgh
comments: true
videoLength: x minutes u seconds
comments: true
excerpt: >
  
summary: |
  
---

When I first started looking into Sass all those years ago, the feature
that instantly sold me was variables in CSS. From a maintainability and
efficiency point of view, this has saved me litterally hours of
development time.

In this episode we'll learn all about

* Declaring and using Sass variables
* The different types of variables
* Using partials and naming conventions to keep your variables organised

## Declaring & Using Variables

Variables give us a nice human-readable way of labelling things for
future reference.

To declare a variable in Sass we prefix the name of the variable with
a `$` dollar sign. The value assigned to that variable is specified
after a `:` colon. 

A classic example is to create a variable for the primary or brand
colour of a site so that it can easily be re-used multiple times.

{% highlight scss %}
$primary-color: #cc3f85;
{% endhighlight %}

The variable can then be used by referencing the name of the variable in
place of a CSS value.

{% highlight scss %}
a {
	color: $primary-color;
}
{% endhighlight %}

When the Sass is compiled, any reference to `$primary-color` is
substituted for whatever is stored in the variable and the end result is
plain ole vanilla CSS.

{% highlight scss %}
/* compiled output */
a {
	color: #cc3f85;
}
{% endhighlight %}

I've had a real-world project where the client wanted to make a slight
adjustment to their brand colour throughout a huge site. As it had been
built with Sass, a change that affected over 100 pages was made by
changing a single line of code. Pretty sweet, eh?

Sass variables tend to be declared in hypenated case but can
interchangably be written with underscore case. If you declare
`$primary-color` you can use the variable by calling `$primary_color`
but I'd advise against this a just choose one system and be consistent. 

## Variable Types

Sass can handle all sorts of different types of variables including:

Colours, as we've already seen but in any valid colour format.

{% highlight scss %}
$primary-color: #cc3f85;
$secondary-color: orange;
$tertiary-color: hsl(200, 50, 50);
$hover-color: rgba($secondary-color, 0.5)
{% endhighlight %}

Lists, for things like font-stacks or shorthand CSS properties

{% highlight scss %}
$font-stack: Avenir, Helvetica, Arial, sans-serif;
$default-margin: 0 0 1em 0;
$heading-font: italic 20px/30px $font-stack;
{% endhighlight %}

Strings of text for things like urls or pseudo element content

{% highlight scss %}
$background-image: '../../img/body-bg.jpg';
$content: 'hi you guys!';
$fallback-font: 'Times New Roman';
{% endhighlight %}

Numbers and length values

{% highlight scss %}
$magic-number: 42;
$global-line-height: 1.4;
$padding: 20px;
$margin: 1em;
{% endhighlight %}

Boolean values true or false - not that commonly used but good for those
building frameworks and component libraries.

{% highlight scss %}
$output-media-queries: true;
$hide-for-mobile: false;
{% endhighlight %}

And finally, a new variable type added in Sass 3.3, maps of key-value
pairs. These look a bit like JavaScript objects or Ruby hashes and are
very powerful.

{% highlight scss %}
$colors: (
	red: #f00,
	pink: #cc3f85,
	dark-blue: #045b9d,
);
$z-layers: (
	modal: 9000,
	modal-bg: 8000,
	header: 6000,
	background: 0
	behind: -1
);
{% endhighlight %}

There's lots to talk about regarding maps, and we'll cover them in more
detail in a future episode.

## Keeping Organised

From the previous examples you can see that there is a lot of potential
use-cases for variables with Sass. But due to the many different types
of data that they can hold and the ease in which they can be used, it's
good to develop a system and convention so we can name our variables in
a meaningful way.

Take the following example.

I've got some form styles here, and the value `20px` has been used in
a few places to define consistent spacing for the padding.

{% highlight html %}
<form class="form-subscribe">
	<div class="form-field">
		<label for="name">Name:</label>
		<input type="text" id="name">
	</div>
	<div class="form-field">
		<label for="email">Email:</label>
		<input type="text" id="email">
	</div>
	<input type="submit" value="Subscribe">
</form>
{% endhighlight %}

{% highlight scss %}
$border-color: #ccc;

.form-subscribe {
	padding: 20px;

	input[type="text"],
	input[type="email"] {
		padding: 20px;
		border:1px solid $border-color;
	}
}
{% endhighlight %}

We could create a variable called `$padding` that stores the value
`20px` and replace all instances of that number. Now let's say I want to
add a bit of vertical spacing between each form field combination and
I want to use the same `20px` to have nice consistent spacing.

I could add `margin: 20px` or I could use the variable; but then we get
something that doesn't really make sense

{% highlight scss %}
.form-field {
	margin-bottom: $padding;
}
{% endhighlight %}

Instead, I'd prefer to refactor this a use a more generic name like
`$global-spacing`. Now I can use this value for margin, padding, border,
or any other property that takes a length value without writing
confusing or misleading code.

I like to take this further and have developed a system of variable name
prefixes that I use throughout a codebase.

* `$color-` for colours
* `$font-` for anything font related like name, sizes, line-heights
* `$media-` for named media query breakpoints
* `$image-` for anything to do with images, such as paths or dimensions
* `$global-` for any global spacing 

I then create myself a partial named `_variables.scss` and declare all
my global variables in there. These variables will then be accessible
throughout my entire codebase and everything is kept nice and organised
and easy to update.

In the next episode, we'll take a look at another method of code re-use
in Sass called mixins. I hope you can join me then.


## Outro

A transcript with links and code snippets for this episode can be found
at the shownotes,
[http://www.atozcss.com/sass-vars](http://www.atozcss.com/sass-vars).

If you're new round here, why not check out the first 26 episodes in
AtoZ CSS season 1 and if you can't get enough CSS goodness, I have an
ebook all about CSS layout for you at
[atozcss.com/books](http://www.atozcss.com/books).

As always, if you have any questions or comments, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or drop me an email.

