---
layout: post_page
title: "TranslateX"
alias: /x
date: 2014-10-16
wistiaId: jvizea6q0i
videoLength: 5 minutes 09 seconds
comments: true
categories: video
excerpt: >
  As we approach the end of the alphabet, and the end of the first season
  of AtoZ CSS, there aren't many properties, values or concepts that start
  with the letter X.

  There are however a series of transform values that allow elements
  to have their visual co-ordinates changed along the x-axis to create
  complex and interesting visual details on the page.
summary: |
  In this episode we'll learn all about:

  * The CSS transform property
  * Moving elements with translate and translateX
  * The performance benefits of using translate over other methods

  ## Browser support

  The transform property is now unprefixed in Chrome, Firefox and Opera
  but still needs `-webkit` prefixes in Safari, iOS Safari and Android
  browser. IE support starts in version 9 with an `-ms` prefix. 
---

As we approach the end of the alphabet, and the end of the first season
of AtoZ CSS, there aren't many properties, values or concepts that start
with the letter X.

There are however a series of transform values that allow elements
to have their visual co-ordinates changed along the x-axis to create
complex and interesting visual details on the page.

In this episode we'll learn all about:

* The CSS transform property
* Moving elements with translate and translateX
* The performance benefits of using translate over other methods

## Transform

The transform property allows elements to be moved from their natural
position in the document whilst maintaining that original space - a bit
like the result of moving elements with `position:relative`.

Elements can be translated, rotated, scaled or skewed in various
different ways on various different axes.

The transform property can take the following values:

* `matrix()`
* `matrix3d()`
* `translate()`
* `translateX()`
* `translateY()`
* `translateZ()`
* `translate3d()`
* `scale()`
* `scaleX()`
* `scaleY()`
* `scaleZ()`
* `scale3d()`
* `skew()`
* `skewX()`
* `skewY()`
* `rotate()`
* `rotateX()`
* `rotateY()`
* `rotateZ()`
* `rotate3d()`
* `perspective()`

There's a long list here and to be honest, I only use a small selection
of them on day to day projects. It's useful to know the other options
but I most often use: 

* `translate()`
* `rotate()`
* `scale()`
* and `skew()`

It's also possible to chain multiple transforms together by creating
a space separated list as follows:

{% highlight css %}
.some-class {
	transform: scaleX(2) rotate(10deg);
}
{% endhighlight %}

This will double the horizontal scale of an element and rotate it 10
degrees clockwise.

## Translate

The translate value moves an element in 2D space. 

I have an image here with a couple of paragraphs above and below it.

The translate function accepts one or two values. If two values are
passed in, the first specifies the translation along the x-axis, the
second for the y-axis.

{% highlight css %}
img {
	transform: translate(10px, 60px);
}
{% endhighlight %}

The values can be any valid length available in CSS. It could be `px`,
`em`, `rem`, `%` etc.

If just one value is provided, the second value is assumed to be zero
and so no y-axis translation takes place.

Using `translateX()` we can be more explicit about the transformation we
want to create as it's very clear that this is only supposed to occur in
the x-direction. If I only wanted this single-axis movement,
`translateX` would be my preference as it's always best to be clear
about your intent when writing code.

A combination of `translateX`, `rotate` and `@keyframes` are what's used
to create the animated devices on the [AtoZ CSS
homepage](http://www.atozcss.com)

## Performance

When animating elements, like the animation on the AtoZ CSS homepage,
there are benefits to animating the `transform` property over animating
something like `margin` or `top` and `left` position.

When animating elements with `transform`, the processing is moved on to
the *graphical* processing unit (GPU) rather than the CPU. The net
result of this is that animations are smoother and they have less of an
impact on perceived responsiveness and battery life.

For an in-depth and technical screencast that outlines these benefits
really well, check out a this video from Paul Irish titled ["why moving
elements with translate is better than position absolute"](http://www.paulirish.com/2012/why-moving-elements-with-translate-is-better-than-posabs-topleft/).

I found this to be the case first hand when I made the animation for
AtoZ CSS - to begin with, I animated the `margin-left` property of the
animation container but found this to be very janky and slow. Moving to
animating the container with translate, really improved the visual
performance.

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/x](http://www.atozcss.com/x).

If you have any questions please leave a comment or, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or drop me an
email.

Cheers.
