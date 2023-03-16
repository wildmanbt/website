<?php



$imSettings['blog'] = array(	'description' => '',
	'root' => 'https://www.bebemimado.me-pal.com/blog/',
	'home_posts_number' => 10,
	'card_type' => 'leftcontentsrightcover',
	'show_card_title' => true,
	'show_card_category' => true,
	'show_card_description' => true,
	'show_card_author' => true,
	'show_card_date' => true,
	'show_card_button' => true,
	'article_type' => 'titlecovercontents',
	'file_prefix' => 'x5_',
	'comments_source' => 'wsx5',
	'email' => '',
	'moderate' => false,
	'sendmode' => 'db',
	'dbid' => '',
	'dbtable' => '',
	'comment_type' => 'both',
	'comments_order' => 'asc',
	'comments_on_multiple_columns' => true,
	'abuse' => false,
	'captcha' => false,
	'highlight_mode' => 'slideshow',
	'highlighted_count' => 1,
	'highlighted_card_height' => 300,
	'addThis' => '<!-- AddThis Button BEGIN --><div class="addthis_toolbox addthis_default_style addthis_32x32_style"><a class="addthis_button_preferred_1"></a><a class="addthis_button_preferred_2"></a><a class="addthis_button_preferred_3"></a><a class="addthis_button_preferred_4"></a><a class="addthis_button_compact"></a><a class="addthis_counter addthis_bubble_style"></a></div><script src="//s7.addthis.com/js/300/addthis_widget.js#username=YourAccount"></script><!-- AddThis Button END --><script>(function waitForAddThis() {if (typeof addthis == "undefined" || typeof $ == "undefined") { setTimeout(waitForAddThis, 100); return; }addthis.addEventListener("addthis.ready", function (evt) { $("#imContent").change(); }) })()</script>',
	'categories' => Array('News', 'Run'),
	'posts' => Array(),
	'posts_cat' => Array(),
	'posts_author' => Array(),
	'posts_month' => Array(),
	'posts_slug' => Array()
)
;

