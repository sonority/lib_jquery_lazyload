# lib_jquery_lazyload
TYPO3 CMS Extension "lib_jquery_lazyload"

## Usage:
In your fluid-template use something like this:
```html
{namespace lazy=Sonority\LibJqueryLazyload\ViewHelpers}
<lazy:image
		src="{mediaElement.uid}"
		treatIdAsReference="1"
		title="{mediaElement.title}"
		alt="{mediaElement.alternative}"
		maxWidth="{settings.detail.media.image.maxWidth}"
		maxHeight="{settings.detail.media.image.maxHeight}"
		class="img-lazy img-responsive"
/>
```
