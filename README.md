<p align="center"><a href="https://torrentpier.com"><img src="https://torrentpier.com/styles/default/xenforo/bull-logo.svg" width="400px" alt="TorrentPier" /></a></p>

<p align="center">
  TorrentPier Translations
  <br/>
</p>

<p align="center">
  <a href="https://github.com/torrentpier/translations/blob/master/LICENSE"><img src="https://img.shields.io/github/license/torrentpier/translations" alt="License"></a>
  <a href="https://packagist.org/packages/torrentpier/translations"><img src="https://img.shields.io/packagist/stars/torrentpier/translations" alt="Stars Packagist"></a>
  <a href="https://crowdin.com/project/torrentpier"><img src="https://badges.crowdin.net/torrentpier/localized.svg" alt="Crowdin"></a>
  <img src="https://img.shields.io/github/repo-size/torrentpier/translations" alt="Size">
</p>

# TorrentPier Translations

Composer package containing TorrentPier localization files, automatically synchronized from the [TorrentPier Crowdin project](https://crowdin.com/project/torrentpier).

## About

This repository serves as a standalone translation library for TorrentPier, containing community-contributed translations in 48+ languages. All translations are managed through Crowdin, enabling collaborative localization with quality control and consistency checks.

## Installation

Install via Composer:

```bash
composer require torrentpier/translations
```

**Requirements:** PHP 8.2 or higher

## Supported Languages

The package includes translations for 48 languages, including but not limited to:

- English (source)
- Russian, Ukrainian, Belarusian
- German, French, Spanish, Italian
- Polish, Czech, Slovak
- Japanese, Chinese, Korean
- Arabic, Hebrew
- And many more...

For the complete list, see the [`/languages`](./languages) directory.

## Usage

After installation, language files are available in the `vendor/torrentpier/translations/languages/` directory. Each language uses its two-letter ISO 639-1 code:

```
vendor/torrentpier/translations/languages/
├── en/       # English (source)
├── ru/       # Russian
├── de/       # German
├── fr/       # French
└── ...
```

Each language directory contains:
- `main.php` - Primary translation strings
- `email/` - Email template translations
- `html/` - HTML template translations

## Contributing Translations

All translations are managed through **Crowdin** to ensure quality and consistency.

### How to Contribute

1. **Join the project**: Visit [crowdin.com/project/torrentpier](https://crowdin.com/project/torrentpier)
2. **Select your language**: Choose an existing language or request a new one
3. **Start translating**: Use Crowdin's interface to translate strings
4. **Review and vote**: Help review other translations for quality

### Why Crowdin?

- **No technical knowledge required** - translate directly in your browser
- **Translation memory** - consistent terminology across the project
- **Quality assurance** - built-in checks for formatting, placeholders, and more
- **Collaboration** - vote on translations and discuss with other contributors
- **Automatic synchronization** - approved translations sync to this repository

### For Developers

This repository is automatically synchronized with Crowdin. **Do not edit translation files directly** - all manual changes will be overwritten on the next sync.

To update translations:
1. Make changes on Crowdin
2. Wait for automatic synchronization (or trigger manually if you have access)
3. Update your `composer.lock` to get the latest version

## Development

### Crowdin Configuration

The repository includes a `crowdin.yml` configuration file that defines:
- Source language location (`/languages/source/`)
- Translation file patterns
- Target language directory structure

### Syncing Process

Translations are synchronized from Crowdin to this repository through:
1. Translators work on Crowdin platform
2. Translations are reviewed and approved by proofreaders
3. Approved translations are automatically pushed to this repository
4. New package versions are tagged and released

## Support

- **Translations issues**: [crowdin.com/project/torrentpier](https://crowdin.com/project/torrentpier)
- **Package issues**: [github.com/torrentpier/torrentpier/issues](https://github.com/torrentpier/torrentpier/issues)
- **Community**: [torrentpier.com](https://torrentpier.com)
- **Email**: support@torrentpier.com

## License

This package is open-sourced software licensed under the [MIT license](LICENSE).

## Credits

Maintained by the TorrentPier team and translated by the amazing community of contributors on Crowdin. Thank you to everyone who helps make TorrentPier accessible to users worldwide!
