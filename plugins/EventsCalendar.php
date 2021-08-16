<?php
/**
 * EventsCalendar Plugin.
 *
 * @package BluehouseGroup\Composer\WPProPlugins\Plugins
 */

namespace BluehouseGroup\Composer\WPProPlugins\Plugins;

/**
 * GravityForms class.
 */
class EventsCalendar {

	/**
	 * The version number of the plugin to download.
	 *
	 * @var string Version number.
	 */
	protected $version = '';

	/**
	 * The slug of which Gravity Forms plugin to download.
	 *
	 * @var string Plugin slug.
	 */
	protected $slug = '';

	/**
	 * GravityForms constructor.
	 *
	 * @param string $version
	 * @param string $slug
	 */
	public function __construct( $version = '', $slug = 'events-calendar-pro' ) {
		$this->version = $version;
		$this->slug    = $slug;
	}

	/**
	 * Get the download URL for this plugin.
	 *
	 * @return string
	 */
	public function getDownloadUrl() {
		$key = strtoupper(preg_replace('/-/', '_', $this->slug)) . '_KEY';
		return 'https://pue.tri.be/api/plugins/v2/download?plugin=' . $this->slug . '&version=' . $this->version . '&key=' . getenv( $key );
	}

}
