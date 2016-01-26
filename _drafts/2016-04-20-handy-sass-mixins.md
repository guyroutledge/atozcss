---
layout: post_page
title: "Handy Sass Mixins"
date: 2016-04-20
wistiaId: sassh
wistiaPoster: 
videoLength: x minutes x seconds
comments: false
categories: video
excerpt: >

summary: |

---

Mixins are a Sass feature that enables re-use of blocks of code with
slight variations. They are really powerful and are a code tool in
writing modular and maintainable code.

We'll go over a whole heap of handy mixins to help you out
in all sorts of aspects of crafting styles for a project.

In this video you'll learn:

* The anatomy of Sass mixins
* Utilitiy mixins for styling placeholder text, selection text
* Mixins for centring different types of elements
* Mixins for hiding elements and text replacement



## The Anatomy of a Mixin

I explained the fundamentals of Sass mixins in my book Up and Running
with Sass but by way of a refresher, there are a number of bits and
pieces that make up a mixin. 

We declare a mixin with the `@mixin` directive followed by a name for
the mixin.

{% highlight scss %}
@mixin uppercase-letter-spacing {
	letter-spacing: 2px;
	text-transform: uppercase;
}
{% endhighlight %}

The mixin name is optionally followed by a set of parentheses where we
define any input parameters. These act like Sass variables and can be
used within the mixin to enable the output CSS to change based on the
variables used when the mixin is included. 

{% highlight scss %}
@mixin uppercase-letter-spacing( $letter-spacing, $font-size ) {
	font-size: $font-size;
	letter-spacing: $letter-spacing;
	text-transform: uppercase;
}
h1 {
	@include uppercase-letter-spacing( 4px, 2rem );
}
{% endhighlight %}

When the mixin is used, the styles within the body of the mixin are
output within the braces of the selector where the mixin is called with
`@include`.

Some mixins may output other selectors instead of outputting
properties and values. To do this, we use the `@content` directive
within the body of the mixin. 

{% highlight scss %}
@mixin hover-focus-active {
	&:hover,
	&:focus,
	&:active {
		@content;
	}
}
{% endhighlight %}

When this type of mixin in included, we use curly braces to define where
the content of the mixin starts and ends.

{% highlight scss %}
a {
	color: red;

	@include hover-focus-active {
		color: blue;
	}
}
{% endhighlight %}

This would then compile into 

{% highlight css %}
a {
	color: red;
}
a:hover,
a:focus,
a:active {
	color: blue;
}
{% endhighlight %}

Mixins are very powerful and can be a great time saver. But when you're
first learning Sass, it can be hard to see what you might use them for
or what type of problems they can help you solve. To help with that,
here are a handful of helpful mixins and examples of how you might use
them.



## Selection Text

When styling selection text, we need to provide two separate blocks of
CSS to handle vendor prefixes in the selector. Creating a mixin allows
us to set the selection text colours once and have them replicated as
necessary.

{% highlight scss %}
@mixin selection( $background, $foreground:#fff ) {
	::-moz-selection { 
		background: $background;
		color: $foreground;
		text-shadow: none; 
	}
	::selection { 
		background: $background;
		color: $foreground;
		text-shadow: none; 
	}
}
{% endhighlight %}



## Form Placeholder

Form placeholder selectors are similar to selection text in that the
vendor prefixes in the selector mean each browser needs to be targeted
separately.

Here the placeholder styles can be defined once and passed to `@content`
in each of the four input placeholder selectors.

{% highlight scss %}
@mixin form-placeholder {
	::-webkit-input-placeholder {
		@content;
	}
	::-moz-placeholder {
		@content;
	}
	:-moz-placeholder {
		@content;
	}
	:-ms-input-placeholder {
		@content;
	}
}
{% endhighlight %}



## Centring Things

Centring elements is a common practice and can be accomplished with
fairly minimal CSS. But it's such a common practice that it's often
simpler to write a single line instead of three or four.

{% highlight scss %}
// Center Block
//
@mixin center-block {
	display: block;
	margin-left: auto;
	margin-right: auto;
}

// Easy horizontal & vertical centering of anything in IE9+
//
@mixin absolute-center {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate( -50%, -50% );
}

// Easy vertical centering of anything in IE9+
//
@mixin vertical-center {
	position: absolute;
	top: 50%;
	transform: translateY( -50% );
}
{% endhighlight %}



## Hiding Things

There are a number of approaches for hiding elements whilst still
allowing them to be visible to users of screen readers. This mixin taken
from the [HTML5 Boilerplate](https://html5boilerplate.com/) is a solid
approach. 

When hiding something, we want to ensure it's hidden so I've included
a `!important` after each declaration here to ensure the element is
definitely not visible to sighted users.

{% highlight scss %}
@mixin visuallyhidden {
	border: 0 !important;
	clip: rect(0 0 0 0) !important;
	height: 1px !important;
	margin: -1px !important;
	overflow: hidden !important;
	padding: 0 !important;
	position: absolute !important;
	width: 1px !important;
}
{% endhighlight %}

I put all these mixins into their own `_mixins.scss` partial in each of
my projects to keep them all together and provide a logical place for any
new ones to be added.

If you like the sounds of having a library of mixins, there are a few
Sass tools out there that provide just that. We'll be covering [Bourbon
& Neat](http://www.bourbon.io) in a future video but you could also
check out [Compass](http://www.compass-style.org) or 
[Scut](http://davidtheclark.github.io/scut/).




## Outro

In the next episode we'll be discussing I for "Interpolation" which is
a big word for a very useful little Sass feature.

Make sure you sign up for the mailing list to be the first to hear about
the next release and get weekly CSS news and links delivered straight to
your inbox.

For this episode, a transcript and code snippets can be found at
[atozsass.com/h](http://www.atozsass.com/h).

To keep in touch or let me know of any questions or comments you might
have, you can tweet me [@guyroutledge](http://www.twitter.com/guyroutledge)
and follow [@atozcss](http://www.twitter.com/atozcss).

Thanks so much for watching, I'll see you next time.

Cheers.

