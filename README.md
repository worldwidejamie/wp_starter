# WP Default

## Welcome

Hi. I'm a starter theme called `wp_default_starter`. I exist to provide a serious boost to Phase 3 WordPress Theme Development. This theme was created under a few assumptions:

- You are using WordPress with Gutenberg & the Genesis Framework.
- You are using the Genesis Custom Block Builder provided by Genesis Pro.

The build process of this starter theme is set up for this process. The theme can be modified by removing or commenting out the following:

### `gulpfile.babel.js`

- Comment out the `blockStyles` & `blockStylesRTL` task.
- Remove the `blockStyles` task from the gulp default task.
- Remove the `blockStyles` task from the gulp production task.

### Files

- Remove the `blocks` directory
- Remove the `src/scss/blocks` directory

This should resolve any potential compilation errors since you will not utilize these files or functions. Everything else should compile as expected.

## Installation

---

### Requirements

This starter theme should be installed in the `themes` directory of your WordPress installation.

Incidentally, you'll also require a local WordPress installation. Local, a product from Flywheel & WP Engine, is the quickest and easiest way to set up a local WordPress environment.

This project will require the following dependencies:

-[node.js](https://nodejs.org) -[Composer](https://getcomposer.org) -[yarn](https://yarnpkg.com)

### Quick Start

Clone or download this repository, change its name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a six-step find and replace on the name in all the templates.

1. Search for `'wp_starter_theme'` (inside single quotations) to capture the text domain and replace with: `'megatherium-is-awesome'`.
2. Search for `wp_starter_theme_` to capture all the functions names and replace with: `megatherium_is_awesome_`.
3. Search for `Text Domain: wp_starter_theme` in `style.css` and replace with: `Text Domain: megatherium-is-awesome`.
4. Search for `wp_starter_theme` (with a space before it) to capture DocBlocks and replace with: <code>&nbsp;Megatherium_is_Awesome</code>.
5. Search for `wp_starter_theme-` to capture prefixed handles and replace with: `megatherium-is-awesome-`.
6. Search for `WP_STARTER_THEME` (in uppercase) to capture constants and replace with: `MEGATHERIUM_IS_AWESOME_`.

Then, update the stylesheet header in `style.css`, the links in `footer.php` with your own information and rename `_wp_default_starter.pot` from `languages` folder to use the theme's slug. Next, update or delete this readme.

### Setup

```sh
$ yarn install
$ composer install
```

### Available CLI commands

`wp_default_starter` comes packed with CLI commands tailored for WordPress theme development :

- `yarn start` : starts the development BrowserSync server
- `yarn build` : compiles the theme into a production ready build
- `yarn styles` : compiles only the styles
- `yarn blockStyles` : compiles only the Block Styles
- `yarn stylesRTL` : compiles only the RTL styles
- `yarn blockStylesRTL` : compiles only the RTL block styles
- `yarn vendorsJS` : compiles the vendor javascript
- `yarn customJS` : compiles the custom JS files
- `yarn images` : optimizes the images
- `yarn clearCache` : clears the cache
- `yarn translate` : runs translations
- `composer lint:wpcs` : checks all PHP files against [PHP Coding Standards](https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/).
- `composer lint:php` : checks all PHP files for syntax errors.
- `composer make-pot` : generates a .pot file in the `languages/` directory.
- `run compile:css` : compiles SASS files to css.
- `npm run compile:rtl` : generates an RTL stylesheet.
- `npm run watch` : watches all SASS files and recompiles them to css when they change.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!
