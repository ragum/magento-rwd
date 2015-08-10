<?php

$installer = $this;
$installer->startSetup();
    
/* Footer Links Info */
$cmsBlock = Mage::getModel('cms/block')->load('footer_links_info', 'identifier');
$pageContent =<<<EOF
<div class="links-bottom">
	<div id="left-side">
		<ul>
			<li><a href="{{store url=""}}contact-us">Contact Us</a></li>
			<li class="upper separator"></li>
			<li><a href="{{store url=""}}location">location</a></li>
			<li class="upper separator"></li>
			<li><a href="{{store url=""}}faqs">faqs</a></li>
			<li class="upper separator"></li>
			<li><a href="{{store url=""}}shipping information">shipping information</a></li>
			<li class="upper separator"></li>
			<li><a href="{{store url=""}}return policy">return policy</a></li>
			<li class="upper separator"></li>
			<li><a href="{{store url=""}}about us">about us</a></li>
			<li class="upper separator"></li>
			<li><a href="{{store url=""}}our tradition">our tradition</a></li>
			<li class="upper separator"></li>
			<li><a href="{{store url=""}}careers">careers</a></li>
			<li class="upper separator"></li>
			<li><a href="{{store url=""}}privacy policy">privacy policy</a></li>
			<li class="upper separator"></li>
			<li><a href="{{store url=""}}gift cards">gift cards</a></li>
			<li class="upper separator"></li>
			<li><a href="{{store url=""}}blog">blog</a></li>
		</ul>
    </div>
</div>
EOF;

if(!$cmsBlock->getId()){
	$cmsBlock->setTitle('Footer Links')->setIdentifier('footer_links_info');
}

$cmsBlock->setStoreId(0)
		->setContent($pageContent)
		->setIsActive(1)
		->save();

/* Footer Customer */
$cmsBlock = Mage::getModel('cms/block')->load('footer_customer', 'identifier');
$pageContent =<<<EOF
<div class="block title">
	<h1>Call Us</h1>
</div>
<div>
	<p><span style="font-size: small;">1 800 793 6670</span></p>
</div>

EOF;

if(!$cmsBlock->getId()){
	$cmsBlock->setTitle('Footer Customer')->setIdentifier('footer_customer');
}

$cmsBlock->setStoreId(0)
		->setContent($pageContent)
		->setIsActive(1)
		->save();

/* Footer Links SM */
$cmsBlock = Mage::getModel('cms/block')->load('footer_links_sm', 'identifier');
$pageContent =<<<EOF
<div class="social">
	    <h1>Follow Us Online</h1>
	<ul class="sm">
		<li  class="sm"><a href="https://www.facebook.com/" target="_blank"><em class="facebook"> </em></a></li>
		<li  class="sm"><a href="https://twitter.com/" target="_blank"><em class="twitter"> </em></a></li>
		<li  class="sm"><a href="https://www.youtube.com/" target="_blank"><em class="youtube"> </em></a></li>
		<li  class="sm"><a href="https://instagram.com/" target="_blank"><em class="insta"> </em></a></li>
		<li  class="sm"><a href="https://plus.google.com/" target="_blank"><em class="g"> </em></a></li>
		<li  class="sm"><a href="https://www.pinterest.com/" target="_blank"><em class="pinterest"> </em></a></li>
	</ul>
</div>
EOF;

if(!$cmsBlock->getId()){
	$cmsBlock->setTitle('Footer Links SM')->setIdentifier('footer_links_sm');
}

$cmsBlock->setStoreId(0)
		->setContent($pageContent)
		->setIsActive(1)
		->save();

/* Top Menu */
$cmsBlock = Mage::getModel('cms/block')->load('top_menu', 'identifier');
$pageContent =<<<EOF
<div class="top-menu">
	<div id="left-side">
		<ul>
			<li class="top" style=" font-weight: bold;"><a href="{{store url=""}}registry">Registry</a></li>
			<li class="top"><a href="{{store url=""}}new-arrivals">New Arrivals</a></li>
			<li class="top"><a href="{{store url=""}}shinola-watches">Shinola Watches</a></li>
			<li class="top"><a href="{{store url=""}}blog">Blog</a></li>
		</ul>
    </div>
</div>
EOF;

if(!$cmsBlock->getId()){
	$cmsBlock->setTitle('Top Menu')->setIdentifier('top_menu');
}

$cmsBlock->setStoreId(0)
		->setContent($pageContent)
		->setIsActive(1)
		->save();

/* Rolex */
$cmsBlock = Mage::getModel('cms/block')->load('top_rolex', 'identifier');
$pageContent =<<<EOF
<div class="rolex-container">
	<ul class="rolex">
		<li id="first">
			<a href="/rolex.html"> 
				<img src="{{skin url='images/rolex.png'}}" data-alt-src="{{skin url='images/rolex.png'}}" alt="" />
			</a>
		</li>
	</ul>
</div>
EOF;

if(!$cmsBlock->getId()){
	$cmsBlock->setTitle('Rolex')->setIdentifier('top_rolex');
}

$cmsBlock->setStoreId(0)
		->setContent($pageContent)
		->setIsActive(1)
		->save();

/* Patek */
$cmsBlock = Mage::getModel('cms/block')->load('top_patek', 'identifier');
$pageContent =<<<EOF
<div class="patek-container">
	<ul class="patek">
		<li id="first">
			<a href="/patek.html"> 
				<img src="{{skin url='images/patek.png'}}" data-alt-src="{{skin url='images/patek.png'}}" alt="" />
			</a>
		</li>
	</ul>
</div>
EOF;

if(!$cmsBlock->getId()){
	$cmsBlock->setTitle('Patek')->setIdentifier('top_patek');
}

$cmsBlock->setStoreId(0)
		->setContent($pageContent)
		->setIsActive(1)
		->save();

$installer->endSetup();