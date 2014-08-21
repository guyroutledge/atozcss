---
layout: post_page
title: "Unicode-range"
alias: /u
date: 2014-08-21
wistiaId: abc
videoLength: x minutes x seconds
comments: true
excerpt: >
  
summary: |
  
---

In the previous episode we looked at all sorts of properties for styling
text. 

In this episode we'll look at adding custom fonts with CSS and refining
the range of characters they apply to with `unicode-range`.

In this episode we'll learn:

* How to add custom typefaces with `@font-face`
* And how to substitute certain characters in a font by leveraging `unicode-range`

## @font-face

The choice of typeface on the web used to be limited to a small handful
of "web safe" fonts like:

* Arial
* Comic Sans
* Courier New
* Georgia
* Impact
* Palatino
* Tahoma
* Times New Roman
* Trebuchet
* Verdana

We can now use all manner of custom fonts and have them display on all
browsers by using `@font-face`. 

While we *can* do this, it's always worth testing any custom fonts on
a range of operating systems and browsers to make sure they look as good
as expected. 

Do also bear in mind that font files can be quite large in file size so
use them wisely to avoid performance issues.

The syntax for `@font-face` looks like this:

{% highlight css %}
@font-face {
	font-family: 'myFont';
	src: url('myfont.eot?#iefix') format('embedded-opentype'), 
		 url('myfont.woff') format('woff'), 
		 url('myfont.ttf') format('truetype'),
		 url('myfont.svg#myFont') format('svg');
}
{% endhighlight %}

The font is given a name with the `font-family` property and then
a series of different file types and formats are provided for each of
the different browsers.

To save users downloading fonts that they already have on their system,
it's possible to specify a `local()` name of the font to search for.

In order to create all the correct formats of a font for different
browsers, I use a fantastic online resource called [Font
squirrel](http://www.fontsquirrel.com). 

They have a webfont generator and it works like a charm. The download
they provide also contains all the code snippets for adding these custom
fonts with CSS which is pretty handy too!

## Unicode Range

Each of the characters in a font can be described by their unicode
number which takes the form:

	U+0041

AtoZ CSS could be expressed in unicode as follows:

	A      t      o      Z      space  C      S      S
	U+0041 U+0074 U+006F U+005A U+0020 U+0043 U+0053 U+0053

When adding custom fonts with `@font-face` we can limit the range of
characters that they apply to.

The italic ampersand of the typeface Baskerville is a thing of beauty.

One way of using this different font for ampersands would be to wrap
them in a `span` tag and set a different `font-family` on it. But this
is a bit cumbersome and can be done without any extra markup at all.

We can create a font containing just this character and add it to our
font-stack as the first font in the list. 

When the browser encounters characters that don't appear in a font, it
will scan down the stack until it does find one that does contain the
required characters. We can use this behaviour to add in the special
ampersand when using any custom or web-safe font.

First we create the `@font-face` at-rule to load the single character
font. I'll give it the `font-family` name "Ampersand".

I'll specify the `unicode-range` as `U+0026` for the single ampersand
character. It's possible to specify a whole range of characters, as the
property name suggests, but just a single character is needed in this
case.

In this sample HTML file, I've got a series of heading and paragraphs
that both contain a couple of ampersands.

I'll create two different font stacks, one for the headings and one for
the body copy. In each case, the first font in the stack will be the
custom "Ampersand" font. 

For the headings, I'll use Museo or Rockwell or serif as a fallback.

For the body, I'll use Avenir, Arial or sans-serif as the fallback.

When the browser renders the text, the first font in the stack only
contains an ampersand character so it will use the next one down the
list (if found) to render the remaining characters.

The browsers support for `unicode-range` is good. It's supported in all
modern browsers except Firefox and in IE back to version 9. As this is
a purely visual enhancement, the browser support isn't a huge worry for
me - unsupported browsers will just get the first font in the stack it
can load successfully.
