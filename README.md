Yoast Development environment
=============================

This setup provides 2 ddev-environments to develop the Yoast SEO extension.
The first setup is PHP7.4 to test CMS10 and CMS11.
The second setup is PHP8.1 to test CMS11 and CMS12.
Both setups contain a sitepackage and an example "record_test" extension to test the record functionality.

## Installation
- Clone this repository
- Clone the extension the `extensions` folder
- Run `./ddev-start`
- Run `./ddev-install-all`
- Manually install v12 (for now)
- Login in all the backends:
  - https://v10.yoast-php7.ddev.site/typo3/
  - https://v11.yoast-php7.ddev.site/typo3/
  - https://v11.yoast-php8.ddev.site/typo3/
  - https://v12.yoast-php8.ddev.site/typo3/
- Create a root page and typoscript template
