# MCAB (Matomo Circumvent AdBlock)

If you are using the standard config of Matomo you are missing out on a lot of potential data on your website. The schema used by Matomo is widely known to AdBlockers and thereby the tracking is not working for visitors of your website using AdBlockers.

## Support

Please support this project by purchasing a support license on [Gumroad](https://gum.co/matomo_circumvent_adblock). It is only a few bucks and helps me to continue working on this project. 


## Installation

**If you need help with your Installation [I offer to install it for you](https://gum.co/matomo_circumvent_adblock)**

1) Open a shell on your Matomo server
2) Go into your main Matomo directory
3) Download and unzip mcab `curl -L https://github.com/simonfrey/matomo_circumvent_adblock/releases/download/v1.0/mcab.zip > mcab.zip;unzip mcab.zip;rm mcab.zip;php mjs_cfg.php`
4) Display the javascript snippet you have to add to your site by opening your browser and direct it to `https://[your-matomo-server]/mjs_display_config.php`

## Create config with site url

If you directly want to display the javascript snippet with your siteID (you get in Matomo main interface) attach `?siteID=[your id]` to the display config url:
```
https://[your-matomo-server]/mjs_display_config.php?siteID=[your id]
```

## Issues
If you find any issue, please report them via [Github issues](https://github.com/simonfrey/matomo_circumvent_adblock/issues)

## License

This project is licensed [MIT](https://github.com/simonfrey/matomo_circumvent_adblock/blob/master/LICENSE). I know that gives you the ability to use it however you want. But please considering supporting by buying a support license on [Gumroad](https://gum.co/matomo_circumvent_adblock)