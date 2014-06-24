---
layout: post_page
title: Hover
alias: /h
date: 2014-06-24
wistiaId: ig3axa1zs3
videoLength: 6 minutes 19 seconds
comments: true
excerpt: >
  Hover is a pseudo class and can be used to style state. The hover state is 
  active when a users mouse enters the bounding box of an element and is 
  inactive when the users mouse leaves it. In this episode, we’ll look at 
  the :hover pseudo class on text links and create a CSS dropdown menu 
  triggered by hover and enhanced with jQuery for touch devices.
summary: |
  We can enhance user experience by styling elements that are being
  interacted with under different states like `:hover`, `:focus` and
  `:active`. It's important to bear in mind that some users don't have
  a mouse and `:hover` on touch devices can be a bit flaky. 

  When dealing with touch devices, key bits of info shouldn't be hidden
  behind hover interactions but if this can't be avoided, hover events
  can be swapped out for clicks using JavaScript. For a demo of doing
  that for a dropdown nav, check out 
  [this demo on Codepen](http://codepen.io/guyroutledge/pen/cJmeH).
---

Hover is a pseudo class and can be used to style state.

The hover state is active when a users mouse enters the bounding box of
an element and is inactive when the users mouse leaves it.

In this episode, we’ll look at the `:hover` pseudo class on text links and
cover some of the other other link pseudo classes as well. We’ll also
look at some of the downsides of hover and some work-arounds for
non-mouse users. Finally we’ll create a CSS dropdown menu triggered by
`hover` and enhanced with jQuery for touch devices.

## Links

Probably the most common use of `:hover` is to provide visual feedback to
users when mousing over links and buttons.

The hover state of a link can be styled in CSS as follows:

{% highlight css %}
a:hover { color:red; }
{% endhighlight %}

The colon next to the `a` signifies a pseudo class. We’ll look at
a number of them in this video and throughout the rest of the series
- and you can check out the `:enabled` and `:disabled` pseudo classes in
Episode 5.

In this example, just the colour is being styled but *any* properties
can be changed, overwritten, or cancelled out. You could increase the
font-size and rotate the link by 180 degrees if you really wanted to
- but don’t do that.

There are other pseudo classes that are useful for styling different
link states too.

There’s `a:visited` for styling links that the user has in their browser
history.  There’s also `a:active` for styling a link that is currently
being clicked on. Finally, there’s `a:focus` for a link that currently
has keyboard focus - ie. the user has used the `tab` key to jump through
the clickable items on a page like links and form inputs.

I like to group this set of four link states together as part of a reset
stylesheet that will set sensible defaults for an entire project.

{% highlight css %}
a { color:blue; }
a:hover { color:lightblue; }
a:visited { color:darkblue; }
a:focus { outline:1px dotted grey; }
a:active { color:lightblue; }
{% endhighlight %}

## The downside

Hover states can be applied to any element - not just links - which
makes them very versatile. But on touch devices there’s no mouse to
initiate the hover. 

Hover styles sometimes get applied if a user taps very lightly on a link
or button but this is not reliable and not consistent across platforms
and devices. It can often be very confusing and our job is to improve
user experience, not make it worse! 

In the case of touch devices, avoid key information being hidden behind
hover interactions. If this can’t be done, it is possible to swap out
hovers for clicks using JavaScript.

Some users aren’t able to use a mouse and we can improve the experience
for them by always applying `:focus` and `:active` styles whenever we
use `:hover`. We can comma separate these in our CSS as follows:

{% highlight css %}
a:hover,
a:foucs,
a:active {
	/*styles*/
}
{% endhighlight %}

If you use a CSS pre-processor like Sass, you could create a mixin that
would output these three comma separated pseudos for you without having
to write them out all the time.

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

Now your state based styles will show during keyboard interactions on 
elements that can be focused or made active.

## CSS Dropdown menu

We’ve seen a basic use of `:hover` to give some visual feedback when
interacting with links and buttons. Another common design pattern on the
web is dropdown menus in a site’s main navigation. 

We can use the hover interaction to show and hide a sub-menu by using
more complex CSS selectors. To make this interaction behave nicely on
touch devices, a small amount of JavaScript is required to convert hover
events into click events - but we’ll take a look at that later.

The trick is to toggle the `display` property of the sub menus when
hovering over the top-level menu items. As `:hover` is a CSS selector,
it can be combined with other selectors in a chain to create more
complex behaviour. For more info on the `display` property, check out
Episode 4.

In this example, I have a horizontal unordered list of links, each with
a sub-menu positioned beneath them. The sub menus are another unordered
list but with the list items stacked on top of each other.

This CSS, sets up this initial layout. The colour and font properties
have been moved into my `page-styles.css` file, to keep the working area
clean.

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

The sub-menus can be hidden with `display:none` and then set to
`display:block` when a menu item is being hovered over. 

{% highlight css %}
.menu li:hover .sub-menu {
	display:block;
}
{% endhighlight %}

This will show all sub-menus but we can tweak this selector to limit the
showing and hiding to individual sub-menus by using the `>` child selector.
For more info on this and other combinator selectors, check out the
previous episode on the general sibling selector.

{% highlight css %}
.menu li:hover > .sub-menu { 
	display:block; 
}
{% endhighlight %}

If you prefer less of a sudden snapping on or off of the sub menus, you
could combine `opacity` with `transition` for more of a fade in, fade
out effect. I’ll leave that as an exercise for you to play around with
- make a Codepen and shoot me a tweet, I’d love to check out what you
come up with.

To make this drop down menu play nice on touch devices, we can add in
a bit of JavaScript. This jQuery snippet will activate the dropdown
menus on click instead of hover; clicking a second time will allow any
link in the top-level menu to be navigated to unless it’s an empty link.

{% highlight javascript %}
if ( 'ontouchstart' in document.documentElement ) {
	$('.menu > li').has('.sub-menu').on('click', 'a', function(e){

		var $menuItem = $(this);
		var target = $menuItem.attr('href');

		if ( !target || target === '#' ) {
			return false;
		}
		if ( $menuItem.is('.js-active') ) {
			return true;
		}
		e.preventDefault();

		$menuItem.addClass('js-active').siblings().removeClass('js-active');
		$('.sub-menu').hide();
		$menuItem.find('.sub-menu').show();
	});
}
{% endhighlight %}

A working example of this menu including the jQuery for touch devices,
can be [found on Codepen](http://codepen.io/guyroutledge/pen/cJmeH)

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
