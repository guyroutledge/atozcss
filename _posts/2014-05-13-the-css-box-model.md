---
layout: post_page
title: Box Model
alias: /b
videoId: 0jhzHSJJJdc
videoLength: 4 minutes 31 seconds
excerpt: >
  Every element on a web page is a box and we can describe the 
  characteristics of these boxes using the CSS Box Model. 
  Understanding this model and how different types of boxes 
  lay out, is key when converting designs into a working website.
summary: |
  The box model properties `width`, `height`, `margin`, `padding` 
  and `border` describe the form of any box on the web. But the default 
  sizing model makes life difficult when working out the computed 
  width and height of an element. 

  Instead, setting `box-sizing:border-box` allows the computed width
  and height to equal the values of the `width` and `height` 
  properties and `padding` and `border` are added to the inside.

  ## Browser Support

  All modern browsers and IE8+.<br>
  Recent versions of FF need a `-moz` prefix.

---

Every element on a web page is a box.

We can describe the characteristics of these boxes using the CSS Box
Model.

Understanding this model and how different types of boxes lay out, is
key when converting designs into a working website.

## Example

If I add a `1px solid red` border to everything on my website using the
`*` selector, you can see how each element or module is made up of many,
nested boxes.

{% highlight css %}
* {
	border:1px solid red;
}
{% endhighlight %}

## Box Model Properties

The key characteristics of a box can be defined with the properties:
`width`, `height`, `margin`, `padding` and `border`. These are often
referred to as the Box Model properties.

{% highlight css %}
.box {
	width: 400px;
	height: 200px;
	margin: 20px;
	padding: 20px;
	border: 10px solid #000;
}
{% endhighlight %}

Sometimes `background` is included in this list but as `background`
doesn’t change the shape or layout of a box, I’ve left it out in this case.

We can model the behaviour of these properties by drawing any element on
the page as a diagram. This allows us to see how these box-model
properties combine to give the element it’s form - and in turn how much
space it takes up on the page.

## Calculating Dimensions

By default, the computed width of a box is calculated from the sum of
it’s width, horizontal padding and horizontal border. The computed
height is the sum of the height and vertical padding and borders. The
margin applies spacing around the outside of the box but doesn’t add to
the computed width or height.

So, given a box that has a width of 400px and a height of 200px, padding
of 20px on all sides and a border of 5px all round - the width of the box is
actually 400 + 5 + 20 + 20 + 5 = 450px and the height is 250px not 200.

This is a trivial calculation with nice round numbers but it can get
much more complex when dealing with multiple units and different values
on each side.

How wide is this box, for example?

{% highlight css %}
.box {
	width: 960px;
	margin: 20px auto;
	padding: 0 1em 2em 3em;
	border: 5px solid #000;
}
{% endhighlight %}

Sorry, I’m lazy - that requires far too much thinking and takes far too long. 
Fortunately there’s a simpler way...

## Box-sizing

We can make the value of `width` - the width property - equal the
computed width by using a different sizing model for our boxes.

{% highlight css %}
* {
	-moz-box-sizing:border-box;
	     box-sizing:border-box;
}
{% endhighlight %}

Using the `box-sizing` property with the value of `border-box` gives us
a much more intuitive box model. This property is still prefixed in
recent versions of Firefox so needs the `-moz` vendor prefix.

Now, when we create a box with a certain width, the padding and borders
are added to the inside, meaning no more fiddly calculations are needed.

Before the box-sizing property was added to CSS, this sizing model was 
actually used by old versions of IE when it entered "quirks mode". Now
we can use this sizing model intentionally in all modern browsers and 
IE8 and up.

## Demo

For an interactive demo of the box-model, check out this site I made...

It allows you to see the effect of changing box model properties like
width and height, margin, padding, border etc. and also the difference
in computed dimensions between the default sizing model `content-box`
and the more intuitive `border-box` model. 

It also generates the code necessary to make an element with these
characteristics, including the most efficient short-hand for margin and
padding. 

Go take a look at: [http://guyroutledge.github.io/box-model](http://guyroutledge.github.io/box-model)

## Outro

A transcript, links and code snippets for this video can be found in the
shownotes at [atozcss.com/b](http://www.atozcss.com/b).

If you have any questions, feedback or comments, please tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or drop me an email.

See you in the next episode. Cheers.
