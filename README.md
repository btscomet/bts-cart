# API de BTSCOMET CART

Este es un API de conexión con todos los servicios de BTSCOMET para obtener un listado de productos por categoría.

## Instrucciones de Instalación

### Añadir repositorio en tu proyecto

Antes de nada, tienes que añadir al composer.json, las siguientes líneas, para conectar el repo con GitHub.

```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/btscomet/bts-cart.git"
    }
],
```

Posteriormente, instalamos el módulo en nuestro proyecto.

```SHELL
composer require btscomet/bts-cart
```

## API Categorías y Subcategorías

---------

Listar categorías

``` PHP
$catController = new CategoryController();
$categories = $catController->listCategories();
```

Listar subcategorías

``` PHP
$catController = new CategoryController();
$subcategories = $catController->listSubcategories(['subcat_nca87s68sb8nca76c7a8sc', 'subcat_na7sd6a87sd6a78sd6a78']);
```

## API Productos

---------

Listar todos los productos por categoría

``` PHP
$prodController = new ProductsController();
$products = $prodController->listProducts('cat_8a7s6da87s6d8a7sd');
```

Obtener el detalle de un producto

``` PHP
$prodController = new ProductsController();
$product = $prodController->detailProduct('prod_a8f5f167f44f4964e6c9');
```

Comprobar el Stock de un producto: Este caso es solo, si quieres hacer un check del Stock

``` PHP
$prodController = new ProductsController();
$product = $prodController->stockProduct('prod_a8f5f167f44f4964e6c9');
```

## API Checkout

---------

``` PHP
$checkoutController = new CheckoutController();
$data = [
    'products' => [
        0 => [
            'product_code' => 'prod_4b8108b34aa5fc3f4270433e45aa4599',
            'amount' => 2
        ],
        1 => [
            'product_code' => 'prod_5581df0962f39f0b260ae6d062c9c950',
            'amount' => 4
        ],
        2 => [
            'product_code' => 'prod_45f2fe1a9ff1512380b0ecc4c056a6be',
            'amount' => 1
        ],
        ...
    ]
];

$checkoutController->sendCheckoutCart('pay_99baee504a1fe91a07b', $data);
```

## Soporte

---------
Si tienes alguna duda o pregunta no tienes más que escribirnos un email a [contacto@btscomet.com]
