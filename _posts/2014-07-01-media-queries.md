---
layout: post_page
title: "Media"
alias: /m
date: 2014-07-01
wistiaId: 
videoLength: x minutes x seconds
comments: true
excerpt: >
  
summary: |
  
---

The `@media` rule allows conditional styling of elements.

The conditions can be based on the type of media or known
characteristics of the device being used.

Combining media queries with fluid layout and flexible images, allows us
to implement responsive web design.

In this episdode we'll look at how `@media` queries can be used to
change the styling of websites based on querying information about the
device and two approaches for tackling page layout in responsive
design.

## Media Queries

Sometimes we only want certain styles to apply on certain types of
devices or when certain characteristics of the device are true. 

For example, we might want to remove the header and footer when printing
a web page.

Using the query `print` will restrict the styles of the at-rule to
the `print` media type.

{% highlight css %}
@media print {
	.site-header, .site-footer { display:none; }
}
{% endhighlight %}

Other media types include 

* all
* braille
* embossed
* handheld
* projection
* screen
* speech
* tty
* tv

The only two media types I use are `print` and `screen`, which is
a bit of a catch-all for any screen-based device including mobile
devices, tv and projection.

### Device Queries

We can check more fine-grained details about the device being used by
passing a query into the `@media` rule. A common property to query is
the `min-width` of the browser window:

{% highlight css %}
body {
	font-size:0.75em;
}
@media (min-width:600px) {
	body {
		font-size:1em;
	}
}
{% endhighlight %}

In this example the initial `font-size` for all devices is `0.75em` but if
the device has a minimum width of `600px` (ie. is 600px or wider) then the
`font-size` will be increased to `1em`. I'll increase the `font-size`
in the example to `3em` so the change is more obvious.

There are a number of things we can query about the device:

* width | min-width | max-width
* height | min-height | max-height
* device-width | min-device-width | max-device-width
* device-height | min-device-height | max-device-height
* orientation
* aspect-ratio | min-aspect-ratio | max-aspect-ratio
* device-aspect-ratio | min-device-aspect-ratio | max-device-aspect-ratio
* resolution | min-resolution | max-resolution
* color | min-color | max-color
* color-index | min-color-index | max-color-index
* monochrome | min-monochrome | max-monochrome
* scan | grid

Many of these have a corresponding `min` and `max` variety as well.

I use `min-width` and `max-width` a lot, `orientation`, `aspect-ratio`
and `resolution` occasionally and `min-height` and `max-height` from
time to time. I've never used the others as far as I can remember.

Width is by far the most common thing to query about the device, but as
the reported width and device width are often different, it's necessary
to add the following `meta` tag to your HTML which will make them
equivalent:

	<meta name="viewport" content="width=device-width, initial-scale=1">

The `initial-scale` is set to prevent devices zooming out to fit the
whole site in the viewport. It's possible to set `maximum-scale=1` but
then this removes the ability for a user to zoom the page in which isn't
good user experience.

## Multiple queries

It's possible to combine queries together using the `and` keyword:

{% highlight css %}
@media screen and (min-width:600px) and (max-width:800px) { }
@media screen and (orientation:portrait) and (min-width:800px) { }
{% endhighlight %}

It's also possible to use negation:

{% highlight css %}
@media not screen { }
{% endhighlight %}

And limit applicability using `only`:

{% highlight css %}
@media only screen { }
{% endhighlight %}

These `@media` blocks can contain any CSS you'd write elsewhere in the
stylesheet and cascade the same way too. This means you will likely not
have to write that much CSS to change the design for multiple devices.

## Responsive Design

As `@media` queries allow the conditional styling when certain device
characteristics are true, we can use them to control the styling of
a page across a range of different devices or device sizes.

We can control fine details or big-picture layout. It's common for
websites viewed on a large screen to have multiple columns of text and
images, but this would be impossible to read on a screen one fifth of
the width.

As building and modifying complex layouts is time consuming, let's use
a simple example of four boxes to represent four sections of a page.
Each box contains an image and a few lines of text.

Without any styles applied, the images, text and boxes stack on top of
each other. We can space them out a bit and add some borders and
backgrounds to make them stand out a bit more.

As the screen gets wider, the layout looks a bit stretched and the small
amount of text starts looking odd compared to the size of the image.
Around 500px, we could add a `@media` query to create a two column
layout instead of a 1-column layout.

{% highlight css %}
@media screen and (min-width:500px) {
	.box { 
		float:left;
		width:50%; 
	}
}
{% endhighlight %}

As the screen gets wider again, we could fit 4 columns in so could
change the `width` of each box to 25% instead.

{% highlight css %}
@media screen and (min-width:500px) {
	.box { 
		width:25%; 
	}
}
{% endhighlight %}

Because of how CSS styles cascade, we don't need to specify `float:left`
again.

This approach of starting with the small screen and adding styles to
make a more complex layout is known as Mobile First, as coined in [the
book of the same name by Luke
Wroblewski](http://www.abookapart.com/products/mobile-first).

It's possible to go in revese - desktop first - and start with the more
complex layout. In this case, we'd start with the boxes floated and 25%
wide and use `max-width` queries to override the styles for smaller
screens. This leads to a small amount more CSS but can sometimes be
easier to get your head around. However, if possible I think it best to
start mobile first as it focuses thinking about design and development
from the outset and reduces the risk of needing to shoe-horn a complex
layout on to a tiny screen.

It took me a while to get used to mobile first, but it's definitely my
go-to approach these days - although I'd love to know what you think...

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/m](http://www.atozcss.com/m).

If you have any questions please leave a comment or, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or drop me an
email.

Cheers.


