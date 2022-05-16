<?php

$languagesArray = [
    'FI' => [
        'languageCode' => "fi",
        'language' => "Finnish",

        'buttonAcceptAll' => 'Hyväksy kaikki',
        'buttonEdit' => 'Muokkaa evästeitä',
        'buttonAcceptSelected' => 'Hyväksy valitut',

        'consents' => [
            [
                'id' => 'consent-necessary',
                'label' => __('Necessary', 'wp-gds-cmp'),
                'description' => __('These cookies are technically required for our core website to work properly, e.g. security functions or your cookie consent preferences.', 'wp-gds-cmp'),
                'necessary' => true,
                'consent' => true,
            ],
            [
                'id' => 'consent-statistics',
                'label' => __('Statistics', 'wp-gds-cmp'),
                'description' => __('In order to improve our website going forward, we anonymously collect data for statistical and analytical purposes. With these cookies we can, for instance, monitor the number or duration of visits of specific pages of our website helping us in optimizing user experience.', 'wp-gds-cmp'),
                'necessary' => false,
            ],
            [
                'id' => 'consent-marketing',
                'label' => __('Marketing', 'wp-gds-cmp'),
                'description' => __('These cookies help us in measuring and optimizing our marketing efforts.', 'wp-gds-cmp'),
                'necessary' => false,
            ],
        ]
    ],
    'SV' => [
        'languageCode' => "sv",
        'language' => "Swedish",

        'buttonAcceptAll' => 'Godkänn alla',
        'buttonEdit' => 'Redigera cookies',
        'buttonAcceptSelected' => 'Godkänn valda',

        'consents' => [
            [
                'id' => 'consent-necessary',
                'label' => __('Necessary', 'wp-gds-cmp'),
                'description' => __('These cookies are technically required for our core website to work properly, e.g. security functions or your cookie consent preferences.', 'wp-gds-cmp'),
                'necessary' => true,
                'consent' => true,
            ],
            [
                'id' => 'consent-statistics',
                'label' => __('Statistics', 'wp-gds-cmp'),
                'description' => __('In order to improve our website going forward, we anonymously collect data for statistical and analytical purposes. With these cookies we can, for instance, monitor the number or duration of visits of specific pages of our website helping us in optimizing user experience.', 'wp-gds-cmp'),
                'necessary' => false,
            ],
            [
                'id' => 'consent-marketing',
                'label' => __('Marketing', 'wp-gds-cmp'),
                'description' => __('These cookies help us in measuring and optimizing our marketing efforts.', 'wp-gds-cmp'),
                'necessary' => false,
            ],
        ]
    ]
];

?>