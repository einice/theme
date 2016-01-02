<?php

return array(

	/**
	 * 主题名称
	 */
	'theme_name' => 'default',

	/**
	 * 是否开启移动布局检测
	 */
	'is_agent' => true,

	/**
	 * 移动端主题名称
	 */
	'mobile_name' => 'mobile',

	/**
	 * 主题模板路径
	 */
	'path' => base_path('template'),

	/**
	 * 主题静态文件路径
	 */
	'assets_path' => 'static',

	/**
	 * 主题公共文件路径
	 */
	'containerDir' => array(
		'layout' => 'layout',
		'partial' => 'base',
		'view' => 'views',
	),

);