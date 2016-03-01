---
layout: blog_page
title: "AtoZ Sass Intro: Sass Variables, Mixins and Nested Selectors"
category: blog
excerpt: >
  In this final part of our 4-part series you'll learn about some of the
  fundamental Sass features including variables, nested selectors and
  mixins. There's lots more to come in the up coming video series too
  but this is a great place to start.
summary: |
  
---

This is the final part of a 4-part introductory series to Sass in preparation
for the video series [AtoZ Sass](http://www.atozsass.com).

* Part 1: [What is Sass](/blog/what-is-sass/)
* Part 2: [Installing Sass](/blog/installing-sass/)
* Part 3: [Organising Sass with Partials](/blog/organising-sass-with-partials)
* Part 4: Variables, Mixins and Nested Selectors

When I first started learning Sass, the feature that instantly sold me
was variables in CSS. From a maintainability and efficiency point of
view, this has saved me hours of development time.

In this post we'll take an overview of a number of fundamental Sass
features. To save this post from being insanely long, we'll not go into
too much detail but just provide enough info so you can follow along
with the up coming video series. 

If you *would* like a more comprehensive and more practical introduction
to getting up and running with Sass, I'm compiling a more detailed
version of this blog series into an ebook just for you. Keep your eye 
on [the books page](/books) for more information and join the mailing
list to be the first to hear when it's available.

But for now, in this post we're going to cover:

* Declaring and using various Sass variables
* Nesting selectors
* Reusing larger blocks of code with Mixins

## Declaring & Using Variables

Variables give us a nice human-readable way of labelling values for
future reference and can bring a lot more meaning to the code we write
as well as save us a lot of time.

To declare a variable in Sass we prefix the name of the variable with
a `$` dollar sign. The value assigned to that variable is specified
after a `:` colon. 

A classic example is to create a variable for the primary or brand
colour of a site so that it can easily be re-used multiple times.

{% highlight scss %}
$brand-color: #cc3f85;
{% endhighlight %}

The variable can then be used by referencing the name of the variable in
place of a CSS value.

{% highlight scss %}
a {
	color: $brand-color;
}
{% endhighlight %}

When the Sass is compiled, any reference to `$brand-color` is
substituted for whatever is stored in the variable and the end result is
plain ole vanilla CSS.

{% highlight scss %}
/* compiled output */
a {
	color: #cc3f85;
}
{% endhighlight %}

### Variable Types

Sass can handle all sorts of different types of variables including:

Colours, as we've already seen but in any valid colour format:

{% highlight scss %}
$primary-color: #cc3f85;
$secondary-color: orange;
$tertiary-color: hsl(200, 50, 50);
$hover-color: rgba($secondary-color, 0.5)
{% endhighlight %}

Lists, for things like font-stacks or shorthand CSS properties:

{% highlight scss %}
$font-stack: Avenir, Helvetica, Arial, sans-serif;
$default-margin: 0 0 1em 0;
$heading-font: italic 20px/30px $font-stack;
{% endhighlight %}

Strings of text for things like urls or pseudo element content:

{% highlight scss %}
$background-image: '../../img/body-bg.jpg';
$content: 'hi you guys!';
$fallback-font: 'Times New Roman';
{% endhighlight %}

Numbers and length values:

{% highlight scss %}
$magic-number: 42;
$global-line-height: 1.4;
$padding: 20px;
$margin: 1em;
{% endhighlight %}

Boolean values: true or false - not that commonly used but good if you're 
building frameworks and component libraries.

{% highlight scss %}
$output-media-queries: true;
$hide-for-mobile: false;
{% endhighlight %}

And finally, a new variable type added in Sass 3.3, maps of key-value
pairs. These look a bit like JavaScript objects or Ruby hashes and are
very powerful for storing many values in a single variable.

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
	background: 0,
	behind: -1
);
{% endhighlight %}

