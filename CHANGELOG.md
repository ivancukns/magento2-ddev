# Changelog

## [1.1.0] - 2023-01-12

### Added

- add deployer/deployer package. More info about the tool: https://deployer.org
- basic configuration file for the deploy.php
- move deploy.php out of the root
- create ddev command to execute the dep commands
- git ignore non-sample deployer configuration files

## [1.0.0] - 2022-12-24

### Added
- Initial release.
- .ddev configurations and post-start hooks
- Packages: [markshust/magento2-module-disabletwofactorauth](https://github.com/markshust/magento2-module-disabletwofactorauth), [n98/magerun2-dist](https://packagist.org/packages/n98/magerun2-dist), [avstudnitz/scopehint2](https://github.com/avstudnitz/AvS_ScopeHint2)
- app/etc/config.php and app/etc/env.php files versioned
- web/seo/use_rewrites configured to 1
- Database dump db/db.sql.gz
- README.md and CHANGELOG.md files