<?php
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