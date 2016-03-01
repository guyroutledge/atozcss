---
layout: blog_page
title: "AtoZ Sass Intro: What is Sass?"
category: blog
excerpt: >
  The next season of AtoZ CSS is all about Sass and I'm very exciting to
  share it with you! Sass is a very popular tool but you may be new to web design or
  development and first want to find out what it is and how to start using
  it. To make sure you get the most out of the video series, I'll be
  publishing a 4-part written introduction to get you up and running.
---

The next season of AtoZ CSS is all about Sass and I'm very excited to
share it with you!

As with the [first series of AtoZ CSS
videos](http://www.atozcss.com/videos) each episode will be compact, to
the point, highly produced and will teach a single Sass topic - one for
each letter of the alphabet.

To ensure you don't miss out on the launch, head to
[www.atozsass.com](http://www.atozsass.com) and sign up for the mailing
list (or sign up below). In the meantime, you'll receive weekly CSS and
Sass news, resources and links straight to your inbox every Wednesday.

Sass is a very popular tool but you may be new to web design or
development and first want to find out what it is and how to start using
it. To make sure you get the most out of the video series, I'll be
publishing a 4-part written introduction to get you up and running.

Here we go...


## Introducing Sass

CSS is great, but sometimes it can get a bit repetetive and a bit of
a nightmare to maintain.

Fortunately, [Sass](http://www.sass-lang.com) is here to save the day.
Sass is "CSS with superpowers" and makes the process of front-end design
& development much faster and much more enjoyable.

But before we unpack all the Sass-awesome, there's a bit of theory to
cover first. In this post we'll cover:

* What Sass is and where it started?
* The two different syntaxes of Sass
* The different compiler versions of Sass


## What is Sass?

Sass is a preprocessor for CSS. It stands for Syntactically Awesome
StyleSheets and is written "Sass", not "SASS". In case there's any
confusion, [@sturobson](http://www.twitter.com/sturobson) [has you
covered](http://sassnotsass.com/).

Preprocessors come in many different forms including ones for HTML
(Haml, Slim, Jade) and Javascript such as CoffeeScript. 

Sass is not the only CSS preprocessor but it's certainly very popular.
It's my favourite and the one I have used the most by far. 

But what is a preprocessor? Well, in the case of Sass, instead of
writing CSS, we're able to write a slightly different syntax which is
then *compiled* into normal CSS.

As a result of going through this compile process, Sass gives us the
ability to add some pretty sweet features to extend the language of CSS.
Features such as:

* Variables
* Nested style blocks
* Multiple files that are automatically concatenated
* Conditional statements
* Functions
* Color manipulation
* Math
* Custom functions
* Mixins
* Selector inheritance
* and a lot more!

We'll cover each of these features in some way shape or form throughout
this introductory series or the up coming videos.

## Sass Syntax

Sass comes in two different flavours. The original syntax was whitespace
dependent and used no curly braces or semi-colons. It has a `.sass` file
extension and looks a bit like this:

{% highlight sass %}
.box
  width: 100px
  height: 200px
  border: 1px solid #cc3f85
{% endhighlight %}

While it takes a bit of getting used to, I actually quite like this
syntax. However, it's by far the least popular of the two and
I don't use it very often.

The second, much more popular syntax looks identical to CSS - can you guess
why it's more popular? This syntax has a `.scss` file extension.

{% highlight css %}
.box {
	width: 100px;
	height: 100px;
	border: 1px solid #cc3f85;
}
{% endhighlight %}

Not only is this syntax much more CSS-like, any valid CSS file is also
a valid `.scss` file. This makes the process of converting a legacy
project from CSS to Sass relatively painless.

Throughout AtoZ Sass, all the code snippets will be written in `.scss`
syntax.

Despite the two very different syntaxes and file extensions, when I talk
about "Sass" I'm referring to the language itself, not any particular
syntax.


## Ruby Sass or something else...?

The original version of Sass was designed by Hampton Catlin and
developed by Natalie Weizenbaum back in 2007. Since the inital version,
Natalie Weizenbaum and Chris Eppstein have continued to extend Sass into
the powerful meta-language it is today.

The original version of the language was written in Ruby but there are
now a number of different compilers available in other languages.

* [scssphp](http://leafo.net/scssphp/) is a Sass compiler written in PHP that supports Sass 3.2.12
* There's a [pure Java implementation](https://github.com/vaadin/sass-compiler) too 
* [Libsass](https://github.com/sass/libsass) is probably the best known port of the Sass compiler. It's written in C/C++ and has gained popularity for being blazing fast.
* [Node-sass](https://github.com/sass/node-sass) is a library that provides bindings for Node.js to Libsass.

With the exception of the PHP version (which is old and looks like its
no longer in active development) most of the different versions of Sass
are fairly similar. There are some feature differences between the
different versions but the major difference is the speed at which they
compile.

Libsass (whether used with the SassC wrapper or the node-sass wrapper)
is incredibly fast and is becoming a popular choice. We'll discuss
Libsass in more detail in a future video.

But for the majority of this series, we'll be using Ruby Sass; it's the
easiest to install and is still very popular and because its the
original version, it's the most feature rich.

So, if we want to install Ruby Sass, how do we do that then? Well, part
2 of this mini-series will help with exactly that.

If you're new round here, why not check out the first 26 episodes in
AtoZ CSS season 1 and if you can't get enough CSS goodness, I have an
ebook to help you master CSS layout at 
[atozcss.com/books](http://www.atozcss.com/books).

As always, if you have any questions or comments, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or drop me an email.

## Other Posts in this Series

* Part 1: [What is Sass](/blog/what-is-sass)
* Part 2: [Installing Sass](/blog/installing-sass)
* Part 3: [Organising Sass with Partials](/blog/organising-sass-with-partials)
* Part 4: [Variables, Mixins and Nested Selectors](/blog/sass-variables-nesting-and-mixins)
