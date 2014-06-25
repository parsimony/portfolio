<?php if (!$view->isEmpty()) : ?>
	<?php foreach ($view as $line) : ?>
<?php
$img = $line->content; 
		$pattern = '/<img(.*)src(.*)=(.*)"(.*)">/U';
		preg_match($pattern, $img, $result);
		$foo = array_pop($result);
		$newcontent = $line->content;
		$replacement = '';
		$thumb = str_replace(PROFILE_PATH, '', $foo).'?x=414&y=224'; 
		$thumb479 = str_replace(PROFILE_PATH, '', $foo).'?x=300&y=200'; 
		
		/* Put content in a file */
			
		/* CSS */
			echo '<style>
			#post_'.$line->id_post.' .backg{
				background-image: url('.$thumb.');
			}
			@media screen and (max-width: 479px){
				#post_'.$line->id_post.' .backg{
				background-image: url('.$thumb479 .');
				}
			}
			</style>';
?>
		<div class="itemscope">
			<div class="itemprop publicationGMT"><?php echo strftime('%b <div>%d</div> %Y', strtotime($line->publicationGMT)); ?></div>
			<div class="title"><a href="<?php echo BASE_PATH.$line->url ; ?>"><?php echo $line->title(); ?></a></div>
			<div class="itemprop content"><?php echo $line->content(); ?></div>
		</div>
	<?php  endforeach; ?>
<?php else: ?>
	<div class="noResults"><?php echo t('No results'); ?></div>
<?php endif; ?>


