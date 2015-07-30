---
layout: post_page
title: "Vertical-align"
alias: /v
date: 2014-10-01
wistiaId: ijork7g838
videoLength: 5 minutes 24 seconds
comments: true
categories: video
excerpt: >
  Vertical centering is a firm favourite of designers - for both print
  and digital media. But aligning things vertically with CSS is not the
  easiest thing to do. This issue is made worse in a world of multiple
  devices and responsive design as we need our elements to be flexible
  in height - which can make calculating their vertical center quick
  tricky.
summary: |
  In this episode we'll learn all about

  * The vertical-align property and how and when it works
  * A method for vertical aligning an element with a known height
  * And finally one approach for vertically centering elements with variable height.
---

Vertical centering is a firm favourite of designers - for both print and
digital media.

But aligning things vertically with CSS is not the easiest thing to do.

This issue is made worse in a world of multiple devices and responsive
design as we need our elements to be flexible in height - which can make
calculating their vertical center quick tricky.

In this episode we'll learn all about

* The vertical-align property and how and when it works
* A method for vertical aligning an element with a known height
* And finally one approach for vertically centering elements with
variable height.

## Vertical-align

The `vertical-align` property only affects elements with their `display`
set to `inline`, `inline-block` or `table-cell`. 

It takes a length, percentage or keyword value. 

Lengths and percentages align the baseline of the element at that given
distance above the baseline of it's parent. 

Keyword values can be one of the following:

* baseline
* sub
* super
* text-top
* text-bottom
* middle
* top
* bottom

Most of these are quite intuitive but `sub` aligns the baseline to the
parent's sub-script baseline and `super` aligns the baseline of the
element to the parent's super-script baseline.

Let's take a look at `vertical-align` in a practical example.

I've got a grid of images and text here and all of them have different
heights which means the text doesn't all align neatly.

{% highlight html %}
<div class="grid">
	<img src="http://placebacn.com/200/400">
	<h2>grilled bacon</h2>
</div>
<div class="grid">
	<img src="http://placebacn.com/200/300">
	<h2>tasty bacon</h2>
</div>
<div class="grid">
	<img src="http://placebacn.com/200/200">
	<h2>crispy bacon</h2>
</div>
<div class="grid">
	<img src="http://placebacn.com/200/350">
	<h2>bacon</h2>
</div>
{% endhighlight %}

We can set the grid containers to `display:inline-block` and use
`vertical-align:bottom` on the images to make everything line up nicely.

If there was no text here and we wanted all the images to be vertically
centered, we could use `vertical-align:middle` and achieve quite a nice
effect. 

## Vertical centering

In Episode 12 we looked at `line-height` and demoed one way to fake
vertical centering for text. 

If I wanted to center a whole container of multiple elements inside of
another container, we'll need a different approach.

I've got a container here with a dark background and a border around
it. Inside is another, smaller box with a width and height set to give
it some shape.

{% highlight html %}
<div class="container">
	<div class="box">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis
		aperiam quidem minima a qui ipsa deleniti nisi modi nesciunt
		dolores, consequatur dolorem, dignissimos debitis distinctio.
		Voluptas eligendi fuga voluptatem eos.
	</div>
</div>
{% endhighlight %}

If we know the height of this box, we can use absolute positioning to
vertically and horizontally center it within the container.

With `position:relative` on the container, the box can be positioned
absolutely within it. If we set the `top` and `left` properties to `50%`
the box will be moved 50% away from the top and 50% away from the left,
leaving the top-left corner of the box placed in the exact center of the
container.

{% highlight css %}
.container {
	position:relative;
	background:#444;
}
.box {
	position:absolute;
	top:50%;
	left:50%;

	width:400px;
	height:200px;
	margin:-100px 0 0 -200px;

	color:#fff;
	background:#cc3f85;
}
{% endhighlight %}

With a fixed width and height, we can set negative margins on the box;
half the height to the top and half the width to the left. And now the
box is centered in the container.

This technique works well but the downside is that all the widths are
fixed - which means it's not a great solution if working on
a responsive project.

## Fluid vertical center

We can accomplish vertical centering of fluid height elements by
combining knowledge of `vertical-align:middle` and pseudo elements which
we covered in Episode 16.

We'll take the same example of a box inside a container from before, but
this time, the subject box will be fluid.

The trick is to create an invisible element - using a pseudo element
- that will be the full-height of the container and set it to
`inline-block` and `vertical-align:middle`. We can then vertically
center the inner box by also making it `inline-block` and
`vertical-align:center`. It can be centered horizontally with
`text-align:center`.

{% highlight css %}
.container {
	height:400px;
	margin: 20px;
	background: #444;
	font-size:0;
	text-align: center;
}

.container:before {
	content: '';
	display: inline-block;
	height: 100%; 
	vertical-align: middle;
}

.box {
	display: inline-block;
	width: 50%;
	padding: 2em;
	border: 1px solid #000;
	background: #cc3f85;
	font-size:1rem;
	vertical-align: middle;
}
{% endhighlight %}

Now as the container box changes it's width, the percentage width of the
child box also changes, altering it's height - but the box remains
vertically centered. Pretty sweet, eh?

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/v](http://www.atozcss.com/v).

If you have any questions please leave a comment or, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or drop me an
email.

Cheers.
