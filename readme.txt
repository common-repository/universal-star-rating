=== Universal Star Rating ===
Contributors: Chasil
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=donate%40universal%2dstar%2drating%2ede&lc=DE&item_name=Universal%20Star%20Rating%20&no_note=0&currency_code=EUR&bn=PP%2dDonationsBF%3abtn_donate_SM%2egif%3aNonHostedGuest
Tags: stars, rating, movies, books, reviews, shortcodes
Requires at least: 3.0.1
Tested up to: 5.7.2
Stable tag: 2.1.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl.html

USR provides shortcodes to give the author the opportunity to add ratings for desired products and services with the aid of a star rating system.

== Description ==

Universal Star Rating provides shortcodes to give the author the opportunity to add ratings/reviews for desired data, products and services with the aid of a classic star rating system. You can make use of these shortcodes to embed a single inline star rating or a tabular list of star ratings.

To insert a single inline star rating inside a post just type `[usr 5]` where 5 is the rating/amount of stars.

To insert a tabular list of star ratings inside a post just type `[usrlist "Pizza:3" "Ice Cream:3.5" (...)]` where the first value is what you want to rate and the second value is the rating/amount of stars. Your list should consist of more than 1 key:value pairs.

== Installation ==

1. Upload the content of the ZIP-file `universal-star-rating.zip` to the `/wp-content/plugins/universal-star-rating/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Make sure lib GD is installed and activated for PHP

Alternatively

1. Upload the ZIP-File inside your wordpress admin panel under `Plugins > Add New > Upload Plugin`
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Make sure lib GD is installed and activated for PHP

== Frequently Asked Questions ==

= Can I use custom images instead of the pre given ones? =
The plugin gives you the opportunity to use your own images. Just upload the prepared images into the custom images folder which can be configured inside the settings page.

= What do I have to keep in mind when using custom images? =
The only thing you have to keep in mind is that custom images will be referenced by the letter `c` followed by the file name. For example if the file name of your custom image is `star.png` your shortcode would look like this: `[usr 3.5 img="cstar.png"]`

= Does this plugin provide functionality to let my followers/readers rate something? =
At the moment the plugin doesn't provide this functionality. Only the author of a post is able to include ratings via shortcodes.

= How can I tweak the plugin for my needs? =
There is a settings page you can use to modify the default settings. If you want to change specific ratings you can add parameters to your shortcode to override the standard settings. You can find an overview within the description page.

== Screenshots ==
1. This screenshot shows an example post including a single and a multi rating
2. This screenshot shows the settings page
3. This screenshot shows the Preview/Examples page

== Changelog ==

= 2.1.0 =
* Request: Added settings for text appearance modification
* Tested the plugin with WordPress 5.7.2

= 2.0.6 =
* Request: Added alt attribute to img tag
* Tested the plugin with WordPress 5.1

= 2.0.5 =
* Bugfix: Custom images will now show up inside settings page
* Tested the plugin with WordPress 5.0.3

= 2.0.4 =
* Added a waterdrop image
* Added a smiley image

= 2.0.3 =
* Changed some texts
* Added German translation
* Changed stylesheet for multi ratings

= 2.0.2 =
* Bugfix: Multi ratings can now be set with a decimal point and a comma
* Rating output now only consists of a decimal point if needed
* The ice cone image is back

= 2.0.1 =
* Changed CSS file because of styling errors
* Changed translation functions

= 2.0.0 =
* The entire code has been rewritten
* New Description Page
* New Settings Page
* New Preview Page
* Prepared to use standardized translations
* User Request: Added a function to add custom text to single ratings

= 1.10.4 =
* Added some security features
* Tested the plugin for WP 4.8

= 1.10.3 =
* Deleted unnecessary code

= 1.10.2 =
* Updated Link inside settings page

= 1.10.1 =
* Added a function to show text based output as a tooltip because of a feature request

= 1.10.0 =
* Added an update routine which changes all posts because shortcodes don't work the old way
* Updated description

= 1.9.6 =
* Tested Plugin against WP 4.4 RC 1

= 1.9.5 =
* Added a function to change Schema.org SEO rating type

= 1.9.4 =
* Fixed a problem which made custom images unusable inside the user specified directory
* Changed the stylesheet for USR images so that the vertical alignment is now set to the baseline
* Added a new image (Ice Cone)

= 1.9.3 =
* Added Brazilian Portuguese locale (Thanks to danielpassos!)

= 1.9.2 =
* Changed paths inside USR so that it now uses WP constants
* USR now loads all language files dynamically
* Added some new internal functions
* Code optimization

= 1.9.1 =
* Proofed that the plugin works with WP 4.0
* Updated locale files and translation document
* Updated admin panel

= 1.9.0 =
* Added custom images support
* Updated admin panel

= 1.8.0 =
* Added Schema.org support
* Updated admin panel
* Moved content because of a problem while generating stars with some hosting services
* Some minor bugfixes

= 1.7.1 =
* Removed some unclean Code to avoid notice messages in WP debug mode

= 1.7.0 =
* Added an option to override the star size inside both shortcodes
* Code optimization

= 1.6.6 =
* Modified the settings page
* Added 3 new source images

= 1.6.5 =
* Added rtl support for the admin panel 
* Some minor bug fixes

= 1.6.4 =
* Added a Italian and a Spanish language package (Thanks to anddab!)
* Updated the options page

= 1.6.3 =
* A minor bugfix release which provides a change to the generated image url so that it becomes w3c conform

= 1.6.2 =
* Some changes to the stylesheet because other ones were higher priorized

= 1.6.1 =
* Added an external stylesheet for the images so that other stylesheets can not cause any side effects

= 1.6.0 =
* Added an option to enable shortcodes inside comments
* Excluded some functions so that the code is more readable

= 1.5.1 =
* Changed the average rating inside lists so that there is just one digit left after the decimal point
* Changed the admin check so that user can log in into WordPress backend without admin rights

= 1.5.0 =
* Added a new source image
* Added a function to calculate the average rating inside a list of Universal Star Ratings
* Some minor bug fixes

= 1.4.4 =
* Added images in different sizes so that they look better (even with browser downsizing) and to improve the response time 

= 1.4.3 =
* Changed the img-tag so that the height of the images are now sized via css

= 1.4.2 =
* Added a sort function to the usable images inside the admin panel
* Edited the img-tag because of an reported error with safari browsers

= 1.4.1 =
* Fixed the German locale because of an reported error

= 1.4.0 =
* Merged the source images
* Added a new source image
* Updated functions to support these merged source images
* Added a new option to enable/disable text output
* Added functionalities to override the standard settings in shortcodes
* Updated localization and settings page
* Code optimization

= 1.3.1 =
* Made the source images smaller
* Changed the way the output images are created
* Bugfix: The setting for the max amount of stars is now working

= 1.3.0 =
* Added new images
* Modified settings page 

= 1.2.3 =
* Added a french language package
* Bugfix: Ratings which are too high are now set to the maximum amount of stars and not to 10 (which is the default value for the maximum)

= 1.2.2 =
* Added a readme file

= 1.2.1 =
* Code optimization
* Bugfix: Preview inside settings page works now as it was expected to

= 1.2.0 =
* Code optimization
* Implementation of localization (English and German)
* Added a settings page for
 1. Some information about this plugin
 2. Localization
 3. Star size
 4. Amount of stars (Doesn't work correct at this time)

= 1.1.0 =
* Updated multy rating functionality
 1. Changed the used shortcode so that it is easier to use it
 2. Removed the restriction for the amount of ratings inside a post

= 1.0.0 =
* Initial release with basic functionality to add star ratings inside posts

== Upgrade Notice ==

= 2.1.0 =
After a few months without updates I'm proud to release version 2.1.0 which comes with new settings to give you more customizing options. Have a look at the settings page.
The plugin is now tested with WordPress version 5.7.2

= 2.0.6 =
Added the alt attribute to the img tag as it was requested. Plugin tested with WordPress version 5.1

= 2.0.5 =
Fixed a bug which caused custom images to not show up inside the settings page. Plugin tested with WordPress version 5.0.3

= 2.0.4 =
Added two new images to the plugin. Now you can use a waterdrop and a smiley ;-)

= 2.0.3 =
Updated some texts and added the German translation. Changed stylesheet for multi rating to prevent wrong table spacing.

= 2.0.2 =
Multi ratings can now be set with a decimal point and a comma. Rating output now only consists of a decimal point if needed. Last but not least: The ice cone is back ;-)

= 2.0.1 =
Changed CSS file because of styling errors and changed translation functions.

= 2.0.0 =
Welcome to the shiny new Universal Star Rating! It now consists of a more structured Description, Settings and Preview page. The entire code has been rewritten and the plugin is now prepared for standardized translation files. Additionally the author is now able to modify the text output for single ratings.

= 1.10.4 =
Added some security features and tested it for WP 4.8

= 1.10.3 =
Deleted unnecessary code

= 1.10.2 =
Updated Link inside settings page

= 1.10.1 =
Added a function to show text based output as a tooltip because of a feature request

= 1.10.0 =
BugFix release. Since WP 4.4 the single shortcode doesn't work the old way [usr=3]. It now has to be [usr 3]. This release updates all posts for the user. Be sure to use the new shortcode!

= 1.9.6 =
Tested against WP 4.4 RC 1. Should work fine with 4.4 :-)

= 1.9.5 =
Added a function to change Schema.org SEO rating type

= 1.9.4 =
This is a bugfix release to solve the problem which made custom images unusable inside the user specified directory. I hope that some of you will enjoy the new image which comes within this release.

= 1.9.3 =
Tested the plugin with WordPress version 4.2.4 and added the Brazilian Portuguese locale which was made by danielpassos.
Sorry that I have been so inactive...

= 1.9.2 =
This is a bugfix release which addresses a problem with incorrect paths which causes the plugin to not work correct (ver 1.9.1). While I was debugging the code I did some code optimization and added some new functions which should make the plugin a little faster.

= 1.9.1 =
This version of USR comes with a small UI improvement for the admin panel and a little code optimization. I tested it with WP version 4.0.

= 1.9.0 =
Now USR is able to support custom images. In the past customized images were deleted by updating the plugin but now you can use a seperated directory for your own images. Be aware that this seperated directory may not be inside the plugins directory or it still will be deleted when updateing the plugin!

= 1.8.0 =
Added Schema.org support which can be activated inside the admin panel. Please be aware that this causes W3 errors if activated! There are some minor bugfixes inside this release, too.

= 1.7.1 =
Removed some unclean Code to avoid notice messages in WP debug mode.

= 1.7.0 =
This release includes the function to override the star size inside both shortcodes. Some code optimization is also included.

= 1.6.6 =
This release comes with a slight modification for the settings page and includes 3 new source images.

= 1.6.5 =
This release includes support for admin panels based on rtl language packages.

= 1.6.4 =
This package includes a Italian and a Spanish language package (Thanks to anddab!). I also updated the options page.

= 1.6.3 =
This is a minor bugfix release which provides a change to the generated image url so that it becomes w3c conform.

= 1.6.2 =
Another bugfix release because other stylesheets were higher priorized so that unwanted side effects still occured. Finally this release should do the magic.

= 1.6.1 =
This is a bugfix release for those who use stylesheets which causes any unwanted side effects. Now USR comes with its own stylesheet to make sure it works like it is expected to.

= 1.6.0 =
This release contains the functionality which is needed to use shortcodes inside comments. This is disabled by default but can be changed inside the Universal Star Rating options page. Now you can give your visitors the oportunity to rate your posts and pages.

= 1.5.1 =
This release contains an update to the function which calculates the average rating for lists so that there is just one digit left after the decimal point and there is a bugfix inside this release so that user whithout admin rights can log in into WordPress backend again.

= 1.5.0 =
With this update I added a new source image and the possibility to calculate the average rating inside a list of Universal Star Ratings. There are some minor bug fixes inside this update, too.

= 1.4.4 =
With this update I added images in different sizes so that they look better (even with browser downsizing) and to improve the response time.

= 1.4.3 =
This is a hotfix which solved an reported error with the sizing of the star images. The img-tag now works with css instead of the img attribute height.

= 1.4.2 =
I added a sort function to the admin panel so that the usable images are now sorted. The second thing I've changed is the img-tag because of an reported error with Safari browsers which should be fixed now.

= 1.4.1 =
I fixed the German locale because of an error which was reported by the member brit77. This issue caused some WordPress installations to throw errors so the plugin had to be removed via FTP.

= 1.4.0 =
I added some new functionalities! Now you can enable/disable the text output and it is possible to override settings inside the shortcodes so that you can be more flexible inside your posts.

= 1.3.1 =
The setting for the max amount of stars is now working and I changed the way images are build so that the source images are now much smaller.

= 1.3.0 =
Added some images and modified settings page so that you can choose one of them for your posts

= 1.2.3 =
This package includes a french language package and a bugfix.

= 1.2.2 =
Just added a readme file which is necessary to host this plugin on wordpress.org

= 1.2.1 =
This is just a bugfix release. Nothing to worry about!

= 1.2.0 =
Now you can change the settings of Universal Star Rating under the settings section inside your WordPress admin panel.
"Settings > Universal Star Rating"

Please note that the setting of the amount of stars will just change the shown maximum amount of stars inside the brackets but will not effect the viewed stars (picture) itself. This will work with an future release. I recommend to not change this value!

= 1.1.0 =
Please be aware that this update will change the way multy rating via `[usrlist (...)]` will work. All posts which include this shortcode have to be updated because the old shortcode won't work any longer.

For future releases I will make sure that old functions will still work (marked as deprecated) while I add newer ones. Inside a future update these deprecated functions will be removed. This will give you the oppportunity to update the plugin without the loss of functionality so that you can modify your older posts unnoticed by anyone. 

= 1.0.0 =
The initial release of this plugin which brings basic functionality with it.

== Translations ==

*Note:* This plugin is localized / translatable. This is very important for all users worldwide. So please contribute your language to the plugin to make it even more useful. See [Translations](https://translate.wordpress.org/projects/wp-plugins/universal-star-rating)