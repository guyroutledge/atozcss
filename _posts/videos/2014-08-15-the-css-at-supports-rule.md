---
layout: post_page
title: " @supports"
alias: /s
date: 2014-09-09
wistiaId: 08d1e2yncj
disqusId: supports
videoLength: 7 minutes 25 seconds
comments: true
categories: video
excerpt: >
  When using new or experimental CSS, it can be useful to know
  if the browser supports the features we're writing code for.

  Feature detection is often done in JavaScript with tools like Modernizr
  but in some browsers, we can now detect capabilities from CSS.

  The `@supports` rule allows us to conditionally apply styles for
  features that are or are not supported.
summary: |
  In this episode we'll learn all about

  * Browser support for various CSS features
  * How the `@supports` at-rule works
  * and how to provide alternative styles for unsupported features

  ## Browser support

  `@supports` isn't really ready for mainstream use so I still recommend
  using the Modernizr JavaScript library for feature detection.
---

When using new or experimental CSS, it can be useful to know
if the browser supports the features we're writing code for.

Feature detection is often done in JavaScript with tools like Modernizr
but in some browsers, we can now detect capabilities from CSS.

The `@supports` rule allows us to conditionally apply styles for
features that are or are not supported.

In this episode we'll learn all about

* Browser support for various CSS features
* How the `@supports` at-rule works
* and how to provide alternative styles for unsupported features

## Browser Support

If you've been writing CSS for any length of time, you've probably
discovered that not all browsers render things the same way and don't
all support the same features.

A fantastic resource that I use almost daily for checking browser
support is the website [caniuse.com](http://www.caniuse.com).

This site allows you to search a database of supoort tables to find out
which versions of which browsers support which features. 

In the previous episode we learned about the `:required` pseudo
class, which is supported in IE10, Firefox, Chrome, Safari, Opera and
Blackberry but not Opera Mini or iOS Safari or Android Browser.

We also learned about `@keyframes` in episode 11 which are supported in
all current browsers apart from Opera Mini but is only available in IE
from version 10 and is prefixed in Chrome, Safari, Opera, Android and
Blackberry.

As you can see, the feature support landscape is vast and complex. This
resource is amazing and an integral part of knowing what will work under
what browsing conditions. It allows us to decide what features we may
need to provide fallbacks for in case the required feature is key to the
design or functionality of the site.

## The @supports rule

`@supports` is an at-rule, a bit like the `@media` queries which we looked
at in Episode 13.

These at-rules apply styles contained within them, only if a condition
is true. 

The condition is contained within parentheses and contains a CSS
property followed by a value, separated by a colon.

{% highlight css %}
@supports ( property: value ) {
	/* styles applied if the condition is true */
}
{% endhighlight %}

If the CSS property inside the brackets accepts a value with the
specified syntax, the condition is true.

If we wanted to detect support for unprefixed CSS animations, we could
use the following snippet:

{% highlight css %}
@supports ( animation-name: test ) {
	body { background:#cc3f85; }
}
{% endhighlight %}

Here I'm using a visual cue of making the background of the page pink to
show whether the feature is supported or not. We can see that the
background is still black, so unprefixed animations are not supported in
Chrome, which is what I'm currently using here.

{% highlight css %}
@supports ( animation-name: test ) or ( -webkit-animation-name:test ) {
	body { background:#cc3f85; }
}
{% endhighlight %}

We can use the keyword `or` to check multiple properties or multiple
vendor prefixes. In this case, the background does change colour, which
tells me that Chrome supports the `-webkit` prefixed version of the
`animation` property.

It's also possible to specify multiple conditions with `and` or to
negated a condition with the `not` keyword.

## Providing fallback styles

We can use these suport conditions to check for features but we can also
use them to provide fallback styles in the case where a feature isn't
supported.

I've got an image here with a caption positioned over the top of it. The
caption has a semi-transparent background using `hsla` which we covered
way back in Epsiode 3.

`hsla` isn't supported in old versions of IE so users of that browser
will see no background at all. Due to the nature of this image and the
color of the text, the caption is barely legible which is a real
usability problem.

We could create the default style with a solid background color that
fits the design and then use `@supports` to add the semi-transparent
background if the feature is available.

{% highlight css %}
.caption {
	background:#000;
}
@supports ( background:hsla(0, 0%, 0%, 0.5 ) {
	.caption {
		background: hsla(0, 0%, 0%, 0.5);
	}
}
{% endhighlight %}

You could argue that this is a little long winded and a much more common
approach to this particular problem would be to just allow the `hsla`
declaration to override the solid background as follows:

{% highlight css %}
.caption {
	background:#000;
	background: hsla(0, 0%, 0%, 0.5);
}
{% endhighlight %}

This simple approach works fine in this case, but if we wanted to add
a lot of CSS if a certain feature was or wasn't supported, we'd need
something more comprehensive.

A good example would be something like flex-box which is a completely
different layout model for creating complex user interfaces.

We could start with a float or position based layout as a good solid
base, but then detect flex box with `@supports` and take advantage of
all the features that new layout engine provides.

Here I've made a an app-like header bar which shows the name of the view
with back and forward buttons to the left and right. To get this effect,
we can use a combination of absolute positioning and text-align center.

However, with flexbox support, we can just set the nav container to
`display:flex` and `justify-content` with `space-between` to equally
space the three elements out.

We could wrap the flex-box styles in an `@supports` rule and wrap the
fallback styles with one for `not (display:flex)`.

{% highlight css %}
nav {
	background:#eee;
	padding:10px;
}
@supports not ( display:flex ) {
	nav {
		text-align:center;
	}
	.nav-back {
		position:absolute;
		left:1em;
	}
	.nav-forward {
		position:absolute;
		right:1em;
	}
}
@supports ( display:flex ) {
	nav {
		display:flex;
		justify-content:space-between;
	}
	.nav-back,
	.nav-forward {
		position:static;
	}
}
{% endhighlight %}

It's worth noting that browsers that don't support flexbox, almost
certainly don't support `@supports` so to make this backwards
compatible, the `@supports not (display:flex)` condition would have to
be removed.

While I'm really looking forward to this feature gaining more traction,
it's still a long way off being useful as the browser support for
`@supports` itself is quite limited. 

In the meantime, I tend to use the Modernizr JavaScript library for
feature detection instead.

This will add classes to the `html` element like `flexbox` if the
feature is supported or `no-flexbox` if it's not. These can then be used
in place of the `@supports` rule:

{% highlight css %}
nav {
	background:#eee;
	padding:10px;
}
.no-flexbox {
	nav {
		text-align:center;
	}
	.nav-back {
		position:absolute;
		left:1em;
	}
	.nav-forward {
		position:absolute;
		right:1em;
	}
}
.flexbox {
	nav {
		display:flex;
		justify-content:space-between;
	}
	.nav-back,
	.nav-forward {
		position:static;
	}
}
{% endhighlight %}

Feature detection and cross-browser support are an important but
often frustrating part of front-end design and development.  But with the
tools we've looked at here, hopefully some of that pain can be eased and
we can continue to focus on just making awesome websites.

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/s](http://www.atozcss.com/s).

If you find these videos at all useful, please spread the word and leave
a comment letting me know what you liked, and what you didn't.

If you have any questions or comments, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or
drop me an email.

Cheers.


