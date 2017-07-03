# Enstart is a small frameworks with the essentials.

It's not a micro- or a full fledged enterprise framework. It's somewhere in between.

## Requirements

* PHP >= 7.0

## Install

    composer create-project enstart/enstart

## Set up

1. Set the document root on your web server to the `public`-folder.
2. Make the folder `storage`, and it's sub folders, writeable.
3. Copy `config.global.php` as `config.local.php`

## Config

Set up the `config.global.php` with the default configuration.
Set up the `config.local.php` (which is in .gitignore), with the environment specific changes. It should only contain the changes.

### Development/Debugging

While you're in development, you can set `debug => true` in your local config file. This will display errors on the screen.
You can always check the log file in `storage/logs/`.


More info is coming...