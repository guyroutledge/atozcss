---
series: atoz-sass
sidebar_ad: ad-book-sass.html
layout: post_page
title: "Using Neat & Bourbon with Sass"
date: 2016-06-08
wistiaId: sassn
wistiaPoster: 
videoLength: 6 minutes 30 seconds
comments: false
categories: video beginner
excerpt: >
summary: |

---

Sass is an extension language for CSS but it's popularity has seen the
birth of a number of extensions to Sass itself in the form of mixin
libraries and plugins.

Neat is a grid system that uses the Sass extension Bourbon and we'll
be diving into both of these tools in this video.

Both Bourbon and Neat are libraries created by the team at Thoughtbot
a global design and development consultancy. They can both be installed
as Ruby gems or via npm if you're using a Node-based workflow. To make
sure this video doesn't run too long, I'll leave following the
installation instructions as an exercise for you. 

Head to [bourbon.io](http://www.bourbon.io) or
[neat.bourbon.io](http://neat.bourbon.io) for directions on how to get
up and running.


## Bourbon

Bourbon is predominantly a mixin library which helps deal with vendor
prefixes for cross-browser compatibility.

If you'd rather forget about vendor prefixes entirely, sign up for the
AtoZ CSS mailing list and I'll send you an exclusive video about how to
add autoprefixer to your workflow so you'll never have to write a prefix
ever again!

Bourbon also features a number of useful helper functions and add-ons
for performing common tasks like converting pixels to ems, pixels to
rems, clearfix and using popular easing functions and much much more.

Let's take a look at a couple of these in action.

I've got the beginnings of a contact form widget here which we'll turn
into a two column floated layout with a little banner positioned in the
top right corner.

The HTML is fairly typical and I've used BEM for the class naming
- for more info on BEM and using it with Sass check out [Episode
2](http://www.atozsass.com/b).

I've set up some default styling and we're going to use make a few
tweaks and changes to illustrate some of Bourbon's features.

Firstly, to start using Bourbon we have to `@import` it into our project
(having gone through the installation steps).

{% highlight scss %}
@import 'boubon/bourbon';
{% endhighlight %}

This imports the whole Bourbon library but you can bring in just the
helper functions or just the css3 mixins if you prefer.

We now have access to all of Bourbon's features which mostly come in the
shape of mixins. For a full list of what Bourbon can do for you, head to
[bourbon.io/docs](http://www.bourbon.io/docs).

Let's start by creating a two-column layout. We'll look at Bourbon's
grid framework, Neat, a bit later on but for now I'm just going to
create two equal sized columns and float them left.

We we float things, the parent container collapses so we need to use
clearfix. Instead of bouncing out to the web and copying and pasting
a clearfix snippet, we can use Bourbon's clearfix mixin.

{% highlight scss %}
.contact__container {
	@include clearfix;
}
{% endhighlight %}

Pretty handy. Another useful mixin is the positioning shorthand mixin.
This position mixin takes two arguments: one for the type of position
and one as a shorthand declaration for the `top`, `right`, `bottom` and
`left` offset properties.

This allows our absolutely positioned banner to be placed in the corner
of its relatively positioned parent container in a single line.

One final area we can look at is when styling the form inputs. This
contact form only has 4 types of inputs: `text`, `email`, `tel` for the
phone number and `textarea`. Instead of having to type these out (and
all the others if you were using them), Bourbon has a handy variable for
`$all-text-inputs` which allows them to be styled all at once.

There's also variables for `$all-text-inputs-hover` and
`$all-text-inputs-focus` but I'd just use a bit of nesting and the Sass
ampersand to reference the parent here as it's quicker to type.

{% highlight scss %}
#{$all-text-inputs} {
	&:hover,
	&:focus {
		background:#fff;
	}
}
{% endhighlight %}

While I wouldn't find the CSS3 mixins useful (as I'm an autoprefixer
fan) I can see the benefit for a library like Bourbon for anyone who
wants to use a consistent set of functions and add-on features without
having to rely on using a whole front-end framework like Bootstrap or
Foundation.



## Neat

Neat is another part of the Bourbon family offering a lightweight,
semantic grid system that's built on top of Bourbon.

The library bundles another handful of mixins for building flexible and
responsive grid systems whilst using some of the Bourbon functions and
mixins behind the scenes.

Let's take a look at an example of building a simple page layout with
a Neat grid.

Again the first step here is to `@import` the neat framework. As it has
Bourbon as a dependency, we need to import that too otherwise you'll get
an error about undefined variables.

{% highlight scss %}
@import 'bourbon/bourbon';
@import 'neat/neat';
{% endhighlight %}

With the libraries imported, we're able to start building a grid. In
each example, I've set up some CSS to show how the columns, rows and
containers overlap with a semi-transparent pink; the darker the colour,
the more deeply nested the grid structure.

The whole concept of Neat grids is to do away with adding hundreds of
grid classes to the HTML. Instead of creating loads of `divs` with
classes like `column`, `small-12` or `col-md-4`, we add a meaningful
classname to describe the purpose of the element, select this in our
Sass and call a mixin to define it as a container or a span of columns.

{% highlight scss %}
.latest-posts {
	@include outer-container;
}
.latest-video,
.latest-blog {
	@include span-columns( 6 );
}
{% endhighlight %}

This keeps all the styling logic in the CSS and keeps the HTML nice and
*neat* and tidy.

To create our grid container, we use the mixin `outer-container`.

To create a column within, we use the `span-columns` mixin passing
a numeric value for the number of columns to span. Neat is based on
a 12-column grid by default but this can be changed by creating a file
called `_grid-settings.scss` and including this *before* importing the
neat library. There are a number of variables that can be configured to
override the default grid such as the `$column` width, `$gutter` width,
number of `$grid-columns` and the `$max-width`. 

You can also define custom breakpoints for the grid but more on that
later.

Let's get back to our list of examples and move on to a multi-row grid.

In a lot of grid systems, each row needs to have it's own wrapping `div`
but in Neat we can make a multi-row grid just be specifying which
element is the last in each row.

We do this by calling the `omega` mixin which removes the element's
gutter margin.

{% highlight scss %}
.features {
	@include outer-container;	
}
.feature__label {
	@include span-columns( 3 );
}
.feature__content {
	@include span-columns( 9 );
	@include omega;
	margin-bottom:1rem;
}
{% endhighlight %}

Finally, let's look at creating a more complex grid which has a grid
within a grid - also known as a nested grid.

Here, our sidebar spans 4 columns and our main content spans 8 columns.
To create two equal half columns inside the main content we need to have
them span *4 of 8* columns instead of the typical 6 of 12 columns.

{% highlight scss %}
.nested-grid {
	@include outer-container;

	.sidebar {
		@include span-columns( 4 );
		min-height:100px;
	}
	.main-content {
		@include span-columns( 8 );
	}
	.nested-column {
		@include span-columns( 4 of 8 );
	}
}
{% endhighlight %}

Let's wrap up by taking a quick look at how Neat handles responsive
grids. I'm going to scroll back up to our simple example at the top and
use the simple grid to illustrate how it works.

First we need to create a variable for our breakpoint. This can have any
name but it's probably wise to have some major breakpoints named
something like `$mobile`, `$tablet` and `$desktop` or some other naming
system that makes sense to you as I know some people prefer to think in
sizes not devices; that's totally cool.

To create a Neat breakpoint we use the `new-breakpoint` mixin and pass
in 3 arguments: the property to query such as `max-width` or
`min-width`, the value for that property which will often be in `px` or
`em`, and finally the total number of columns the grid should have at
this breakpoint.

{% highlight scss %}
$mobile: new-breakpoint( max-width 600px 4 );
{% endhighlight %}

This is another major difference between Neat and other grid systems in
that the number of columns can change. It threw me to begin with but it
kind of makes sense - who's going to want 12 columns of content on
a mobile device? 2 to 4 is probably more than enough.

Having created the breakpoint, we can now use the `media` mixin to
define the new size of the grid at a particular breakpoint.

{% highlight scss %}
.latest-video,
.latest-blog {
	@include span-columns( 6 );

	@include media( $mobile ) {
		@include span-columns( 4 );
	}
}
{% endhighlight %}

Again, do remember that the total number of columns in our mobile grid
is 4 so `span-columns( 4 )` actually makes a column that's 100% wide.

To make your code even clearer, we could use `span-columns( 4 of 4 )`
instead.

For more details about what Neat can do, go and check out the website
where you'll also find more examples and excellent documentation.
[neat.bourbon.io](http://neat.bourbon.io).

While this grid system is quite different to many others I've
experimented with, personally I like it a lot. It's a bit more work to
have to constantly `@include` the grid container and column spans into
other selectors but it does help to keep the HTML lean and keeps all the
presentation together in the CSS.

For prototyping, I'd probably still add grid class names to HTML
elements (to help work quickly) but for refining a site ready for final
delivery, I can see this approach being solid.

As both Bourbon and Neat are pure Sass libraries, I'd highly recommend
having a read through their code. You'll be able to get a sense of what
each mixin is doing behind the scenes and you'll likely learn a few
new Sass tips along the way.


## Outro

In the next episode we'll be discussing O for "Optional" and taking
a look at ways to make extending selectors and placeholders more flexible.

Make sure you sign up for the mailing list to be the first to hear about
the next release and get weekly CSS news and links delivered straight to
your inbox.

For this episode, a transcript and code snippets can be found at
[atozsass.com/n](http://www.atozsass.com/n).

To keep in touch or let me know of any questions or comments you might
have, you can tweet me [@guyroutledge](http://www.twitter.com/guyroutledge)
and follow [@atozcss](http://www.twitter.com/atozcss).

Thanks so much for watching, I'll see you next time.

Cheers.
