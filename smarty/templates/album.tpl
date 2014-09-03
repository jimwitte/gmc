{include file='header.tpl' title=$album->title page='album'}
<div class="container"><h1>{$album->title|capitalize} : {$album->date}</h1></div>
<div id="album-videos" class="container">
		{if $album->videos|@count > 0}
		<a href="" id="video-gallery-button" class="btn btn-primary"><span class="glyphicon glyphicon-facetime-video"></span> Videos</a>
		{/if}
</div>

<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="links" class="links container">
{section name=photo loop=$album->photos}<a href="{$album->photos[photo]->url}" title="{$album->photos[photo]->caption}" data-gallery><img alt="{$album->photos[photo]->caption}" src="{$album->photos[photo]->thumburl}" /></a>{/section}
</div>

{literal}
<script>
var youTubeOptions = {
    vimeoClickToPlay: false
};

$(function () {
	'use strict';
	$('#blueimp-gallery').data('useBootstrapModal', false);
	$('#blueimp-gallery').data('fullScreen', true);
	$('#video-gallery-button').on('click', function (event) {
        event.preventDefault();
        blueimp.Gallery([
{/literal}{section name=video loop=$album->videos}
    {
	title: '{$album->videos[video]->title}',
	href: 'http://vimeo.com/{$album->videos[video]->video_id}',
	type: 'text/html',
	vimeo: '{$album->videos[video]->video_id}',
	poster: '{$album->videos[video]->thumbnail_url}'
	}
{if !$smarty.section.video.last},{/if}{/section}{literal}
        ], $('#blueimp-gallery').data());
    });
});
</script>
{/literal}
{include file='footer.tpl' page='album'}