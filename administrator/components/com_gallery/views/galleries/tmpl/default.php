<?php 
/**
 * @package Huge IT Gallery
 * @author Huge-IT
 * @copyright (C) 2014 Huge IT. All rights reserved.
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * @website		http://www.huge-it.com/
 **/
?>
<?php defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
?>

<div style="clear: both;"></div>
<div id="j-sidebar-container" class="j-sidebar-container j-sidebar-visible" style=" border: 1px solid #e3e3e3;margin-top:8px ">
    <div id="j-toggle-sidebar-wrapper">
	<div id="j-toggle-sidebar-header" class="j-toggle-sidebar-header">
	<div id="sidebar" class="sidebar">
            <div class="sidebar-nav">
                <ul id="submenu" class="nav nav-list">
                    <li class="active">
                            <a href="index.php?option=com_gallery">Galleries</a>
                    </li>
                </ul>
            <div>
            </div>
	<div id="j-toggle-sidebar"></div>
        </div>
	</div>
        </div>
    </div>
</div>
<div id="j-main-container" class="span10 j-toggle-main" style="padding: 10px 0 0px 20px;">
    <form action="<?php echo JRoute::_('index.php?option=com_gallery'); ?>" method="post" name="adminForm" id="adminForm" style="margin-top:10px">
    <table class="wp-list-table widefat fixed pages" style="width:100%">
        <thead>
        <tr  style="height: 38px;border: 1px solid #cccccc;">
        <th style="text-align: left;"><input style= "margin-left: 11px;" type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
        <span style="margin-top: 27px;position: relative;top: 3px;left: 3px;"><?php echo JText::_('ID'); ?></span></th>
        <th style="text-align: left;"><span><?php echo JText::_('Name'); ?></span><span class="sorting-indicator"></span></th>
        <th style="text-align: left;"><span><?php echo JText::_('Shortecodes'); ?></span><span class="sorting-indicator"></span></th>
        <th style="text-align: left;"><?php echo JText::_('Images'); ?></th>
        </tr>
        </thead>
        <tbody style="border: 1px solid #ccc;">
        <?php echo $this->loadTemplate('body');  ?>
        </tbody>

    </table>
	<div>
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="boxchecked" value="0" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>
</div>