#!/bin/ksh

# Usage: create.ksh <letter> 
#
#  <letter>:  the letter of the alphabet this week's tip is for (lowercase)
#
# For example:
#	create.ksh a


if [[ $# -ne 1 ]]; then
  print "\nERROR: Incorrect number of parameters supplied\n"
  print "Usage: $0 <letter> "
  print "  <letter>: the tip letter"
fi

. $HOME/Sites/atozcss/.env

tip="$1"
date=`date +%d%m%y`
json_file="json/atoz-$tip.json"
html_file="newsletters/$date.html"

php newsletter.php $json_file > $html_file
php campaign.php $json_file $mailchimp_api $html_file
