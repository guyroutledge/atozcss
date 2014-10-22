---
layout: post_page
title: "The rotateY css transform"
alias: /y
date: 2014-09-03
wistiaId: yzabcde
videoLength: x minutes x seconds
comments: true
excerpt: >
  
summary: |
  
---

In the previous episode we learned about the transform property and the
value translateX().

In this episode we'll be digging deeper into transforms and manipulating
elements in 3D.

In this episode we'll learn all about:

* 3D space in CSS
* How to rotate elements around their vertical and horizontal axis
* And how perspective works 

## 3D space

The browser acts a bit like a two-dimensional canvas on which we layout
blocks of content and style images, text and links to create a website
or web app.

If you recall high-school maths, when looking at a graph there is
a horizontal x-axis and a vertical y-axis.

There's a third axis that comes directly out from the screen, known as
the z-axis. We'll look into this more in the final episode of this
season when we talk about `z-index`. For now, we just need to know that
there is a third dimension and we can transform elements from being in
a 2D plane to a 3D one using 3D transforms.

When dealing with elements in 3D space, we can ensure they appear
visually as if they are in a third plane by setting the
`transform-style` property to `preserve-3d` on the parent container. 

This will allow all child elements to appear in 3D space. If this
property is not set, elements will appear flattened and the effect won't
be as obvious.

## Rotate

Rotation can be very useful in many aspects of design - from a complete
180 to just a small handful of degrees. 

The default axis of rotation is the z-axis.

The amount of rotation can be specified in degrees or radians.
I vaguely remember radians from maths class but I always use degress
because they feel a lot more comfortable to me.

I've got an image here with a white border around it and a drop shadow.
If I wanted to roate the image, I can do so by using the `tranform`
property and the the `rotate()` function.

A positive value with rotate clockwise and a negative value,
anti-clockwise.

{% highlight css %}
img {
	transform: rotate(10deg);
}
{% endhighlight %}

This is the same as using the single-axis rotation of `rotateZ()` as the
image is rotating around the z-axis.

When using `rotateY()`, the image roates around the y-axis which can be
a useful trick to achieve something like a card flip effect or something
similar. 

{% highlight css %}
img {
	transform: rotateY(45deg);
}
{% endhighlight %}

If I add in an animation that continuously rotates the image around the
y-axis, it should be a bit clearer as to what's going on.

{% highlight css %}
img {
	animation: spin 2s infinite linear;
}
@keyframes spin {
	from { transform:rotateY(0deg); }
	to { transform:rotateY(360deg); }
}
{% endhighlight %}

You may notice that when the element rotates around 180 degrees, the
image appears to become a mirror image. By default the back of the image
is visible even when rotated around so the front face of it is pointing
away from the viewer. 

The visibility of the back of the element can be controlled with the
`backface-visibility` property. It takes the values `visible` or
`hidden` where `visible` is the default.

A slightly more sane use of rotate is to add subtle effects to elements
on the page. The browser support is IE9+ but because this is a fairly
unimportant cosmetic bit of styling, having non-rotated elements in old
IE isn't a big deal to me. It's always worth testing to be on the safe
side though - just in case.

## Perspective

When dealing with elements in 3D space, we can make the visual effect
more extreme by bringing perspective into the equation.

Back in art class you might have learned that to achieve the effect of
three dimensions on a 2D piece of paper, you can draw a series of
straight lines from a vanishing point and ensure all horizontal features
moving away from the viewer all converge at that point.

This photo illustrates perspective quite nicely. But how does this
feature in CSS?

Here I've got the markup for a cube. The six faces of the cube are
contained within the "cube-x" `div` which is contained within two others
so eventually we can take a look at rotating the cube in three
dimensions.

{% highlight html %}
<div class="container">
	<div class="cube-z">
		<div class="cube-y">
			<div class="cube-x">
				<div class="face-one">1</div>
				<div class="face-two">2</div>
				<div class="face-three">3</div>
				<div class="face-four">4</div>
				<div class="face-five">5</div>
				<div class="face-six">6</div>
			</div>
		</div>
	</div>
</div>
{% endhighlight %}
{% highlight css %}
.container {
  width: 400px;
  margin: 100px auto;
}
[class^="cube"] {
  position: relative;
  width: 200px;
  height: 200px;
  transform-style: preserve-3d;
}
[class^="face-"] {
  position: absolute;
  width: 200px;
  height: 200px;
  padding: 20px;
  color: rgba(0,0,0,0.75);
  border: 1px solid;

  font-size: 160px;
  font-family:Avenir;
  line-height: 1;
  text-align: center;
}

.face-one {
  transform: translateZ(100px);
  background-color: hsla(329, 58%, 52%, 0.8);  
}
.face-two {
  transform: rotateX(90deg) translateZ(100px);
  background-color: hsla(0, 0%, 13%, 0.8);
}
.face-three {
  transform: rotateY(90deg) translateZ(100px);
  background-color: hsla(54, 70%, 68%, 0.8);
}
.face-four {
  transform: rotateY(-90deg) translateZ(100px);
  background-color: hsla(190, 81%, 67%, 0.8);
}
.face-five {
  transform: rotateX(-90deg) translateZ(100px) rotate(180deg);
  background-color: hsla(261, 100%, 75%, 1.0);
}
.face-six {
  transform: rotateY(180deg) translateZ(100px);
  background-color: hsla(84, 76%, 53%, 0.8);
}
.cube-z { transform: rotateZ(0deg); }
.cube-y { transform: rotateY(0deg); }
.cube-x { transform: rotateX(0deg); }
{% endhighlight %}

At the moment the first face of the cube is visible in a 2D plane and
none of the other sides are visible.

If I rotate the "container" around the y-axis, we'll be able to see each
side in turn.

{% highlight css %}
.cube-z { animation: spin 4s infinite linear; }

@keyframes spin {
  from { transform:rotateY(0deg) }
  to { transform:rotateY(360deg) }
}
{% endhighlihgt %}

This gives us a sense of three dimensions but if we add a bit of
perspective, the effect becomes much clearer and a real sense of 3D is
achieved.

{% highlight css %}
.container {
  perspective: 500px;
  perspective-origin: 25% 50%;
}
{% endhighlight %}

I'll stop the animation and let's have a look at what's going on here.

The perspective property controls the distance between the viewer and
the the zero point of the z-axis. A higher value moves the viewer
further away, a lower value, moves the viewer closer which drastically
increases the impact of the 3D positioning.

We can control the placement of the vanishing point by changing the
`perspective-origin` property.

This property takes two length values, the first for the horizontal
position and the second for the vertical. Manipulating these values
changes the angle of view of the element and when the animation is
turned back on, the effect can be quite striking.

I hope you enjoyed this episode as much as I enjoyed putting it
together, join me next time for the final episode of AtoZ CSS season
1 when we'll be talking all about `z-index`.

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/y](http://www.atozcss.com/y). 

If you have any questions, comments or things you'd like to see and hear
about in Season 2, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or drop me an
email.

Cheers!


