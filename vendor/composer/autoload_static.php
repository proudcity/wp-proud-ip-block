<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2e55e66fa83dc4f3a4fe898cd1a3f91
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MaxMind\\WebService\\' => 19,
            'MaxMind\\Exception\\' => 18,
            'MaxMind\\Db\\' => 11,
        ),
        'G' => 
        array (
            'GeoIp2\\' => 7,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MaxMind\\WebService\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind/web-service-common/src/WebService',
        ),
        'MaxMind\\Exception\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind/web-service-common/src/Exception',
        ),
        'MaxMind\\Db\\' => 
        array (
            0 => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db',
        ),
        'GeoIp2\\' => 
        array (
            0 => __DIR__ . '/..' . '/geoip2/geoip2/src',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
    );

    public static $classMap = array (
        'Composer\\CaBundle\\CaBundle' => __DIR__ . '/..' . '/composer/ca-bundle/src/CaBundle.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'GeoIp2\\Database\\Reader' => __DIR__ . '/..' . '/geoip2/geoip2/src/Database/Reader.php',
        'GeoIp2\\Exception\\AddressNotFoundException' => __DIR__ . '/..' . '/geoip2/geoip2/src/Exception/AddressNotFoundException.php',
        'GeoIp2\\Exception\\AuthenticationException' => __DIR__ . '/..' . '/geoip2/geoip2/src/Exception/AuthenticationException.php',
        'GeoIp2\\Exception\\GeoIp2Exception' => __DIR__ . '/..' . '/geoip2/geoip2/src/Exception/GeoIp2Exception.php',
        'GeoIp2\\Exception\\HttpException' => __DIR__ . '/..' . '/geoip2/geoip2/src/Exception/HttpException.php',
        'GeoIp2\\Exception\\InvalidRequestException' => __DIR__ . '/..' . '/geoip2/geoip2/src/Exception/InvalidRequestException.php',
        'GeoIp2\\Exception\\OutOfQueriesException' => __DIR__ . '/..' . '/geoip2/geoip2/src/Exception/OutOfQueriesException.php',
        'GeoIp2\\Model\\AbstractModel' => __DIR__ . '/..' . '/geoip2/geoip2/src/Model/AbstractModel.php',
        'GeoIp2\\Model\\AnonymousIp' => __DIR__ . '/..' . '/geoip2/geoip2/src/Model/AnonymousIp.php',
        'GeoIp2\\Model\\Asn' => __DIR__ . '/..' . '/geoip2/geoip2/src/Model/Asn.php',
        'GeoIp2\\Model\\City' => __DIR__ . '/..' . '/geoip2/geoip2/src/Model/City.php',
        'GeoIp2\\Model\\ConnectionType' => __DIR__ . '/..' . '/geoip2/geoip2/src/Model/ConnectionType.php',
        'GeoIp2\\Model\\Country' => __DIR__ . '/..' . '/geoip2/geoip2/src/Model/Country.php',
        'GeoIp2\\Model\\Domain' => __DIR__ . '/..' . '/geoip2/geoip2/src/Model/Domain.php',
        'GeoIp2\\Model\\Enterprise' => __DIR__ . '/..' . '/geoip2/geoip2/src/Model/Enterprise.php',
        'GeoIp2\\Model\\Insights' => __DIR__ . '/..' . '/geoip2/geoip2/src/Model/Insights.php',
        'GeoIp2\\Model\\Isp' => __DIR__ . '/..' . '/geoip2/geoip2/src/Model/Isp.php',
        'GeoIp2\\ProviderInterface' => __DIR__ . '/..' . '/geoip2/geoip2/src/ProviderInterface.php',
        'GeoIp2\\Record\\AbstractPlaceRecord' => __DIR__ . '/..' . '/geoip2/geoip2/src/Record/AbstractPlaceRecord.php',
        'GeoIp2\\Record\\AbstractRecord' => __DIR__ . '/..' . '/geoip2/geoip2/src/Record/AbstractRecord.php',
        'GeoIp2\\Record\\City' => __DIR__ . '/..' . '/geoip2/geoip2/src/Record/City.php',
        'GeoIp2\\Record\\Continent' => __DIR__ . '/..' . '/geoip2/geoip2/src/Record/Continent.php',
        'GeoIp2\\Record\\Country' => __DIR__ . '/..' . '/geoip2/geoip2/src/Record/Country.php',
        'GeoIp2\\Record\\Location' => __DIR__ . '/..' . '/geoip2/geoip2/src/Record/Location.php',
        'GeoIp2\\Record\\MaxMind' => __DIR__ . '/..' . '/geoip2/geoip2/src/Record/MaxMind.php',
        'GeoIp2\\Record\\Postal' => __DIR__ . '/..' . '/geoip2/geoip2/src/Record/Postal.php',
        'GeoIp2\\Record\\RepresentedCountry' => __DIR__ . '/..' . '/geoip2/geoip2/src/Record/RepresentedCountry.php',
        'GeoIp2\\Record\\Subdivision' => __DIR__ . '/..' . '/geoip2/geoip2/src/Record/Subdivision.php',
        'GeoIp2\\Record\\Traits' => __DIR__ . '/..' . '/geoip2/geoip2/src/Record/Traits.php',
        'GeoIp2\\Util' => __DIR__ . '/..' . '/geoip2/geoip2/src/Util.php',
        'GeoIp2\\WebService\\Client' => __DIR__ . '/..' . '/geoip2/geoip2/src/WebService/Client.php',
        'MaxMind\\Db\\Reader' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader.php',
        'MaxMind\\Db\\Reader\\Decoder' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader/Decoder.php',
        'MaxMind\\Db\\Reader\\InvalidDatabaseException' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader/InvalidDatabaseException.php',
        'MaxMind\\Db\\Reader\\Metadata' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader/Metadata.php',
        'MaxMind\\Db\\Reader\\Util' => __DIR__ . '/..' . '/maxmind-db/reader/src/MaxMind/Db/Reader/Util.php',
        'MaxMind\\Exception\\AuthenticationException' => __DIR__ . '/..' . '/maxmind/web-service-common/src/Exception/AuthenticationException.php',
        'MaxMind\\Exception\\HttpException' => __DIR__ . '/..' . '/maxmind/web-service-common/src/Exception/HttpException.php',
        'MaxMind\\Exception\\InsufficientFundsException' => __DIR__ . '/..' . '/maxmind/web-service-common/src/Exception/InsufficientFundsException.php',
        'MaxMind\\Exception\\InvalidInputException' => __DIR__ . '/..' . '/maxmind/web-service-common/src/Exception/InvalidInputException.php',
        'MaxMind\\Exception\\InvalidRequestException' => __DIR__ . '/..' . '/maxmind/web-service-common/src/Exception/InvalidRequestException.php',
        'MaxMind\\Exception\\IpAddressNotFoundException' => __DIR__ . '/..' . '/maxmind/web-service-common/src/Exception/IpAddressNotFoundException.php',
        'MaxMind\\Exception\\PermissionRequiredException' => __DIR__ . '/..' . '/maxmind/web-service-common/src/Exception/PermissionRequiredException.php',
        'MaxMind\\Exception\\WebServiceException' => __DIR__ . '/..' . '/maxmind/web-service-common/src/Exception/WebServiceException.php',
        'MaxMind\\WebService\\Client' => __DIR__ . '/..' . '/maxmind/web-service-common/src/WebService/Client.php',
        'MaxMind\\WebService\\Http\\CurlRequest' => __DIR__ . '/..' . '/maxmind/web-service-common/src/WebService/Http/CurlRequest.php',
        'MaxMind\\WebService\\Http\\Request' => __DIR__ . '/..' . '/maxmind/web-service-common/src/WebService/Http/Request.php',
        'MaxMind\\WebService\\Http\\RequestFactory' => __DIR__ . '/..' . '/maxmind/web-service-common/src/WebService/Http/RequestFactory.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2e55e66fa83dc4f3a4fe898cd1a3f91::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2e55e66fa83dc4f3a4fe898cd1a3f91::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf2e55e66fa83dc4f3a4fe898cd1a3f91::$classMap;

        }, null, ClassLoader::class);
    }
}
