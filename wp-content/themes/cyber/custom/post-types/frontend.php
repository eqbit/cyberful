<?php
add_action('init', 'register_post_type_frontend');
function register_post_type_frontend(){
	register_post_type('frontend', array(
		'labels'             => array(
			'name'               => 'Frontend Статьи',
			'singular_name'      => 'Статья',
			'add_new'            => 'Добавить статью',
			'add_new_item'       => 'Добавить статью',
			'edit_item'          => 'Редактировать статью',
			'new_item'           => 'Новая статья',
			'view_item'          => 'Посмотреть статью',
			'search_items'       => 'Найти статью',
			'not_found'          =>  'Статей не найдено',
			'not_found_in_trash' => 'В корзине статей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Frontend'
		
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

register_taxonomy('frontend_tag', 'frontend', array(
		'hierarchical' => false,
		'label' => "Теги",
		'singular_name' => "Тег",
		'rewrite' => true,
		'query_var' => true
	)
);