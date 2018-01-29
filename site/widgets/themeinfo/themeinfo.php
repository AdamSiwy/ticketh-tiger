<?php



return array(
		'title' => 'This is an awesome HIWEB Theme',
		'html'  => function() {
		// any data for the template
		$data = array(
			'theme' => 'Stellar.',
			'author' => 'HIWEB',
			'gumroad' => 'https://gumroad.com/hiweb',
			'creativemarket' => 'https://creativemarket.com/Hiweb.Kirby',
			'text' => 'Thanks a lot for purchasing our theme. If you have any questions, contact us at <a href="mailto:contact@hiweb.fr">contact@hiweb.fr</a>'
		);

		return tpl::load(__DIR__ . DS . 'template.php', $data);
		}
		);
