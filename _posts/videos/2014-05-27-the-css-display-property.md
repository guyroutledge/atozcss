---
series: atoz-css
layout: post_page
title: Display
alias: /d
date: 2014-05-27
wistiaId: kgrhaeh5o3
wistiaPoster: c058add2c78cfb2b75964ee877f22d20e43e610a
videoLength: 6 minutes 23 seconds
comments: true
categories: beginner video
excerpt: >
  How elements take up space on the page is controlled by their display.

  There used to be two broad display types in CSS: elements were "inline" 
  or "block-level" but there’s a bit more to it than that...
summary: |
  Different types of elements have different display values by default.
  These include `inline`, `block`, `list-item`, `table` and many more.
  The way elements take up space on the page and flow throughout the
  document can be changed by altering the `display` value. In this
  epsiode we look at the new way that elements are categories in HTML5
  and a couple of demos of how changing the `display` value affects
  content on the page.

---

How elements take up space on the page is controlled by their `display`.

There used to be two broad display types in CSS: elements were "inline" 
or "block-level".

## Block vs. Inline

Block elements start on a new line and fill the width of their parent container. 
We saw this behaviour in Episode 1 when we looked at `auto` dimensions.

Inline elements remain in a line and only take up the width of their contents.

## HTML5

In HTML5 elements are categorised differently, the broadest categories
being "flow content" and "phrasing content". There are further
categories for embedded content, interactive content and form associated
content but there’s a lot of cross-overs between these different
categories.

Here’s a list of flow content elements. Elements like `div`, `article`,
`section` and `form` are block-like elements which often contain many
other child elements. But this list also contains `a`, `em`, `span` and
`input` which are inline elements - often found in running text where it
would be undesirable for them to start on a new line.

The list of phrasing content elements doesn’t contain a lot of the
block-like elements from flow content, but it does include things like
`em`, `span` and `input` which were also in the previous list.

It turns out there is no clear mapping of `block` to flow content and
`inline` to phrasing content so we better look elsewhere.

First, it’s worth noting that in HTML, all elements are `inline` by
default and their display characteristics are largely determined by the
user agent stylesheet, or set by us when we write CSS.

If we look through the user agent stylesheet of Chrome, we find the
following list of elements that have their display property set to
`block`. There’s a few oldies in here too for backwards compatibility.

So, if there are 44 block elements in Chrome and all HTML elements are
inline by default, the rest must be inline, right? 

Well, not exactly, as there are more values for `display` than just
`inline` and `block`.

We have `display:none` for hiding things. There’s also `inline-block`,
`table`, `inline-table`, `table-cell`, `table-column`,
`table-column-group`, `table-footer-group`, `table-header-row`,
`table-row`, `table-row-group`, `list-item`, `run-in`, and new layout
modes like `flex`, `inline-flex`, `grid` and `inline-grid`. It would
take too long to look a’ all of these, so let’s take a selection of the
most commonly used.

## Block

A `div` is a generic box that has `display:block` by default. The box is
the full width of the page and as high as necessary to contain all its
content. Blocks can be spaced out with `margin`.

## Inline

In contrast, a `span` which is `display:inline` by default only takes up
the width of its content and doesn’t respond to properties like `width`,
`height` and `margin`.  We can set the display property of this `span` to
`block` and then all of these other properties will apply.

{% highlight css %}
span {
	display:block;
	width:50%;
	margin:1em auto;
}
{% endhighlight %}

## Inline-block

It’s common to want the benefits of both `block` and `inline` at the
same time. Fortunately, `display:inline-block` has us covered.

{% highlight css %}
.box {
	display:inline-block;
	width:10%;
	margin-right:1em;
}
{% endhighlight %}

## Inline list

Inline block is a great way to turn an unordered list of links into
a horizontal nav. We can also apply spacing with padding and add
a background colour to each one if we like. One thing you’ll notice is
that even through there is no margin on the items, there is a small
space between them. This space can be removed by setting the `font-size`
to zero or removing the whitespace between the tags in the markup. An
alternative is to use an HTML comment to close the gap before and after
each item.

If this process seems a little clunky, there’s an alternative approach 
using `float` which we’ll look at in Episode 6.

## Table & Table-cell

Using tables used to be the way the web was built. Fortunately, that’s
not the case any more. But sometimes, the way that table elements lay
out are beneficial. Instead of using a table element, we can use a `div`
with `display:table` and child elements with `display:table-cell`.

One of the benefits of this layout is that the table cells have equal
heights - something that is otherwise difficult to achieve.

Both `inline-block` elements and `table-cells` respond to vertical
alignment and we’ll be taking a deep dive into that in Episode 22.

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/d](http://www.atozcss.com/d).

AtoZ CSS is now available as an iTunes video podcast. To have videos
delivered to your podcasting app of choice head to 
[atozcss.com/subscribe](http://www.atozcss.com/subscribe) for more info.
If you find these videos at all useful, please leave me a rating and
review on iTunes as it will really help others find them, and give me
a warm fuzzy feeling.

If you have any questions of comments, you can tweet me
[@atozcss](http://www.twitter.com/atozcss) or
drop me an email.

Cheers.
