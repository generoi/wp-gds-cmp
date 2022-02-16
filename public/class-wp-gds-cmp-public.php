<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://generogrowth.com/
 * @since      1.0.0
 *
 * @package    Wp_Gds_Cmp
 * @subpackage Wp_Gds_Cmp/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Gds_Cmp
 * @subpackage Wp_Gds_Cmp/public
 * @author     Genero <christoffer.bjorkskog@genero.fi>
 */
class Wp_Gds_Cmp_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		// perhaps load gtm if it is not available already...
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/wp-gds-cmp-public.js', array( 'jquery' ), $this->version, false );
	}

	/**
	 * Override youtube embed blocks with no-cookie parameter
	 *
	 * @since    1.0.0
	 */
	public function override_youtube_embeds($block_content, $block) {
		// ignore this code in backend
		if (is_admin()) {
			return $block_content;
		}

		// override youtube embeds url
		if ('core-embed/youtube' === $block['blockName']) {
			$block_content = str_replace('youtube.com', 'youtube-nocookie.com', $block_content);
		}

		return $block_content;
	}

	public function render_tags() {
		// if no tag manager id is set, do nothing
		if (!$gtm_id = get_option('cmp_gtm_id', '')) {
			return;
		}


		 //$dataLayer = json_encode(apply_filters('generoi/mu-plugin/gtm/datalayer', $dataLayer), JSON_UNESCAPED_UNICODE);
		 // @TODO: use i18n
		 $consentSettings = esc_html(wp_json_encode([
            'FI' => [
                'languageCode' => 'FI',
                'language' => 'Finnish',

                'buttonAcceptAll' => 'Hyväksy kaikki',
                'buttonEdit' => 'Muokkaa evästeitä',
                'buttonAcceptSelected' => 'Hyväksy valitut',

                'consents' => [
                    [
                        'id' => 'consent-necessary',
                        'label' => 'Välttämättömät',
                        'description' => 'Nämä evästeet ovat välttämättömiä, jotta verkkosivumme toimisi oikein, esimerkiksi suojaustoiminnot tai evästeiden suostumusasetukset.',
                        'necessary' => true,
                        'consent' => true,
                    ],
                    [
                        'id' => 'consent-statistics',
                        'label' => 'Tilastot',
                        'description' => 'Parantaaksemme verkkosivuamme keräämme nimettömästi tietoja tilastollisiin ja analyyttisiin tarkoituksiin. Näiden evästeiden avulla voimme esimerkiksi seurata verkkosivumme tiettyjen sivujen käyntien määrää tai kestoa, mikä auttaa meitä optimoimaan käyttäjäkokemusta.',
                        'necessary' => false,
                    ],
                    [
                        'id' => 'consent-marketing',
                        'label' => 'Markkinointi',
                        'description' => 'Nämä evästeet auttavat meitä mittaamaan ja optimoimaan markkinointitoimiamme.',
                        'necessary' => false,
                    ],
                ]
            ]
        ]));

		$this->render_tag($gtm_id, $consentSettings);


	}

	private function render_tag($gtm_id, $consentSettings) {

		?>
		<!-- Start GDS CMP -->
		<style>
		/* Prevent flash of unhydrated component. */
		gds-consent-manager:not(.hydrated) {
			display: none;
		}
		</style>
		<gds-consent-manager configs='<?= $consentSettings; ?>'>
			<gds-heading size='m' slot='headline'>Evästeasetukset</gds-heading>
			<gds-paragraph size='s' slot='description'>
			Verkkosivumme käyttää välttämättömiä evästeitä, jotta sivut toimivat ja kokemuksesi olisi vieläkin makeampi. Voit lukea lisää käyttämistämme evästeistä ja hallita asetuksiasi evästeasetussivulla.
			</gds-paragraph>
		</gds-consent-manager>
		<!-- Google Tag Manager -->
		<script>
		window.dataLayer = window.dataLayer || []
		// window.dataLayer = dataLayer
		;(function() {
		function loadGTM() {
			console.log('loadGTM exec');
			(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','<?= $gtm_id; ?>');
		}
		var consentManager = document.querySelector('gds-consent-manager')
		if (consentManager) {
			// TCF v2 API present, now check if CMP is loaded
			consentManager.addEventListener('consent', function(event) {
				console.log(event)
				// Push consent data to dataLayer for easy access in GTM.
				window.dataLayer.push({
					consentSetting: event.detail.consent,
				})
				// Now that we have all requred consent ready, we can finally load GTM.
				loadGTM()
			})
		}
		})()
		</script>
		<!-- End Google Tag Manager -->
		<!-- End GDS CMP -->


		<?php
	}
}