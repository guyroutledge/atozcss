---
series: atoz-css
layout: post_page
title: "Z-index"
alias: /z
date: 2014-10-30
wistiaId: 64pn9d94vn 
wistiaPoster: 2f51dc48c13b31885cffde56cdaa8b7f21bfdad2
videoLength: 8 minutes 39 seconds
comments: true
categories: advanced video
excerpt: >
  Some interface designs may call for elements to be layered or stacked on
  top of each other. There are many ways that elements will naturally stack on top of each
  other. But we can control this stacking order using a combination of the
  `position` and `z-index` properties.
summary: |
  In this final episode of AtoZ CSS season one we'll learn about:
  
  * The default stacking order of the document
  * What a stacking context is and how they interact with each other
  * How z-index controls layer order within stacking contexts
  * And a method I use for standardising z-index across a project
---

Some interface designs may call for elements to be layered or stacked on
top of each other.

There are many ways that elements will naturally stack on top of each
other. But we can control this stacking order using a combination of the
`position` and `z-index` properties.

In this final episode of AtoZ CSS season one we'll learn about:

* The default stacking order of the document
* What a stacking context is and how they interact with each other
* How z-index controls layer order within stacking contexts
* And a method I use for standardising z-index across a project

## Default Stacking

When writing our HTML, elements that appear lower down in the document,
naturally stack above elements further up.

{% highlight html %}
<body>
	<header class="site-header"></header>
	<main class="site-content"></main>
	<footer class="site-footer"></footer>
</body>
{% endhighlight %}

Given this snippet of HTML, the `footer` would stack on top of the `main`
content area which would stack on top of the `header` if they were all
positioned to overlap each other.

Elements can be overlapped by using a combination of `position`
properties and offset properties `top`, `right`, `bottom` and `left`.

If I set `position:absolute` on each of these elements, they will all
layout on top of each other. The `footer` comes last in the document so
by default stacks on top of the previous two elements.

{% highlight css %}
.site-header, .site-content, .site-footer {
  position:absolute;
  width:400px;
  padding:20px;
}
.site-header { top:0; left:0; }
.site-content { top:50px; left:50px; }
.site-footer { top:100px; left:100px; }
{% endhighlight %}

If I use the offset properties, `top` and `left`, we can see the order
more clearly.

## Stacking Context

Whilst using `position:absolute` here creates elements that overlap each
other, we've not yet created what's known as a stacking *context*.

A stacking context is created in any of the following ways:

* an element with position `absolute` or `relative` and a z-index value that's not `auto`
* a flexbox item with `z-index` value that's not `auto`
* an element with an `opacity` less than 1
* an element with `transform` set to anything other than `none`

By far the most common way of creating and using stacking context is the
first example in this list so let's focus on that for a minute.

Going back to the earlier example, we have three elements positioned on
top of each other but currently, they do not have a `z-index` value.

The `z-index` property allows us to control the order of the stacking.

If I set `z-index:1` on the footer, `z-index:2` on the main and
`z-index:3` on the header, the order of the default stack can be
completely reversed.

This looks quite simple on the surface; the higher the `z-index` the
higher the element stacks - so a `z-index:9999` will always be on top
of `z-index:9`. Unfortunately, it's a bit more complex than that.

## Z-index within stacking contexts

{% highlight html %}
<header class="site-header blue">header</header>
<main class="site-content green">content
	<div class="box yellow"></div>
</main>
<footer class="site-footer pink">footer</footer>
{% endhighlight %}

If I add a box inside of the `site-content` container and position it 
just outside the bottom right corner, we can see that it is above the
green box and below the pink box.

{% highlight css %}
.box {
    position:absolute;
    bottom:-25px;
    right:-25px;
    z-index:4; /*won't work :(*/
    width:75px; 
    height:75px; 
    border:1px solid #000;
}
.site-header { top:0; left:0; z-index:-1; }
.site-content { top:50px; left:50px; }
.site-footer { top:100px; left:100px; z-index:3; }
{% endhighlight %}

Based on our knowledge of `z-index`, we might think that to make this
yellow box appear above the pink box, we can just set a higher value for
z-index.

If I set `z-index:4`, which is higher than `z-index:3` we see no change.
It's common for people to try and force the stacking by trying a really
huge number like `9999` but doing this has no affect either. Seeing
`z-index` values like this peppered throughout a codebased is a bit of
a code smell so try and avoid it if you can.

The reason that we're not able to get the desired result of the yellow
box on top of the pink box is due to how `z-index` behaves within
a stacking context.

In order to demonstrate this, let's look at a slightly more involved
example which I've borrowed from the [MDN website](https://developer.mozilla.org/en-US/docs/Web/Guide/CSS/Understanding_z_index/The_stacking_context).

{% highlight html %}
<header class="site-header blue">
	<h1>Header</h1>
	<code>position: relative;<br/>
	z-index: 5;</code>
