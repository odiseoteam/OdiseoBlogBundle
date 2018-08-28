## Test the bundle

We are using PHPSpec and PHPUnit to test this bundle.

### How to run the tests

From the plugin root directory, run the following commands:

    $ (cd tests/Application && bin/console assets:install web -e test)
    
    $ (cd tests/Application && bin/console doctrine:database:create -e test)
    $ (cd tests/Application && bin/console doctrine:schema:create -e test)

  - PHPUnit

    ```bash
    $ bin/phpunit
    ```

  - PHPSpec

    ```bash
    $ bin/phpspec run
    ```

### Opening Symfony with this bundle

  - Using `test` environment:

    ```bash
    $ (cd tests/Application && bin/console server:run -d web -e test)
    ```
    
  - Using `dev` environment:

    ```bash
    $ (cd tests/Application && bin/console sylius:fixtures:load -e dev)
    $ (cd tests/Applicationº && bin/console server:run -d web -e dev)