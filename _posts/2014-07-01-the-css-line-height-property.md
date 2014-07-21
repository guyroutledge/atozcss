---
layout: post_page
title: "Line-height"
alias: /l
date: 2014-07-01
wistiaId: fwtui3zjc3
videoLength: 6 minutes 44 seconds
comments: true
excerpt: >
  The CSS `line-height` property acts in a similar way to leading in print
  design.

  It allows us to control the spacing between lines in paragraphs,
  headings and other text elements.

  Line-height can also be used as a base to create consistent vertical
  rhythm and spacing throught an entire project.
summary: |
  In this episode, we'll look at 

  * the difference between `line-height` and leading 
  * using `line-height` for vertical alignment and 
  * using the value of `line-height` to set up site wide default spacing.
---

The CSS `line-height` property acts in a similar way to leading in print
design.

It allows us to control the spacing between lines in paragraphs,
headings and other text elements.

Line-height can also be used as a base to create consistent vertical
rhythm and spacing throught an entire project.

In this episode, we'll look at 

* the difference between `line-height` and leading 
* using `line-height` for vertical alignment and 
* using the value of `line-height` to set up site wide default spacing.

## Line Height vs. Leading

Leading is a typesetting term which describes the distance between the
baselines in text. The term comes from the days of hand-typesetting when
strips of lead were used to space out the block of type.  When talking
about leading, the space is always added below the line.

`line-height` is a CSS proptery that controls the height of a line 
where the spacing is equal above and below the text. 

If I have a paragraph with `1em` or `16px` `font-size`, and
a `line-height` of `24px`, there will be `4px` of space added above the
text and `4px` of space added below; the height of the line will be

	4 + 16 + 4 = 24px.

This is the major difference between `line-height` and leading: in CSS,
the text is vertically centered within the line and in print, the space
is added beneath the line.

## Vertical centering 

We can use this knowledge of `line-height` to create a crude form of
vertical centering - something that is typically quite difficult to do
in CSS.

Let's take a look at an example. 

I want to create an image rollover effect and display a semi-transparent
title with vertically centered text over the top of an image.

I'll create a `container` and add a `400x400` image inside of it.
I'll now add the title inside with a line of text. This overlay title
will be placed on top of the image with `position:absolute` and then
given a semi-transparent background. As I know the height of the image
and image-container, I can use `line-height` to vertically center the
text within the box.

There's one small downside to this technique as if the text is too long
and wraps onto multiple lines, the height of each of those lines will
be `400px` and the text will overflow the box.

For an alternative approach to vertical alignment, keep a look out for
Episode 22.

## Project wide spacing

We've seen how `line-height` can control the spacing of lines of text in
a paragraph. I like to carefully pick this value and use it as
a the underlying foundation for most spacing throughout a site. 

I'll often set default `font-size` and `line-height` on the `body` which
will then cascade down through all my text elements.  `line-height` can
be specified in pixels, ems, rems, percentages or can be left unitless.
With unitless `line-height`, which is my preference, all elements
receive vertical spacing of their font-size multiplied by my "spacing
factor". I often use 1.5 as my factor but as it's predominantly set in
one place, it's easy to change.

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

I would continue to use this `1.5` factor throughout the rest of the site.
I'd add `1.5em` margin beneath headings, paragraphs, list, list-items
and form inputs. If I wanted a larger amount of space between elements,
I'd double my `1.5` to `3em`. If I wanted less space - perhaps for
padding around buttons or form inputs, I might half it to `0.75em` or
quarter it to `0.375em`. The aim of the game is to keep the factor
consitent throughout.

With this consitent spacing set up, if I were now to change the default
font-size on the `body`, the relative spacing in and around each element
would remain consistent too.

Working out this spacing multiplier is propbably one of the most
important things to do at the start of a new project.  If any specific
elements need to be adjusted away from the "magic factor", that's
totally do-able, but I think it's always smart to set a good solid
foundation and then build upon that, rather than dialing everything in
by eye each time where there's a risk of things not lining up or being
inconsistent from page to page.
