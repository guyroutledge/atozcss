---
layout: post_page
title: "Justify"
alias: /j
date: 2014-06-10
wistiaId: 
videoLength: x minutes x seconds
excerpt: >
  
summary: |
  
---

Justify is one available value for the text align property.

It allows the formatting of text in a style often used in newspaper
design.

In this epsiode, we’ll look at the 12 possible values for text-align,
one of which is justify, next we'll look at using justified text with
CSS columns and finally look at how `justify` can be used to create
a floatless responsive grid system with just a few lines of code.


## Text Align

The `text-align` property performs a very familiar action of aligning
text. Anyone who has read words on a page or used a word processor will
be familiar with the idea of left, center or right aligned text.

These are the 3 most common values used with `text-align` but there are
others too.

* left
* right
* center
* justify
* start
* end
* start end
* match-parent
* <string>
* start <string>
* <string> end
* inherit

The `start` and `end` keywords are similar to `left` and `right` but
take the `direction` of text into account. If the language is
left-to-right, `start` and `left` are equivalent. If the text direction
is `rtl` then `start` and `right` are equivalent.

The `match-parent` value is similar to `inherit` but the `start` and
`end` are calculated according to the parent’s `direction`. This value
has poor browser support but does work in Chrome.

The `<string>` values allow alignment to be determined by an arbitrary
string of text. This value is currently not supported in any browser so
I wasn’t able to test it. The example on MDN sounds quite useful though,
to align decimal values on the "." full-stop string.


## CSS Columns

Leaving behind this quagmire of browser compatability and some rather
niche uses for `text-align`, let’s look at something more visual where
`text-align:justify` becomes very useful.

Sometimes a design will benefit from breaking up large blocks of text
into multiple columns. This used to be the realm of some quite fiddly
Javascript, but can now be done simply in CSS using the
`column-count` property. This property is supported in all modern
browsers but requires prefixes in everything except IE.

{% highlight css %}
.box {
	-webkit-column-count: 2;
	-moz-column-count: 2;
	column-count: 2;
}
{% endhighlight %}

Inline content is automatically reflowed as the available
space changes. Pretty sweet.

To make the visual impact of the columns stronger, and look more like
a newspaper article, we can use `text-align:justify`.

## Grids

We've seen how we can manipulate text-align to justify copy and create
neatly defined columns. It’s also possible to leverage `justify` to
create a fluid, responsive grid system with no floats, no clearfixes and
no dramas. For more info on `float` and solutions to some of its pain
points, check out Episode 6.

Justified text aligns its left and right edges to the left and right
edges of its block container. We can create a series of `inline-block`
elements and lay them out in a grid by justifying the contents of
their container element. I read about this technique in an article published
by Patrick Kunka in March 2013 and it's pretty amazing.

I’ll create an unordered list with a class of "grid-container" with six
list items to act as "grid-items". 

I'll add a width, a background color and some padding to the list items
to space them out a bit. I'll also set them to `display:inline-block` which is
required for them to be justified. To remove the spacing introduced by
`inline-block`, I'll set the `font-size` of the grid container to zero
and the `font-size` of the grid items to `1rem`.

Now we set `text-align:justify` on the grid container but before the
grid items will be equally spaced out, we need to create a full-width
"hidden" element that will determine the space in which to spread out the
items.

Using an `:after` pseudo element, a bit like the approch used in
clearfix, we can force the width of the grid container to be as wide as
its parent. Now the grid items space out correctly and reflow as the
browser window changes size. 

{% highlight css %}
* {
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
ul { 
	margin:0;
	padding:0;
	text-align: justify; 
	font-size:0; 
}
ul:after { 
	content:"";
	display:inline-block; 
	width:100%; 
}
li { 
	display:inline-block; 
	width:50%; 
	margin:0 0 1em; 
	padding:1em; 
	background:#eee; 
	font-size:1rem; 
	text-align: left; 
}
{% endhighlight %}

Changing the width of the list items, allows you to easily create
different numbers of columns without doing lots of calculations for
margins and gutter widths. I think this is a fantasticly simple and
elegant technique and one that might come in handy for a future project.


## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/j](http://www.atozcss.com/j).

If you have any questions or comments, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or
drop me an email.

Cheers.


