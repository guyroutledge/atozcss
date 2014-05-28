---
layout: post_page
title: Auto
alias: /a
videoId: ZvqJJpHETbc
videoLength: 5 minutes 25 seconds
excerpt: >
  Auto a CSS value that has a number of uses.  It’s the default value
  for a lot of properties but can be used for horizontal centering and
  is a handy tool to have in the box when dealing with responsive
  design. 
summary: |
  Auto is the default value for dimension properties `width` and `height`.

  Setting `margin:0 auto` and a `width` or `max-width` allows a block 
  of content to be horizontally centered on the page.

  There is a subtle difference between `width:auto` and `width:100%`. When
  combining `width:auto` with `padding`, the width is automatically calculated
  and takes the padding into account - whereas `width:100%` sets the width
  to 100% of the element’s parent with `padding` added additionally.

  In CSS positioning, `top` and `left` take priority over `bottom` and `right`.
  If you need to overried a previously declared top or left position, they
  first need to be set to `auto`.

  ## Browser Support

  Everything!
---

Auto is a CSS value that has a number of uses.

It’s the default value for a lot of box-model properties like
`width`, `height`, `margin`, and `background-size`.

{% highlight css %}
.box {
	width: auto;
	height: auto;
	margin: auto;
	background-size: auto auto;
}
{% endhighlight %}

It’s also the default value for position properties like `top` and `bottom`,
`left` and `right` and `z-index`.

{% highlight css %}
.box {
	position: relative|absolute|fixed;
	top: auto;
	right: auto;
	bottom: auto;
	left: auto;
	z-index: auto;
}
{% endhighlight %}

There’s other more obscure places that auto can be used as well, like
`overflow`, `cursor`, `table-layout` and the `column-width` property of
CSS columns.

{% highlight css %}
.box {
	overflow: auto;
	cursor: auto;
	table-layout: auto;
	column-width: auto;
}
{% endhighlight %}

Broadly speaking, the value of auto is automatically computed by the
user-agent and the specific effect depends on the content and context
that it’s used in

Let’s look at an example...

{% highlight css %}
.box {
	width: auto;
	height: auto;
}
{% endhighlight %}

## Width / Height

With the default value of auto applied to the width and height of
a `div` containing some dummy text, the dimensions of the box are
automatically calculated and the box fills the width of the page and is
as high as necessary to contain all the content.

It’s worth noting that width and height `auto` do not need to be declared
but have been added here to illustrate the point.

Under these circumstances, when the window is resized, the available
width for the `div` is reduced and its dimensions are automatically
re-calculated to accommodate the content. 

This is the default behaviour of any block level element and we’ll take 
a closer look at this in Episode 4: `display`.

## Margin

While `auto` is the default value in many cases, sometimes we want to use
it specifically to achieve a certain effect.

A very common design pattern on the web is to center a block of content,
and often the whole website above a certain width. This can be achieved
by setting a max-width on a wrapper element and setting `margin:auto` on
the left and right hand side. 

When we use `margin-left:auto`, the browser adds as much margin to the
left hand side as there is space for - and the box moves to the right
until its right-most edge aligns with its containing element. When
we do the same on the right hand side, the same happens in the opposite
direction and the box moves as far back to the left as it can go.

{% highlight css %}
.box {
	max-width: 50%;
	margin: 0 auto;
}
{% endhighlight %}

Because there are now equal margins on each side, the box remains
centered on the page. 

It’s a shame this trick doesn’t work with vertical centering but
we’ll be tackling this in a later video.

## Width 100%

A `div` with `width:auto` expands to full the width of it’s
parent, but there’s and important distinction between `width:auto` and
`width:100%`

If we have a div with width and height `auto` and some padding on the
inside, the width is automatically calculated and takes the padding into
account. 

If we change `width:auto` to `width:100%` the box breaks out of it’s
container and everything looks broken. This is because `width:100%` sets
the width of our div to 100% of the width of it’s parent - and then the
padding is added additionally. 

This makes the width of our div 100% + 50px + 50px which is wider than
the viewport. 

A workaround is to either use `auto` or the box-sizing:border-box model
where padding and border are added within the width of the box. The next
episode is all about the CSS Box Model so be sure to check that out for
more info. Sometimes using `box-sizing` isn’t an option, so this is
a handy tool to have in the box.

## Position 

Another place where auto can come to the rescue is when using CSS
positioning.

Imagine a situation with an element positioned in the top left corner of
a box. Let’s say that at a certain width, we want the same element to be
in the bottom right corner instead. 

I’ve changed the background color to show that the media query does get
fired, but it seems that setting `bottom` or `right:0` will have no
effect.

This is because `top` and `left` take precedence over `bottom` and
`right`. 

To make this work, we first have to remove the effect of `top` and
`left` by setting them to `auto`. 

{% highlight css %}
.box {
	position: absolute;
	left: auto;
	right: 0;
}
{% endhighlight %}

Now everything works as expected.

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/a](http://www.atozcss.com/a)

If you have any questions, feedback or comments, please tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or drop me an email

See you in the next episode. Cheers.
