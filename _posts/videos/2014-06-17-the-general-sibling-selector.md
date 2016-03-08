---
series: atoz-css
layout: post_page
title: "General sibling"
alias: /g
date: 2014-06-17
wistiaId: 9d4r1qiqe4
wistiaPoster: be9b4915c04404ba9cb7753f0a01df7db301d62c
videoLength: 5 minutes 19 seconds
comments: true
categories: intermediate video
excerpt: >
  General sibling is a little known but very useful CSS selector.
  It allows the styling of an element that is a sibling of another.
  We’ll look at the syntax, a practical example and then a quick round up
  of the other child and sibling selectors in CSS.
summary: |
  The general sibling selector is part of the family of combinator
  selectors in CSS that allow the styling of descendents, children,
  grandchildren and siblings of an element. Some of them aren't that
  commonly used but they have very deep browser support.

  * `h2 ~ p {} /* general sibling */`
  * `h2 p {}   /* descendent */`
  * `h2 * p {} /* grandchild */`
  * `h2 > p {} /* child */`
  * `h2 + p {} /* adjacent sibling */`

  ## Browser Support
  All modern browsers and IE7+.
---

General sibling is a little known but very useful CSS selector.

It allows the styling of an element that is a sibling of another.

We’ll look at the syntax, a practical example and then a quick round up
of the other child and sibling selectors in CSS.


## Syntax

The general sibling selector is part of the family of *combinator*
selectors in CSS and is identified with the `tilde` character. It looks
a bit like this:

{% highlight css %}
h2 ~ p {
	color:red;
}
{% endhighlight %}

This selector will style any paragraphs that are siblings of a second-level
heading and occur after the `h2`. 

The benefit of this selector is that the paragraphs don’t have to be 
*adjacent* siblings of the `h2`.

{% highlight html %}
<article>
	<h1>Lorem ipsum</h1>
	<p>Dolor sit amet</p>
	<h2>Lorem ipsum</h2>
	<p>Dolor sit amet</p>
	<h3>Lorem ipsum</h3>
	<p>Dolor sit amet</p>
</article>
{% endhighlight %}

In this code snippet, both the paragraphs after the `h2` will be red, but
the first one will not as it doesn’t come after a `h2` in the document.

This can be a little confusing as all the paragraphs could be said to be
"general siblings" of each other but the selector would not match the
first one.  This could be the reason that this selector has been
re-named in the CSS Selectors Level 4 spec to the "following sibling"
selector.

{% highlight html %}
<h2>Lorem ipsum</h1>
<div>
	<p>Dolor sit amet</p>
</div>
{% endhighlight %}

In this case, even though the paragraph comes after the `h2`, the
paragraph and `h2` aren’t siblings so our selector won’t match anything
here.


## Practical Example

Let’s have a look at a practical example.

The Summary and Transcript accordions on the AtoZ CSS website, use the
general sibling selector to determine the open/closed state of each
section. This whole behaviour is purely handled in CSS, there’s no
Javascript here!

The markup for the titles of each section has a hidden `input`, a `h1`
with a `label` inside of it, followed by a `div` to contain the
accordion content.

Clicking on the label, switches the `:checked` state of the input and
then the general sibling selector allows the styling of the 
`.accordion-content`.

When the input is not checked, the `max-height` of the accordion is set
to zero.  When the input is checked, the max-height is set to an
unlikely large value - 10000px in this case. Applying a bit of
transition, gives a smooth sliding animation.

{% highlight css %}
input ~ .episode-accordion {
	max-height: 0;
}
input:checked ~ .episode-accordion {
	max-height: 10000px;
}
.episode-accordion {
	-webkit-transition: all 1s ease-in-out;
	        transition: all 1s ease-in-out;
}
{% endhighlight %}

## Other Child & Sibling Selectors

As this was a rather short episode, let’s take a look at some of the
other combinator selectors available in CSS. These are supported since
IE7 which should have the vast majority of use-cases well and truly
covered.

### Decendent Selector

The decendent selector has been around since forever and selects
elements matching the second selector while they have the first selector
as an ancestor.

{% highlight css %}
div p { 
	color:red;
}
{% endhighlight %}

This selector will make all paragraphs in any child element of any `div` red.

### Grandchild Selector

The Grandchild selector is similar to the decendent selector but selects
elements that match the second selector if they are decendents of any
child element of the first selector. It uses the asterisk character but
it’s important to note that this is not the same as the wildcard or
universal "star" selector.

{% highlight css %}
div * p { 
	color:red;
}
{% endhighlight %}

This selector will make all paragraphs in children of a `div` red.

### Child Selector

The child selector, signified by the greater than sign, selects elements
matching the second selector that are a direct child of elements
matching the first selector.

{% highlight css %}
div > p { 
	color:red;
}
{% endhighlight %}

This selector will make all paragraphs that are children of a `div` red.

### Adjacent Sibling

The adjacent sibling selector is similar to general sibling selector and is 
signified with the `+` character. This selector will style elements matching
the second selector as long as they appear immediately after an element
matching the first selector.

{% highlight css %}
div + p { 
	color:red;
}
{% endhighlight %}

This selector will make any paragraphs that directly follow a `div` red.

As I mentioned previously, all these selectors are available in IE7+ so
you can (almost certainly) use them right now. Hopefully they’ll come in
handy for your next project.


## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/g](http://www.atozcss.com/g).

If you find these videos at all useful, please leave me a rating and
review on iTunes.

If you have any questions of comments, you can tweet me
[@atozcss](http://www.twitter.com/atozcss) or
drop me an email.

Cheers.


