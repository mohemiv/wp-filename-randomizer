=== Filename Randomizer ===
Tags: file type, upload, randomization
Requires PHP: 7.0
Tested up to: 6.0.1
License:      ISC License (ISC)
License URI:  https://opensource.org/licenses/ISC
Author:       Arseniy Sharoglazov
Author URI:   https://twitter.com/_mohemiv

Filename Randomizer adds randomization to file names when uploading files into WordPress.

This is a security plugin designed to prevent unauthorized access to materials that are not published yet or are not intended to be published.

== Description ==
The plugin adds "xxxxxxxx-" prefix for each uploaded file. The original file name will be kept, only the prefix adds randomization. The prefix may contain only [a-f0-9] characters to increase the readability of the final file name.

* Without Plugin: preview.png
* With Plugin: a0fb4cbe-preview.png

== Changelog ==

= 1.0.3 =
* Randomizing prefixes for reuploaded files as well.

= 1.0.2 =
* Excluding unnecessary files from builds.
* Enforcing 16-character randomization prefix for Windows systems. For *nix it's 8 characters.

= 1.0.1 =
* Added build.sh script.
* If the uploading file already has the "xxxxxxxx-" prefix, no randomization is applied.

= 1.0.0 =
* Initial Release.