There's lots to talk about regarding maps and there will be a whole [AtoZ
Sass](http://www.atozsass.com) video about working with them in a few
weeks time. 

## Nested Selectors

The next Sass feature to take a look at is nested selectors. Nesting
allows us to use an indented syntax in our Sass code to demonstrate
hierarchy of how various selectors work together. It's a similar concept
to how indentation is used in HTML to show the various parent, child and
sibling relationships of elements in the document.

Take the following snippet of code which sets up some structural styles
for a page's main navigation:

{% highlight css %}
.site-header {
	position:relative;
}
.site-header .site-nav {
	float:right;
}
.site-header .site-nav ul {
	margin:0;
	padding:0;
}
.site-header .site-nav li {
	display:inline-block;
}
{% endhighlight %}

There is a lot of repetition in the descendent selectors and with Sass
we can re-write this as follows:

{% highlight scss %}
.site-header {
	position:relative;

	.site-nav {
		float:right;

		ul {
			margin:0;
			padding:0;
		}
		li {
			display:inline-block;
		}
	}
}
{% endhighlight %}

So what's different? Well, the major difference is the indentation of
the code and the reduced repetition in each selector.

On the first line of code the `.site-header` class is defined and its
opening curly brace appears at the end of the line. The closing curly
brace for this selector is found on the final line. The remaining
selectors are *nested* (indented) within the braces of the
`.site-header` selector.

Line 4 defines the `.site-nav` class. Because this has been nested
within the `.site-header` class, the compiled CSS is

{% highlight css %}
	.site-header .site-nav { }
{% endhighlight %}
	
On line 7 we have a `ul` selector. Because this is nested within the
`.site-nav` class, which is nested inside the `.site-header` class, the
compiled CSS for this selector would be 

{% highlight css %}
	.site-header .site-nav ul { }
{% endhighlight %}

It can be tempting to get carried away with this nesting business and
go many layers deep without realising the impact on the compiled CSS.

For every level of nesting, you're adding to the specificity of the
generated selectors (even though it feels like you're writing something
very short and concise). High specificity makes code difficult to work
with for yourself and your fellow teammates and should be kept as low as
possible.

As a general rule, aim to keep below 3 levels deep when nesting. 

There is more to nesting that we've covered here but this should suffice
as an introduction to the concept.

## Reusing Larger Blocks of Code with Mixins

We've already learned about variables which are great at storing single
values for reuse. But sometimes we want to reuse larger blocks of styles
in multiple places across a project or have similar patterns in the code
with a few details changed here and there.

Sass mixins provide exactly this functionality. They come in two parts,
first we define the mixin:

{% highlight scss %}
@mixin name-of-mixin {
	// mixin styles
}
{% endhighlight %}

And then the mixin is used by including it within a style block:

{% highlight scss %}
.box {
	@include name-of-mixin;

	// additional styles for .box
}
{% endhighlight %}

Let's take a look at an example. 

Imagine a project that uses a common pattern of uppercase text with
slightly increased letter-spacing that's used across a number of
different elements and selectors. This is an ideal candidate for using
a mixin.

First it's defined:

{% highlight scss %}
@mixin uppercase-letter-spacing {
	text-transform: uppercase;
	letter-spacing: 2px;
}
{% endhighlight %}

And then it can be used in multiple places, even in multiple partials:

{% highlight scss %}
// in _base.scss
h3, h4, h5, h6 {
	@include uppercase-letter-spacing;
}
// in _homepage.scss
.intro-title {
	@include uppercase-letter-spacing;
}
// in _contact-us.scss
.contact-us-button {
	@include uppercase-letter-spacing;
}
{% endhighlight %}

Do keep in mind that using a mixin in this way is is effectively like
outsourcing copy and paste to Sass. When the styles are compiled
into CSS there will be lots of instances of `text-transform` and
`letter-spacing`.

A more powerful and perhaps more appropriate way of using mixins is to
create mixins that accept a number of parameters. This enables a similar
pattern of styles to be output but with small variations in the values
that are used.

Let's take the same text formatting mixin as above and supercharge it
with some options. Let's also imagine that we may also need to change the
font-size of elements that are having this treatment and provide
a solution for that too.

To allow our mixin to accept variable parameters, we can update its
definition as follows:

{% highlight scss %}
@mixin uppercase-letter-spacing( $letter-spacing, $font-size ) {
	font-size: $font-size;
	text-transform: uppercase;
	letter-spacing: $letter-spacing;
}
{% endhighlight %}

Now our mixin can be used as follows:

{% highlight scss %}
.intro-title {
	@include uppercase-letter-spacing( 2px, 2em );
}
.contact-us-button {
	@include uppercase-letter-spacing( 4px, 1.25rem );
}
{% endhighlight %}

This will output the following CSS when compiled:

{% highlight css %}
.intro-title {
	font-size: 2em;
	text-transform: uppercase;
	letter-spacing: 2px;
}
.intro-title {
	font-size: 1.25rem;
	text-transform: uppercase;
	letter-spacing: 4px;
}
{% endhighlight %}

Pretty powerful stuff, eh?

Mixins are very powerful but thinking about your code in this concept of
repeated patterns may be new and take a bit of getting used to. Here's
a list of suggestions for potential use-cases for mixins to help you see
their flexibility:

* Handling vendor prefixes
* Creating media queries for responsive design
* Using clearfix in CSS rather than cluttering the HTML with utility classes
* Creating multiple colour schemes
* Adding common blocks of styles for things like vertical centring or horizontal navigations
* Image replacement techniques

Mixins are incredibly useful but again, just like with nesting, be
mindful when using them and always keep an eye on the compiled CSS to
ensure it's something you would write yourself if you weren't using Sass
to do all the hard work for you!

So, that wraps up our introduction to Sass in preparation for the next
series of AtoZ. I can't wait to share it with you! Help me spread the
word with a Tweet:

> "Learn #Sass and #CSS with @guyroutledge and @atozcss in bite-sized video form."
>
> [Click to tweet this](http://twitter.com/?status=Learn%20%23Sass%20and%20%23CSS%20with%20@guyroutledge%20and%20@atozcss%20in%20bite-sized%20video%20form.%20http://www.atozsass.com)

## Other Posts in this Series

* Part 1: [What is Sass](/blog/what-is-sass)
* Part 2: [Installing Sass](/blog/installing-sass)
* Part 3: [Organising Sass with Partials](/blog/organising-sass-with-partials)
* Part 4: Variables, Mixins and Nested Selectors
