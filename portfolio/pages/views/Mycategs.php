<?php if (!$view->isEmpty()) : ?>
	<?php foreach ($view as $row) : ?>
		<div class="itemscope">
			<div class="itemprop publicationGMT"><?php echo strftime('%b <div>%d</div> %Y', strtotime($row->publicationGMT)); ?></div>
			<div class="itemprop title"><a href="<?php echo BASE_PATH.$row->url; ?>"><?php echo $row->title(); ?></a></div>
			<div class="itemprop author"><?php echo t('By').' '.$row->pseudo; ?></div>
			<div class="itemprop content"><?php echo $row->content(); ?></div>
		</div>
	<?php endforeach; ?>
<?php else: ?>
	<div class="noResults"><?php echo t('No results'); ?></div>
<?php endif; ?>