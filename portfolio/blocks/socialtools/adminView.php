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
/*
\app::$request->page->addJSFile('lib/colorpicker/colorpicker.js');
\app::$request->page->addCSSFile('lib/colorpicker/colorpicker.css');*/
?>
<script>
	
	// type="color"  ---> type="text"
	/*$(document).ready(function(){
        /* Init Color Picker */
      /*  window.defaultPicker = $('input[name="color"]');
        window.picker = new Color.Picker({
            callback: function(hex) {
                defaultPicker.val("#" + hex).trigger("change");
                defaultPicker.next('.reprcolor').css('background', "#" + hex);
            }
        });
		window.hoverPicker = $('input[name="hovercolor"]');
        window.picker2 = new Color.Picker({
            callback: function(hex) {
                hoverPicker.val("#" + hex).trigger("change");
                hoverPicker.next('.reprcolor').css('background', "#" + hex);
            }
        });
    });*/
/* Color picker 
        $(document).on('click','.colorpicker,',function(){
            picker.el.style.display = "block";
            picker.el.style.top = ($(this).offset().top) + 20 + "px";
            picker.el.style.left = ($(this).offset().left - 200) + "px";
        })
		.on('.colorpicker, .colorpicker2',function(){
            picker.el.style.display = "none";
        })
        
		
		function trigger(el, event){
        ev = document.createEvent('Event');
        ev.initEvent(event, true, false);
        el.dispatchEvent(ev);
    }
    */
