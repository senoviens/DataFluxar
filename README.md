# data-fluxar

A simple PHP toolkit for managing data pipeline flows.

## Install
Add to your project via composer:
```bash
composer require your-vendor/data-fluxar
```

## Usage
Basic example of initializing the pipeline:

```php
use Datafluxar\Datafluxar;

$flux = new Datafluxar();
$flux->process($data);
```

## Testing
Run the test suite:
```bash
./vendor/bin/phpunit tests/DatafluxarTest.php
```

## License
MIT License.





