---
layout: post_page
title: "TranslateX"
alias: /x
date: 2014-08-22
wistiaId: xabc
videoLength: x minutes x seconds
comments: true
excerpt: >
  
summary: |
  
---

As we approach the end of the alphabet, and the end of the first season
of AtoZ CSS, there aren't many properties, values or concepts that start
with the letter X.

There are however a series of transform properties that allow elements
to have their visual co-ordinated changed to create complex and
interesting visual details on the page.

In this episode we'll learn all about:

* The CSS transform property
* Moving elements with translate
* The performance benefits to using translate over other methods

## Transform

The transform property allows elements to be moved from their natural
position in the document whilst maintaining that original space - a bit
like the result of manipulating elements with `position:relative`.

Elements can be translated, rotated, scaled or skewed in various
different ways on various different axis.

The transform property can take the following values:

* matrix()
* matrix3d()
* translate()
* translateX()
* translateY()
* translateZ()
* translate3d()
* scale()
* scaleX()
* scaleY()
* scaleZ()
* scale3d()
* skewX()
* skewY()
* rotate()
* rotateX()
* rotateY()
* rotateZ()
* rotate3d()
* perspective()

It's also possible to chain multiple transforms together by creating
a space separated list as follows:

	transform: scaleX(2) rotate(10deg)

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
can to create as it's very clear that this is only supposed to occur in
the x-direction.

A combination of `translateX`, rotation and `@keyframes` are what's used
to create the animated devices on the [AtoZ CSS
homepage](http://www.atozcss.com)

## Performance

http://www.paulirish.com/2012/why-moving-elements-with-translate-is-better-than-posabs-topleft/
