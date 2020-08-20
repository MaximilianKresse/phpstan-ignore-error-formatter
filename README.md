# phpstan-ignore-error-formatter
An error formatter wrapper to ignore the exit code of the wrapped error formatter and always return 0.


At the moment only a wrapper for the teamcity error formatter is implemented.

# Usage
```
composer require maximilian-kresse/phpstan-ignore-error-formatter ^1.0
```

Before you can start using the error formatter, you have to register it in the configuration file:

```neon
services:
	errorFormatter.teamcity-ignore-error:
		class: MaximilianKresse\PhpstanIgnoreErrorFormatter\TeamcityIgnoreErrorFormatter
```

```
phpstan analyse --error-format teamcity-ignore-error
```