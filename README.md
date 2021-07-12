# Third-party Drivers plugin

This plugin is required when working with some third party services in Winter CMS. Provides drivers used by services in Queue, Mail and Storage. It is intentionally left out by default in order to keep the number of Composer dependencies low in a default Winter CMS install.

The Composer packages introduced by this plugin are listed below:

- **aws/aws-sdk-php** at version `~3.1`
- **pda/pheanstalk** at version `~3.0`
- **iron-io/iron_mq** at version `~1.5`
- **predis/predis** at version `~1.0`
- **league/flysystem-rackspace** at version `~1.0`
- **league/flysystem-aws-s3-v3** at version `~1.0`
- **guzzlehttp/guzzle** at version `~6.3`, with optional support for version `~7.0`.

### Installation

Run the following command in your Winter CMS installation directory:

```
composer require winter/wn-drivers-plugin
```
