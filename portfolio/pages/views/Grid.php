<style>

@media screen and (max-width:767px){
	.portfolioitem {
		display : block;
		margin: 10px auto;
	}
}
@media screen and (max-width: 479px){
	.portfolioitem {
		width: 300px;
		height: 168px;
		margin: 20px auto;
		display: block;
		position: relative;
		border: 8px solid #FFF;
		box-shadow: 1px 1px 11px rgba(0,0,0,0.2);
		background: #333;
	}
	.portfolioitem .slice{width: 60px;}	
	.portfolioitem .s2, .portfolioitem .s3, .portfolioitem .s4, .portfolioitem .s5 {
		-webkit-transform: translate3d(60px,0,0);
		-moz-transform: translate3d(60px,0,0);
		-o-transform: translate3d(60px,0,0);
		-ms-transform: translate3d(60px,0,0);
		transform: translate3d(60px,0,0);
	}
	.portfolioitem .s1 {background-position: 0px 0px;}
	.portfolioitem .s2 {background-position: -60px 0px;}
	.portfolioitem .s3 {background-position: -120px 0px;}
	.portfolioitem .s4 {background-position: -180px 0px;}
	.portfolioitem .s5 {background-position: -240px 0px;}
	.portfolioitem .overlay {width: 60px;}
	.portfolioitem div.view-back {width: 48%;margin-right: 0%;}
	
	.portfolioitem:hover .s3 {
		-webkit-transform: translate3d(59px,0,0) rotate3d(0,1,0,-55deg);
		-moz-transform: translate3d(59px,0,0) rotate3d(0,1,0,-55deg);
		-o-transform: translate3d(59px,0,0) rotate3d(0,1,0,-55deg);
		-ms-transform: translate3d(59px,0,0) rotate3d(0,1,0,-55deg);
		transform: translate3d(59px,0,0) rotate3d(0,1,0,-55deg);
	}
	.portfolioitem:hover .s4{
		-webkit-transform: translate3d(59px,0,0) rotate3d(0,1,0,110deg);
		-moz-transform: translate3d(59px,0,0) rotate3d(0,1,0,110deg);
		-o-transform: translate3d(59px,0,0) rotate3d(0,1,0,110deg);
		-ms-transform: translate3d(59px,0,0) rotate3d(0,1,0,110deg);
		transform: translate3d(59px,0,0) rotate3d(0,1,0,110deg);
	}
	.portfolioitem:hover .s5 {
		-webkit-transform: translate3d(59px,0,0) rotate3d(0,1,0,-110deg);
		-moz-transform: translate3d(59px,0,0) rotate3d(0,1,0,-110deg);
		-o-transform: translate3d(59px,0,0) rotate3d(0,1,0,-110deg);
		-ms-transform: translate3d(59px,0,0) rotate3d(0,1,0,-110deg);
		transform: translate3d(59px,0,0) rotate3d(0,1,0,-110deg);
	}
	.view-back div {
		padding: 5px 5px 5px 72px;
		font-size: 14px;
		color: white;
		height: 71%;
		overflow: hidden;
	}
	.view-back a {
		bottom: 5px;
	}
}
</style>
<?php 
if (!$view->isEmpty()) : ?>
	<?php foreach ($view as $row) : ?>
<?php
$file1600 = '';
$content1600 = '';
$file1479 = '';
$content479 = '';

$img = $row->content; 
$pattern = '/<img(.*)src(.*)=(.*)"(.*)">/U';
preg_match($pattern, $img, $result);
$foo = array_pop($result);
$newcontent = $row->content;
$replacement = '';

if(empty($foo)){

	?>
<div class="portfolioitem isotopeitem" id="post_<?php echo $row->id_post; ?>"> 
	<a class="date" href="<?php echo BASE_PATH.$row->url ;?>">
			<?php $date = $row->publicationGMT; ?>
			<div class="ssdate"><div><?php echo date('M', strtotime($date)); ?><br><?php echo date('N', strtotime($date)); ?>
			<br><?php echo date('Y', strtotime($date)); ?></div></div>
		<h3 class="itemprop title"><?php echo $row->title ?></h3>
		<article class="itemprop content"><?php echo $row->content ; ?></article>
	</a>
	</div>

<?php
}	
else{
	
$thumb1600 = $foo.'?x=414&y=224'; 
$thumb479 = $foo.'?x=300&y=200';

			
		/* CSS */
			echo '<style>
			#post_'.$row->id_post.' .backg{
				background-image: url('.$thumb1600.');
			}
			@media screen and (max-width: 479px){
				#post_'.$row->id_post.' .backg{
				background-image: url('.$thumb479 .');
				}
			}
			</style>';
			
?>
<div class="portfolioitem isotopeitem withimg" id="post_<?php echo $row->id_post; ?>"> 
	<div class="view-back">
		<?php echo $row->title /*\tools::truncate(strip_tags(preg_replace($pattern, $replacement, $newcontent)), 80 , '...' ) */; ?>
		<a class="entry-link" href="<?php echo BASE_PATH.$row->url; ?>">→</a>
	</div>
	<div class="slice s1 backg">
		<span class="overlay"></span>
		<div class="slice s2 backg">
			<span class="overlay"></span>
			<div class="slice s3 backg">
				<span class="overlay"></span>
				<div class="slice s4 backg">
					<span class="overlay"></span>
					<div class="slice s5 backg">
						<span class="overlay"></span>
					</div>
						
				</div>
			</div>
		</div>
	</div>
</div>														
	

<?php
}
	endforeach; ?>
<?php else: ?>
	<div class="noResults"><?php echo t('No results'); ?></div>
<?php endif; ?>
