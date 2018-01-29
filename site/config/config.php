<?php

/*
---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby.

If you have no license yet, please buy one:
http://getkirby.com/buy and support an indie developer.

You are not allowed to run a website without a valid license key.
Please read the End User License Agreement for more information:
http://getkirby.com/license

*/

c::set('license', 'your license key');

/*
---------------------------------------
Kirby Configuration
---------------------------------------
By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

/* Cache
/*--------------------------*/
c::set('cache', false);

/* Debug
/*--------------------------*/
c::set('debug', true);

/* Home
If you rename the homepage or want to display the blog as the homepage for instance, just change the second 'home' below to the name of your page (as is displayed in the page url).
/*--------------------------*/
c::set('home', 'home');

/* 20171129 AS Sprachweiche für de und en  */
c::set('languages', array(
  array(
    'code'    => 'de',
    'name'    => 'Deutsch',
	
    'locale'  => 'de_DE',
    'url'     => '/de',
  ),

  array(
    'code'    => 'en',
    'name'    => 'English',
	'default' => true,
    'locale'  => 'en_US',
    'url'     => '/en',
  ),
	
  array(
    'code'    => 'cn',
    'name'    => '中国',
	
    'locale'  => 'cn',
    'url'     => '/cn',
  ),
	
  array(
    'code'    => 'ru',
    'name'    => 'русский',
	
    'locale'  => 'ru',
    'url'     => '/ru',
  ),

));

/* Markdown Setup
You can globally switch Markdown parsing
on or off here.

To disable automatic line breaks in markdown
set markdown.breaks to false.

You can also switch between regular markdown
or markdown extra: http://michelf.com/projects/php-markdown/extra/

/*--------------------------*/

c::set('markdown', true);
c::set('markdown.breaks', true);
c::set('markdown.extra', true);
c::set("kirbytext.image.figure", false);


/* Smartypants Setup
Smartypants is a typography plugin, which
helps to improve things like quotes and ellipsises
and all those nifty little typography details.

You can read more about it here:
http://michelf.com/projects/php-smartypants/typographer/

Smartypants is switched off by default.
As soon as it is switched on it will affect all
texts which are parsed by kirbytext()
/*--------------------------*/

c::set('smartypants', true);
c::set('smartypants.attr', 1);
c::set('smartypants.doublequote.open', '&#8220;');
c::set('smartypants.doublequote.close', '&#8221;');
c::set('smartypants.space.emdash', ' ');
c::set('smartypants.space.endash', ' ');
c::set('smartypants.space.colon', '&#160;');
c::set('smartypants.space.semicolon', '&#160;');
c::set('smartypants.space.marks', '&#160;');
c::set('smartypants.space.frenchquote', '&#160;');
c::set('smartypants.space.thousand', '&#160;');
c::set('smartypants.space.unit', '&#160;');
c::set('smartypants.skip', 'pre|code|kbd|script|math');

/*

---------------------------------------
Google Analytics Setup
---------------------------------------

The included google analytics snippet can be managed
directly here. Activate it once and it will be added 
as soon as the site is not running on localhost.

Replace 'UA-000000-01' by your Google Analytics ID.

*/

c::set('analytics', true);
c::set('analytics.id', 'UA-000000-01');
c::set('analytics.anonymize', true);


/*

---------------------------------------
Content File Extension
---------------------------------------

Change the default file extension for your
content files here if you'd rather use something
else than txt. For example md or mdown.

*/

c::set('content.file.extension', 'md');

/* Panel CSS
/*--------------------------*/
c::set('panel.stylesheet', 'assets/css/custom-panel.css');

