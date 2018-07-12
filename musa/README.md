# Musa #

MUSA is a fully responsive HTML admin template, which is built with Bootstrap 4 and JavaScript.

MUSA admin contains many example pages with many ready to use elements which are easy to customize.
You can choose from various existing layouts, as well you can customize the main colors of your template.

## Template demo

**[Template Demo](http://musa.beewebsystems.com/)**

## Documentation

**[Documentation](http://musa.beewebsystems.com/documentation.html)**

## Installation

In order to run **Musa** on your local machine all what you need to have **Node.js** installed on your machine and follow the installation steps down below.
Start by typing the following commands in your terminal in order to get **Musa** full package on your machine and starting a local development server with live reload feature.

  ```
     npm install -g gulp
  ```

  ```
     npm install
  ```
Configuration part is ready, now you need to run project by typing gulp command

  ```
     gulp
  ```

that is all, project now running on your local machine.

## Gulp Tasks

- `gulp` the default task that builds everything
- `gulp browserSync` browserSync opens the project in your default browser and live reloads when changes are made
- `gulp watch` checks to see if a file was saved then compile files
- `gulp build` builds everything
- `gulp clean` removes compiled files and folders

## Files/Folders Structure
Here is the structure of our **src** folder

```
|-- src/                                        # Contains all template source files.
|   |-- fonts/                                  # Contains all fonts.
|   |-- html/                                   # Contains all HTML files.
|      |-- partials                             # Contains all global HTML files.
|           |-- footer.html                     # footer HTML.
|           |-- header.html                     # header HTML.
|           |-- sidebar.html                    # sidebar HTML.
|           |-- site-foot.html                  # page foot HTML.
|           |-- site-head.html                  # page head HTML.
|      |-- settings                             # Contains all HTML files related to theme settings.
|           |-- color-settings.html             # Contains all dynamic css with dynamic values
|           |-- scss-colors-settings.html       # Contains all dynamic sass variables with dynamic values
|           |-- theme-settings.html             # HTML of the sidebar of settings
|   |-- 403-error.html                          # HTML of 403 error page.
|   |-- 404-error.html                          # HTML of 404 error page.
|   |-- 500-error.html                          # HTML of 500 error page.
|   |-- basic-tables.html                       # HTML of Basic tables page.
|   |-- data-tables.html                        # HTML of Data tables page.
|   |-- documentation.html                      # HTML of Documentation page.
|   |-- email-template-alert.html               # HTML of Email template alert page.
|   |-- email-template-basic.html               # HTML of Email template basic page.
|   |-- email-template-billing.html             # HTML of Email template billing page.
|   |-- form-advanced.html                      # HTML of Form advanced page.
|   |-- form-general.html                       # HTML of Form general page.
|   |-- form-layouts.html                       # HTML of Form layouts page.
|   |-- form-wizard.html                        # HTML of Form wizard page.
|   |-- icons-fontawesome.html                  # HTML of Icons Fontawesome page.
|   |-- icons-material.html                     # HTML of Icons Material page.
|   |-- index.html                              # HTML of Main page.
|   |-- invoice.html                            # HTML of Invoice page.
|   |-- lockscreen.html                         # HTML of Lockscreen page.
|   |-- login.html                              # HTML of Login page.
|   |-- loginV2.html                            # HTML of Login version2 page.
|   |-- recover-password.html                   # HTML of Recover password page.
|   |-- register.html                           # HTML of Register page.
|   |-- registerV2.html                         # HTML of Register version2 page.
|   |-- ui-buttons.html                         # HTML of UI buttons page.
|   |-- ui-cards.html                           # HTML of UI cards page.
|   |-- ui-carousel.html                        # HTML of UI carousel page.
|   |-- ui-colors.html                          # HTML of UI colors page.
|   |-- ui-images.html                          # HTML of UI images page.
|   |-- ui-modals.html                          # HTML of UI modals page.
|   |-- ui-notifications.html                   # HTML of UI notifications page.
|   |-- ui-progress-bars.html                   # HTML of UI progress bars page.
|   |-- ui-sliders.html                         # HTML of UI sliders page.
|   |-- ui-tabs-accordions.html                 # HTML of UI tabs accordions page.
|   |-- ui-typography.html                      # HTML of UI typography page.
|   |-- user-profile.html                       # HTML of UI user profile page.
|   |-- img/                                    # Contains all images.
|   |-- js/                                     # Contains all JavaScript files.
|       |-- theme-settings                      # Contains all JavaScript files related to theme settings.
|           |-- jscolor.min.js                  # Contains all scripts related to color picker.
|           |-- settings.js                     # Contains all scripts related to theme settings.
|       |-- charts.js                           # Contains all scripts related to charts.
|       |-- main.js                             # Contains all main scripts.
|   |-- sass/                                   # Contains all sass files.
|       |-- pages                               # Contains all custom sass files for pages.
|           |-- dashboard.scss                  # Contains all stylesheets for the main page
|           |-- documentation.scss              # Contains all stylesheets for the documentation page
|           |-- error.scss                      # Contains all stylesheets for the error pages
|           |-- invoice.scss                    # Contains all stylesheets for the invoice page
|           |-- lockscreen.scss                 # Contains all stylesheets for the lockscreen page
|           |-- login-register.scss             # Contains all stylesheets for the login and register pages
|           |-- user-profile.scss               # Contains all stylesheets for the user profile page
|       |-- partials                            # Contains all global sass files.
|           |-- animation.scss                  # Contains all stylesheets related to animations
|           |-- buttons.scss                    # Contains all stylesheets related to buttons
|           |-- cards.scss                      # Contains all stylesheets related to cards
|           |-- color-settings.scss             # Contains all dynamic sass with default values
|           |-- colors.scss                     # Contains all stylesheets related to background colors and the ui colors page
|           |-- dark-sidebar.scss               # Contains all stylesheets related to dark sidebar
|           |-- default-colors.scss             # Contains all dynamic sass variables with default values
|           |-- fixed-header.scss               # Contains all stylesheets related to fixed header
|           |-- fonts.scss                      # Contains all stylesheets related to fonts
|           |-- forms.scss                      # Contains all stylesheets related to forms
|           |-- globals.scss                    # Contains all global stylesheets
|           |-- header-footer.scss              # Contains all stylesheets related to header and footer
|           |-- helper-classes.scss             # Contains all helper classes that make work easier
|           |-- icons.scss                      # Contains all stylesheets related to icons
|           |-- images.scss                     # Contains all stylesheets related to images and the ui images page
|           |-- light-header.scss               # Contains all stylesheets related to light header
|           |-- mixins.scss                     # Contains all CSS functions that you can include whenever you want
|           |-- modals.scss                     # Contains all stylesheets related to modals
|           |-- nav-md.scss                     # Contains all stylesheets related to wide sidebar
|           |-- nav-sm.scss                     # Contains all stylesheets related to small sidebar
|           |-- notifications.scss              # Contains all stylesheets related to notifications (badges, alerts)
|           |-- progress-bars.scss              # Contains all stylesheets related to progress bars
|           |-- right-sidebar.scss              # Contains all stylesheets related to right sidebar
|           |-- rtl.scss                        # Contains all stylesheets related to rtl content
|           |-- sidebar.scss                    # Contains all stylesheets related to sidebar
|           |-- sliders.scss                    # Contains all stylesheets related to sliders
|           |-- tables.scss                     # Contains all stylesheets related to tables
|           |-- tabs-accordions.scss            # Contains all stylesheets related to tabs and accordions
|           |-- theme-settings.scss             # Contains all stylesheets related to sidebar of settings
|           |-- theme-colors.scss               # Contains all stylesheets related to main color of the theme
|           |-- typography.scss                 # Contains all typo related stylesheets.
|           |-- variables.scss                  # Contains all sass variables.
|       |-- main.scss                           # The main sass file.
```
