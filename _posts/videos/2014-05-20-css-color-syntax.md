---
layout: post_page
title: Color
alias: /c
wistiaId: qmw1dqzbd4
wistiaPoster: d0a437449181e02d074907c6f00758edadb22c8b
videoLength: 6 minutes 22 seconds
comments: true
categories: beginner video
excerpt: >
  The web would be a pretty dull place without a splash of colour.
  There are a number of different properties that take a colour value and
  there are four different colour syntaxes in CSS and that’s what we’ll be
  focusing on in this video.  Those formats are colour keywords, hex, RGB
  and HSL.
summary: |
  Colour can be specified in a number of formats including `keywords`, `hex`,
  `rgb` and `hsl`. The color property effects the foreground colour of an
  element - its text colour. Colour as a value can be used in many places
  such as `border-color`, `background-color`, gradients, `box-shadow`, 
  `text-shadow`, and `fill` in SVG.

  ## Browser Support

  `rgba` and `hsl`: all modern browsers and IE9+.<br>
  keywords and hex: IE3+<br>
  `rgb`: supported from IE4+

---

The web would be a pretty dull place without a splash of colour.

There are a number of different properties that take a colour value and
there are four different colour syntaxes in CSS and that’s what we’ll be
focusing on in this video.  Those formats are colour keywords, hex, RGB
and HSL.

{% highlight css %}
.box-white {
   color: white;
   color: #fff;
   color: #ffffff;
   color: rgb(255,255,255);
   color: rgba(255,255,255,1);
   color: hsl(0,0%,100%,1);
   color: hsla(0,0%,100%,1);
}
.box-black {
   color: black;
   color: #000;
   color: #000000;
   color: rgb(0,0,0);
   color: rgba(0,0,0,1);
   color: hsl(0,0%,0%,1);
   color: hsla(0,0%,0%,1);
}
{% endhighlight %}

Let’s take a look at each of them in turn.


## Keywords

There are 147 named colours in CSS3.

There are actually only 140 different colours as 7 of them are
duplicates just with different spellings of grey. 

Here they are as colours, and here they are as a list of keywords.

I personally find this list pretty useless - there’s lots to
choose from, but it’s hard to remember what they all look like.

What is `palevioletred`? How pale? How violet? How red?

What is `gainsboro`?
How about `burlywood` or `goldenrod`?

These aren’t that useful but fortunately there are more options.


## RGB

In CSS, colours are defined in the standard Red Green Blue colour space
or sRGB where colours are defined through 3 channels: Red, Green, and
Blue.

One way of defining colour in CSS is using the RGB syntax.  Here the
values range from 0 to 255 for each of the three componenets. In this case
specifying 255 for each of the components, gives us the colour white.

{% highlight css %}
.box {
	color:rgb(255, 255, 255); /*white*/
	color:rgba(255, 255, 255, 0.5); /*semi-transparent white*/
}
{% endhighlight %}

We can also make semi-transparent colours with RGBA. Here, a fourth
value, known as Alpha, determines the opacity of a colour. This value is
a decimal ranging from 0 to 1 where 0 is completely transparent and 1 is
completely opaque. 

The `transparent` keyword is represented as `rgba(0,0,0,0)`.

{% highlight css %}
.box {
	color:transparent;
	color:rgba(0, 0, 0, 0); /*transparent*/
}
{% endhighlight %}


## Hex

Probably the color format I use most often is hex. Hex is short for
hexadecimal which is a base 16 numeral system. Most people are more familiar
with decimal - or base 10 - like the metric system.

A hex colour is broken down into three couplets that specify the red,
green and blue componenets of a colour. The values of the couplets are
in base 16 and range from 00 to FF. You can think of 00 as no colour and
FF as *full* colour. FF is actually the decimal number 255 in base 16.

In this case we have full red, full green and full blue which combine to
make white.

In this second example we have no red, full green and no blue which gives us
green.

When both values in each of three couplets are the same, the hex value can be
abbreviated to a short-hand 3 digit format.

{% highlight css %}
.box {
	color:#00ff00; /*green*/
	color:#0f0; /*green in shorthand*/
}
{% endhighlight %}


## HSL

HSL stands for Hue, Saturation and Lightness. 

Hue is specified in degrees from 0 to 360 - and corresponds to
a position around the colour wheel. 0 degrees represents red and then
colours blend through oranges, yellows, greens, blues, purples, pinks 
and back to red again at 360 degrees.

Saturation determines how vivid a colour is from 0% - monochrome - to
100% - vivid.

Lightness is also set as a percentage and determines the overall
amount of luminance.

HSL has the corresponding HSLA version which allows for alpha
transparency.

{% highlight css %}
.box {
	color:hsl(0, 0%, 100%); /*white*/
	color:hsla(0, 0%, 100%, 0.5); /*semi-transparent white*/
}
{% endhighlight %}


## Usage

So, how do we use these colours?

The color property only effects text - so it allows us to set the text
colour of an element.

But there are lots of other properties that accept a colour.
`background-color`, for example, or colour stops in a gradient. We can
also set `border-color` or the color component of `box-shadow` or
`text-shadow`. We can even change the `fill` colour of an SVG path or
polygon.

{% highlight css %}
.box {
	background-color: #000;
	background-image:linear-gradient(to right, #000, #fff);
	border-color: #000;
	box-shadow: 0 0 10px #000;
}
.text {
	text-shadow: 0 0 10px #000;
}
.svg path {
	fill: #000;
}
{% endhighlight %}


## CurrentColor

There is one last colour keyword that has a unique if not entirely
useful purpose.  `currentColor` is a special keyword that links the
value of the color property to other properties that accept a colour
value like `border-color`, `box-shadow` and `text-shadow`. Let’s have
a look at a quick demo.

We can create a box with a border and a drop shadow as follows and pass
in the colour values as a keyword, hex, rgb or hsl. If instead of
a colour value, we use `currentColor`, the colour of the border and
drop shadow is black - which is the default value for the `color` property.

If we now set the color to hotpink, this will be used in place of
currentColor instead. This allows us to remove the color value from the
border and box-shadow properties. Which maybe saves you a few keystrokes.

{% highlight css %}
.box {
	color:hotpink;
	padding:50px;
	border:10px solid; /*border-color is hotpink*/
	box-shadow:0 0 100px; /*shadow colour is hotpink*/
}
{% endhighlight %}


## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/c](http://www.atozcss.com/c).

For more info and ways to subscribe to more videos check out
[atozcss.com/subscribe](http://www.atozcss.com/subscribe).  If you have
any questions of comments, you can tweet me 
[@atozcss](http://www.twitter.com/atozcss) or drop me an email.

Cheers.


