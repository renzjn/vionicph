<?php
/**
 * @package    Joomla.Site
 * @subpackage Modules JMG Img Hover
 * @link http://joomega.com
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
 
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
$doc  = JFactory::getDocument();
$doc->addStyleSheet(Juri::base() . 'modules/mod_jmg_imghover/assets/css/mod_jmg_imghover.css');
$script = 'document.addEventListener("touchstart", function(){}, true);';
$doc->addScriptDeclaration( $script );
 ?>
 <div class="<?php echo $mod_jmg_imghover_box_text_wrap;?>">
 <figure class="<?php echo $mod_jmg_imghover_effect;?>" style="background-color:<?php echo $mod_jmg_imghover_background_color;?>;">
    <img src="<?php echo $mod_jmg_imghover_image;?>">
    <figcaption style="background-color:<?php echo $mod_jmg_imghover_background_color;?>;">
        <h2><?php echo $mod_jmg_imghover_head;?></h2>
        <p><?php echo $mod_jmg_imghover_text;?></p>
    </figcaption>
    <a href="<?php echo $mod_jmg_imghover_menu_link;?>" target="<?php echo $mod_jmg_imghover_menu_target;?>"></a>
</figure>
</div>	