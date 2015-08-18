---
layout: post_page
title: "Opacity"
alias: /o
date: 2014-08-11
wistiaId: 1lm6l98v58
wistiaPoster: 325114f6966f23b0c8b0de6f64953ad7fddfd69e
videoLength: 4 minutes 43 seconds
comments: true
categories: beginner video
excerpt: >
  The opacity property specifies how opaque an element is. It takes
  a value ranging from 0 to 1 where 0 is completely transparent and 1 is
  completely opaque. In this practical episode we'll look at how the
  opacity property works - including some of it's downsides - and then
  create a CSS only fading slideshow using `opacity` and what we learned
  about `@keyframes` in Episode 11.
summary: |
  The `opacity` property specifies how opaque an element is.

  It takes a value ranging from 0 to 1 where 0 is completely transparent
  and 1 is completely opaque.

  In this practical episode we'll look at how the opacity property works,
  including some of it's downsides - and then create a CSS only fading
  slideshow using `opacity` and what we learned about `@keyframes` in
  [Episode 11](http://www.atozcss.com/k).
---

The `opacity` property specifies how opaque an element is.

It takes a value ranging from 0 to 1 where 0 is completely transparent
and 1 is completely opaque.

In this practical episode we'll look at how the opacity property works
- including some of it's downsides - and then create a CSS only fading
slideshow using `opacity` and what we learned about `@keyframes` in
[Episode 11](http://www.atozcss.com/k).

## Opacity

{% highlight css %}
a img {
	opacity:1;
}
{% endhighlight %}

I have a linked image here with `opacity` set to 1. This is the default
and makes the image completely opaque. Setting a value of 0 makes it
completely transparent but does maintain its position in the document.
Setting any value between 0 and 1 makes it semi-transparent.

When setting opacity to anything other than 1, a new stacking context is
created which places the semi-transparent element on a new layer. As
such, the background on the element beneath is partially visible.

I like to use this effect to give some visual feedback to uses hovering
over images that are links. Opacity is a property that can be animated,
and by adding a transition to the image, the effect is a nice subtle fade.

{% highlight css %}
a img { transition:0.3s; }
a:hover img { opacity:0.75; }
{% endhighlight %}

## Opacity and content

When applying opacity to an element that contains other content, the
child elements also appear semi-transparent, regardless of any opacity
value set on them.

If I wanted to create a box with a semi-transparent background,
`opacity` would make the box and all its contents semi-transparent. The
best thing to use in this case would be a background colour set in
`rgba` which we looked at in Episode 3.

## Slideshow

As `opacity` can be animated, let's look at how we can make a slideshow
using a series of keyframes that just manipulate the `opacity` of a set
of images.

I have a container with 5 images inside it. Each one has a numeric class
which will be used to create 5 different animation timings.

{% highlight html %}
<div class="slide-container">
	<img class="slide1" src="http://www.placekitten.com/800/400">
	<img class="slide2" src="http://www.placekitten.com/800/500">
	<img class="slide3" src="http://www.placekitten.com/700/600">
	<img class="slide4" src="http://www.placekitten.com/800/400">
	<img class="slide5" src="http://www.placekitten.com/800/500">
</div>
{% endhighlight %}

The slides are stacked on top of each other by setting
`position:relative` on the `slide-container` and `position:absolute` on
the images inside it.

{% highlight css %}
.slide-container {
	position:relative;
	height:400px;
	overflow:hidden;
}
.slide-container img { position:absolute; top:0; left:0; opacity:0; }
.slide1 { animation: fade 20s infinite;     }
.slide2 { animation: fade 20s 4s infinite;  }
.slide3 { animation: fade 20s 8s infinite;  }
.slide4 { animation: fade 20s 12s infinite; }
.slide5 { animation: fade 20s 16s infinite; } 

@keyframes fade {
	0%   { opacity: 0; }
	10%  { opacity: 1; }
	20%  { opacity: 1; }
	30%  { opacity: 0; }
	40%  { opacity: 0; }
	50%  { opacity: 0; } 
	60%  { opacity: 0; }
	70%  { opacity: 0; }
	80%  { opacity: 0; }
	90%  { opacity: 0; }
	100% { opacity: 0; }
}
{% endhighlight %}

For the keyframes, we want each image to be visible for 1/5 of the
time. For the first image, this can be achieved by having it fade from
`opacity:0` to `opacity:1` over the first 10% of the animation and then
remain opaque for another 10% before fading out to 0 again.

To set up the keyframes for each other the other images, we could copy
and paste the block of code we've already created but a tidier way of
doing it would be to use the `animation-delay` property to offset when
each animation starts by 1/5 of the total duration - this is the time
that the first slide will be visible before it starts to fade out.

Duplicating the animation declaration for slides 2-5 and increasing the
`animation-delay` value in 4 second increments, completes the effect.

Not bad for a few lines of CSS, eh?

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/o](http://www.atozcss.com/o).

If you find these videos at all useful, please spread the word and leave
a comment letting me know what you liked, and what you didn't.

If you have any questions or comments, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or
drop me an email.

Cheers.


