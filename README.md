# Third-party Drivers plugin

> **NOTE:** If you are already using Composer anyways, do not use this plugin. Just load the relevant package in your project and/or plugin's `composer.json` file directly.

> **NOTE:** Consider using one of the following more specific driver plugins instead:

- [Winter.DriverAWS](https://github.com/wintercms/wn-driveraws-plugin) - Driver that adds support for the AWS SDK, S3 storage driver, & SES mailer.
- [Winter.DriverMailgun](https://github.com/wintercms/wn-drivermailgun-plugin) - Driver that adds support for the Mailgun mailer.
- [Winter.DriverMandrill](https://github.com/wintercms/wn-drivermandrill-plugin) - Driver that adds support for the Mandrill mailer.
- [Winter.DriverPostmark](https://github.com/wintercms/wn-driverpostmark-plugin) - Driver that adds support for the Postmark mailer.
- [Winter.DriverSendGrid](https://github.com/wintercms/wn-driversendgrid-plugin) - Driver that adds support for the SendGrid mailer.
- [Winter.DriverSparkPost](https://github.com/wintercms/wn-driversparkpost-plugin) - Driver that adds support for the SparkPost mailer.

This plugin is required when working with some third party services in Winter CMS. Provides drivers used by services in Queue, Mail and Storage. It is intentionally left out by default in order to keep the number of Composer dependencies low in a default Winter CMS install.

The Composer packages introduced by this plugin are listed below:

- **pda/pheanstalk** at version `~3.0`
- **iron-io/iron_mq** at version `~1.5`
- **predis/predis** at version `~1.0`
- **guzzlehttp/guzzle** at version `~6.3`, with optional support for version `~7.0`.

### Installation

Run the following command in your Winter CMS installation directory:

```
composer require winter/wn-drivers-plugin
```
