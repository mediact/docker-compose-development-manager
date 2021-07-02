# Changelog
All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## [1.3.0]
### Added
- The possibility to configure services for M2.
- A file specific to the project which won't be overwritten and overwrites .env.dev.

### Changed
- Updated vcl file for varnish 6.x.
- Now `nginx-map-dev.conf`, `.env.dev.project` do net get overwritten once 
  it's added to the project for M2.

## [1.2.0]
### Changed
- M2: Redis now has its own `volume` so config cache and sessions persist between a `dev down && dev up`.

## [1.1.0]
### Changed
- Instead of adding Rabbitmq-server this will also add a UI that can be reached using 
localhost:15672 in your web browser.

## [1.0.1]
### Changed
- Template for M2 now also enables xdebug of composer.
- Updated the version of the template for M2 template.
- Changed mysql from 5.6 to 5.7 for M1 template.
- Changed php from 7.2 to 7.3.

### Removed
- Unused variable.
