<?php
return array(
	'date.format' => 'd.m.Y',   // Date format to be used in article page (not for routes)
	'author.name' => 'ThYpHoOn', // Global author name
	'site.name'  => 'nik.re',   // Site name (Global)
	'site.title' => 'My blog about programming, music and home automation',  // Site default title (Global)
    'site.baseurl'      => 'https://nik.re',   // Site URL (Global)
    'site.description'  => 'This blog is a private blog about programming, music and home automation',  // Site default description (Global)
	'article.path'=> './articles',      // Path to articles
	'themes.path' => './themes',  // Path to templates
	'active.theme'  => 'nik',  // Current active template
	'layout.file' => 'layout',    // Site layout file
	'file.extension' => '.txt',   // file extension of articles
	'disqus.username' => '',   // Your disqus username or false (Global)
	'markdown'		=> true, //Enable of disable markdown parsing.
	'base.directory'  => '', // *deprecated*, instead use assets.prefix
	'assets.prefix' => '', // prefix to be added with assets files
	'prefix' => '',   // prefix to be added with all URLs (not to assets). eg : '/blog'
	'google.analytics' => false, // Google analytics code. set false to disable
    'cache' => array(
        'enabled'   => true, // Enable/Disable cache
        'expiry'    => 24, // Cache expiry, in hours. -1 for no expiry
        'path'      => './cache'
    ),
	// Define routes
	'routes' => array(
			// Site root
			'__root__'=> array(
					'route' => '/',
					'template'=>'index',
					'layout' => 'layout_home'
				),
			'article' => array(
					'route' => '/:year/:month/:date/:article',
					'template'=>'article',
					'conditions' => array(
										 'year' => '(19|20)\d\d'
										,'month'=>'([1-9]|[01][0-9])'
										,'date'=>'([1-9]|[0-3][0-9])'
										)
				),
			'category' => array(
					'route' => '/category/:category',
					'template' => 'index'
				),
			'tag' => array(
					'route' => '/tag/:tag',
					'template' => 'index'
				),
			'archives' => array(
					'route' => '/archives(/:year(/:month(/:date)))',
					'template' => 'archives',
					'conditions' => array(
										'year' => '(19|20)\d\d',
										'month'=>'([1-9]|[01][0-2])'
										)
				),
			'about' => array(
					'route' => '/about',
					'template' => 'about'
				),
			'imprint' => array(
					'route' => '/imprint',
					'template' => 'imprint'
				),
			'rss' => array(
					'route' => '/feed/rss(.xml)',
					'template' => 'rss',
					'layout' => false,
				),
			'atom' => array(
					'route' => '/feed(/atom(.xml))',
					'template' => 'atom',
					'layout' => false,
				)
		)
);
