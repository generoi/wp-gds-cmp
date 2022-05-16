<?php

trait HasLanguageConfigs
{

    public $languagesArray = [
        'FI' => [
            'languageCode' => "fi",
            'language' => "Finnish",

            'buttonAcceptAll' => 'Hyväksy kaikki',
            'buttonEdit' => 'Muokkaa evästeitä',
            'buttonAcceptSelected' => 'Hyväksy valitut',

            'consents' => [
                [
                    'id' => 'consent-necessary',
                    'label' => 'Necessary',
                    'description' => 'These cookies are technically required for our core website to work properly, e.g. security functions or your cookie consent preferences.',
                    'necessary' => true,
                    'consent' => true,
                ],
                [
                    'id' => 'consent-statistics',
                    'label' => 'Statistics',
                    'description' => 'In order to improve our website going forward, we anonymously collect data for statistical and analytical purposes. With these cookies we can, for instance, monitor the number or duration of visits of specific pages of our website helping us in optimizing user experience.',
                    'necessary' => false,
                ],
                [
                    'id' => 'consent-marketing',
                    'label' => 'Marketing',
                    'description' => 'These cookies help us in measuring and optimizing our marketing efforts.',
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
                    'label' => 'Necessary',
                    'description' => 'These cookies are technically required for our core website to work properly, e.g. security functions or your cookie consent preferences.',
                    'necessary' => true,
                    'consent' => true,
                ],
                [
                    'id' => 'consent-statistics',
                    'label' => 'Statistics',
                    'description' => 'In order to improve our website going forward, we anonymously collect data for statistical and analytical purposes. With these cookies we can, for instance, monitor the number or duration of visits of specific pages of our website helping us in optimizing user experience.',
                    'necessary' => false,
                ],
                [
                    'id' => 'consent-marketing',
                    'label' => 'Marketing',
                    'description' => 'These cookies help us in measuring and optimizing our marketing efforts.',
                    'necessary' => false,
                ],
            ]
        ]
    ];



    public function test(): string
    {
        return "foo";
    }

}
