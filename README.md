# fairbanks-wordpress-theme
Custom WordPress theme for Dawn Fairbanks Insurance -


## backstory
Started sometime in 2017 with Kyle. Buggeted at ~120 hours.

Back and fourth for various reasons until September 2019 - at which time / @sheriffderek hopped in to finish the site. After 17 hours of work (totalling *well below* budget) (and probably about 4 hours to finish the thing) - Dawn got antsy and decided to have Kevin at C3i3 take over. *the site would have been done on Sep 20th* `¯\_(ツ)_/¯`

So - as of Thursday, September 19th - it's up to Kevin @ http://www.c3i3.com



## educational video for dawn and friends

This is a walkthrough of the admin

https://vimeo.com/359481820/446595e651


## staging server

https://fairbanks.reputable.agency/wp-admin

- user: generic-admin
- pass: opensesame
- 
- ask Dawn for her login - (to see the reduced admin)

- [ ] this repo isn't in-house - so, plan where you'll want the code to live going forward
- [ ] this stage wont be used going forward
- [ ] dawns dns isn't connected
- [ ] so - basically - you'll need to build out whatever system you intend to use


## branches

Up to you. Master is the latest.


## local MAMP setup
is what we used

(this repo is only the theme and a few nessesary files / see the gitignore) 


## build
there's a gulp task - check the theme README SCSS - see theme README


## initial database migration

wp-migrate-pro key: `14335cac-ef27-4ee2-8604-f01eb8ea6d2e` (this license will stay active until the site is migrated)

You can ask Dawn for her staging login - There's no saying who's adding what content when - so, we're not going to provide a static file.

*note the wp_ prefix is obb_*


## deployment

We setup SpinupWP and when pushing code to master will trigger githook to send it to the stage - (but you'll have to set things up however you want them to be.)


## staying in sync

make admin changes on the stage and pull them down to local - (but you'll have to set things up however you want them to be.)

* data down

* code up

This way - the client can use the stage to fill out the data while you work. (but you'll have to set things up however you want them to be.)


## Other notes

for the slider - we used flickity. Those other slider plugins can be removed
