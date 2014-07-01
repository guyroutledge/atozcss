---
layout: post_page
title: "The CSS line-height property"
alias: /l
date: 2014-07-01
wistiaId: 
videoLength: x minutes x seconds
comments: true
excerpt: >
  
summary: |
  
---

The CSS `line-height` property acts in a similar way to leading in print
design.

It allows us to control the spacing between lines in paragraphs,
headings and other text elements.

Line-height can also be used as a base to create consistent vertical
rhythm and spacing throught an entire project.

In this episode, we'll look at the difference between `line-height` and
leading, using `line-height` for vertical alignment and using the value
of `line-height` to set up site wide default spacing.

## Line Height vs. Leading

Leading is a typesetting term which describes the distance between the
baselines in text. The term comes from the fact that vertical spacing
between lines was created by inserting strips of lead between lines of
type from the days of hand-typesetting. When talking about leading, the
space is always added below the line.

`line-height` is a CSS proptery that controls the height of a line of
text. If I have a paragraph with `1em` or `16px` `font-size`, and
a `line-height` of `24px`, there will be `4px` of space added above the
text and `4px` of space added below; the height of the line will be
4 + 16 + 4 = 24px.

Line height is subtly different to leading then; in CSS, the text is
vertically centered within the line and in print, the space only occurs
beneath the line.

## Vertical centering 

We can use this knowledge of `line-height` to create a crude form of
vertical centering - something that is typically quite difficult to do
in CSS.

Let's take a look at an example. 

I want to create an effect where by rolling over an image, I display
a semi-transparent overlay with a line of text vertically centered over
the top.

I'll create an `image-container` box and place an image inside of it.
I'll now add another box inside with a line of text. This overlay box
will be placed on top of the image with `position:absolute` and then
given a semi-transparent background. As I know the height of the image
and image-container, I can use `line-height` to vertically center the
text within the box.

There's one small downside to this technique as if the text is too long
and wraps onto multiple lines, the height of each of those lines will
make the text spill out of the container and look broken. 

For an alternative approach to vertical alignment, keep a look out for
Episode 22.

## Project wide spacing

We've seen how `line-height` can be used to set up the spacing between
lines in a paragraph of text but `line-height` can become a key factor
in creating the underlying spacing for an entire project.

`line-height` can be specified in pixels, ems, rems, percentages or can
be left unitless. With unitless `line-height`, which is my preference,
all spacing gets applied as a multiplier to each element on the page.
I'll often set default `font-size` and `line-height` on the `body` which
will then cascade down through all text elements on the page.

{% highlight css %}
body {
	font-size:16px;
	line-height:1.5;
}
{% endhighlight %}

If my default `font-size` is `16px` then all paragraphs will have
a `line-height` of:

	1.5 * 16 = 24px

If my default `h1` `font-size` is `2em` then it will have an equivalent
font-size of `32px` and an equivalent `line-height` of `48px`.

	16 * 2 = 32px
	32 * 1.5 = 48px

This `1.5` then becomes a multiple that I'll use for spacing throughout
the entire project. I'd add `1.5em` of margin beneath all my paragraphs
for example. I might add `1.5em` margin below any list items or `1.5em`
above and below any bullet lists. If I wanted a large about of spacing
between section of a page, I might use `3em` of `padding` above and
below sections. If I had a button that I wanted a small amount of
spacing top and bottom, but more spacing side to side, I might use
`padding:0.75em 1.5em` to keep the multiple of 1.5 consistent.

If I were now to change the default font-size, the relative spacing
in and around each element would remain consistent too. 

Working out this spacing multiplier is propbably one of the most
important things to do on a new project to get the majority of the
spacing correct by default. If any specific elements need to be adjusted
away from the spacing multiplier, that's totally do-able, but I think
it's always smart to set a good solid foundation and then build upon
that, rather than dialing everything in by eye each time where there's
a risk of things not lining up or being inconsistent from page to page.
