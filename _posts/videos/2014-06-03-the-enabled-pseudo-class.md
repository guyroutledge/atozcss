---
series: atoz-css
layout: post_page
title: ":enabled"
alias: /e
date: 2014-06-03
wistiaId: k62bvbu9bi
wistiaPoster: fd75b1a28932db7eabe3cc1aab42608f0821f976
videoLength: 4 minutes 02 seconds
comments: true
categories: intermediate video
excerpt: >
  There’s a number of pseudo classes in CSS. These pseudo classes help us style different states and target specific
  elements based on their relationship or position to other elements. The :enabled and :disabled pseudo classes style form
  elements that can or cannot be filled in or selected.
summary: |
  `:enabled` and `:disabled` are pseudo classes that allow the styling of 
  different states of form inputs, ones that are clickable or can have text
  entered into them (enabled) or those that can’t (disabled).
  
  All form controls are enabled by default but can be disabled by adding the
  `disabled` attribute in HTML. This can also be manipulated by JavaScript
  based on conditions on the page.
  
  ## Browser Support
  `:enabled` and `:disabled` are supported in IE9+
---

There’s a number of pseudo classes in CSS.

These pseudo classes help us style different states and target specific
elements based on their relationship or position to other elements.

The `:enabled` and `:disabled` pseudo classes style form
elements that can or cannot be filled in or selected.

An enabled element is one that can be clicked, selected, receive focus
or accept text input - a disabled element is one that cannot.

Elements are enabled by default but can be disabled using the `disabled`
attribute in HTML.

## Enabled / Disabled form fields

The user agent provides some default styling for disabled elements.
Let’s take a look...

I’ve got two sets of inputs and buttons here.

They are both in their default state of enabled which we can demonstrate
by styling them with the `:enabled` pseudo class, giving them a dark
grey background and a blue text color.

If I now add the `disabled` attribute to the HTML of the first set of
inputs, the user agent styles for disabled fields takes over and our
`:enabled` styles do not as the inputs are no longer enabled.  We can
control the styling of disabled inputs in CSS with the `:disabled`
pseudo class.

## Use case

Let’s take a look at a real-world use case.

Here we have the payment step for ordering some food online. In this
stage of the form, the payment method is requested and the choice is
either cash or card.

If we want to pay by card, the fields for the card holder, card number,
start date, expiry date and security code are enabled. If we want to pay
with cash, these details aren’t needed and we can disable them. This
can’t be done with CSS alone, but we can use a bit of Javascript or
jQuery to handle the interaction.

When we change the payment method the script checks whether the radio
button with the ID of cash is `:checked`. This is another pseudo class
that determines state - in this case, the checked or unchecked state of
a checkbox or radio button. If cash is checked, we add the disabled
attribute to all the inputs and select menus in the card fields
container. We also add an `is-disabled` class to the labels which will
allow these to be given different styles too.

We can then style these in CSS, making the color of the text and the
background of the inputs a light grey to show that they’re no longer
enabled.

## Outro

A transcript and code snippets for this video can be found in the
shownotes at [atozcss.com/e](http://www.atozcss.com/e).

AtoZ CSS is now available as an iTunes video podcast. To have videos
delivered to your podcasting app of choice head to 
[atozcss.com/subscribe](http://www.atozcss.com/subscribe) for more info.
If you find these videos at all useful, please leave me a rating and
review on iTunes.

If you have any questions or comments, you can tweet me
[@atozcss](http://www.twitter.com/atozcss) or
drop me an email.

Cheers.