</script>
<style>
    .colorpicker, .colorpicker2{width : 65px;}
	.reprcolor{height: 27px;width: 27px;}
    .ui-nestedSortable-error {background:#fbe3e4;color:#8a1f11;}
    ol {margin: 0;padding: 0;padding-left: 30px;}
    ol.sortable, ol.sortable ol {margin: 0 0 0 15px;padding: 0;list-style-type: none;}
    .sortable li {margin: 7px 0 0 0;padding: 0;}
    .sortable li  {/*background: #CBDDF3;border: 1px solid #2E63A5;*/padding: 3px;margin: 2px;line-height: 30px;border-radius: 4px;}
    .sortable li  input{background: transparent;}
    #design-menu {padding-bottom: 5px;font-size: 13px;}    
	h2{font-size: 20px;line-height: 30px;font-weight: normal;margin: 0;color: #777;padding: 10px;text-shadow: white 0 1px 0;}
    .parsimenu ul{top: 20px;left: -12px;}
    #linkmenu{}
	.features{padding: 10px;border-bottom: 1px solid #CCC;box-shadow: 0px 2px 1px #fff;}
    #linkmenuAdd{padding-left: 8px;}
    linkmenuAdd{position: relative;top: 0px;margin-left: 25px;margin-top: 10px;margin-bottom: 10px;}
    .title1{text-align: left;margin: 10px 0px;color: #777;}
    .title2{text-align: left;position: relative;top: 0px;margin-left: 25px;margin-bottom: 15px;border-radius: 8px;}
    .positionMenu{padding:11px 11px 0}
    #imgsocial{overflow-y: scroll;height: 143px;padding: 5px 0px;margin: 5px 0;border-radius: 3px;border: 1px solid #CCC;}
    #imgsocial img:hover,.iconselect{background: #DFDFDF;border-radius:3px}
    .sortable li{
	border: 1px solid #ccc ;font-weight: bold;color: #222 ;text-shadow: 0  1px  0  #ffffff ;
	background: #eee;
	background: -webkit-gradient(linear, left top, left bottom, from( #ffffff), to( #f1f1f1));
	background: -webkit-linear-gradient( #ffffff, #f1f1f1); 
	background: -moz-linear-gradient( #ffffff, #f1f1f1);
	background: -ms-linear-gradient( #ffffff, #f1f1f1);
	background: -o-linear-gradient( #ffffff, #f1f1f1);
	background: linear-gradient( #ffffff, #f1f1f1);
    }
	#imgsocial img{padding: 5px}
	.ssfeatures{padding-left: 8px;}
	ol img{margin: 5px 0 0 5px;}
	.ui-icon-closethick {margin-top: 5px;}
</style>
<div id="item-menu-template" class="none">
    <li>
	    <div class="inline-block" style="width: 12%;box-sizing: border-box;"><img src=""><input type="hidden" class="input_icon" /></div>
            <div class="inline-block" style="width: 40%;box-sizing: border-box;"><input style="width: 100%;box-sizing: border-box;" type="text" class="input_title" value="" /></div>
            <div class="inline-block" style="width: 40%;box-sizing: border-box;"><input style="width: 100%;box-sizing: border-box;" class="input_url floatright" type="text"  value="" /></div>
            <div class="inline-block floatright" style="width: 4%;box-sizing: border-box;"><a href="#" onclick="$(this).closest('li').remove();refreshPos();"><span class="ui-icon ui-icon-closethick"></span></a></div>
    </li>
</div>
<div id="design-menu">
    <div id="linkmenu" class="features">
        <h2><?php echo t('Add Links', FALSE); ?></h2>
        <div id="linkmenuAdd">
            <div class="title1"><?php echo t('Add A Link Manually', FALSE); ?></div>
            <input type="text" id="input_title" placeholder="<?php echo t('Title', FALSE); ?>" />
            <input type="text" id="input_url"  placeholder="http://" />
            <input type="hidden" id="input_icon" />
            <div id="imgsocial">
		
            </div>
            <input type="button" value="<?php echo t('Add', FALSE); ?>" id="add-menu-item">
        </div>
    </div>
	<div class="features">
		<h2><?php echo t('Icons options', FALSE); ?></h2>
		<div class="title1" id="default" style="display: inline-block;margin-left: 8px;"><?php echo t('Default SVG Color', FALSE); ?>
			<input style="margin-left: 8px" type="color" class="colorpicker" name="color" value="<?php if($this->getConfig('color')) echo $this->getConfig('color'); else echo '#141414'; ?>">
			<input type="text" disabled="disabled" class="reprcolor">
			<span><?php echo ' ('.t('By default #141414', FALSE) . ' '; ?>)</span>
		</div>
		<div class="title1" style="display: inline-block;margin-left: 8px;"><?php echo t('Color on hover', FALSE); ?>
			<input style="margin-left: 8px" type="color" class="colorpicker2" name="hovercolor" value="<?php if($this->getConfig('hovercolor')) echo $this->getConfig('hovercolor'); else echo '#141414'; ?>">
			<input type="text" disabled="disabled" class="reprcolor">
			<span><?php echo ' ('.t('By default #141414', FALSE) . ' '; ?>)</span>
		</div>
		<div class="title1" style="margin-left: 8px;"><?php echo t('Icons Size', FALSE); ?><input style="width:30px;margin-left: 8px" type="text" name="size" value="<?php if($this->getConfig('size')) echo $size = $this->getConfig('size'); else echo $size = 20;?>" placeholder="<?php echo t('Size (px)', FALSE); ?>"/><span><?php echo ' px ('.t('By default 20px', FALSE) . ' '; ?>)</span></div>
	</div>
    <div id="previewmenu" class="features">
        <h2><?php echo t('Preview Menu', FALSE); ?></h2>
        <ol class="sortable">
	    <?php
	    $menu = $this->getConfig('menu');
	    if (is_array($this->getConfig('menu'))) {
		foreach ($menu AS $id => $item) {
		    ?>
		    <li id="itemlist_<?php echo $id ?>">
			<div class="inline-block" style="width: 12%;box-sizing: border-box;"><img src="<?php echo BASE_PATH . 'modules/portfolio/lib/' . $item['icon'] ?>.svg"><input type="hidden" name="menu[<?php echo $id ?>][icon]"  value="<?php echo $item['icon'] ?>" /></div>
			<div class="inline-block" style="width: 40%;box-sizing: border-box;"><input style="width: 100%;box-sizing: border-box;" type="text" class="input_title" name="menu[<?php echo $id ?>][title]" value="<?php echo $item['title'] ?>" /></div>
			<div class="inline-block" style="width: 40%;box-sizing: border-box;margin-top: 1px;"><input style="width: 100%;box-sizing: border-box;" class="input_url floatright" type="text" name="menu[<?php echo $id ?>][url]"  value="<?php echo $item['url'] ?>" /></div>
			<div class="inline-block floatright" style="width: 4%;box-sizing: border-box;"><a href="#" onclick="$(this).closest('li').remove();refreshPos();"><span class="ui-icon ui-icon-closethick"></span></a></div>
		    </li>
		    <?php
		}
	    }
		
	    ?>
        </ol>
    </div>
</div>
<script>
    $(document).ready(function() {
        function addLink(title,url,icon){
            var maxnb = 0;
            $("ol.sortable li").each(function(i) {
                var tab = $(this).attr("id").split(/itemlist_/);
                if(parseInt(tab[1]) > maxnb) maxnb = parseInt(tab[1]);
            });
            maxnb++;
            var obj = $('#item-menu-template > li').clone().attr("id","itemlist_" + maxnb);
            obj.find(".input_title").val(title).attr("name","menu[" + maxnb + "][title]");
			obj.find(".input_size").val(title).attr("name","menu[" + maxnb + "][size]");
            obj.find(".input_url").val(url).attr("name","menu[" + maxnb + "][url]");
            obj.find(".input_icon").val(icon).attr("name","menu[" + maxnb + "][icon]");
	    obj.find("img").attr("src",$(".iconselect").attr("src"));
            $("#input_title").val('');
            $("#input_url").val('');
            $("ol.sortable").append(obj);
        }
        $("#add-menu-item").click(function(){
            addLink($("#input_title").val(),$("#input_url").val(),$("#input_icon").val());
        });
        $(document).on("click","#imgsocial img",function(){
            $('.iconselect').removeClass('iconselect');
            $(this).addClass('iconselect');
            $("#input_icon").val($(this).data('id'));
        });
        <?php
            $imgs = '';
            foreach (glob("modules/portfolio/lib/*.svg") as $filename) {
                $imgs .= '<img src="' . BASE_PATH . $filename . '" data-id="' . substr(basename($filename), 0, -4) . '" style="float:left;cursor:pointer"\>';
            }
        ?>
        $(window).load(function () {
            $('<?php echo $imgs ?>').appendTo("#imgsocial");
        });
    });
</script>