---
layout: post_page
title: "Widows"
alias: /w
date: 2014-10-09
wistiaId: w6czfxn0k9
videoLength: 5 minutes 24 seconds
comments: true
excerpt: >
  More and more these days, CSS is being used to control the styling of
  things other than websites.

  One type of media that CSS can apply styling to is paged media - things
  like digital magazines and ebooks or a website in the form of a print
  stylesheet.

  There are some properties that only apply to this media type. The
  `widows` and `orphans` properties are two that allow us to control how
  lines of text flow around page breaks.
summary: |
  In this episode we'll learn about:

  * Paged media
  * Widows and Orphans
---

More and more these days, CSS is being used to control the styling of
things other than websites.

One type of media that CSS can apply styling to is paged media - things
like digital magazines and ebooks or a website in the form of a print
stylesheet.

There are some properties that only apply to this media type. The
`widows` and `orphans` properties are two that allow us to control how
lines of text flow around page breaks.

In this episode we'll learn about:

* Paged media
* and Widows and Orphans

## Paged Media

When writing CSS, we are normally styling content that is destined for
being displayed on a screen. 

But there's a whole range of properties specifically for paged media which
describes how a document can be flowed into a series of pages.

It adds functionality for pagination, page margins, page size,
orientation, and extends generated content to enable page numbering and
page headers and footers.

The closest thing to working with the CSS Page spec that I've come
across in real-world web development is creating print stylesheets. We
touched on this in Episode 13 about `@media` queries.

When dealing with this completely different medium of printed content,
there are a couple of CSS properties available that don't apply to
screen media. Let's have a look at two for controlling the flow of text
*between* pages.

## Widows

When a paragraph of text flows across multiple pages or columns, if it
doesn't all fit within one page or column, it will be split into two
parts.

A `widow` is the last line of a paragraph that appears on its own at the
top of a new page or column. This not considered visually pleasing so
the minimum number of lines can be controlled using the `widows`
property.

{% highlight css %}
p {
	column-count: 2;
	widows:3;
}
{% endhighlight %}

This will ensure that there are a minimum of 3 lines of text at the
start of a new page or, in this case, at the start of a new column.

## Orphans

In contrast to `widows`, an `orphan` in the world of typrography referrs
to the first line of a paragraph that starts at the bottom of a page and
then continues on the next.

The minimum number of lines that should be left before a page break can
be controlled by the CSS `orphans` property.

This takes a positive integer and only applies to paged media such as in
a print stylesheet.

{% highlight css %}
@media print {
	p {
		orphans: 2;
	}
}
{% endhighlight %}

This snippet will ensure there are at least two lines of paragraph text
before the end of the page. 2 is the default value so to increase the
number of lines, a higher value of `orphans` can be set.

## Lone words

Somewhat confusingly, the term "orphan" has two meanings in typography.

It can also be used to refer to a dangling, lone word at the end of
a paragraph, whether it comes at a page-break or not.

This paragraph has an orphan as the last word. It sits all on its own
and doesn't look great.

We could try and force this not to happen by inserting forced
line-breaks further up the paragraph with a `<br>` tag.

This gets the desired effect, but if we're working in a responsive
project, this forced line-break can cause some pretty ugly results when
the width of the container changes.

I'll remove the break tags and show a slightly more flexible approach.

When the text reflows, there are some points when the space between the
last two words breaks and we end up with an orphan word. To fix this,
a non-breaking space character can be added between the two last words
in the paragraph.

Now, if there's plenty of space, everything appears normal, but if the
space gets too tight, both words, joined by the non-breaking space will
bump down to the next line, keeping everything looking neat and tidy.

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/w](http://www.atozcss.com/w).

If you have any questions please leave a comment or, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or drop me an
email.

Cheers.
