# fairbanks-wordpress-theme

## MAMP setup
... 

## initial database migration

wp-migrate-pro key: `14335cac-ef27-4ee2-8604-f01eb8ea6d2e`

note the wp_ prefix is obb_

## deployment

pushing code to master will trigger githook to send it to the stage

## staying in sync

make admin changes on the stage and pull them down to local

* data down

* code up

This way - the client can use the stage to fill out the data while you work.