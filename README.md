# bol-admin-theme
Installation: `php artisan addon:publish bitsoflove.theme.admin`

##customization
When you want change some stuff in the theme you can run 
`php artisan addon:publish bitsoflove.theme.admin`. This wil publish the config, lang and views folder in `namespace/addons/bitsoflove/admin-theme/`directory. there you can change the stuff you want to change.

###Configuration:
Settings.php 

| configuration    | description                                                                                |
|------------------|--------------------------------------------------------------------------------------------|
| application_name | The name that is showed in Title & login screen                                            |
| favicon_path     | path to the favicons                                                                       |
| menu             | Her e can you set the 3 options tot true or false if you want to see it in the menu or not |