// Post titled "First Time Skiers?"
$imSettings['blog']['posts']['s0l4xdks'] = array(
	'id' => 's0l4xdks',
	'rel_url' => '?lorem-ipsum',
	'title' => 'First Time Skiers?',
	'tag_title' => 'First Time Skiers? - MyBlog - bebemimado',
	'title_heading_tag' => 'h2',
	'slug' => 'lorem-ipsum',
	'author' => 'Admin',
	'category' => 'News',
	'cardCover' => 'blog/files/blog_thumb.jpg',
	'cover' => 'blog/files/blog.jpg',
	'summary' => 'Donec pellentesque mollis nulla. Curabitur vitae placerat nisi, et vehicula enim. Suspendisse potenti. Fusce et convallis arcu. Donec varius lobortis justo.',
	'tag_description' => 'Donec pellentesque mollis nulla. Curabitur vitae placerat nisi, et vehicula enim. Suspendisse potenti. Fusce et convallis arcu. Donec varius lobortis justo.',
	'body' => "<div id=\"imBlogPost_s0l4xdks\"><div><span class=\"fs36 cf1 ff1\">A couple of Tricks</span><br></div><div><span class=\"fs11\">Pellentesque quis urna adipiscing, rutrum arcu quis, euismod augue. Nunc eleifend vel sem malesuada mattis. Quisque vestibulum consequat mi nec ullamcorper? Nullam quis ipsum sapien. Nulla a ullamcorper purus, in luctus sapien. Nunc laoreet sed arcu eu lacinia! Maecenas tempus tellus et felis dignissim, sodales tempus nisl pharetra.</span> <b class=\"fs11\">Ut non justo</b><span class=\"fs11\"><span class=\"fs11\"> </span>nec massa interdum porta! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut augue lectus.</span></div><div><br></div><div><span class=\"fs11\">Nulla tincidunt gravida urna ut luctus. Nullam vitae porttitor eros, vitae bibendum arcu. Etiam a posuere lacus. Nullam ultricies est in est suscipit, sit amet ornare mi aliquet. Praesent facilisis eget quam sed scelerisque. Vivamus semper varius dolor nec dapibus? Nullam egestas iaculis consequat. Maecenas pretium sem id iaculis faucibus. Quisque feugiat dolor vel molestie vestibulum? Ut cursus tempor </span><span class=\"fs11\"><b>turpis vel dapibus.</b></span><span class=\"fs11\"> Sed eget accumsan arcu. Proin lacinia, leo vitae elementum molestie, nibh nisl semper arcu, in bibendum turpis dui vel quam. In eget sollicitudin orci?</span></div><div style=\"clear: both;\"><!-- clear floated images --></div></div>",
	'rich_data_type' => array(
		array(
			'@type' => 'BlogPosting',
			'@context' => 'https://schema.org',
			'publisher' => array(
				'@type' => 'Organization',
				'name' => 'MyBlog'
			),
			'datePublished' => '2017-09-18T12:41:00',
			'dateModified' => '2017-09-18T12:41:00',
			'author' => array(
				'@type' => 'Person',
				'name' => 'Admin'
			),
			'headline' => 'First Time Skiers?',
			'description' => 'Donec pellentesque mollis nulla. Curabitur vitae placerat nisi, et vehicula enim. Suspendisse potenti. Fusce et convallis arcu. Donec varius lobortis justo.',
			'mainEntityOfPage' => 'https://www.bebemimado.me-pal.com/blog/?lorem-ipsum',
			'image' => 'https://www.bebemimado.me-pal.com/blog\\files\\blog.jpg',
			'speakable' => array(
				'@type' => 'SpeakableSpecification',
				'xpath' => array(
					'/html/head/meta[@name=\'title\']/@content',
					'/html/head/meta[@name=\'description\']/@content'
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'MyBlog',
					'item' => 'https://www.bebemimado.me-pal.com/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Septiembre 2017',
					'item' => 'https://www.bebemimado.me-pal.com/blog/?month=201709',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'First Time Skiers?',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'MyBlog',
					'item' => 'https://www.bebemimado.me-pal.com/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'News',
					'item' => 'https://www.bebemimado.me-pal.com/blog/?category=News',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'First Time Skiers?',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'MyBlog',
					'item' => 'https://www.bebemimado.me-pal.com/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Admin',
					'item' => 'https://www.bebemimado.me-pal.com/blog/?author=Admin',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'First Time Skiers?',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'MyBlog',
					'item' => 'https://www.bebemimado.me-pal.com/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'News',
					'item' => 'https://www.bebemimado.me-pal.com/blog/?tag=News',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'First Time Skiers?',
					'position' => 3
				)
			)
		)
	),
	'keywords' => '',
	'timestamp' => '18/9/2017',
	'utc_time' => 1505738460,
	'month' => '201709',
	'comments' => false,
	'sources' => array(),
	'tag' => array('News'),
	'opengraph' => array(
		'url' => 'https://www.bebemimado.me-pal.com/blog/?lorem-ipsum',
		'type' => 'article',
		'title' => 'First Time Skiers?',
		'description' => 'Donec pellentesque mollis nulla. Curabitur vitae placerat nisi, et vehicula enim. Suspendisse potenti. Fusce et convallis arcu. Donec varius lobortis justo.',
		'keywords' => '',
		'updated_time' => '1505738460',
		'images' => array('https://www.bebemimado.me-pal.com/blog/files/blog_thumb.jpg','https://www.bebemimado.me-pal.com/blog/files/blog.jpg')
	)
);$imSettings['blog']['posts_slug']['lorem-ipsum'] = 's0l4xdks';

