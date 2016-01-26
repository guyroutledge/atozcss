---
layout: post_page
title: "Interpolation of Sass Variables"
date: 2016-04-27
wistiaId: sassi
wistiaPoster: 
videoLength: x minutes x seconds
comments: false
categories: video
excerpt: >

summary: |

---

In previous videos and in the introductory blog post series to Sass
we've discussed variables and their various [data
types](http://www.atozsass.com/d).

Variables can be used to set values to CSS properties but if you've ever
wanted to use a variable in a selector or as part of URL string, we need
an extra tool called "interpolation" to make everything work. 

In this video you'll learn: 

* What interpolation means
* The difference between string concattenation and interpolation
* Using variables in selectors and property names 
* Using variables in media queries for responsive design



## What Does Interpolation Mean?

Let's start off with a bit of a definition. Interpolation is a term
often used in mathematics to refer to the practice of "constructing new
data points within the range of an existing set of known data points".

That still sounds a bit abstract to me so how about this:

Interpolation inserts something into something else.

In the Sass world, this usually means inserting a Sass expression
- a variable, function call or mathematical calculation - into another
string, a selector or property name.

Sass uses a special syntax for inserting values into other values that
takes the form 

{% highlight scss %}
	#{  }
{% endhighlight %}

This syntax is also found in the Ruby programming language where Sass
has its roots.

Let's look at a series of example to illustrate how and why to use
interpolation in Sass.



## Interpolation vs. Concattenation

Take the following example where I have a variable called `$image` that
holds the value `logo.png`.

I've got a selector for the logo and I want to apply the image as
a background image. If I were to write it out manually, the image URL
would look as follows. But instead of writing it out manually, I'm going
to use the variable instead.

If I add the variable name within the url string, Sass doesn't throw an
error but the image doesn't show up.

{% highlight scss %}
$image: 'logo.png';

.logo {
  background: url( 'images/$image' );
}
{% endhighlight %}

This is because we have passed the litteral string `images/$image` as
a URL. If we want `$image` to be used as a Sass variable we have two
options.

Firstly, we could use string concattenation. This is the process of
joining two strings together using a `+` operation.

{% highlight scss %}
$logo: 'logo.png';

.logo {
  background: url( 'images/' + $logo );
}
{% endhighlight %}

We add the string `"logo.png"` from the variable onto the end of the
`"images/"` string in the URL.

Alternatively, we could use interpolation and insert the value of the
variable within the url string. We can re-write the code as follows:

{% highlight scss %}
$logo: 'logo.png';

.logo {
	background: url( 'images/#{ $logo }' );
}
{% endhighlight %}

Within the interpolation braces, the Sass expresion is interpreted first
and then inserted within the string. When using interpolation, any Sass
expression, function call or mathematical calculation can be performed
and the result of the expression will be inserted in its place.

You may ask why there are two different approaches for doing almost
exactly the same thing. Well, interpolation can be used for inserting
values into more than just strings.




## Interpolating Selectors & Properties

We've just seen two solutions for inserting a variable into a string but
let's now take a look at CSS selectors.

In the following example I have three variables, one called `$selector`
and one called `$property` and one called `$value`. These variables
could have been named anything, but I've named them according to where
they'll be used for this example.

{% highlight scss %}
$selector: 'highlight';
$property: 'bottom';
$value:    'red';
{% endhighlight %}

We can use the `$value` variable in the usual way. When Sass compiles,
this variable name is substituted for its value "red".

If we wanted to use the `$selector` variable in the selector, we need to
use interpolation as string concattenation with `+` doesn't work and if
it did, would be confusing as `+` is also used as an adjacent sibling
selector.

{% highlight scss %}
// this won't work

p . + $selector {
	color: red;
}
{% endhighlight %}

Instead, we use interpolation to create the selector `p.highlight` in
the compiled CSS.

{% highlight scss %}
p .#{ $selector } {
	color: red;
}
{% endhighlight %}

A similar thing can be done to use a variable in a property name.

{% highlight scss %}
p .#{ $selector } {
	color: red;
	border-#{ $property }: 2px solid;
}
{% endhighlight %}

Interpolation is a very useful feature - even if using variables in
selectors or properties isn't as common as using variables for values,
it's good to know that this tool is there when needed.




## Interpolation in Media Queries

One final area where interpolation comes in very useful is when working
with media queries. Variables in media queries is worth looking at
because it can be a bit confusing as to when interpolation is and is not
needed.

Take the following example where I have a `$breakpoint` variable set to
a number of pixels.

This can be included in a media query as a value as part of an
expression such as a `min-width` or `max-width` media query:

{% highlight scss %}
$breakpoint: 500px;

@media screen and ( min-width: $breakpoint ) {
	body {
		color:red;
	}
}
{% endhighlight %}

Perhaps we use these `min-width` media queries a lot and get tired of
typing out `screen and ( min-width: $breakpoint )` all the time. We
could create another variable for the whole query and even use
interpolation to insert the value of our breakpoint:

{% highlight scss %}
$breakpoint: 500px;
$query: 'screen and ( min-width: #{ breakpoint } )';
{% endhighlight %}

If we were now to use this variable for the media query, Sass would
throw an error. Instead, we need to use interpolation and everything
works as planned.

{% highlight scss %}
$breakpoint: 500px;
$query: 'screen and ( min-width: #{$breakpoint} )'; 

@media #{$query} {
	body {
		color:red;
	}
}
{% endhighlight %}



## Outro

In the next episode we'll be discussing J for "JSON" we'll be looking at
how we can share variables between Sass and JavaScript.

Make sure you sign up for the mailing list to be the first to hear about
the next release and get weekly CSS news and links delivered straight to
your inbox.

For this episode, a transcript and code snippets can be found at
[atozsass.com/i](http://www.atozsass.com/i).

To keep in touch or let me know of any questions or comments you might
have, you can tweet me [@guyroutledge](http://www.twitter.com/guyroutledge)
and follow [@atozcss](http://www.twitter.com/atozcss).

Thanks so much for watching, I'll see you next time.

Cheers.

