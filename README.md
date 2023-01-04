# matrix-helper

Matrix helper provides helpful functions and modifications for WordPress projects.

The idea is we will use it to add common functions we tend to use over and over again on each Wordpress/ Woo Commerce projects as well as ensure we implement the best security practices, maximise speed optimisiation, and clean up the bloated WP admin for our clients.

BEFORE MATRIX HELPER:

![Screenshot from 2023-01-04 15-14-47](https://user-images.githubusercontent.com/47034430/210589061-d1944f48-38e7-474b-9dc6-ba00a7553830.png)

AFTER MATRIX HELPER (EXTREME CLEAN)

![after](https://user-images.githubusercontent.com/47034430/210589772-0a2e50d2-c004-4f80-a6da-98b3b179489a.png)


Matrix helper modifies default behaviour of WordPress and various plugins to make it more suitable for customer projects, forcing our preferences and making sure that all the unnecessary information is hidden or unreachable.

All these modifications can be enabled or disabled with the plugin options.

![Screenshot from 2023-01-04 15-26-31](https://user-images.githubusercontent.com/47034430/210589455-3bd25cda-58c9-42b0-b138-b16fa3b780ca.png) 

You should understand what you are doing and have a reason to do it, you should not just install and enable every option.

Some options will clean up the admin by tidying up what is visible in the backend. For example you can hide ACF from the Admin Menu, clients will rarely need to make changes to those options. These will only be hidden for clients, staff with a @matrixinternet email account will still see the Admin Menu items, notifications and nags.

## General

- Hide this plugin for everybody except Matrix staff (Any user with @matrixinternet.ie domain in user email can still View it)
- Disable comments: Completly disable comments sitewide - Most websites we build do not require comments to be enabled.
- Update login page image link URL - This will redirect it to the clients Home URL instead of Wordpress
- Limit Excerpt number of words - Example of a Common function that would regularly be found in functions.php!

## Performance

- Add Instant.page - uses just-in-time preloading to improve latency — it preloads a page right before a user clicks on it.Recommended.
- Disable Emojis: Clients usually do not require this feature. So we can disable it altogether, which can give a slight performance boost.
- Disable Embeds: Only if you do not need to ever insert videos into the posts or pages. Can improve performance.
- Disable jQuery Migrate: Usually its unnecessary to load this script as WordPress already maintains jQuery itself.
- Disable the Password Strength meter script which may or may not give a small performance boost.

## Security

- Disable xmlrpc: Its recommended to disable this because it adds security vulnerabilities, however be careful as some plugins such as Jetpack require it.
- Disable WP Generator Meta Tag: It is considered a security risk to make the Wordpress version visible and public.

## Yoast

- Hide Yoast from the Dashboard menu. Non Matrix Staff only
- Move Yoast Box to the bottom: Sets Yoast SEO plugin metabox priority to low.
- Remove Yoast SEO setting options from Admin toolbar.
- Remove Yoast SEO comment HTML from the head.
- Remove Yoast Dashboard widget from welcome screen.
- Remove SEO manager and SEO editor user roles added by Yoast from user set up.

## Admin Cleanup - Non Matrix Users only

- Disable admin bar: This will remove the admin toolbar for all users. Its useful when testing.
- Disable admin notifications: Try to disable annoying notifications in the admin area.
- Disable the additional CSS section from the Customizer: We generally dont want admin users or developers adding CSS here.
- Disable Update Nag: Disable update notices on the backend. Updates can still be checked by clicking Dashboard->Updates
- Disable Wordpress logo from admin toolbar.
- Remove the welcome panel from Dashboard
- Remove the Site health metabox from Dashboard
- Remove the At a Glance metabox from Dashboard
- Remove the Activity metabox from Dashboard
- Remove the Wordpress news metabox from Dashboard
- Remove the Quick Draft metabox from Dashboard
- Hide Updates under Dashboard menu
- Hide Plugins under Dashboard menu
- Hide Themes, Customizer and Widgets under Dashboard menu
- Hide Tools under Dashboard menu
- Hide General under Dashboard menu

## Header Cleanup

- Disable Dash Icons on Frontend: If the theme does not use dashicons on the frontend, they can be disabled.
- Disable RSS Feed: We can safely disable RSS if the website has no blog feature, otherwise its just header junk.
- Remove Gutenburg Styles: Only if you have disabled Gutenburg Blocks and are using the Classic Editor.

## Footer

- Modify admin footer text: This will add a link back to matrix website in the admin instead of Wordpress.

## WooCommerce

- Hide WooCommerce Analytics. If have no need for the new WooCommerce Analytics and WooCommerce Admin, you can always start using the original reports which are available under WooCommerce -> Reports. Enabling this option just hides it from menu, it does not disable completly.
- Hide WooCommerce Marketing hub.Theres a good chance you do not need this, coupons can be adding from WooCommerce settings.
- Remove WooCommerce Setup Metabox Dashboard widget.
- Remove WooCommerce Status Metabox Dashboard widget.
- Remove WooCommerce Recent Reviews Metabox Dashboard widget.
- Disable all Woocommerce widgets if are not using any.
- Disable WooCommerce Ajax Cart Fragments On Static Homepage. Optimize the homepage and leave the “wc-cart-fragments” on the other website pages. Do not enable if products are shown on homepage.
- Disable WooCommerce Ajax Cart Fragments everywhere. This Will cause pages to reload when adding to cart.
- Disable WooCommerce styles and scripts on non WooCommerce pages. Only load them on shop, product, cart, account etc etc pages.
- Disable WooCommerce Extensions submenu - Its almost never needed.
- Disable WooCommerce Block Styles on the Frontend.
- Disable WooCommerce Block Styles on the Backend.

## Hide Plugin Settings from WP Admin Menu for Clients Only

- Hide ACF Menu item.
- Hide All in One Wordpress Security Menu Items.
- Hide Elementor from Dashboard menu - note settings can still be accessed from Plugins menu item.
- Disable Elementor Post Attributes Dashboard Widgets.
- Disable Elementor Elementor Overview Dashboard Widgets.
- Disable WP Mail SMTP Dashboard Widgets.
- Hide WP Mail SMTP from Dashboard menu - note settings can still be accessed from Plugins menu item.
- Hide Hubspot menu item.
- Disable Wordfence dashboard widget.
- Hide Wordfence menu items. These should be renabled when checking scans, running scans, running reports etc, otherwise there is no way to check scan results.
- Hide iThemes Security menu items.

# CONTRIBUTING

The plugin started life as a test drive for using Carbon fields to create a backend, a nice alternative to ACF
https://carbonfields.net/

Create a pull request and add other useful, recommended and common functions. 

It should be straightforward to follow the structure:

Set up and add Carbon fields: matrix-helper/includes/class-matrix-helper-crb-loader.php
Add Functions to any of the files inside any of the files matrix-helper/functions
Additonal function files can be included matrix-helper/includes/class-matrix-helper-crb-loader.php
