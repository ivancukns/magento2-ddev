# [Magento Open Source](https://github.com/magento/magento2) - ddev setup

#### This repository is meant for quick starting [Magento Open Source](https://github.com/magento/magento2) software locally, with the help of ddev.
#### Possible use-cases: setting up quickly a vanilla Magento web store locally for testing puroses, or as a starting point for new projects.
#### More about Magento Open Source: https://github.com/magento/magento2

#### DDEV is an open source tool for launching local PHP development environments in minutes:
#### DDEV GitHub repository: https://github.com/drud/ddev
#### DDEV documentation: https://ddev.readthedocs.io/en/stable/

# Get Started

### 1. Install ddev https://ddev.readthedocs.io/en/stable/users/install/
### 2. Clone this repository `git clone git@github.com:ivancukns/magento2-ddev.git && cd magento2-ddev`
### 3. Add auth.json file to the root of the project with your Magento Access Keys
### 4. From the root of this project run `ddev start` from the console
### 5. Access your Magento Open Source storefront locally https://ddev-magento2.ddev.site/ and your admin area here https://ddev-magento2.ddev.site/admin_15mlql/. Admin username/password: admin/admin123

# About this repository

The idea is to allow developers to have updated and functional Magento Open Source software running on their machines with minimal effort.

app/etc/config.php and app/etc/env.php files are intentionally versioned to allow immediate functionality. 

I will also try to enrich this repository with free modules and tools that I find helpful for Magento development.

Currently, following packaged are installed, outside the Magento Open Source core:

- markshust/magento2-module-disabletwofactorauth https://github.com/markshust/magento2-module-disabletwofactorauth
- n98/magerun2-dist https://packagist.org/packages/n98/magerun2-dist
- avstudnitz/scopehint2 https://github.com/avstudnitz/AvS_ScopeHint2

### If you have any questions, idea or suggestion regarding this repository, feel free to reach out! 