# Elementor Stubs

This package provides stub declarations for [Elementor](https://elementor.com/) core functions, classes, interfaces, and global variables.  These stubs can help plugin and theme developers leverage static analysis tools like [Psalm](https://getpsalm.org/) and plugins like Intellisense, Intelephense.

The stubs are generated directly from the [source](https://wordpress.org/plugins/elementor/) using [stubs generator](https://github.com/GiacoCorsiglia/php-stubs-generator).  Needless to say, this library repackages a subset of Elementor code, which is the work of the Elementor plugin developers.

## Installation

Require this package as a dev-dependency with [Composer](https://getcomposer.org):

```
composer require --dev arifpavel/elementor-stubs
```

Alternatively, you may download `elementor-stubs.php` directly.

## Usage with Psalm

Update your Psalm config to include the section:

```xml
<stubs>
    <file name="vendor/arifpavel/elementor-stubs/elementor-stubs.php" />
</stubs>
```

Furthermore, ensure Elementor core code is _not_ included under `<projectFiles>`.

## Usage for Intellisense

If your editor has trouble parsing all of Elementor classes, functionc, etc, you may find the stubs useful for enabling code completion and related features.  For example, [here](https://github.com/bmewburn/vscode-intelephense/issues/113) are instructions for usage with VSCode's [Intelephense](https://marketplace.visualstudio.com/items?itemName=bmewburn.vscode-intelephense-client) extension. Or in a local workspace for intelephense create a ```.php``` file and add 
``{
    "intelephense.stubs": [
    "/vendor/arifpavel/elementor-stubs/elementor-stubs.php"
  ]
}``

## Versioning

This package is versioned to match the Elementor version from which the stubs are generated.  If any fixes to stubs are required, subsequent releases will be versioned as `ELEMENTOR_VERSION.X`.

## Generating stubs for a different WordPress version

You should be running PHP 7.1 or later to follow these steps, so any function definitions that are polyfills for older versions of PHP are excluded from the stubs.  Additionally, the Stubs Generator package at least requires PHP 7.1.

1. Clone this repository and `cd` into it.
2. Download Elementor plugin source from wordpress.org & place it inside this project.
3. Run `composer install`
4. Run `./generate.sh`

The `elementor-stubs.php` file should now be updated.  Feel free to submit a Pull Request if you'd like to see a release for a newer version.  If things have fallen behind, please generate stubs for each missing version in a distinct commit so we can have a continuous release history.

### Credits

This package is highly dependent on GiacoCorsiglia's stub packages.

### License
[GPLv2](LICENSE)