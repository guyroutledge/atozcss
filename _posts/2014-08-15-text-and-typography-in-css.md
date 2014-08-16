---
layout: post_page
title: "Text"
alias: /t
date: 2014-08-15
wistiaId: 
videoLength: x minutes x seconds
comments: true
excerpt: >
  Text is everywhere. Without it, the web wouldn't be such a valuable
  resource.  There are many different CSS properties for styling text
  and in this video we'll cover most of them in some way shape or form.
  As there are so many things to cover, this episode will demo a 
  selection but in part just act as an overview of the tools in the box.
summary: |
  In this episode we cover

  * `text-align`
  * `text-decoration`
  * `text-indent`
  * `text-overflow`
  * `text-rendering`
  * `text-shadow`
  * `text-transform`
  * `font-family`
  * `font-size`
  * `font-style`
  * `font-weight`
  * `font-variant`
  * `font` shorthand
  * `line-height`
  * `letter-spacing`
  * `word-spacing`
  * `word-wrap`
  * `white-space`
---

Text is everywhere. Without it, the web wouldn't be such a useful
place.

There are many different CSS properties for styling text and in this
video we'll cover most of them in some way shape or form.

There's quite a few, so we best get started! As there are so many things
to cover, this episode will demo some of them, but in part just act as an
overview of the tools in the box.

## Text Properties

There are many CSS properties that control the visual appearance of text
- but only seven of them actually start with the word "text". 

Those are:

* `text-align`
* `text-decoration`
* `text-indent`
* `text-overflow`
* `text-rendering`
* `text-shadow`
* `text-transform`

We looked at `text-align` in some depth in Episode 10 on Justify; it's
used to control the alignment of text on the screen and is often set
to left, right or center.

`text-decoration` is commonly set to `none` to remove the underline
added beneath hyperlinks. It can also be set to `underline`, `overline`
or `line-through` to create a strikeout effect.

`text-indent` allows us to control indentation.  I often ues this with
a large negative value to bump text off the page so it's visually hidden
but still exists in the document for assistive devices like screen
readers.

`text-overflow` allows styling of any text that overflows its container
- where a word is too long to fit for example. We can style this
overflowing text with `clip` to hide it, allow it to be `visible` or add
an `ellipses` character to show that the word continues but there's no
space for it.

`text-rendering` is a property from the SVG spec but allows the browser
to optimise the rendering of text for either rendering speed, geometric
precision or legibility. Setting `text-rendering` to
`optimiseLegibility` will enable kerning and ligatures in some fonts in
some browsers. The support isn't great and apparently there can be some 
side effects of using it so I'd recommend checking them before you do.

`text-shadow` works a bit like `box-shadow` but for text. It takes four
properties: the x-offset and y-offset control the position of the
shadow; the blur radius controls how soft the shadow is and finally, the
colour sets the colour of the shadow. In fact, the AtoZ CSS logo is made
from a whole series of different coloured and positioned text-shadows.

`text-transform` can be used to change the case of text. It can be used
to set all letters to `uppercase`, `lowercase` or `capitalise` the first
letter of each word. One of my bug-bears is finding LOTS OF ALL CAPS
WORDS written into the HTML - it's far more flexible to control this
visual styling from CSS instead.

## Font properties

There's a whole range of other things we can manipulate and style about
text too and there are a series of CSS properties for `font` that allow
us to control our typography.

`font-family` sets the typeface to be used. This can be set as a "stack"
and the browser will select the first font in the list that it can load
successfully.

`font-size` allows us to change the size of the text.

`font-style` can create italicised or oblique text whereas the
`font-weight` property is used to create bold text. `font-weight` can 
also be used to create a range of weights with a numeric value. This
value is a multiple of 100 ranging from 100 to 900. `font-weight:normal`
maps to the value 400 and `font-weight:bold` to 700.

There are some pretty fancy new font variant settings in CSS3 that
enable things like small caps and ligatures to be used where possible-
we don't have time in this video to go into detail but if you're
interested in find out more about these features, have a search for
"open type features in css".

Finally, there's a short-hand property for `font` that allows multiple
font properties and line-height to be set in one go. The syntax has
quite a specific order that I can never remember so I tend to not use
this property very often. However, it is useful for setting font family,
size and line-height in a single line as follows:

{% highlight css %}
p { font: 12px/24px 'Avenir', 'Arial', sans-serif; }
{% endhighlight %}

## Other properties

We've looked in some detail at the `text-` and `font-` properties but
there's a handful of others that can also come in handy when styling
words on the page.

We looked at `line-height` in episode 12. This property controls the
spacing above and below the lines of text. We can also control the space
between individual letters with `letter-spacing`. This can be set to
a large positive value to increase spacing or to a small or negative
value to tighten everything up.

We can also control the spacing between words with the `word-spacing`
property and control the wrapping of text with `word-wrap`. 

It's also possible to control how white space behaves using the
`white-space` property. This is a useful property to control the visual
output of preformatted text like code snippets - something that I do
quite a bit.

So there we have a fairly complete list of all things text related.
This isn't the most exciting list of CSS properties I've ever come
across but as Content is King, being able to control how our text is
displayed to the reader is incredibly important. Hopefully there were
a couple of new things in this list for you; I know I certainly found
a few things I'd not seen before when putting this episode together!

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/t](http://www.atozcss.com/t).

If you found this video interesting or useful, leave me a comment or
shoot me a tweet [@guyroutledge](http://www.twitter.com/guyroutledge) to
let me know what you liked, or what you didn't.

Cheers
