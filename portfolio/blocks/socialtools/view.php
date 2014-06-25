<?php
/**
 * Parsimony
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to contact@parsimony-cms.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Parsimony to newer
 * versions in the future. If you wish to customize Parsimony for your
 * needs please refer to http://www.parsimony.mobi for more information.
 *
 * @authors Julien Gras et Benoît Lorillot
 * @copyright  Julien Gras et Benoît Lorillot
 * @version  Release: 1.0
 * @category  Parsimony
 * @package core/blocks
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
?>
<style>

</style>

<ul class="socialtools">
    <?php 	
	
	$size = trim($this->getConfig('size'));
	$color = $this->getConfig('color');
	$hovercolor = $this->getConfig('hovercolor');
        $menu = $this->getConfig('menu');
        if (is_array($this->getConfig('menu'))) {
            $cpt = 0;
            foreach($menu AS $id => $item){
				$path = 'modules/portfolio/lib/'.$item['icon'].'.svg';
				$svg = file_get_contents($path, FILE_USE_INCLUDE_PATH);	
                $url = $item['url'];
            ?>
					<?php  echo '<style>
						.socialtools #'.$item['icon'].' a {width: '.$size.'px;height: '.$size.'px;} 
						.socialtools #'.$item['icon'].' svg {width: '.$size.'px;height: '.$size.'px;fill: '.$color.'; )} 
						.socialtools #'.$item['icon'].' svg:hover {fill: '.$hovercolor.'; )} 
								</style>'
		
		; ?>
	<li id="<?php echo $item['icon'] ?>"><a href="<?php echo $url; ?>" style=""><?php echo $svg ?></a></li>
            <?php
            }
        }
        ?>
</ul>
