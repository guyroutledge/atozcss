---
series: atoz-css
layout: post_page
title: "@keyframes"
alias: /k
date: 2014-07-15
wistiaId: pg5zytsy0v
wistiaPoster: 3a9dbb672472fd17b8f48e21581b0013193cd826
videoLength: 6 minutes 21 seconds
comments: true
categories: intermediate video
excerpt: >
  Animation used to be the realm of JavaScript. Now, in modern browsers,
  we can animate elements using CSS. The @keyframes block and animation
  properties allow us to specify what gets animated and when.
summary: |
  Animation used to be the realm of JavaScript.

  Now, in modern browsers, we can animate elements using CSS.

  The `@keyframes` block and `animation` properties allow us to specify what
  gets animated and when.

  In this episode we'll look at the kind of animations that are suited to
  CSS, the concept of specifying a series of `@keyframes` and finally the
  way these keyframes are combined with `animation` settings to bring the
  page to life.
---

Animation used to be the realm of JavaScript.

Now, in modern browsers, we can animate elements using CSS.

The `@keyframes` block and `animation` properties allow us to specify what
gets animated and when.

In this episode we'll look at the kind of animations that are suited to
CSS, the concept of specifying a series of `@keyframes` and finally the
way these keyframes are combined with `animation` settings to bring the
page to life.

## Animations in CSS

As CSS animations don't have the deepest of browser support, they are
best suited to visual flair rather than being a key part of the page
content or design.

Animations can run 1 or more times or loop infinitely. It's also
possible to add multiple animations to the same element. A great example
of multiple looping animations can be seen on the AtoZ CSS homepage.

Animations can be triggered in CSS as soon as the page loads, after
a delay or via some kind of state based change like `:hover`, `:focus`,
or `:active` which we looked at in [Episode 8](http://www.atozcss.com/h).

CSS animations can also be started and stopped in Javascript by toggling
the `animation-play-state` property. We'll look at the other animation
properties and syntax a bit later on.

## Keyframes

In order to animate an element (or selection of elements), we need to
specify a series of keyframes.

The most basic form of keyframe animation goes `from` one set of styles
at the beginning `to` another set of styles at the end, over a
certain amount of time.

During the animation, the styles between keframes are automatically
calculated by the browser - a process known as `tweening`. 

Each keyframe is defined as a style block of CSS properties that will be
applied to any element that uses that `set` of keyframes. 

{% highlight css %}
@keyframes moveLeft {
	from { left:0; }
	to   { left:500px; }
}
{% endhighlight %}

Given this set of keyframes, the starting keyframe of the animation will
look like this; and the ending one will look like this.

{% highlight css %}
@keyframes grow {
	0%   { font-size:20px; }
	75%  { font-size:100px; }
	100% { font-size:10px; }
}
{% endhighlight %}

Additional keyframes can be specified using a percentages syntax. If the
animation duration was 10 seconds, over the first 7.5 seconds, the `font-size`
of the element would grow to `100px` and then over the next 2.5 seconds,
it would shrink back down to `10px`. You can specify as many properties
as you like for each keyframe.

## Animation

When the `@keyframes` have been defined, they are ready to be used in
conjunction with the `animation-name` property.

There are a series of `animation` properties to configure your animation
as needed:

* `animation-name` specifies the block of `@keyframes` to use
* `animation-duration` specified the time the animation lasts
* `animation-delay` specifies any delay before the animation starts
* `animation-iteration-count` specifies the number of times to repeat
* `animation-direction` specifies the direction; animations can play forwards (normal), in reverse or alternate back and forth
* `animation-play-state` allows the animation to be paused and resumed
* `animation-timing-function` determines an acceleration curve of how the animation plays between keyframes
* `animation-fill-mode` determines how styles are applied before and after the animation

These 8 properties can be combined into a shorthand `animation` property
as follows:

{% highlight css %}
.box {
	animation: name duration delay count direction play-state timing fill-mode;
}
{% endhighlight %}

The only required properties for an animation to be visible at least
once are: `animation-name` and `animation-duration`.

## Bouncing ball animation

Let's look at a practical example.

We can create a ball using an equal `width` and `height` box with
`border-radius` set to `100%`. We can make the ball bounce up and down
by asbolutely positioning it and animating the `top` or `bottom` values over time.

We can give the ball a bit more realism by squashing it at the bottom of
the animation before having it travel back up, at a slightly slower
speed.

{% highlight css %}
.ball {
	position:absolute;
	width:100px;
	height:100px;
	border-radius:100%;
	animation:bounce 3s linear infinite;
}
@keyframes bounce {
	0% { bottom:100%; }
	25% {
		bottom:0;
		width:100px;
		height:100px;
	}
	30% {
		bottom:0;
		height:50px;
		width:110px;
	}
	35% {
		bottom:0;
		width:100px;
		height:100px;
	}
	70% { bottom:100%; }
	100% { bottom:100%; }
}
{% endhighlight %}

We can make the ball move across the screen by adding a second animation
that animates the `left` property of the ball. These can be comma
separated so they are both applied to the same element.

To make it appear as though the ball bounces slowly across the screen,
we can increase the duration of this second animation.

{% highlight css %}
@keyframes moveLeft {
	from { left:0; }
	to   { left:100%; }
}
.ball {
	animation: bounce 3s linear, moveLeft 12s linear infinite;
}
{% endhighlight %}

## Browser support

CSS animations are not supported in IE9 or below or Opera Mini. In IE10,
IE11 and Firefox, the `@keyframes` and `animation` properties are
unprefixed but `-webkit` prefixes are needed everywhere else.

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/k](http://www.atozcss.com/k).

If you have any questions or comments, you can tweet me
[@atozcss](http://www.twitter.com/atozcss) or
drop me an email.

Cheers.


