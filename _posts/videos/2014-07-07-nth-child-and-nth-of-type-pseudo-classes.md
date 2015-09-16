---
layout: post_page
title: ":nth-child"
alias: /n
date: 2014-08-05
wistiaId: 8effled1nu
wistiaPoster: 8f6c2c7fa57ef41b0615d12c16ab0d9b3f985375
videoLength: 7 minutes 25 seconds
comments: true
categories: advanced video
excerpt: >
  :nth-child is a pseudo class used to select elements by a numeric
  expression. The syntax is quite different to most other aspects of CSS
  and can be a bit tricky to get your head around to begin with.
summary: |
  In this episode we'll look at 

  * the various ways of using `:nth-child`,
  * the slightly more flexible `:nth-of-type` selector 
  * and their counterparts selectors `:nth-last-child` and `:nth-last-of-type`.
---

`:nth-child` is a pseudo class used to select elements by a numeric
expression.

The syntax is quite different to most other aspects of CSS and can be
a bit tricky to get your head around to begin with.

In this episode we'll look at 

* the various ways of using `:nth-child`,
* the slightly more flexible `:nth-of-type` selector 
* and their counterparts selectors `:nth-last-child` and `:nth-last-of-type`.

## `:nth-child`

`:nth-child` selects *child* elements if their position in the document
matches a pattern described by an algebraic expression.

The `:nth-child` selector looks a bit like this:

{% highlight css %}
li:nth-child(expression) { }
{% endhighlight %}

The "expression" can either be the keywords `even` or `odd`, a whole
number or a formula in the pattern of `an+b` where `a` and `b` are whole
numbers - positive or negative.

As `:nth-child` can be used to select a range of different elements
under different circumstances, it's difficult to explain how it works
and what it's for. Let's look at a series of examples to illustrate it's
uses.

I have a unordered list, with 12 list items. Let's see how we can use
`:nth-child` to match a specific item or pattern of items:

{% highlight html %}
<ul>
	<li>lorem ipsum</li>
	<li>lorem ipsum</li>
	<li>lorem ipsum</li>
	<li>lorem ipsum</li>
	<li>lorem ipsum</li>
	<li>lorem ipsum</li>
	<li>lorem ipsum</li>
	<li>lorem ipsum</li>
	<li>lorem ipsum</li>
	<li>lorem ipsum</li>
	<li>lorem ipsum</li>
	<li>lorem ipsum</li>
</ul>
{% endhighlight %}

To select the third list-item, I could use `li:nth-child(3)`.

To select all the even items, I can use `even` keyword.  Conversely,
I can use `:nth-child(odd)` to select all the odd numbered items.
These are commonly used selectors to stripe the background colour of
alternate rows in a table of data.

To select every third item, I can use `li:nth-child(3n)`.

To select the first 4 items, I can use `li:nth-child(-n+4)`. To select
everything except the first 4 items, I can use `li:nth-child(n+5)`.

## The `an+b` expression

We've seen how `:nth-child(odd)` can select all the odd numbered items
in a list. An alternative approach to using the `odd` keyword is to use the
expression `2n+1`.

But how does the expression work? 

When the expression, in the format `an+b` contains non-zero values for
`a` and `b`, the child elements are split into groups of `a` elements.

If the expression was `2n+1`, the child elements would be split into
groups of 2. Each element in the group is then given an index, starting
at 1. The matched element in each group is `b`th index. In this example,
that would be the first element.

If the expression was `3n+2`, the list items would be grouped into sets
of 3 and the second item in each group would be matched.

If the value of `b` is negative, the matched element in the group is the
`bth` index but counted backwards from index 1. In this instance, the
matched element from a group will no longer match an element in that
group, but in one above it. 

The `even` keyword can be expressed as `2n`. In this case, there is no
value for `b` in the `an+b` expression so each `ath` element is matched
instead; `2n` would match every second element, `3n` every third, `4n`
every fourth an so on.

I personally find this idea of splitting child elements into groups and
working out the matched index for each group very confusing - although
that is how the CSS selectors spec describes it.

I can cope with the idea of matching every nth element - every 2nd or
3rd or 4th etc. and then I like to think as the second part to the
expression as an offset.

In the case of `2n+1` I would read it as follows: "Find every second
element, move the selection down by 1."

If the expression was `3n-5` it would read: "Find every third element
and move the selection up by 5."

## Other `:nth-child` selectors

`:nth-child` has a corresponding `:nth-last-child` pseudo class which
works in the same way as `:nth-child` but in reverse. 

`li:nth-last-child(3n)` starts at the last child element and works
backwards, matching every third element from the bottom of the list. This
is far less common and something I don't think I've ever used in
a production site before.

It is however, very common to select either the first or last child
element. This could be done with `:nth-child(1)` or
`:nth-last-child(1)` but is so common, there are `:first-child` and
`:last-child` pseudo classes available as well. `:first-child` is the only one
of this family of child selectors that works in IE8 - `:last-child` and
any of the `:nth` selectors do not.

## `:nth-of-type`

Something that often catches me out with `:nth-child` is that the
selector just matches based on index of child elements and doesn't take
the type of element into account.

Let's look at the following markup for a snippet of content.

{% highlight html %}
<section>
	<h1>lorem ipsum</h1>
	<p>Aenean commodo ligula eget dolor. Vestibulum dapibus nunc ac
	augue.</p>
	<p>Nunc sed turpis. Donec posuere vulputate arcu.</p>
</section>
{% endhighlight %}

I have a section with a heading and sub-heading and a series of
paragraphs beneath. I want to make the first paragraph stand out a bit
by increasing the `font-size` to `1.5em`.

I might try `section p:first-child`, as I want to style the first
paragraph in the section. But this doesn't work as the first child of
the section is actually a `h1` element. In this case, I need to use the
`:first-of-type` selector.

There are a series of these type selectors; `:first-of-type`,
`:last-of-type`, `:nth-of-type` and `:nth-last-of-type`. These behave
the same way as `:nth-child` but match the `nth` instances of a certain
type of element.

These selectors are complex but very powerful. The browser support is
IE9+ with the exception of `:first-child` which is IE8+. Bear this in
mind when using them, but they've certainly gotten me out of a few
difficult situations in the past.


## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/n](http://www.atozcss.com/n).

If you find these videos at all useful, please spread the word and leave
a comment to let me know what you liked, and what you didn't.

If you have any questions or comments, you can tweet me
[@atozcss](http://www.twitter.com/atozcss) or
drop me an email.

Cheers.


