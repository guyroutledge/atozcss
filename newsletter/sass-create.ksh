#!/bin/ksh

# Usage: sass-create.ksh <letter> 
#
#  <letter>:  the letter of the alphabet this week's video is for (lowercase)
#
# For example:
# sass-create.ksh a


if [[ $# -ne 1 ]]; then
  print "\nERROR: Incorrect number of parameters supplied\n"
  print "Usage: $0 <letter> "
  print "  <letter>: the video letter"
fi

. $HOME/Sites/atozcss/.env

video="$1"
date=`date +%d%m%y`
json_file="json/sass-$video.json"
html_file="newsletters/$date.html"

php sass-video.php $json_file > $html_file
php campaign.php $json_file $mailchimp_api $html_file
