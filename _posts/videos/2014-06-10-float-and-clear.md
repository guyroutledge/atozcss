---
layout: post_page
title: "Float"
alias: /f
date: 2014-06-10
wistiaId: t8ekz6iwcv
wistiaPoster: 07fb96ef417ae28e69d8757edb00e7d442d6ba1c
videoLength: 6 minutes 35 seconds
comments: true
categories: intermediate video
excerpt: >
  The float property is most commony used for page layout.
  However, the original purpose of float was to allow text to
  wrap around an object. As float is often not used as originally intended, working with it can
  be a bit fragile and a bit tricky until you get used to its quirks. 
summary: |
  `float` can be used to wrap text around an image or create complex,
  multi-column layouts. When elements float, adjacent elements try to
  wrap around them which can result in slightly odd layouts unless the
  `clear` property has also been used where needed. 

  Floating elements
  removes them from the document flow so can cause containers full of
  floated elements to collapse. This can be remedied by creating a new
  block-formatting context or using a technique like clearfix.
---

The float property is most commony used for page layout.

However, the original purpose of `float` was to allow text to
wrap around an object, something commonly seen in print design.

As `float` is often not used as originally intended, working with it can
be a bit fragile and a bit tricky until you get used to its quirks. 

We’ll look first at the intended use of `float`. Then we’ll look at 
creating 2 and 3 column layouts and finsh up by looking at how to deal
with some of the tricky part of floats; clearing them and dealing with 
container collapse.

## Intended use

The float property accepts 3 values, `left`, `right` or `none`.

If we take an image and a couple of paragraphs of text and float the
image to the left, we see the intended use of the float property on the web;
the text wraps around the image and everthing looks great. We can
move the image to the opposite side by setting `float:right` or remove
it completely with `float:none` which is the default.

{% highlight css %}
img {
	float:left;
}
{% endhighlight %}

## 2-column layout

We can take this further and float two blocks of content side by side
to achieve a two-column layout.

Here a main content container is given a width of 60% and floated to the
left and its left most edge aligns to the left most edge of its parent. 

A sidebar is given a width of 30% and floated to the right. There
is a gap of 10% between them which provides some breathing room.

{% highlight css %}
.main-content {
	float:left;
	width:60%;
}
.sidebar {
	float:right;
	width:30%;
}
{% endhighlight %}

## 3-column layout

So how can we make a 3-column layout?

When a series of boxes are all floated in one direction, they align next
to each other. This is because a floated element will align its left
side with the leftmost edge of its parent or the nearest floated
element. If all three boxes have a `width` of 33.333% and we are using
`box-sizing:border-box`, we get an equal 3-column layout. For more info
on `box-sizing` check out Episode 2 on the CSS box model.

{% highlight css %}
.box {
	-moz-box-sizing:border-box;
	     box-sizing:border-box;

	width:33.333%;
	float:left;
}
{% endhighlight %}

We could achieve the same three columns by floating the boxes to the
right instead. But in this case, the first box aligns its rightmost edge with
the edge of the container and then the next box floats as far as it can go
to the right and so on. The result here is the same but with the content
order reversed - which can come in handy when dealing with source order
in responsive design.

## Clearing floats

Another property that goes hand in hand with `float` is `clear`. 

When elements float, they cause any adjacent element to try and flow
around them which can cause layouts to look a bit weird. A classic
example is a footer beneath two floated columns.

Let’s take the two column layout from before and add some dimensions and
some background colours so we can see what’s going on. If we now add
a footer beneath the columns, we get a slightly strange behaviour. 

This is because the footer is trying to flow around the two floated
columns instead of starting beneath them. We can fix this by adding the
`clear` property to the footer, which clears the effect of the floats on
either side if setting it to `both`. Other available values are the same
as `float`; `left`, `right` or `none`. 

{% highlight css %}
footer {
	clear:both;
}
{% endhighlight %}


## Container collapse

Floats cause another layout problem which can sometimes be difficult to
see.

Here I have a section with three floated elements inside of it. The
section has a pink background - but that doesn’t appear to be visible. If
we inspect element on this section we see that its height is 0.

As the section only contains floated elements, it’s unable to
automatically calculate the height it needs to contain the boxes.

We could remedy this by adding a fourth element and setting the clear
property on it. But this is klunky and adding an empty element that has
a purely visual purpose is not good practice for writing clean markup.

{% highlight css %}
.clear {
	clear:both;
}
{% endhighlight %}

Another option is to create a new block formatting context for the
section which will contain all the floats within it. 

The `float`, `position`, `display` and `overflow` properties can all be
used to create a new block formatting context when using certain values,
but the most commonly used one that prevents container collapse is
`overflow:hidden`.

{% highlight css %}
section {
	overflow:hidden;
}
{% endhighlight %}

If we remove the clearing `div` and set `overflow:hidden` on the section,
the container collapse is fixed and the whole thing feels a lot less hacky.

Hiding the `overflow` of an element is not always possible though and any
content that is intentionally overlapping or outside the boundaries of
a box, will be hidden. A more robust way to deal with container collapse
is to use a *pseudo element* to do the clearing. We’ll be tackling
pseudo elements as the main topic in Episode 16 but here is a handy
snippet for fixing container collapse in the meantime.

{% highlight css %}
/*source: Nicolas Gallagher*/
/*http://nicolasgallagher.com/micro-clearfix-hack/*/
.clearfix:before,
.clearfix:after {
    content: " ";
	display: table;
}
.clearfix:after {
	clear: both;
}
{% endhighlight %}

By adding this snippet to your CSS and adding the class of "clearfix" to
the element you want to prevent collapse on, the "invisible" `:after`
pseudo element does the job of our clearing `div` from the earlier
example.

Now we solve the container collapse problem, don’t run in to issues of
hidden overflow and keep the markup as lean as possible which is
a win-win.

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/f](http://www.atozcss.com/f).

If you enjoy these videos and know someone else who might find them 
useful, please leave me an honest rating and review on iTunes.

If you have any questions or comments, you can tweet me
[@atozcss](http://www.twitter.com/atozcss) or
drop me an email.

Cheers.


