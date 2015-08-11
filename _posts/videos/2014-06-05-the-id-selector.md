---
layout: post_page
title: ID
alias: /i
date: 2014-07-01
wistiaId: q9m9d0n2hl
videoLength: 7 minutes 12 seconds
comments: true
categories: video
excerpt: >
  ID is a CSS selector that allows the styling of a single unique element. 
  Their use in CSS is common and often a little controversial. In this 
  video, I will outline some of the reasons why I prefer the `class`
  selector over `ID`, how CSS specificity works. 
summary: |
  ID is a CSS selector that allows the styling of a single unique element. 
  Their use in CSS is common and often a little controversial. In this 
  video, I will outline some of the reasons why I prefer the class
  selector over ID, how CSS specificity works. 
---

ID is a CSS selector that allows the styling of a single unique element.

Their use in CSS is common and often a little controversial.

I personally avoid ID for styling things in CSS but I’m not going to
force my personal preferences on you.

In this video, I will outline some of the reasons why I prefer the
`class` selector over `ID`, how CSS specificity works and some tips for
writing more modular and reusable code.

## Syntax

Let’s start with the basics and look at how ID can be used to select an
element in CSS.

Given this series of `divs`, if I wanted the third one to be a feature
box, I could add an `id` attribute to the HTML as follows. This is a
unique identifier, a bit like your passport number or social security
number and there can be only one with this value on any given page.

{% highlight html %}
<div>lorem ipsum</div>
<div>lorem ipsum</div>
<div id="feature-box" class="box">lorem ipsum</div>
<div>lorem ipsum</div>
{% endhighlight %}

With the `id` attribute added in the markup, this can be selected in CSS
using the hash symbol which outside of the UK is sometimes call the
pound sign.

{% highlight css %}
#feature-box {
	/*styles*/
}
{% endhighlight %}

Now we know how to use the ID selector, let’s look at why I don’t use
them.

## The trouble with ID

I’ll outline two key reasons why I avoid using the ID selector in CSS:

* They are single use
* They introduce specificity issues

### Single use

One of CSS’s strongest weapons is the class selector which allows you to
style multiple things, multiple times with a single block of code.

I often use a class of "box" in the code demos of this tutorial series
to apply generic text styling and colour to the elements on the screen,
so you can see what’s going on. I can re-use this class as many times as
I need and can apply it to a whole host of different elements. The class
selector doesn’t care what element you put it on.

If I had `<div id=box></div>` I could only use this once. If I’ve gone
to the trouble of tapping out a whole load of CSS, I at least want the
option of using it again.

Thinking in reusable blocks can also help you break down lots of CSS
into smaller chunks that have more likelihood of being reused. 

To make your code more modular, consider breaking things down into
separate classes for structure and look.

We could have a reusable button component with the following structural
styles:

{% highlight css %}
.button {
	display:inline-block;
	margin:1em 0;
	padding:0.5em 1.5em;

	font-size:1em;
	text-align:center;
}
{% endhighlight %}

We could then create a series of modifier classes that allow us to
create a range of different buttons for use throughout a project.

{% highlight css %}
.button-large {
	font-size:2em;
}
.button-rounded {
	border-radius:1em;
}
.button-confirm {
	color:#333;
	background:lightgreen;
	border:1px solid darkgreen;
}
.button-cancel {
	color:#fff;
	background:crimson;
	border:1px solid darkred;
}
{% endhighlight %}

These modifier classes can then be added to the markup as needed to
build the whole component up of many smaller pieces.

{% highlight html %}
<a href="#" class="button button-large button-confirm">OK?</a>
{% endhighlight %}

### Specificity

Specificity determines what styles get applied and when.

When writing CSS, things that come further down the stylesheet tend to
override things that have been declared above them.

{% highlight css %}
.box p { color:white; }
.box p { color:black; }
{% endhighlight %}

The second set of styles override the first. 

What color text will the box have in this snippet?

{% highlight css %}
#box p { color:white; }
.box p { color:red; }
{% endhighlight %}

The text will be *white* because although the class selector comes
after the ID selector, the ID is a more *powerful* selector.

How about now?

{% highlight css %}
#box p { color:white; }
body h1 + div.box p { color:green; }
{% endhighlight %}

The text is still white. This is due to how specificity is
actually calculated.

## Calculating specificity

Take this horrifically complex selector - please never write anything
like this.

{% highlight css %}
header ul#main-nav li .sub-menu li.child a:hover { }
{% endhighlight %}

This will style the hover states of any links in a sub-menu of a site’s
main navigation. Yuck.

To calculate the specificity of this selector - ie. what we would have to 
concoct to override these styles somewhere else in the stylesheet
- we need to count all the style attributes, id selectors, classes and
pseudo classes and elements to create a 4-figure number.

There are no style attributes here. So the first number is 0.

There is 1 ID for "main-nav" which must be on a `ul` for this selector
to apply.

There are 2 classes, `.sub-menu` and `.child` and 1 pseudo class,
`:hover` so the third number is 3.

And finally, there are 5 elements; `header`, `ul`, `li`, `li` again and
`a`.

The specificity value for this selector is therefore

	0, 1, 3, 5

In order to override these styles, we would need another selector with
equal specificity to occur beneath this one in the stylesheet, or
a selector with higher specificity to occur anywhere in the file.

To avoid this maddness, the above selector could almost certainly be
re-written as

{% highlight css %}
.sub-menu a:hover { }
{% endhighlight %}

And had the same visual result with a specificity of `0,0,2,1` which
would be much easier to deal with if needing to be overwritten at
a later stage.

I like to keep my specificity low and favour classes wherever
possible; it reduces dependency on certain markup structure and allows
things to be easily overwritten with another single class selector if
needs be.

This approach of avoiding `ID` works for me, but you’re preference might
differ. I’d encourage you to try this approach, but only as part of
finding out what really works best for you and your team.

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/i](http://www.atozcss.com/i).

Keep in touch and never miss an episode! You can subscribe to updates
from AtoZ CSS in a number of ways. Head to
[atozcss.com/subscribe](http://www.atozcss.com/subscribe) for more info.
If you find these videos at all useful and want to help keep them free
forever, donations are more than welcome!

If you have any questions or comments, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or
drop me an email.

Cheers.