// Post titled "Shoe finder"
$imSettings['blog']['posts']['000000001'] = array(
	'id' => '000000001',
	'rel_url' => '?what-running-shoes-are-fit-for-me-',
	'title' => 'Shoe finder',
	'tag_title' => 'Shoe finder - MyBlog - bebemimado',
	'title_heading_tag' => 'h2',
	'slug' => 'what-running-shoes-are-fit-for-me-',
	'author' => 'Admin',
	'category' => 'Run',
	'cardCover' => 'blog/files/blog_2_thumb.jpg',
	'cover' => 'blog/files/blog_2.jpg',
	'summary' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
	'tag_description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
	'body' => "<div id=\"imBlogPost_000000001\"><div class=\"imTAJustify\"><span class=\"imTALeft fs36 cf1 ff1\">We'll match you with the perfect running shoes</span></div><div class=\"imTAJustify\">Quisque et nibh tortor. Aenean pretium massa nec lectus scelerisque, suscipit blandit quam molestie. Aenean sit amet tellus placerat, tristique felis vitae, mollis augue. Pellentesque congue metus eros. Sed ut facilisis elit, id mollis magna. Ut suscipit venenatis bibendum. Phasellus dictum non tellus ullamcorper eleifend.</div><div class=\"imTAJustify\"><br></div><div class=\"imTAJustify\">Sed non turpis nulla. Sed vitae viverra nulla, non cursus tortor. Maecenas vel justo ac lorem suscipit ullamcorper. Integer orci tortor, faucibus et neque gravida, maximus commodo mi. Morbi vestibulum ipsum in euismod accumsan. Etiam feugiat metus elit, ac tincidunt diam porttitor tincidunt. In lacinia nec ligula nec posuere. In magna massa, lobortis eu nulla at, facilisis gravida ipsum. Sed molestie sapien diam, sit amet consequat est varius quis. Aliquam nec tellus porttitor, pulvinar magna vitae, suscipit elit. Suspendisse id tellus id eros ullamcorper tincidunt.</div><div style=\"clear: both;\"><!-- clear floated images --></div></div>",
	'rich_data_type' => array(
		array(
			'@type' => 'BlogPosting',
			'@context' => 'https://schema.org',
			'publisher' => array(
				'@type' => 'Organization',
				'name' => 'MyBlog'
			),
			'datePublished' => '2017-09-14T12:37:00',
			'dateModified' => '2017-09-14T12:37:00',
			'author' => array(
				'@type' => 'Person',
				'name' => 'Admin'
			),
			'headline' => 'Shoe finder',
			'description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
			'mainEntityOfPage' => 'https://www.bebemimado.me-pal.com/blog/?what-running-shoes-are-fit-for-me-',
			'image' => 'https://www.bebemimado.me-pal.com/blog\\files\\blog_2.jpg',
			'speakable' => array(
				'@type' => 'SpeakableSpecification',
				'xpath' => array(
					'/html/head/meta[@name=\'title\']/@content',
					'/html/head/meta[@name=\'description\']/@content'
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'MyBlog',
					'item' => 'https://www.bebemimado.me-pal.com/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Septiembre 2017',
					'item' => 'https://www.bebemimado.me-pal.com/blog/?month=201709',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'MyBlog',
					'item' => 'https://www.bebemimado.me-pal.com/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Run',
					'item' => 'https://www.bebemimado.me-pal.com/blog/?category=Run',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'MyBlog',
					'item' => 'https://www.bebemimado.me-pal.com/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Admin',
					'item' => 'https://www.bebemimado.me-pal.com/blog/?author=Admin',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder',
					'position' => 3
				)
			)
		),
		array(
			'@type' => 'BreadcrumbList',
			'@context' => 'https://schema.org',
			'numberOfItems' => 3,
			'itemListElement' => array(
				array(
					'@type' => 'ListItem',
					'name' => 'MyBlog',
					'item' => 'https://www.bebemimado.me-pal.com/blog',
					'position' => 1
				),
				array(
					'@type' => 'ListItem',
					'name' => 'run',
					'item' => 'https://www.bebemimado.me-pal.com/blog/?tag=run',
					'position' => 2
				),
				array(
					'@type' => 'ListItem',
					'name' => 'Shoe finder',
					'position' => 3
				)
			)
		)
	),
	'keywords' => '',
	'timestamp' => '14/9/2017',
	'utc_time' => 1505392620,
	'month' => '201709',
	'comments' => false,
	'sources' => array(),
	'tag' => array('run'),
	'opengraph' => array(
		'url' => 'https://www.bebemimado.me-pal.com/blog/?what-running-shoes-are-fit-for-me-',
		'type' => 'article',
		'title' => 'Shoe finder',
		'description' => 'In ac ex odio. Vestibulum maximus ullamcorper enim, commodo porta.',
		'keywords' => '',
		'updated_time' => '1505392621',
		'images' => array('https://www.bebemimado.me-pal.com/blog/files/blog_2_thumb.jpg','https://www.bebemimado.me-pal.com/blog/files/blog_2.jpg')
	)
);$imSettings['blog']['posts_slug']['what-running-shoes-are-fit-for-me-'] = '000000001';
$imSettings['blog']['posts_cat'] = array(
	'News' => array(
		's0l4xdks'
	),
	'Run' => array(
		'000000001'
	)
);
$imSettings['blog']['posts_author'] = array(
	'Admin' => array(
		's0l4xdks',
		'000000001'
	)
);
$imSettings['blog']['posts_month'] = array(
	'201709' => array(
		's0l4xdks',
		'000000001'
	)
);
$imSettings['blog']['posts_tag'] = array(
	'News' => array(
		's0l4xdks'
	),
	'run' => array(
		'000000001'
	)
);

// End of file blog.inc.php