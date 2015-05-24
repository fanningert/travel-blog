#!/bin/bash 

export PATH=$PATH:/root/.gem/ruby/2.2.0/bin

rm css/*.css
rm css/*.map

sass scss/font-awesome/font-awesome.scss css/font-awesome.css --style expanded --force
sass scss/font-awesome/font-awesome.scss css/font-awesome.min.css --style compressed --force

#sass scss/print.scss css/print.css --style expanded --force
#sass scss/print.scss css/print.min.css --style compressed --force

sass scss/style.scss css/style.css --style expanded --force
sass scss/style.scss css/style.min.css --style compressed --force