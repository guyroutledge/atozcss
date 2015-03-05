---
layout: post_page
title: "Installing Sass"
alias: /sass-install
date: 2015-03-04
wistiaId: def
comments: true
videoLength: x minutes u seconds
comments: true
excerpt: >
  
summary: |
  
---

In the previous video we learned all about what Sass is and little bit
of the background on where it came from and the different versions and
syntaxes. 

In this video, we'll install Sass and set up our development environment.

I'll show you how few steps there are in getting up and running from the
command line on Mac OSX and then go through a load of resources for
using Sass with a more graphical user interface.

* installing Sass on the command line
* tools and GUI apps

Let's get to it.

## Installing Sass

We'll start by installing Sass from the command line and then take
a look at some apps that can help you get up and running with
a graphical interface.

I'll be using iTerm2 on a Mac here, but you can use the default
terminal app if you prefer.

If you're on a Mac, ruby will be installed by default but you may need
to install RubyGems. Details of installation can be found on the
[RubyGems website](https://rubygems.org/pages/download). If you're on
Windows, there are instructions to help you get Sass installed on the
[sass-lang.com](http://sass-lang.com/install) website.

With those requirements taken care of, we can now install Sass. In the
terminal, type `gem install sass`. All being well, you should see the
message "1 gem installed".

Congratulations, you're done.

Ok, but how can we use Sass now? I'll create a folder for a demo project
and inside create a folder called `scss`. Into that folder, I'll touch
a file called `style.scss`. I'll split the window and open that file in
a text editor and write some CSS.

In the other window, I can now run the Sass compiler to build my scss
into CSS. We do this with the `sass` command and pass in the path to the raw
scss followed by a colon and then the path of where we want the compiled
CSS to be.

{% highlight bash %}
	sass scss/style.scss:css/style.css
{% endhighlight %}

It would be a bit tedious to have to do this every time we made a change
to our Sass but the compiler has a `--watch` option which will
constantly watch our files for changes and recompile whenever we save.

{% highlight bash %}
	sass scss/style.scss:css/style.css --watch
{% endhighlight %}

Now if I make some changes, the styles are compiled automatically.

Of course at the moment we're just writing normal CSS but in the next
video, we'll start diving into some of the fancy features and write some
Sassy CSS.

But before we wrap this up, let me share some resources for those that
prefer a more visual interface to their tools.

## Tools

For me, the command line is the quickest way to get up and running and
work with Sass. But I know it's not everyone's cup of tea. Here's
a selection of apps for compiling Sass (and other pre-processors).

There’s [CodeKit](http://incident57.com/codekit/) which is
a full-featured paid product that does a lot more than just compile Sass
files.

Other paid apps include [Compass App](http://compass.handlino.com/),
[Hammer for Mac](http://hammerformac.com/),
[LiveReload](http://livereload.com/) and [Preproc](https://prepros.io/).
Hammer and Codekit are Mac only but the others are all cross-platform.

There's also a selection of free or open source solutions such as
[Compass App](http://compass.handlino.com/),
[Koala](http://koala-app.com/) and
[Scout](http://mhs.github.io/scout-app/)


## Outro

A transcript with links and code snippets for this episode can be found
at the shownotes,
[http://www.atozcss.com/sass-intro](http://www.atozcss.com/sass-install).

If you're new round here, why not check out the first 26 episodes in
AtoZ CSS season 1 and if you can't get enough CSS goodness, I have an
ebook all about CSS layout for you at
[atozcss.com/books](http://www.atozcss.com/books).

As always, if you have any questions or comments, you can tweet me
[@guyroutledge](http://www.twitter.com/guyroutledge) or drop me an email 
to [mail@guyroutledge.co.uk](mailto:mail@guyroutledge.co.uk).

