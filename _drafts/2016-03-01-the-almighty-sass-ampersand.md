---
layout: post_page
title: "The Sass Ampersand"
date: 2016-03-08
wistiaId: sassa
wistiaPoster: 
videoLength: 6 minutes 20 seconds
comments: false
categories: video
excerpt: >
  In this first video of a brand new AtoZ screencast series, we start
  our journey into the world of Sass. The Sass ampersand character is
  very powerful and acts as a placeholder for the parent selector within
  nesting.
summary: |
  The Sass ampersand has a number of uses for outputting the parent
  selector when nesting.

  In this video you'll learn:

  * All about nesting and the Sass parent selector
  * The reverse parent selector
  * and the double ampersand selector

---

Hello welcome to a AtoZ CSS and to a brand new video series!

Over the next 26 episodes we'll be diving into the CSS preprocessor,
Sass and looking at a different topic, concept, feature or tool - one
for each letter of the alphabet.

If you're new to Sass then I highly recommend checking out my
introductory ebook Up and Running with Sass which is a practical intro
to CSS preprocessing with Sass. Head to
[atozcss.com/books](http://www.atozcss.com/books) for more details.

Today I'd like to talk to you about the Sass ampersand character. This
single character is a powerful part of the Sass language and has
a number of different uses. In this episode you'll learn:

* All about nesting and the Sass parent selector
* The reverse parent selector
* and the double ampersand selector



## Parent selector

Nesting is a popular feature in Sass. But it's something to do
infrequently and carefully to avoid unnecessarily high specificity in
our selectors.

Nesting allows us to write a shorter syntax which is then compiled into
CSS.

For example, when styling a site's navigation, we might use the
following snippet to style the unordered list and list items within the
nav:

{% highlight scss %}
.site-nav {
	ul {
		margin:0;
		padding:0;
	}
	li { 
		display:inline-block;
	}
	a {
		color:#fff;
	}
}
{% endhighlight %}

Here the `ul`, `li` and `a` tags are indented inside the braces of the
`.site-nav` class and when compiled would produce the following CSS:

{% highlight css %}
.site-nav ul { margin:0; padding:0; }
.site-nav li { display:inline-block; }
.site-nav a  { color:#fff }
{% endhighlight %}

For each selector that's nested within the `.site-nav`, the parent
selector is output in front.

When working with pseudo classes or pseudo elements, we might attempt to
write code like this to style the hover state of anchor tags:

{% highlight scss %}
.site-nav {
	a { 
		color:#fff;

		a:hover {
			color:#000;
		}
	}
}
{% endhighlight %}

But this will output CSS which won't style the hover states as planned
and would actually select the hover state of any links inside of links
which doesn't make sense from a document hierarchy standpoint.

{% highlight css %}
.site-nav a  { color:#fff }
.site-nav a a:hover { color:#000 }
{% endhighlight %}

So to solve this problem, we need a way of referencing the parent
selector within Sass nesting. 

We do that with the ampersand `&` character.

{% highlight scss %}
.site-nav {
	a { 
		color:#fff;

		&:hover {
			color:#000;
		}
	}
}
{% endhighlight %}

The ampersand is a bit like a special variable that always holds the value
of the current selector's parent.

While nesting is a useful way to avoid typing out repetitive selectors,
it should be used with caution. Try to limit nesting to pseudo selectors
where possible but at most, never go more than 3 levels deep to avoid
overly specific selectors.




## Reverse parent

The parent selector has another use in something I call the "reverse
parent selector". 

Imagine a project which has multiple colour schemes that are switched
via a class on the `body` element.

{% highlight html %}
<body>...</body>
<body class="theme-light">...</body>
<body class="theme-dark">...</body>
{% endhighlight %}

Now imagine that each colour scheme or "theme" has different coloured
links and buttons. We could set up some default styles as follows

{% highlight scss %}
a { 
	color: #666;
}
.button {
	color: #fff;
	background: #666;
}
{% endhighlight %}

To change these styles for each theme, we could use the Sass ampersand
as follows:

{% highlight scss %}
a { 
	color: #666;

	.theme-dark & { 
		color:#333; 
	}
}
.button {
	color: #fff;
	background: #666;

	.theme-dark & { 
		background: #333; 
	}
	.theme-light & { 
		color:#333; background: #ccc; 
	}
}
{% endhighlight %}

Here the ampersand appears at the end of the selector but still serves
the same purpose which is to output the parent selector in its place.
This snippet would then compile as follows:

{% highlight scss %}
a { 
	color: #666; 
}
.theme-dark a { 
	color:#333; 
}
.button {
	color: #fff; background: #666;
}
.theme-dark button { 
	background: #333; 
}
.theme-light button { 
	color:#333; background: #ccc; 
}
{% endhighlight %}

This use of the ampersand is really handy for situations where a parent
class is used to override styles. And using it in this way and helps to
keep all related styling together making the code more compact and
easier to read without scrolling up and down the file.




## Double Ampersand

One final use of the Sass ampersand that we'll look at here is the
"double ampersand" selector. 

Here's an example of what a double ampersand selector might look like:

{% highlight scss %}
.button {
	& + & { }
}
{% endhighlight %}

This uses an adjacent sibling selector (shown by the `+` character) and 
would compile as follows.

{% highlight css %}
.button + .button { }
{% endhighlight %}

This selector will match any `.button` class that immediately follows
another `.button` class. But how is this useful?

Well, think of a series of buttons that lay out horizontally. We may
want to space them out with a bit of margin but we'll always end up
having to remove margins on either the first or last element with
`:first-child` or `:last-child`.

{% highlight scss %}
// add margin to the left and remove from the first
.button {
	margin-left:1em;

	&:first-child {
		margin-left:0;
	}
}
// or add margin to the right and remove from the last
.button {
	margin-right:1em;

	&:last-child {
		margin-left:0;
	}
}
{% endhighlight %}

Instead, we can use the double ampersand to only add `margin-left` to
buttons that are adjacent to other buttons:

{% highlight scss %}
.button {
	& + & { margin-left: 1em }
}
{% endhighlight %}

This may look a little odd to begin with but the end result is much less
code and removes the need to override styles that have already been
declared.



## Outro

In the next episode we'll be discussing B for "BEM" and looking at
another powerful use of the Sass ampersand. Make sure you sign up for
the mailing list to be the first to hear about the next release and get
weekly CSS news and links delivered straight to your inbox.

For this episode, a transcript and code snippets can be found at
[atozsass.com/a](http://www.atozsass.com/a). 

To keep in touch or let me know of any questions or comments you might
have, you can tweet me [@guyroutledge](http://www.twitter.com/guyroutledge)
and follow [@atozcss](http://www.twitter.com/atozcss).

Thanks so much for watching, I'll see you next time.

Cheers.
