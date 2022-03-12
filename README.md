victoriakliniken_video
===

Hi. I'm a starter theme called `victoriakliniken_video`, done using `underscores`, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A custom header implementation in `inc/custom-header.php` just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/template-functions.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Licensed under GPLv2 or later. :) Use it to make something cool.
* Theme has basic protection against user enumeration attack, disabled WP API and RSS feeds see `security.php`

* Node version: v14.8.0
* npm version: 6.14.7
* Gulp CLI version: 2.3.0

* Generate pages & components trough terminal: 
    `gen-p about` will generate fe-page-about.php 
    `gen-c banner-big about` will generate banner-big component on fe-page-about.php. It will also generate _component-banner-big.scss and import it to style.scss

* Generate fonticons
    Paste your SVG icon to the `assets/svg` and run `gulp fonticons` `gulp build`
    Gulp will generate icons and put them to the font file.
    You can call your icon on any element using class name icon-iconFileName ie. <span class="font-arrow-down"></span>

Getting Started
---------------

If you want to keep it simple, head over to http://underscores.me and generate your `victoriakliniken_video` based theme from there. You just input the name of the theme you want to create, click the "Generate" button, and you get your ready-to-awesomize starter theme.

If you want to set things up manually, download `victoriakliniken_video` from GitHub. The first thing you want to do is copy the `victoriakliniken_video` directory and change the name to something else (like, say, `your-theme-name`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for: `victoriakliniken_video` and replace with: `your_theme_name`
2. Do `npm install` `npm link` `gulp build` `gulp watch`

Gulp will generate `style.css` file and you will be able to activate theme in WordPress dashboard. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
# victoriakliniken_video-wp-starter
