# PHP Project Template

A template for speeding up the process of creating new PHP projects. Includes `phpunit` and `php-cs-fixer`.

### Don't forget to update files!
1. `composer.json` (`name`, `description`, `keywords`, `authors`, `namespace`)
2. `CHANGELOG.md`
3. `README.md`
### Optionally you can update
1. `LICENSE`
2. `.editorconig`
3. `.gitignore`
4. `.gitattributes`
5. `.php-cs-fixer.dist.php`
6. `phpunit.xml.dist`

## Usage

You can run tests with composer command:

```bash
$ composer test
```

Check coding standards:

```bash
$ composer cs-check
```

Fix coding standards:

```bash
$ composer cs-fix
```
