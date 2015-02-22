# Roots on the rocks

Roots on the rocks is a WordPress starter theme based on [Roots](https://github.com/roots/roots). Bootstrap has been removed, and Bourbon Neat added in its place.

## Features

Roots on the rocks uses:
* Bourbon
* Bourbon Neat
* Libsass

## Installation

Clone the git repo - `git clone git://github.com/onishiweb/root-on-the-rocks.git` - or [download it](https://github.com/onishiweb/roots-on-the-rocks/archive/master.zip) and then rename the directory to the name of your theme or website.

If you don't use [Bedrock](https://github.com/roots/bedrock), you'll need to add the following to your `wp-config.php` on your development installation:

```php
define('WP_ENV', 'development');
```

## Theme activation

Reference the Roots [theme activation](http://roots.io/roots-101/#theme-activation) documentation to understand everything that happens once you activate Roots.

## Configuration

Edit `lib/config.php` to enable or disable theme features and to define a Google Analytics ID.

Edit `lib/init.php` to setup navigation menus, post thumbnail sizes, post formats, and sidebars.

## Theme development

Roots on the rocks uses [Grunt](http://gruntjs.com/) for compiling SCSS to CSS, checking for JS errors, live reloading, concatenating and minifying files, versioning assets, and generating lean Modernizr builds.

### Install Grunt and Bower

**Unfamiliar with npm? Don't have node installed?** [Download and install node.js](http://nodejs.org/download/) before proceeding.

From the command line:

1. Install `grunt-cli` and `bower` globally with `npm install -g grunt-cli bower`.
2. Navigate to the theme directory, then run `npm install`. npm will look at `package.json` and automatically install the necessary dependencies. It will also automatically run `bower install`, which installs front-end packages defined in `bower.json`.

When completed, you'll be able to run the various Grunt commands provided from the command line.

**N.B.**
You will need write permission to the global npm directory to install `grunt-cli` and `bower`. You will also likely have to be using an elevated terminal or prefix the command with `sudo`, i.e., `sudo npm install -g grunt-cli bower`.

We also advise against running as root user. NPM deliberately uses limited privileges when executing certain commands such as those included in the Roots post-install process, and when this happens to the root user, any file system objects that are not expressly writable by the root user will fail to write during the execution of the command. These might include directories such as `/var/www` or `/home/someotheruser`. If you're running as root and have problems, don't say we didn't warn you.

### Available Grunt commands

* `grunt dev` — Compile SCSS to CSS, concatenate and validate JS
* `grunt watch` — Compile assets when file changes are made
* `grunt build` — Create minified assets that are used on non-development environments

## Documentation

### Roots on the rocks

* [Bourbon](http://bourbon.io/docs/) — Documentation for Bourbon Sass mixins
* [Bourbon Neat](http://thoughtbot.github.io/neat-docs/latest/) - Documentation for Neat grid system

### Core Roots

* [Roots 101](http://roots.io/roots-101/) — A guide to installing Roots, the files, and theme organization
* [Theme Wrapper](http://roots.io/an-introduction-to-the-roots-theme-wrapper/) — Learn all about the theme wrapper
* [Build Script](http://roots.io/using-grunt-for-wordpress-theme-development/) — A look into how Roots uses Grunt
* [Roots Sidebar](http://roots.io/the-roots-sidebar/) — Understand how to display or hide the sidebar in Roots

