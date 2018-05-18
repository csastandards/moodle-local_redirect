Redirect plugin for Moodle
====================================
![PHP](https://img.shields.io/badge/PHP-v5.6%20%2F%20v7.0%20%2F%20v7.1-blue.svg)
![Moodle](https://img.shields.io/badge/Moodle-v2.7%20to%20v3.5-orange.svg)
[![GitHub Issues](https://img.shields.io/github/issues/michael-milette/moodle-local_redirect.svg)](https://github.com/michael-milette/moodle-local_redirect/issues)
[![Contributions welcome](https://img.shields.io/badge/contributions-welcome-green.svg)](#contributing)
[![License](https://img.shields.io/badge/License-GPL%20v3-blue.svg)](#license)

# Basic Overview

The Redirect plugin for Moodle redirects to the desired URL processing the URL through Moodle filters.

[(Back to top)](#table-of-contents)

# Requirements

This plugin requires Moodle 2.7+ from http://moodle.org .

It may work with previous versions of Moodle all the way back to Moodle 2.7 but it has not been tested yet. If it works for you, let us know. Tip: You might need to modify the version.php in order for Moodle to let you install it on earlier versions.

[(Back to top)](#table-of-contents)

# Download Redirect for Moodle

The most recent STABLE release of Redirect for Moodle is available from:
https://moodle.org/plugins/local_redirect

The most recent DEVELOPMENT release can be found at:
https://github.com/michael-milette/moodle-local_redirect

[(Back to top)](#table-of-contents)

# Installation

Install the plugin, like any other plugin, to the following folder:

    /local/redirect

See http://docs.moodle.org/35/en/Installing_plugins for details on installing Moodle plugins.

[(Back to top)](#table-of-contents)

# Usage

To use this, simply create a link pointing to the plugin's folder and provide it with an encoded URL as the URL parameter. Example:

/local/redirect/?url=https%3A%2F%2Fwww.example.com%2Flogin%2Flogout.php%3Fsesskey%3D%7Bsesskey%7D

The plugin will replace 7Bsesskey%7D with the Moodle sesskey and then redirect to that URL.

[(Back to top)](#table-of-contents)

# FAQ

## Answers to frequently asked questions

### Are there any security considerations?

There are no known security considerations at this time.

## Other questions

Got a burning question that is not covered here? Submit your question in the Moodle forums or open a new issue on GitHub at:

http://github.com/michael-milette/moodle-local_redirect/issues

[(Back to top)](#table-of-contents)

# Contributing

If you are interested in helping, please take a look at our [contributing](https://github.com/michael-milette/moodle-local_redirect/blob/master/CONTRIBUTING.md) guidelines for details on our code of conduct and the process for submitting pull requests to us.

## Contributors

Michael Milette - Author and Lead Developer

## Pending Features

Some of the features we are considering for future releases include:

* Building in some tags like sesskey, courseid, userid. Until then, you can use [FilterCodes](https://moodle.org/plugins/filter_filtercodes) which includes tags for all three of these.

[(Back to top)](#table-of-contents)

# Motivation for this plugin

The initial development for this project was sponsored by the kind folk at CSA Group together with TNG Consulting Inc.

[(Back to top)](#table-of-contents)

# Further information

For further information regarding the local_redirect plugin, support or to
report a bug, please visit the project page at:

http://github.com/michael-milette/moodle-local_redirect

[(Back to top)](#table-of-contents)

# License

Copyright © 2018 TNG Consulting Inc. - http://www.tngconsulting.ca/

This file is part of the Redirect plugin for Moodle - https://moodle.org/plugins/local_redirect/

Redirect is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Redirect is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Redirect.  If not, see <http://www.gnu.org/licenses/>.

[(Back to top)](#table-of-contents)