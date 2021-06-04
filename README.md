# OS2Web Person information Drupal module  [![Build Status](https://travis-ci.com/OS2web/os2web_person_information.svg?branch=master)](https://travis-ci.com/OS2web/os2web_person_information)

## Module purpose

Provides person information content type, taxonomy vocabulary for grouping
 persons, paragraph with reference to group, view by person group.

## Install

1. Module is available to download via composer.
    ```
    composer require os2web/os2web_person_information
    drush en os2web_person_information
    ```

1. After activation, run cron to trigger the import.

## Update
Updating process for OS2Web Person information module is similar to usual Drupal 8 module.
Use Composer's built-in command for listing packages that have updates available:

```
composer outdated os2web/os2web_person_information
```

## Automated testing and code quality
See [OS2Web testing and CI information](https://github.com/OS2Web/docs#testing-and-ci)

## Contribution

Project is opened for new features and os course bugfixes.
If you have any suggestion or you found a bug in project, you are very welcome
to create an issue in github repository issue tracker.
For issue description there is expected that you will provide clear and
sufficient information about your feature request or bug report.

### Code review policy
See [OS2Web code review policy](https://github.com/OS2Web/docs#code-review)

### Git name convention
See [OS2Web git name convention](https://github.com/OS2Web/docs#git-guideline)
