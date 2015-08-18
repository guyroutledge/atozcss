---
layout: post_page
title: "Unicode-range"
alias: /u
date: 2014-09-24
wistiaId: kxh7150659 
wistiaPoster: 9a55e4d44e66baf750e89ca3615c8000f0540d44
videoLength: 6 minutes 31 seconds
comments: true
categories: intermediate video
excerpt: >
  In the previous episode we looked at all sorts of properties for styling
  text. In modern browsers, and in IE back to version 4, we can add
  *custom* fonts to enhance the design of our websites.  We can leverage
  various features of these custom fonts to help boost performance and
  improve our typography overall.
summary: |
  In this episode we'll learn:

  * All about the `@font-face` at-rule
  * And how to control typography with font stacks and `unicode-range`

  ## Browser Support

  Unicode-range is supported in all modern browsers except FF.
  @font-face is supported everywhere except Opera Mini 
---

In the previous episode we looked at all sorts of properties for styling
text. 

In modern browsers, and in IE back to version 4, we can add *custom*
fonts to enhance the design of our websites.

We can leverage various features of these custom fonts to help boost
performance and improve our typography overall.

In this episode we'll learn:

* All about the `@font-face` at-rule
* And how to control typography with font stacks and `unicode-range`

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

Some of these are excellent typefaces and are really well suited to the
web - Georia as a serif font and Arial or Verdana are all great fonts.
Comic Sans is certainly not one of the best...

But now we can now use all manner of custom fonts and have them display
on all browsers by using `@font-face`. 

While we *can* do this, it's always worth testing any custom fonts on
a range of operating systems and browsers to make sure they look as good
as expected. 

Do also bear in mind that font files can be quite large in file size so
use them wisely to avoid performance issues.

The syntax for `@font-face` looks like this:

{% highlight css %}
@font-face {
	font-family: 'Baskerville';
	src: url('baskerville.eot?#iefix') format('embedded-opentype'), 
		 url('baskerville.woff') format('woff'), 
		 url('baskerville.ttf') format('truetype'),
		 url('baskerville.svg#Baskerville') format('svg');
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
fonts in your CSS which is pretty handy too!

## Unicode Range

Each of the characters in a font can be described by their unicode
number which takes the form:

	U+0041

The string "AtoZ CSS" could be expressed in unicode as follows:

	A      t      o      Z      space  C      S      S
	U+0041 U+0074 U+006F U+005A U+0020 U+0043 U+0053 U+0053

Every character including the space has a unique unicode number. There's
a whole range of special characters baked into the UTF-8 character
set too which can be useful for adding shapes and symbols directly into
your markup.

When adding custom fonts with `@font-face` we can limit the range of
characters that they apply to which at first sounds a bit strange, but
bear with me.

The italic ampersand of the typeface Baskerville is a thing of beauty
and a lot of designers often like to use it even when not using the rest
of the Baskerville font.

One way of using this special font just for ampersands would be to wrap
them in a `span` tag and set a different `font-family` on it. But this
is a bit cumbersome and can be done without any extra markup at all.

We can create a font containing just this character and add it to our
font-stack as the first font in the list. 

When the browser encounters characters that don't appear in a font, it
will scan down the stack until it does find a font that contains the
required characters. We can use this behaviour to add in the special
ampersand when using any custom or web-safe font.

First we create the `@font-face` at-rule to load the single character
font. I'll give it the `font-family` name "Ampersand" and use a local
source for the font files to save on bandwidth.

I'll specify the `unicode-range` as `U+0026` for the single ampersand
character. It's possible to specify a whole range of characters, as the
property name suggests, but just a single character is needed in this
case.

{% highlight css %}
@font-face {
	font-family:'Ampersand';
	src: local('Baskerville-italic');
	unicode-range: U+0026;
}
{% endhighlight %}

In this sample HTML file, I've got a series of heading and paragraphs
that both contain a couple of ampersands.

I'll create two different font stacks, one for the headings and one for
the body copy. In each case, the first font in the stack will be the
custom "Ampersand" font. 

For the headings, I'll add Museo or Rockwell or serif as a fallback.

For the body, I'll add Avenir, Arial or sans-serif as the fallback.

{% highlight css %}
h1, h2 {
	font-family: 'Ampersand', 'Museo Slab', 'Rockwell', serif;
}
p {
	font-family: 'Ampersand', 'Avenir', 'Arial', sans-serif;
}
{% endhighlight %}

And that's it. When the browser renders the text, the first font in the
stack only contains an ampersand character so it will use the next one
down the list (if found) to render the remaining characters.

The browser support for `unicode-range` is good. It's supported in all
modern browsers except Firefox and in IE back to version 9. As this is
a purely visual enhancement, the browser support isn't a huge worry for
me - unsupported browsers will just get the first font in the stack that
can be load successfully.

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/u](http://www.atozcss.com/u).

If you have any questions please leave a comment or, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or drop me an
email.

Cheers.
