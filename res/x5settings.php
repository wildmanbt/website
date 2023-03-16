<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => 'C1C025A0DE35B97626345E7BF37E71D2',
	'url' => 'https://github.com/wildmanbt/siteweb.git/',
	'homepage_url' => 'https://github.com/wildmanbt/siteweb.git/index.php',
	'icon' => '',
	'version' => '2022.1.7.0',
	'sitename' => 'bebemimado',
	'lang_code' => 'es-ES',
	'public_folder' => '',
	'salt' => 'hid10jnxlog8fr2r1owx84sj7noprugadjalvziq6em81g09lv3ydli',
	'common_email_sender_addres' => 'bebemimado@me-pal.com'
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"2f6q2h8t-imCpt\">Palabra de control:</label><br />
			<input type=\"text\" id=\"2f6q2h8t-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_r1yv146v.png',
	'notification_public_key' => 'a1ad1d0851159433',
	'notification_private_key' => 'b1a613785df704d1',
	'enable_manager_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array(
	'90c7yx8s' => array(
		'description' => '',
		'host' => 'localhost',
		'database' => 'wildmanb_bebemimado',
		'user' => 'wildmanb_bebe',
		'password' => 'bebemimadoqwe',
		'table_prefix' => ''
	)
);
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['cart'] = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'https://github.com/wildmanbt/siteweb.git/cart/index.html',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(0, 0, 0, 1); background-color: rgba(211, 211, 211, 1); padding: 8px 4px 8px 4px; border-style: solid; border-width: 0px 0px 0px 0px; border-color: rgba(169, 169, 169, 1) rgba(169, 169, 169, 1) rgba(169, 169, 169, 1) rgba(169, 169, 169, 1); border-top-left-radius: 5px; border-top-right-radius: 5px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;',
	'email_opening' => 'Estimado cliente,<br /><br />Gracias por su pedido Se le recordamos de que el pago no ha todavía sido recibido.<br /><br />A continuación encontrará una lista de los productos pedidos, la información de facturación y de envío y las instrucciones para efectuar el pago.',
	'email_closing' => 'Póngase en contacto con nosotros si requiere información adicional.<br /><br />Atentamente, el personal de Ventas.',
	'email_payment_opening' => 'Estimado cliente,<br /><br />Gracias por su compra. Se le confirmamos que el pago ha sido recibido y que el pedido será procesado lo antes posible.<br /><br />A continuación encontrará una lista de los productos pedidos y la información de facturación y de envío.',
	'email_payment_closing' => 'Estamos a su disposición si necesita más información.<br /><br />Un cordial saludo, el Equipo de Ventas',
	'email_digital_shipment_opening' => 'Estimado Cliente,<br /><br />muchas gracias por su compra. Aquí le presentamos la lista de enlaces de descarga correspondientes a los productos solicitados:',
	'email_digital_shipment_closing' => 'Estamos a su disposición si necesita más información.<br /><br />Un cordial saludo, el Equipo de Ventas',
	'email_physical_shipment_opening' => 'Estimado cliente, <br /><br />gracias por su orden. Se le confirmamos que su pedido ha sido correctamente procesado y que los productos han sido enviado. <br /><br />Aquí encuentra la lista de los productos adquiridos:',
	'email_physical_shipment_closing' => 'Estamos a su disposición si necesita más información.<br /><br />Un cordial saludo, el Equipo de Ventas',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(240, 240, 240, 1)',
	'header_text_color' => 'rgba(0, 0, 0, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(255, 255, 255, 1)',
	'owner_email' => 'bebemimado@me-pal.com',
	'vat_type' => 'included',
	'availability_image' => 'cart/images/cart-available.png'
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '$',
	'currency_code' => 'USD',
	'currency_name' => 'United States of America, Dollars',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array(
	'3lsbb42a' => array(
		'id' => '3lsbb42a',
		'name' => 'Shoes_1',
		'category' => '99t6t1yw',
		'categoryPath' => array(
			'99t6t1yw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/shoe_1.png',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/shoe_1.png',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink2b9181c7197084837caa2a4e9f9694f5 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink2b9181c7197084837caa2a4e9f9694f5, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkabf3c6a2c45c0affb9d3f66efaf39f18 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_1.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkabf3c6a2c45c0affb9d3f66efaf39f18, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'shoes_1',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Shoes_1',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Shoes_1',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/shoe_1.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'y5229c45' => array(
		'id' => 'y5229c45',
		'name' => 'Pink Shoes',
		'category' => '99t6t1yw',
		'categoryPath' => array(
			'99t6t1yw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Lorem Ipsum dolor sit amet',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/shoe_3b.png',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/shoe_3b.png',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink2f56f625d9d52d4b743c1b83854c028a = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink2f56f625d9d52d4b743c1b83854c028a, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkbc61ba47692da3a244199801700b3683 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_3b.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkbc61ba47692da3a244199801700b3683, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'pink-shoes',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Pink Shoes',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Pink Shoes',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/shoe_3b.png',
			'description' => 'Lorem Ipsum dolor sit amet',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'vpdex4ny' => array(
		'id' => 'vpdex4ny',
		'name' => 'Shoes_3',
		'category' => '99t6t1yw',
		'categoryPath' => array(
			'99t6t1yw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/shoe_2.png',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/shoe_2.png',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkb7abbad78e153873dbd01171dec52d23 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkb7abbad78e153873dbd01171dec52d23, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink49d06dbf831c4e3cc08ab82296420264 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/shoe_2.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink49d06dbf831c4e3cc08ab82296420264, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'shoes_3',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Shoes_3',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Shoes_3',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/shoe_2.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'm5o731m1' => array(
		'id' => 'm5o731m1',
		'name' => 'Running Arm Band',
		'category' => '99t6t1yw',
		'categoryPath' => array(
			'99t6t1yw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/run_2.jpg',
				'width' => 600,
				'height' => 600
			),
			array(
				'type' => 'image',
				'url' => 'images/run_3.jpg',
				'width' => 600,
				'height' => 600
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/run_2.jpg',
			'width' => 600,
			'height' => 600
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinke51bbf3000e829b9f295032f47989863 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinke51bbf3000e829b9f295032f47989863, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink5d8934f70f17773f7e6acc01ffd252fc = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink5d8934f70f17773f7e6acc01ffd252fc, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			),
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 1, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 1, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]}, 1, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkdc2ba3c253f67d7db37d286c27a07044 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkdc2ba3c253f67d7db37d286c27a07044, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink9fe5923a95dd4ce3106a3c571ad0ad2e = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_2.jpg\',\'width\': 600,\'height\': 600},{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/run_3.jpg\',\'width\': 600,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink9fe5923a95dd4ce3106a3c571ad0ad2e, 1, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'running-arm-band',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Running Arm Band',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Running Arm Band',
			'image' => array(
				'https://github.com/wildmanbt/siteweb.git/images/run_2.jpg',
				'https://github.com/wildmanbt/siteweb.git/images/run_3.jpg'
			),
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'1wg3d83n' => array(
		'id' => '1wg3d83n',
		'name' => 'Green cycling shoes',
		'category' => '8zhr4slu',
		'categoryPath' => array(
			'8zhr4slu'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Cycling_shoe_1.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/Cycling_shoe_1.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkb0b2c348c94658cd550e4b6197b23eef = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkb0b2c348c94658cd550e4b6197b23eef, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkab07e88d8dd9e38778f5632f3370dde7 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cycling_shoe_1.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkab07e88d8dd9e38778f5632f3370dde7, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'green-cycling-shoes',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Green cycling shoes',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Green cycling shoes',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/Cycling_shoe_1.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'625cwa1f' => array(
		'id' => '625cwa1f',
		'name' => 'Bike Helmet',
		'category' => '8zhr4slu',
		'categoryPath' => array(
			'8zhr4slu'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/bike_helmet.png',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/bike_helmet.png',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink4ac04bb7973ecd02e62e11b9796ca39a = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink4ac04bb7973ecd02e62e11b9796ca39a, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink3b9b7afb34fbeb29af72fc8bc4ffacd9 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bike_helmet.png\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink3b9b7afb34fbeb29af72fc8bc4ffacd9, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'bike-helmet',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Bike Helmet',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Bike Helmet',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/bike_helmet.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'm1gs9e99' => array(
		'id' => 'm1gs9e99',
		'name' => 'Bike Bell',
		'category' => '8zhr4slu',
		'categoryPath' => array(
			'8zhr4slu'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(
			array(
				'id' => 's8f540db',
				'name' => 'Black + Pois',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'yrrwpvtk',
				'name' => 'Pink + Pois',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '10u0v1mv',
				'name' => 'Love & Bee yourself',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/bell_1a.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/bell_1a.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink7da3bbc9e4487381b3097201bf5174e7 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink7da3bbc9e4487381b3097201bf5174e7, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkef094f1f62425afaf2d9de2109fbf30b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/bell_1a.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkef094f1f62425afaf2d9de2109fbf30b, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'bike-bell',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Bike Bell',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Bike Bell',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/bell_1a.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'zs17zh60' => array(
		'id' => 'zs17zh60',
		'name' => 'Bike Brakes',
		'category' => '8zhr4slu',
		'categoryPath' => array(
			'8zhr4slu'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/brakes_a.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/brakes_a.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink6bd1aa49db8fb52f61e318fbb7fc9378 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink6bd1aa49db8fb52f61e318fbb7fc9378, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink95dffb1b1e993ae1d8d40d9783f043d1 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/brakes_a.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink95dffb1b1e993ae1d8d40d9783f043d1, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'bike-brakes',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Bike Brakes',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Bike Brakes',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/brakes_a.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'w551k4y8' => array(
		'id' => 'w551k4y8',
		'name' => 'Boxing gloves',
		'category' => 'g4kpg7fs',
		'categoryPath' => array(
			'g4kpg7fs'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => array(
			array(
				'minimum' => 1,
				'value' => 60.00
			)
		),
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/boxing_gloves.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/boxing_gloves.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink7a9d269dbe8c46a3e99f13b7387fc8cf = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink7a9d269dbe8c46a3e99f13b7387fc8cf, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinke773443956299e2f9ac4f70fcc05c3e6 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/boxing_gloves.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinke773443956299e2f9ac4f70fcc05c3e6, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => true,
		'slug' => 'boxing-gloves',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Boxing gloves',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Boxing gloves',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/boxing_gloves.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'kx3sfo6u' => array(
		'id' => 'kx3sfo6u',
		'name' => 'Ski&Snow Kids Goggles',
		'category' => 'g4kpg7fs',
		'categoryPath' => array(
			'g4kpg7fs'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/ski_glasses.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/ski_glasses.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinka24c92ff52cda0bc982b6c7477a838c2 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka24c92ff52cda0bc982b6c7477a838c2, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink85f248320d3b82fca23e51d62a8a63ba = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/ski_glasses.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink85f248320d3b82fca23e51d62a8a63ba, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'ski-snow-kids-goggles',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Ski&Snow Kids Goggles',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Ski&Snow Kids Goggles',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/ski_glasses.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'tg0ox21f' => array(
		'id' => 'tg0ox21f',
		'name' => 'Snap Hook',
		'category' => '9c0o4464',
		'categoryPath' => array(
			'9c0o4464'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/snap-hook.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/snap-hook.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink5b3cefe29221ce3b2d9fa1a9d93b1e18 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink5b3cefe29221ce3b2d9fa1a9d93b1e18, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkc36bfc7b2f738d45316785d517bb72b2 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/snap-hook.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkc36bfc7b2f738d45316785d517bb72b2, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'snap-hook',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Snap Hook',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Snap Hook',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/snap-hook.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'27dp1se8' => array(
		'id' => '27dp1se8',
		'name' => 'Camping Shoes',
		'category' => '9c0o4464',
		'categoryPath' => array(
			'9c0o4464'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/camping_shoe_.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/camping_shoe_.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink75b09a425e5025ce4bd953f657b6d7d7 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink75b09a425e5025ce4bd953f657b6d7d7, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink8f8049e1ee72a88f1e39ad1d18598d13 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/camping_shoe_.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink8f8049e1ee72a88f1e39ad1d18598d13, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'camping-shoes',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Camping Shoes',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Camping Shoes',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/camping_shoe_.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'l3qe8o9d' => array(
		'id' => 'l3qe8o9d',
		'name' => 'Roof Top Tents',
		'category' => '9c0o4464',
		'categoryPath' => array(
			'9c0o4464'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/car-tent.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/car-tent.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink8a7f3561571bb660f2c950fc50e4f9f8 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink8a7f3561571bb660f2c950fc50e4f9f8, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink88ab89fe857e50a770b34d932a1ca248 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink88ab89fe857e50a770b34d932a1ca248, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'roof-top-tents',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Roof Top Tents',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Roof Top Tents',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/car-tent.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'q4ylpbgs' => array(
		'id' => 'q4ylpbgs',
		'name' => 'Various Colored Tents',
		'category' => '9c0o4464',
		'categoryPath' => array(
			'9c0o4464'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(
			array(
				'id' => 's8f540db',
				'name' => 'Pink + Turquoise',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'yrrwpvtk',
				'name' => 'Navy Blue',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '10u0v1mv',
				'name' => 'Green',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/tent-2.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/tent-2.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink012bca960c435f8aa92f3566fbccd87d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink012bca960c435f8aa92f3566fbccd87d, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink29ca2399374e7b71396121a75d52e9de = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/tent-2.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink29ca2399374e7b71396121a75d52e9de, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'various-colored-tents',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Various Colored Tents',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Various Colored Tents',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/tent-2.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'fjpfw68a' => array(
		'id' => 'fjpfw68a',
		'name' => 'Ski&Snow Men Goggles',
		'category' => 'g4kpg7fs',
		'categoryPath' => array(
			'g4kpg7fs'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(
			array(
				'id' => 's8f540db',
				'name' => 'Black',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'yrrwpvtk',
				'name' => 'White',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '10u0v1mv',
				'name' => 'Red',
				'price_variation' => 0.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/men-goggles_3.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/men-goggles_3.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkd2e2d0f6e64277bca24c100c5e8d2da8 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkd2e2d0f6e64277bca24c100c5e8d2da8, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkd54324d21940011713f16e5d7484b6c3 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/men-goggles_3.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkd54324d21940011713f16e5d7484b6c3, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'ski-snow-men-goggles',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Ski&Snow Men Goggles',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Ski&Snow Men Goggles',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/men-goggles_3.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'7en2lkr4' => array(
		'id' => '7en2lkr4',
		'name' => 'Roof Top Tents_sale',
		'category' => 'g4kpg7fs',
		'categoryPath' => array(
			'g4kpg7fs'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/car-tent.jpg',
				'width' => 640,
				'height' => 426
			)
		),
		'thumb' => array(
			'type' => 'image/jpg',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/car-tent.jpg',
			'width' => 640,
			'height' => 426
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink22634ee75ba771200b854aad4e0d0aeb = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink22634ee75ba771200b854aad4e0d0aeb, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink48b70f1172df287259c4aea5ad35f5b1 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/car-tent.jpg\',\'width\': 640,\'height\': 426}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink48b70f1172df287259c4aea5ad35f5b1, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'roof-top-tents_sale',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Roof Top Tents_sale',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Roof Top Tents_sale',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/car-tent.jpg',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'6kb1363r' => array(
		'id' => '6kb1363r',
		'name' => 'Sports wear',
		'category' => 'g4kpg7fs',
		'categoryPath' => array(
			'g4kpg7fs'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => array(
			array(
				'minimum' => 10,
				'value' => 70.00
			)
		),
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/clothing.png',
				'width' => 625,
				'height' => 600
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://github.com/wildmanbt/siteweb.git/images/clothing.png',
			'width' => 625,
			'height' => 600
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink10442190231f4af04741b1f729458745 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink10442190231f4af04741b1f729458745, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink5ddfabe7af98ec5094cb1575a08307d4 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/clothing.png\',\'width\': 625,\'height\': 600}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink5ddfabe7af98ec5094cb1575a08307d4, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => true,
		'slug' => 'sports-wear',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Sports wear',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Sports wear',
			'image' => 'https://github.com/wildmanbt/siteweb.git/images/clothing.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'81mr4hq7' => array(
		'id' => '81mr4hq7',
		'name' => 'Bike Helmet_sale',
		'category' => 'g4kpg7fs',
		'categoryPath' => array(
			'g4kpg7fs'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 1.00,
		'singleFullPrice' => '0.82',
		'singleFullPricePlusVat' => '1.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(),
		'thumb' => array(
			'type' => 'image/svg',
			'url' => 'https://github.com/wildmanbt/siteweb.git/cart/images/no-preview.svg',
			'width' => 600,
			'height' => 600
		),
		'link' => null,
		'showboxLinks' => array(),
		'vat' => 22.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 'z0406g7d',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'bike-helmet_sale',
		'relatedProducts' => array(),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'Bike Helmet_sale',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'Bike Helmet_sale',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '1.000'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	)
));
$ecommerce->setSlugToProductIdMap(array(
	'shoes_1' => '3lsbb42a',
	'pink-shoes' => 'y5229c45',
	'shoes_3' => 'vpdex4ny',
	'running-arm-band' => 'm5o731m1',
	'green-cycling-shoes' => '1wg3d83n',
	'bike-helmet' => '625cwa1f',
	'bike-bell' => 'm1gs9e99',
	'bike-brakes' => 'zs17zh60',
	'boxing-gloves' => 'w551k4y8',
	'ski-snow-kids-goggles' => 'kx3sfo6u',
	'snap-hook' => 'tg0ox21f',
	'camping-shoes' => '27dp1se8',
	'roof-top-tents' => 'l3qe8o9d',
	'various-colored-tents' => 'q4ylpbgs',
	'ski-snow-men-goggles' => 'fjpfw68a',
	'roof-top-tents_sale' => '7en2lkr4',
	'sports-wear' => '6kb1363r',
	'bike-helmet_sale' => '81mr4hq7'
));
$ecommerce->setCategoriesData(array(
	'g4kpg7fs' => array(
		'id' => 'g4kpg7fs',
		'name' => 'ON SALE',
		'containsProductsWithProductPage' => false,
		'products' => array(
			'w551k4y8',
			'kx3sfo6u',
			'fjpfw68a',
			'7en2lkr4',
			'6kb1363r',
			'81mr4hq7'
		),
		'categories' => array()
	),
	'9c0o4464' => array(
		'id' => '9c0o4464',
		'name' => 'Camping',
		'containsProductsWithProductPage' => false,
		'products' => array(
			'tg0ox21f',
			'27dp1se8',
			'q4ylpbgs',
			'l3qe8o9d'
		),
		'categories' => array()
	),
	'8zhr4slu' => array(
		'id' => '8zhr4slu',
		'name' => 'Cycling',
		'containsProductsWithProductPage' => false,
		'products' => array(
			'1wg3d83n',
			'625cwa1f',
			'm1gs9e99',
			'zs17zh60'
		),
		'categories' => array()
	),
	'99t6t1yw' => array(
		'id' => '99t6t1yw',
		'name' => 'Running',
		'containsProductsWithProductPage' => false,
		'products' => array(
			'3lsbb42a',
			'y5229c45',
			'vpdex4ny',
			'm5o731m1'
		),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_f1on5n9j_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Transferencia bancaria',
		'description' => 'Pague más tarde mediante transferencia bancaria.',
		'email_text' => 'Estos son los datos necesarios para realizar el pago por transferencia bancaria:

XXX YYY ZZZ

Tenga en cuenta que una vez completado el pago, debe enviar una copia del recibo junto con el número de pedido.',
		'enableAfterPaymentEmail' => false
	),
	'g5f1lv71' => array(
		'id' => 'g5f1lv71',
		'name' => 'pagadito',
		'description' => 'pago con tejetas de debito o credito',
		'email_text' => '',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'Correo',
		'description' => 'La mercancía se entregará en 3-5 días.',
		'email_text' => 'Envío por Correo.
La mercancía se entregará en 3-5 días.',
		'enable_tracking' => false,
		'tracking_url' => ''
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Envío urgente',
		'description' => 'La mercancía se entregará en 1-2 días.',
		'email_text' => 'Envío por Envío urgente.
La mercancía se entregará en 1-2 días.',
		'enable_tracking' => false,
		'tracking_url' => ''
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();


/*
|-------------------------------
|	ANALYTICS SETTINGS
|-------------------------------
*/

$imSettings['analytics'] = array(
	'type' => 'wsx5analytics',
	'database' => array(
		'id' => '',
		'table' => 'w5_f1on5n9j_analytics'
	)
);

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2022.1.7 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#708090" style="background-color: #708090;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: #808080; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 0; border-bottom: none; border-left-width: 1px; background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '<tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Tahoma\'; color: #000000; background-color: transparent; text-decoration: none; text-align: center;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 0; border-top: none; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; padding: 10px; background-color: #FFFFFF" width="700px">' . "\n\t\t" . 'Este e-mail incluye información exclusiva para el destinatario mencionado anteriormente.<br>Si lo ha recibido por error, notifíqueselo inmediatamente al remitente y destrúyalo sin copiarlo.' . "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#708090';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Tahoma;';

// End of file x5settings.php