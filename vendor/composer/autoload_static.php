<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit01c8cbec6f164ea05d00ef6e890b430e
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Facturapi\\Exceptions\\Facturapi_Exception' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/Exceptions/Facturapi_Exception.php',
        'Facturapi\\Facturapi' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/Facturapi.php',
        'Facturapi\\Http\\BaseClient' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/Http/BaseClient.php',
        'Facturapi\\InvoiceRelation' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/InvoiceRelation.php',
        'Facturapi\\InvoiceType' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/InvoiceType.php',
        'Facturapi\\PaymentForm' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/PaymentForm.php',
        'Facturapi\\Resources\\Catalogs' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/Resources/Catalogs.php',
        'Facturapi\\Resources\\Customers' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/Resources/Customers.php',
        'Facturapi\\Resources\\Invoices' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/Resources/Invoices.php',
        'Facturapi\\Resources\\Organizations' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/Resources/Organizations.php',
        'Facturapi\\Resources\\Products' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/Resources/Products.php',
        'Facturapi\\Resources\\Receipts' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/Resources/Receipts.php',
        'Facturapi\\Resources\\Retentions' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/Resources/Retentions.php',
        'Facturapi\\Resources\\Tools' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/Resources/Tools.php',
        'Facturapi\\TaxType' => __DIR__ . '/..' . '/facturapi/facturapi-php/src/TaxType.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit01c8cbec6f164ea05d00ef6e890b430e::$classMap;

        }, null, ClassLoader::class);
    }
}
