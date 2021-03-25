# Installation

## 1. Download core files
Download latest Wordpress core files from offical Website: [Wordpress Core Files](https://wordpress.org/latest.zip)

## 2. Install
Move core files in `core/` folder
PS: You can also use an symlink

## 3. Create wp-config.php
Create `wp-config.php` in `path_to_your_wordpress_core/` folder just with this code:
`<?php include_once("${_SERVER['DOCUMENT_ROOT']}/wp-config.php");`
