<?php

add_action('init', 'register_post_type_portfolio');
function register_post_type_portfolio(){
	register_post_type('portfolio', array(
		'labels'             => array(
			'name'               => 'Портфолио', // Основное название типа записи
			'singular_name'      => 'Портфолио', // отдельное название записи типа Book
			'add_new'            => 'Добавить работу',
			'add_new_item'       => 'Добавить работу',
			'edit_item'          => 'Редактировать работу',
			'new_item'           => 'Новая работа',
			'view_item'          => 'Посмотреть работу',
			'search_items'       => 'Найти работу',
			'not_found'          =>  'Работ не найдено',
			'not_found_in_trash' => 'В корзине работ не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Портфолио'
		
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','author', 'thumbnail')
	) );
}

register_taxonomy('portfolio_tag', 'portfolio', array(
		'hierarchical' => false,
		'label' => "Теги",
		'singular_name' => "Тег",
		'rewrite' => true,
		'query_var' => true
	)
);


add_action('init', 'register_post_type_team');
function register_post_type_team(){
	register_post_type('team', array(
		'labels'             => array(
			'name'               => 'Сотрудник', // Основное название типа записи
			'singular_name'      => 'Сотрудник', // отдельное название записи типа Book
			'add_new'            => 'Добавить сотрудника',
			'add_new_item'       => 'Добавить сотрудника',
			'edit_item'          => 'Редактировать сотрудника',
			'new_item'           => 'Новый сотрудник',
			'view_item'          => 'Посмотреть сотрудника',
			'search_items'       => 'Найти сотрудника',
			'not_found'          =>  'Сотрудников не найдено',
			'not_found_in_trash' => 'В корзине сотрудников не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Команда'
		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title')
	) );
}