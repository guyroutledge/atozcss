---
layout: post_page
title: "What is Sass?"
alias: /sass-intro
date: 2015-03-04
wistiaId: abc
comments: true
videoLength: x minutes u seconds
comments: true
excerpt: >
  
summary: |
  
---

CSS is great, but sometimes it can get a bit repetetive and a bit of
a nightmare to maintain.

Fortunately, [Sass](http://www.sass-lang.com) is here to save the day. Sass is CSS with superpowers
and makes the process of front-end design & development much more enjoyable.

In this second series of AtoZ CSS, we'll be focuings exclusively on
Sass; what it can do, how it does it and some useful helper libraries
and plugins that make heavy use of it along the way.

After covering this theory, I'm planning a handful of practical "how to
do x with Sass" videos to really get down and dirty with this awesome
language.

But before getting to that, in this video we'll cover

* What is Sass and where did it come from?
* The two different syntaxes of Sass
* The different compiler versions of Sass
* How to get up and running in minutes


## What is Sass?

Sass is a pre-processor for CSS. It stands for Syntactically Awesome
StyleSheets and is written "Sass", not "SASS". In case there's any
confusion, [@sturobson](http://www.twitter.com/sturobson) [has you
covered](http://sassnotsass.com/).

Pre-processors come in many different styles including ones for HTML
(Haml, Slim, Jade) and Javascript such as coffeescript. Sass is not the
only CSS pre-processor but it's certainly my favourite and the one
I have used the most - if given the choice, I set it up with *every* new
project I take on.

But what is a pre-processor? Well, in the case of Sass, instead of
writing CSS, we're able to write a slightly different syntax which is
then *compiled* into plain old normal CSS.

As a result of going through this compile process, Sass gives us the
ability to do some pretty sweet things such as:

* variables
* nested style blocks
* multiple files that are then automatically concattenate
* conditional statements
* functions
* color manipulation
* math
* custom functions
* mixins
* selector inheritance
* and much, much more!

We'll cover all of these in some way, shape or form throughout this
series.

## Sass Syntax

Sass comes in two flavours. The original syntax was whitespace dependent
and used no curly braces or semi-colons. It has a `.sass` file extension
and looks a bit like this:

{% highlight sass %}
	#box
	  width: 100px
	  height: 200px
	  border: 1px solid #cc3f85
{% endhighlight %}

While it takes a bit of getting used to, I acutally quite like this
syntax. However, it's by far the least popular of the two and
I don't use it very often.

The second, more popular syntax looks identical to CSS - can you guess
why it's more popular? This syntax has a `.scss` file extension.

{% highlight css %}
	#box {
		width: 100px;
		height: 100px;
		border: 1px solid #cc3f85;
	}
{% endhighlight %}

Throughout this video series, I'll be writing the `.scss` syntax.
Despite the two very different syntaxes and file extensions, when I talk
about "Sass" I'm referring to the language itself, not any particular
syntax.

I've heard the `.scss` syntax also referred to as "Sassy CSS" as opposed
in addition to the acronym "Syntactically Awesome StyleSheets".


## One syntax, many compilers

The original version of Sass was designed by Hampton Catlin and
developed by Natalie Weizenbaum back in 2007. Since the inital version,
Natalie Weizenbaum and Chris Eppstein have continued to extend Sass into
the powerful meta-language it is today.

The original version of the language was written in Ruby but there are
now a number of different compilers available written in different
languages.

* [scssphp](http://leafo.net/scssphp/) is a Sass compiler written in PHP that supports Sass 3.2.12
* There's a [pure Java implementation](https://github.com/vaadin/sass-compiler) too 
* [Libsass](https://github.com/sass/libsass) is probably the best known port of the Sass compiler. It's written in C/C++ and has gained popularity for being blazing fast.
* [Node-sass](https://github.com/sass/node-sass) is a library that provides bindings for Node.js to libsass.

For the majority of this series, we'll be using Ruby Sass. So, how do we
do that then? Well, check out the next video where we'll go through that
process in detail.

## Outro

A transcript with links and code snippets for this episode can be found
at the shownotes,
[http://www.atozcss.com/sass-intro](http://www.atozcss.com/sass-intro).

If you're new round here, why not check out the first 26 episodes in
AtoZ CSS season 1 and if you can't get enough CSS goodness, I have an
ebook all about CSS layout for you at
[atozcss.com/books](http://www.atozcss.com/books).

As always, if you have any questions or comments, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or drop me an email 
to [mail@guyroutledge.co.uk](mailto:mail@guyroutledge.co.uk).

