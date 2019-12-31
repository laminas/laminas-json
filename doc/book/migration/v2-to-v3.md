# Migrating from v2 to v3

Version 3 is the first significant departure in the laminas-json API. In
particular, it features the removal of two features to new packages.

## laminas-json-server

The `Laminas\Json\Server` subcomponent was extracted to a new component,
[laminas-json-server](https://docs.laminas.dev/laminas-json-server). Install it
using:

```bash
$ composer install laminas/laminas-json-server
```

All classes and functionality remain the same as in previous versions of
laminas-json.

## XML to JSON support

v2 releases of laminas-json provided `Laminas\Json\Json::fromXml()`, which could be
used to convert an XML document to JSON. This functionality has been extracted
to a new component, [laminas-xml2json](https://docs.laminas.dev/laminas-xml2json).
Install it using:

```bash
$ composer install laminas/laminas-xml2json
```

In order to use the functionality, you will need to modify your calls from
`Laminas\Json\Json::fromXml()` to instead use `Laminas\Xml2Json\Xml2Json::fromXml()`.
