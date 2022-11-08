# WP Proud IP Block

Provides IP address blocking based on the MaxMind GeoLite 2 API. This currently integrates with Gravity Forms version > 2.5 via `gform_validation` filter.

[ProudCity](http://proudcity.com) is a Wordpress platform for modern, standards-compliant municipal websites.

All bug reports, feature requests and other issues should be added to the [wp-proudcity Issue Queue](https://github.com/proudcity/wp-proudcity/issues).

## Filters

**`proud_ip_block_allow_countries`**

This filter allows you to change the list of allowed countries. By default we only allow `US` as a valid country. To add Canada we'd use the following code.

```php
function add_canada( $countries ){

    $countries[] = 'CA';

    return $countries;

}
add_filter( 'proud_ip_block_allowed_countries', 'add_canada', 10, 1 );
```

Country codes conform to [MaxMind ISO standards](https://dev.maxmind.com/geoip/docs/databases/city-and-country?lang=en). [See ISO Country codes](https://en.wikipedia.org/wiki/ISO_3166-1).