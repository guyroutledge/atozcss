---
layout: post_page
title: "Different Data Types in Sass"
date: 2016-03-08
wistiaId: sassd
wistiaPoster: 
videoLength: x minutes x seconds
comments: false
categories: video
excerpt: >

summary: |

---

Sass brings a lot more power to CSS and starts to make it feel like
a programming language rather than just a series of property and value
declarations.

One key feature that enables this programatic feel is Sass variables,
which can hold a number of different types of data. In this episode
we'll cover: 

* the seven core data types in Sass
* a handy function for checking what type of data a variable holds 
* and how we can use maths to manipulate these various values

## Data Types

Sass has a number of different data types including:

* numbers
* strings
* colors
* booleans
* nulls
* lists
* and maps

Numbers include integers, floating points (decimals) and length values.

{% highlight scss %}
1, 2, 3, 0.1, 5.3, 10px, 20em, 50%
{% endhighlight %}

Strings include those with and without quotes. 

{% highlight scss %}
"Times New Roman", '../images/logo.png', red, sans-serif
{% endhighlight %}

Sass (just like CSS) doesn't differentiate between strings with quotes
and strings without quotes. The only exception is when dealing with some
specific CSS values like `sans-serif` or `inherit` which should not be
quoted.

As a general rule, string should be quoted and I favour single quotes
because they're easier to type and look neater to me.

Colors come in many forms such as keywords, hex, `rgb` and `hsl`.
Colours have their own data type because they can be manipulated by
[color functions](http://www.atozsass.com/c) and be added and subtracted
from each other.

Booleans are `true` or `false` and aren't particularly useful for
setting values for CSS properties but they are very useful when combined
with logical flow control whilst building complex components, frameworks
or library code.

`null` is a special value which is stripped out by the compiler. If
a variable contains a null value, applying this to a property will cause
that to be removed at compile time:

{% highlight scss %}
$font-size: null;
$line-height: 1.2;

.title {
	font-size: $font-size;
	line-height: $line-height;
}

/* compiles to
.title {
	line-height: 1.2;
}
*/
{% endhighlight %}

Lists contain multiple values separated by spaces or commas. They are
used to represent shorthand declarations like margin or for font-stacks.
You can even have a list that contains other variables.

{% highlight scss %}
$space-separated-list: 0 0 20px 0;
$comma-separated-list: Helvetica, Arial, sans-serif;
$variable-list: $space-separated-list, $comma-separated-list;
{% endhighlight %}

For more complex lists of variables, one final data type is map
variables. These contain a store of key and value pairs like
a JavaScript object or Ruby hash and are a very powerful new feature of
Sass 3.3.

Because there's a lot to maps, we'll cover them in detail in their own
video in Sass episode 13.



## Checking Data Types

Like many programming languages, Sass has the ability to check what the
type of value any variable contains. 

We can do that with the Sass `type-of()` function which returns the type
of a value.

{% highlight scss %}
$value: 'atoz css';
type-of( $value ) => string

$value: 12345;
type-of( $value ) => number

$value: 100px;
type-of( $value ) => number

$value: #fff;
type-of( $value ) => color

$value: white;
type-of( $value ) => color

$value: true;
type-of( $value ) => bool
{% endhighlight %}

This isn't particularly useful in day to day styling but can be
useful when combined with mixins, functions and logical flow. We'll be
covering all of these in more detail in future videos.



## Sass Maths

So what can we do with all these different types of values? Well, there
are lots of different operations that can be applied to the different
types of values.

With numbers, we can add, subtract, multiply, divide and modulo (which
returns the remainder after a division). When using mathematical
operations with length values in Sass (things like 10px or 2em), we do
need to be careful of units.

I'm using [Sassmeister](http://www.sassmeister.com) here to demonstrate
some Sass maths. I've got two variables `$a` and `$b` in the Sass on the
left hand side and the compiled CSS shows up on the right hand side.

{% highlight scss %}
$a: 20em;
$b: 10px;

div {
	padding: $a + $b; // error
}
{% endhighlight %}

When dealing with mixed units such as `px` and `em`, Sass will throw an
error when trying to perform operations on them.

If you do need to perform calculations with mixed units, this can
actually be done in normal CSS with the `calc()` function.

If you need some Sass power to operate on length values with matching
units, first you'll need to remove the units. This can be done by
dividing one length by the other and will return a number with no units.

{% highlight scss %}
$a: 100px;
$b: 20px;

$number: $a / $b; // 5
{% endhighlight %}


## Outro

In the next episode we'll be discussing E for "extend" and looking
into the concept of selector inheritance, placeholders and some of the 
pros and cons of using this Sass feature.

Make sure you sign up for the mailing list to be the first to hear about
the next release and get weekly CSS news and links delivered straight to
your inbox.

For this episode, a transcript and code snippets can be found at
[atozsass.com/d](http://www.atozsass.com/d). 

To keep in touch or let me know of any questions or comments you might
have, you can tweet me [@guyroutledge](http://www.twitter.com/guyroutledge)
and follow [@atozcss](http://www.twitter.com/atozcss).

Thanks so much for watching, I'll see you next time.

Cheers.
