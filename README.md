# Installation

## Workflow with symlink

### 1. Download core files

Download latest Wordpress core files from offical Website: [Wordpress Core Files](https://wordpress.org/latest.zip)

### 2. Create Symlink

Do in your Terminal:

`ln -s path_to_your_wordpress_core/ core/`

### 3. Create wp-config.php

Create `wp-config.php` in `path_to_your_wordpress_core/` folder just with this code:

`<?php include_once("${_SERVER['DOCUMENT_ROOT']}/wp-config.php");`
 
## Workflow without symlink

### 1. Download core files

Download latest Wordpress core files from offical Website: [Wordpress Core Files](https://wordpress.org/latest.zip)

### 2. Install

Move core files in `core/` folder

## Copy Source files for your own Frontend

### 1. Frontend
For editing the JS and SCSS files from the template copy the folder `src/` from `voodookit/` to your `voodookit-child/` theme.

### 2. Install Dependecies

go to the `voodookit-child` and do:
`npm install`
