# SilverStripe File Base64

Simple SilverStripe module to generate a Base64 encoded
string of File or Image data that can be used in image
tags, etc.

## Install

Install via composer:

    composer require dft/silverstripe-file-base64

## Usage

This module automatically adds two methods to files and
images that allow accessing the data string:

**NOTE**: Currently the following methods will only 
return a data string of the base image NOT a modified
image (for example using Image methods like `Fill` or `Fit`)

### Base64

Returns the base 64 encoded string of the file/image
data. For example, in a template you can call:

    $Image.Base64

### Base64DataURL

Returns a Data URL that can be used in image tags, links
etc. To use it in templates you can call:

    <img src="$Image.Base64DataURL">