</header>

<main class="site-content pink">
	<div class="box1 yellow">
		<h1>Content box 1</h1>
		<code>position: relative;<br/>
		z-index: 6;</code>
	</div>

	<h1>Main content</h1>
		<code>position: absolute;<br/>
		z-index: 4;</code>

	<div class="box2 yellow">
		<h1>Content box 2</h1>
		<code>position: relative;<br/>
		z-index: 1;</code>
	</div>

	<div class="box3 yellow">
		<h1>Content box 3</h1>
		<code>position: absolute;<br/>
		z-index: 3;</code>
	</div>
</main>

<footer class="site-footer green">
	<h1>Footer</h1>
	<code>position: relative;<br/>
	z-index: 2;</code>
</footer>
{% endhighlight %}
{% highlight css %}
.blue   { background:hsla(190, 81%, 67%, 0.8); color:#1c1c1c; }
.purple { background:hsla(261, 100%, 75%, 0.8); }
.green  { background:hsla(84, 76%, 53%, 0.8); color:#1c1c1c; }
.yellow { background:hsla(61, 59%, 66%, 0.8); color:#1c1c1c; }
.pink   { background:hsla(329, 58%, 52%, 0.8); }

header, footer, main, div {
  position: relative;
  border: 1px dashed #000;
}
h1 {
  font: inherit;
  font-weight: bold;
}
.site-header, .site-footer {
  padding: 10px;
}
.site-header {
  z-index: 5;
  top:-30px;
  margin-bottom: 210px;
}
.site-footer {
  z-index: 2;
}
.site-content {
  z-index: 4;
  opacity: 1;
  position: absolute;
  top: 40px;
  left: 180px;
  width: 330px;
  padding: 40px 20px 20px;
}
.box1 {
  z-index: 6;
  margin-bottom: 15px;
  padding: 25px 10px 5px;
}
.box2 {
  z-index: 1;
  width:400px;
  margin-top: 15px;
  padding: 5px 10px;
}
.box3 {
  z-index: 3;
  position: absolute;
  top: 20px;
  left: 180px;
  width: 150px;
  height: 250px;
  padding-top: 125px;
  text-align: center;
}
{% endhighlight %}

Here we have a header, footer and main content container as before but
inside the `site-content` we have three boxes which have all been
positioned and given a `z-index`.

Let's look at the three primary containers first - the header, footer
and main.

The header has a `z-index` of 5 so appears stacked above the main
content which has `z-index:4`. The footer has a `z-index` of 2 so
appears below the main with a higher `z-index` of 4. All good so far?
Good.

Things get a bit confusing with the three boxes inside of the main
container.

Content box 1 has a `z-index` of 6 but appears to be beneath the header
with a lower `z-index` of 5.

Content box 2 has a `z-index` of 1 but appears above the footer which
has a higher `z-index` of 2. 

So, what's going on?

All of this can be explained by the fact that all `z-index` values are
resolved within their parent stacking context. Because the parent
container `.site-content` has a higher `z-index` than the footer, any
positioned elements within the `.site-content` are evaluated within that
context.

A good way to think about stacking order within a stacking context is to
this of it like a sub-item in a nested ordered list.

This could be written as follows:

* Header: z-index:5
* Main: z-index:4
	* Box 1: z-index: 4.6
	* Box 2: z-index: 4.1
	* Box 3: z-index: 4.3
* Footer: z-index:2

So even though, the header is `z-index:5` and Content box 1 is
`z-index:6`, it's rendering order is 4.6 which is still less than 5. As
such, Content box 1 appears below the header.

It's a little confusing at first, but with practice, it does start to
make sense!

## Z-index strategy

I don't want to end the season with something quite so complex, so let's
wrap up with a simple strategy I use for applying `z-index` throughout
a project.

In the examples in this video, we used single digit increments for
`z-index` values but what if you wanted to add a new element between two
that are set with `z-index:3` and `z-index:4`? You'd have to change
a lot of values - possibly throughout an entire codebase which could
become problematic and prone to CSS breaking on other parts of the site.

I like to use a `z-index` scale that goes up in steps of 10. This keeps
things nice and consistent as I don't like seeing hacky `z-index` values like
99999 and strange numbers like `z-index:53` just look like something
hasn't been thought through properly.

The other benefit of using a scale with multiples of 10 is that if you
really do need to insert a new element between two others, there are 9
potential values you can pick between 10 and 20 but none that you can
pick between 1 and 2. 

## Outro

So that concludes the final episode of this series. Do stay in touch by
following me on twitter
[@atozcss](http://www.twitter.com/atozcss) and sign up to the
mailing list to hear about the plans for Season 2. 

Until then, you can get a transcript and code snippets for this video at
[atozcss.com/z](http://www.atozcss.com/z). Thanks so much for watching,
and I'll see you next time.

Cheers.
