<?php
	echo Menu::item([
		"name"=>"Contact",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"contact/create","text"=>"Create Contact","icon"=>"far fa-circle nav-icon"],
			["route"=>"contact","text"=>"Manage Contact","icon"=>"far fa-circle nav-icon"],
		]
	]);
