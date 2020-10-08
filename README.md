<h1 align="center">
    <a href="https://odiseo.com.ar/" target="_blank" title="Odiseo">
        <img src="https://github.com/odiseoteam/OdiseoBlogBundle/blob/master/logo_odiseo.png" alt="Odiseo" width="300px" />
    </a>
    <br />
    Odiseo Blog Bundle
    <br />
    <a href="https://packagist.org/packages/odiseoteam/blog-bundle" title="License" target="_blank">
        <img src="https://img.shields.io/packagist/l/odiseoteam/blog-bundle.svg" />
    </a>
    <a href="https://packagist.org/packages/odiseoteam/blog-bundle" title="Version" target="_blank">
        <img src="https://img.shields.io/packagist/v/odiseoteam/blog-bundle.svg" />
    </a>
    <a href="http://travis-ci.org/odiseoteam/OdiseoBlogBundle" title="Build status" target="_blank">
        <img src="https://img.shields.io/travis/odiseoteam/OdiseoBlogBundle/master.svg" />
    </a>
    <a href="https://scrutinizer-ci.com/g/odiseoteam/OdiseoBlogBundle/" title="Scrutinizer" target="_blank">
        <img src="https://img.shields.io/scrutinizer/g/odiseoteam/OdiseoBlogBundle.svg" />
    </a>
    <a href="https://packagist.org/packages/odiseoteam/blog-bundle" title="Total Downloads" target="_blank">
        <img src="https://poser.pugx.org/odiseoteam/blog-bundle/downloads" />
    </a>
</h1>

## Description

This Bundle add blog capabilities to your Symfony project. It is admin agnostic, so you need to integrate on your preferred admin system.

### Features

With this bundle you will get some models to manage a blog on your proyect. Also it comes with a Sylius Resource and Sylius
Grid integrations.

Also this bundle uses the [FOSCKEditorBundle](https://symfony.com/doc/current/bundles/FOSCKEditorBundle/installation.html). Follow the official instructions to install it properly.

## Installation

1. Run `composer require odiseoteam/blog-bundle`.

2. Add the plugin to the AppKernel but add it before SyliusResourceBundle. To do that you need change the registerBundles. This bundle
uses the FOSCKEditorBundle so you need add it to the kernel too.

```php
public function registerBundles(): array
{
    $preResourceBundles = [
        new \Odiseo\BlogBundle\OdiseoBlogBundle(),
    ];

    $bundles = [
        new \Sylius\Bundle\ResourceBundle\SyliusResourceBundle(),
        new \FOS\CKEditorBundle\FOSCKEditorBundle(),
        ...
    ];

    return array_merge($preResourceBundles, parent::registerBundles(), $bundles);
}
```
 
3. Import the configurations on your config.yml:
 
```yml
    - { resource: "@OdiseoBlogBundle/Resources/config/config.yml" }
```
 
4. Import the routes:
 
```yml    
odiseo_blog:
    prefix: /blog
    resource: "@OdiseoBlogBundle/Resources/config/routing/main.yml"
```

5. Finish the installation updatating the database schema and installing assets:
   
```
php bin/console doctrine:schema:update --force
```

## Usage

### Available routes

##### Article comment create

You can use this partial route to embed the comment form:

```twig
{{ render(url('odiseo_blog_partial_comment_create', {'slug': article.slug, 'template': 'Main/Blog/_comment_create.html.twig'})) }}
```

## Test the bundle

You can follow the instructions to test this bundle in the proper documentation page: [Test the bundle](doc/tests.md).
    
## Credits

This plugin is maintained by <a href="https://odiseo.com.ar">Odiseo</a>, a team of senior developers. Contact us: <a href="mailto:team@odiseo.com.ar">team@odiseo.com.ar</a>.
