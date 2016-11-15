jQuery(document).ready(function () {
	var lazyImage = 'img.img-lazy';
	$(lazyImage).lazyload( {
		threshold: 100,
		effect: 'fadeIn',
		placeholder: '/typo3conf/ext/lib_jquery_lazyload/Resources/Public/Images/lazyLoadingImage.gif'
	});
});
