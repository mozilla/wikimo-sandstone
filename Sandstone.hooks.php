<?php
/**
 * Hooks for Sandstone extension
 *
 * @file
 * @ingroup Extensions
 */

class SandstoneHooks {
	/**
	 * Add welcome module to the load queue of all pages
	 */
	public static function onBeforePageDisplay( OutputPage &$out, Skin &$skin ) {
    $out->addModules( 'ext.Sandstone.main' );

		// Always return true, indicating that parser initialization should
		// continue normally.
		return true;
  }
}
