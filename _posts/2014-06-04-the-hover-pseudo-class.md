---
layout: post_page
title: Hover
alias: /h
date: 2014-06-04
wistiaId: 
videoLength: x minutes x seconds
excerpt: >
  
summary: |
  
---

Hover is a pseudo class that is used to style state.

That state is active when a users mouse enters the bounding box of an
element and is inactive when the users mouse leaves it.

We’ll look at the hover pseudo class on text links and touch on some of
the other other link pseudo classes. We’ll also look at some of the
downsides of `:hover` and how to overcome them on touch devices. Finally
we’ll create a CSS only dropdown menu triggered by `hover` among other
things.

## Links

Probably the most common use of `hover` is to provide user feedback when
mousing over links and buttons.

This state can be styled in CSS as follows:

{% highlight css %}
a { color:blue; }
a:hover { color:red; }
{% endhighlight %}

In this just the colour is being changed but *any* properties can be
changed, overwritten, or cancelled out. You could increase the font-size
and rotate the link text by 180 degrees if you really wanted to - but
don’t do that.

There are other pseudo classes that are useful for styling different
link states.

There’s `a:visited` for styling links that the user has already visited.
There’s also `a:active` for styling a link that is currently being
clicked on. Finally, there’s `a:focus` for a link that currently has
keyboard focus - ie. the user has used the `tab` key to jump through the
clickable items on a page like links and form inputs.

I like to group this set of four link states together as part of a reset
stylesheet that will set sensible defaults for an entire project.

## The downside

Hover states can be given to any element - not just links but on touch
devices there’s no mouse to initiate the hover. Hover styles sometimes
get applied if a user taps very lightly on a link or button but this is
not reliable and can often be very confusing; we are trying to improve
user experience, not make it worse!

We can improve the experience by always applying `:focus` and `:active`
styles whenever we use `:hover`. We can comma separate these in our CSS
as follows:

{% highlight css %}
a:hover,
a:foucs,
a:active {
	/*styles*/
}
{% endhighlight %}

If you use a CSS pre-processor like Sass, you could create a mixin that
would output these three comma separated pseudos for you.

{% highlight scss %}
@mixin hover-focus-active() {
	&:hover,
	&:focus,
	&:active { @content }
}
/*usage*/
a { 
	/*styles*/
	@include hover-focus-active {
		/*styles*/
	}
}
{% endhighlight %}

Now your state based styles will show on mobile and touch enabled
devices when a user taps on an element that can be focused or made
active.

## CSS Dropdown menu

We’ve seen a basic use of `hover` to give some visual feedback when
interacting with links and buttons. Another common design pattern on the
web is dropdown menus in a site’s main navigation. These are often
written in Javascript but it’s possible to make one in pure CSS.

The trick is to toggle the `display` property of the sub menus when
hovering over the top-level menu items. As `:hover` is a CSS selector,
it can be combined with other selectors in a chain to create more
complex behaviour. For more info on the `display` property, check out
Episode 4.

In this example, I have a horizontal unordered list of links, each with
a sub-menu positioned beneath them. The sub menus are another unordered
list but with the list items stacked on top of them.

The CSS below, sets up this initial layout. The colour and font
properties have been moved into my page styles file, to keep the working
area clean.

{% highlight css %}
.menu > li {
	position:relative;
	display:inline-block;
}
.menu .sub-menu {
	position:absolute;
	top:100%;
	left:0;
}
{% endhighlight %}

The sub-menus can be hidden with `display:none` and then individual ones
can be set to `display:block` when their parent list item is being
hovered over. The individual submenu is targeted using the `>` child
selector. For more info on this and other combinator selectors, check
out Episode 7 on the general sibling selector.

{% highlight css %}
li:hover > .sub-menu { display:block; }
{% endhighlight %}

If you prefer less of a sudden snapping on or off of the sub menus, you
could combine `opacity` with `transition` for more of a fade in, fade
out effect. I’ll leave that as an excercise for you.

To make this drop down menu work on touch devices, we’d have to add in
`:focus` and `:active` selectors too

{% highlight css %}
li:hover > .sub-menu,
li:focus > .sub-menu,
li:active > .sub-menu { display:block; }
{% endhighlight %}

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/h](http://www.atozcss.com/h).

If you’d like to make sure you never miss an episode, join the mailing
list, subscribe on YouTube, via RSS or on iTunes.

If you find these videos at all useful, I’d really appreciate a rating
and review on iTunes. It really keeps me going and helps others find the
show.

If you have any questions or comments, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or drop me an
email.

Cheers.
