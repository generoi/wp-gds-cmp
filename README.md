# WP GDS CMP

This plugin embeds the [GDS Consent Manager](https://gds.generogrowth.com/master/?path=/story/complex-components-consentmanager--options) tag on a wp site using a theme that has the Genero Design System.

## Installation
`composer require generoi/wp-gds-cmp`

## Requirements
genero-design-system version 4.0.0-beta.16 or higher.

## Filters
### Add consents
```sh
add_filter( 'gds_cmp_consents', function($consents) {
    $consents[] = [
        'id' => 'my-new-consent',
        'label' => __('My new consent', 'wp-gds-cmp'),
        'description' => __('This is a description of my new consent.', 'wp-gds-cmp'),
        'necessary' => false,
    ];
    return $consents;
});
```

## Screenshots

![Initial screen](assets/screenshot-1.png)

![Edit cookies](assets/screenshot-2.png)

![Details](assets/screenshot-3.png)

