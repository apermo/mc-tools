# MC Tools

[![PHP CI](https://github.com/apermo/mc-tools/actions/workflows/ci.yml/badge.svg)](https://github.com/apermo/mc-tools/actions/workflows/ci.yml)
[![License: GPL v2+](https://img.shields.io/badge/License-GPLv2+-blue.svg)](LICENSE)

A WordPress plugin providing a collection of Gutenberg blocks for Minecraft.

## Requirements

- PHP 8.1+
- WordPress 6.2+
- Composer

## Installation

```bash
composer install
```

## Development

```bash
composer cs              # Run PHPCS
composer cs:fix          # Fix PHPCS violations
composer analyse         # Run PHPStan
composer test            # Run all tests
composer test:unit       # Run unit tests only
composer test:integration # Run integration tests only
```

### Local WordPress Environment

```bash
ddev start && ddev orchestrate
```

Uses [ddev-orchestrate](https://github.com/apermo/ddev-orchestrate) to download WordPress, create `wp-config.php`,
install, and activate the plugin.

### Git Hooks

Enable the pre-commit hook (PHPCS + PHPStan on staged files):

```bash
git config core.hooksPath .githooks
```

## Template Sync

To pull upstream template changes:

```bash
git remote add template https://github.com/apermo/template-wordpress.git
git fetch template
git checkout -b chore/sync-template
git merge template/main --allow-unrelated-histories
```

## License

[GPL-2.0-or-later](LICENSE)
