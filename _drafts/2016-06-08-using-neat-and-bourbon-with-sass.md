---
series: atoz-sass
sidebar_ad: ad-book-sass.html
layout: post_page
title: "Using Neat & Bourbon with Sass"
date: 2016-06-08
wistiaId: sassn
wistiaPoster: 
videoLength: 6 minutes 30 seconds
comments: false
categories: video beginner
excerpt: >
summary: |

---

Sass is an extension language for CSS but it's popularity has seen the
birth of a number of extensions to Sass itself in the form of mixin
libraries and plugins.

Neat is a grid system that uses the Sass extension Bourbon and we'll
be diving into both of these tools in this video.

Both Bourbon and Neat are libraries created by the team at Thoughtbot
a global design and development consultancy. They can both be installed
as Ruby gems or via npm if you're using a Node-based workflow. To make
sure this video doesn't run too long, I'll leave following the
installation instructions as an exercise for you. 

Head to [bourbon.io](http://www.bourbon.io) or
[neat.bourbon.io](http://neat.bourbon.io) for directions on how to get
up and running.


## Bourbon

Bourbon is predominantly a mixin library which helps deal with vendor
prefixes for cross-browser compatibility.

If you'd rather forget about vendor prefixes entirely, sign up for the
AtoZ CSS mailing list and I'll send you an exclusive video about how to
add autoprefixer to your workflow so you'll never have to write a prefix
ever again!

Bourbon also features a number of useful helper functions and add-ons
for performing common tasks like converting pixels to ems, pixels to
rems, clearfix and using popular easing functions and much much more.

Let's take a look at a couple of these in action.

// examples of creating a two column form with a positioned banner

While I wouldn't find the CSS3 mixins useful (as I'm an autoprefixer
fan) I can see the benefit for a library like Bourbon for anyone who
wants to use a consistent set of functions and features without having
to rely on using a whole front-end framework like Bootstrap or
Foundation.

For a full list of what Bourbon can do for you, head to
[bourbon.io/docs](http://www.bourbon.io/docs).


## Neat

Neat is another part of the Bourbon family offering a lightweight,
semantic grid system that's built on top of Bourbon.

The library bundles another handful of mixins for building flexible and
responsive grid systems whilst using some of the Bourbon functions and
mixins behind the scenes.

Let's take a look at an example of building a simple page layout with
a Neat grid.

// example basic
// multi row
// nested grid
// mobile grid

There are a handful of other examples on the Neat website at
[neat.bourbon.io/examples](http://neat.bourbon.io/examples).

Personally, I like this method of creating grids. It's a bit more work
to have to constantly `@include` the grid container and column spans
into other selectors but it does help to keep the HTML lean and keeps
all the presentation together in the CSS.

For prototyping, I'd probably still add grid class names to HTML
elements (to help work quickly) but for refining a site ready for final
delivery, I can see this approach being solid.


## Outro

In the next episode we'll be discussing O for "Optional" and taking
a look at ways to make your variable declarations more flexible.

Make sure you sign up for the mailing list to be the first to hear about
the next release and get weekly CSS news and links delivered straight to
your inbox.

For this episode, a transcript and code snippets can be found at
[atozsass.com/n](http://www.atozsass.com/n).

To keep in touch or let me know of any questions or comments you might
have, you can tweet me [@guyroutledge](http://www.twitter.com/guyroutledge)
and follow [@atozcss](http://www.twitter.com/atozcss).

Thanks so much for watching, I'll see you next time.

Cheers.
