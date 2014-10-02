<?php
$wgExtensionCredits['other'][] = array(
    'path' => __FILE__,
    'name' => 'Sandstone',
    'author' => 'Christie Koehler', 
    'url' => 'https://github.com/christi3k/mw-sandstone/', 
    'description' => 'This extension loads css required to make vector have Mozilla (sandstone) look and feel.',
    'version'  => .1,
    'license-name' => "",   // Short name of the license, links LICENSE or COPYING file if existing - string, added in 1.23.0
  );

//$wgMessagesDirs['Sandstone'] = __DIR__ . '/i18n';
//
// Initialize an easy to use shortcut:
$dir = dirname( __FILE__ );
$dirbasename = basename( $dir );

$wgAutoloadClasses['SandstoneHooks'] = $dir . '/Sandstone.hooks.php';

$wgResourceModules['ext.Sandstone.main'] = array(
  'styles' => array('modules/ext.Sandstone.main.css'),
  'messages' => array(),
  'dependencies' => array(),
	'localBasePath' => $dir,
	'remoteExtPath' => $dirbasename,
);

$wgHooks['BeforePageDisplay'][] = 'SandstoneHooks::onBeforePageDisplay';
