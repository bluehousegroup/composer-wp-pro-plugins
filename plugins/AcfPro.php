<?php
/**
 * ACF Pro Plugin.
 *
 * @package BluehouseGroup\Composer\WPProPlugins\Plugins
 */

namespace BluehouseGroup\Composer\WPProPlugins\Plugins;

/**
 * AcfPro class.
 */
class AcfPro {

	/**
	 * The version number of the plugin to download.
	 *
	 * @var string Version number.
	 */
	protected $version = '';

	/**
	 * AcfPro constructor.
	 *
	 * @param string $version
	 */
	public function __construct( $version = '' ) {
		$this->version = $version;
	}

	/**
	 * Get the download URL for this plugin.
	 *
	 * @return string
	 */
	public function getDownloadUrl() {
		return 'https://connect.advancedcustomfields.com/index.php?p=pro&a=download&k=' . getenv( 'ACF_PRO_KEY' ) . '&t=' . $this->version;
	}

}
