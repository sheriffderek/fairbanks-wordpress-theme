# fairbanks-wordpress-theme
Custom WordPress theme for Dawn Fairbanks Insurance -


## staging server

https://fairbanks.reputable.agency/wp-admin

- user: generic-admin
- pass: opensesame
- 
- ask Dawn for her login - (to see the simplified admin UI)

- [ ] this repo isn't in-house - so, plan where you'll want the code to live going forward
- [ ] this stage wont be used going forward
- [ ] dawns dns isn't connected
- [ ] so - basically - you'll need to build out whatever system you intend to use - and setup WordPress - and then add this theme - and migrate the database
- [ ] please email derek@sheriffderek.consulting - *when* the site is migrated - so that we can take down our staging server. Thanks!


## local MAMP setup
is what we used

(this repo is only the theme and a few nessesary files/plugins / see the gitignore) 


## build
there's a gulp task - check the theme's README


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


## educational video for dawn and friends

This is a walkthrough of the admin

https://vimeo.com/359481820/446595e651


## Other notes

for the slider - we used flickity. Those other slider plugins can be removed
