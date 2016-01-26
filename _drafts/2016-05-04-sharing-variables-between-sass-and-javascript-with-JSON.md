---
layout: post_page
title: "Sharing variables between Sass and Javascript with JSON"
date: 2016-05-04
wistiaId: sassj
wistiaPoster: 
videoLength: x minutes x seconds
comments: false
categories: video
excerpt: >

summary: |

---

Having embraced the power of Sass and started to use variables to
configure various settings in your project - such as colours, font sizes
and media query breakpoint - you might start to wonder how you can share
these values between other front-end languages such as JavaScript.

In programming we want to avoid duplication and declaring variables in
both your Sass files and your JavaScript files is a bit of a maintenance
nightmare.

There are a couple of ways to share data between Sass and JS using JSON.
In this episode we'll cover the theory rather than the practice to keep
things brief and to not end up going too deep down a JS rabit hole. In
this video you'll learn:

* About the similarities of Sass Maps and JSON
* How to convert Sass into JSON and read it in JavaScript
* How to convert JSON into Sass
* A number of resources and extra reading material on the subject



## Sass Maps and JSON

In this series so far, we've not spent too much time looking at Sass
maps as we'll have a whole video coming up very soon.

However, Sass maps and JSON serve a very similar purpose and have a very
similar syntax.

They are a store of key and value pairs that can hold all sorts of
different types of values, each with a unique key or label.

Here is a comparrison of the two, with Sass on the left and JSON on the
right:

{% highlight scss %}
$colors: (
	pink: '#cc3f85',
	blue: '#94d6ed',
	purple: '#a485fb',
	yellow: '#e3db6f'
);
{% endhighlight %}

{% highlight JSON %}
{
	"colors": {
		"pink": "#cc3f85",
		"blue": "#94d6ed",
		"purple": "#a485fb",
		"yellow": "#e3db6f"
	}
}
{% endhighlight %}

As the syntax of both these data types is quite similar, it's possible
to convert a Sass map into JSON or JSON into a Sass map. The approach is
slightly different in each case but let's take it step by step.

Before looking into how this can be done, let's first think about *why*
we might want to do it. Every project is different but there are some
common use cases for sharing data:

* Sharing colours for switching themes
* Sharing breakpoint values for detecting screensizes in JS with `window.matchMedia`
* Sharing breakpoint values for working with responsive images
* Sharing version information or other meta data across languages

Let's start by looking at how Sass can be converted to JSON and made
availabe to our JS files.



## Sass -> JSON

Styling information should be kept in Sass/CSS as much as possible so
starting with a Sass variable and converting it into JSON seems like
a logical first approach.

The idea is to convert the Sass map into a JSON string and then apply it
to the `content` property of a [psuedo
element](http://www.atozcss.com/p). A good choice is the `body:before`
element as this is rarely used but any element that's likely to exist on
every page would work.

{% highlight css %}
body:before {
	display:none!important;
	content: '{ "colors": { "pink": "#cc3f85", "blue": "#94d6ed", "purple": "#a485fb", "yellow": "#e3db6f" } }';
}
{% endhighlight %}

This value can then be read by JavaScript using the `getComputedStyle`
method, santized and parsed into JSON.

{% highlight javascript %}
var santizeContent = function( string ) {
	return string.replace(/^['"]+|\s+|\\|(;\s?})+|['"]$/g, '');
}
var getSassVars = function() {
	var style = null;

	if ( window.getComputedStyle && window.getComputedStyle(document.body, '::before') ) {
		style = window.getComputedStyle(document.body, '::before');
		style = style.content;
	}
	return JSON.parse( santizeContent( style ) );
}
var sassVars = getSassVars();
{% endhighlight %}

Having gone through this somewhat long-winded process, your Sass
variables are now available in JavaScript and can be accessed through
the `sassVars` JS variable: 

{% highlight javascript %}
var blue = sassVars.colours.blue;
console.log( blue ); // #94d6ed;
{% endhighlight %}



## JSON -> Sass

An alternative and slightly simpler approach is to start with a JSON
file that contains all the variable information that needs to be shared
between Sass and Javascript. 

Using a tool (we'll list some in just a minute) the JSON can be
converted into a Sass map and imported into your Sass files as needed.

{% highlight scss %}
@import 'shared-variables';
{% endhighlight %}

This technique leverages the computing power of a more powerful language
rather than leaning on Sass to parse its native map variables into
a JSON string.

The JSON can easily be required for use in JS and by using a tool, the
conversion of JSON to a Sass map is also very straightforward. If I ever
need to share data between the two languages, this is the approach I'd
use for sure.

So, let's take a look at the tool that can help make this happen.



## Tools

When researching this topic, I came across a number of blog posts and
tools to help convert Sass to JSON. This is a relatively advanced topic
but it seems the desire to share data is strong. 

To aid in converting Sass maps to JSON, check out

[SassyJSON](http://hugogiraudel.com/2014/01/20/json-in-sass/) is
a pure Sass solution that converts Sass maps to JSON by Hugo Giraudel.

[Sass to JS](https://blog.gospodarets.com/passing_data_from_sass_to_js/) is
another Sass tool that converts Sass to JSON but also bundles JS helpers
to aid in reading them from CSS into JS

To go the other way round and start with JSON and convert it to Sass
there's [Sass JSON vars](https://viget.com/extend/sharing-data-between-sass-and-javascript-with-json)
which is a ruby gem that allows you to directly import a JSON file with
the Sass `@import` command.

I also found a Gulp plugin called
[gulp-json-sass](https://www.npmjs.com/package/gulp-json-sass) which
converts a JSON file into a Sass file with a series of global variables.

So whether or not you have the need to share variables between your Sass
and your JavaScript, I hope this dive down the Sass rabit hole has
demonstrated just how much power we have at our fingertips when using
Sass.



## Outro

In the next episode we'll be discussing K for "Keyframes" we'll be looking at
a handful of ways to optimise the way you code up your animations.

Make sure you sign up for the mailing list to be the first to hear about
the next release and get weekly CSS news and links delivered straight to
your inbox.

For this episode, a transcript and code snippets can be found at
[atozsass.com/i](http://www.atozsass.com/i).

To keep in touch or let me know of any questions or comments you might
have, you can tweet me [@guyroutledge](http://www.twitter.com/guyroutledge)
and follow [@atozcss](http://www.twitter.com/atozcss).

Thanks so much for watching, I'll see you next time.

Cheers.

