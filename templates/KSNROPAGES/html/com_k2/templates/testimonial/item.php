<?php
/**
 * @version    2.8.x
 * @package    K2
 * @author     JoomlaWorks http://www.joomlaworks.net
 * @copyright  Copyright (c) 2006 - 2017 JoomlaWorks Ltd. All rights reserved.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die;

?>

<!-- Start K2 Item Layout -->
<span id="startOfPageId<?php echo JRequest::getInt('id'); ?>"></span>

<div id="testimonialContainer">

	<div class="itemHeader tesimonialhd">
    <div id="blackoverimage"></div>

	<?php if($this->item->params->get('itemTitle')): ?>
	<!-- Item title -->
	<h2 class="testiTitle">
		<?php if(isset($this->item->editLink)): ?>
		<!-- Item edit link -->
		<span class="itemEditLink">
			<a data-k2-modal="edit" href="<?php echo $this->item->editLink; ?>"><?php echo JText::_('K2_EDIT_ITEM'); ?></a>
		</span>
		<?php endif; ?>

		<?php echo $this->item->title; ?>

		<?php if($this->item->params->get('itemFeaturedNotice') && $this->item->featured): ?>
		<!-- Featured flag -->
		<span>
			<sup>
				<?php echo JText::_('K2_FEATURED'); ?>
			</sup>
		</span>
		<?php endif; ?>
	</h2>
	<?php endif; ?>

	</div>

	<div class="itemBody">
    <div id="vl"></div>

		<?php if(!empty($this->item->fulltext)): ?>

		<?php if($this->item->params->get('itemIntroText')): ?>
		<!-- Item introtext -->
		<div class="itemIntroText">
			<?php echo $this->item->introtext; ?>
		</div>
		<?php endif; ?>

		<?php if($this->item->params->get('itemFullText')): ?>
		<!-- Item fulltext -->
		<div class="testiFullText">
			<?php echo $this->item->fulltext; ?>
		</div>
		<?php endif; ?>

		<?php else: ?>

		<!-- Item text -->
		<div class="testiFullText">
			<?php echo $this->item->introtext; ?>
		</div>

		<?php endif; ?>

		<div class="clr"></div>

	</div>

	<?php
	/*
	A note regarding 'Related Items'...
	If you add:
	- the CSS rule 'overflow-x:scroll;' in the element div.itemRelated {…} in the k2.css
	- the class 'k2Scroller' to the ul element below
	- the classes 'k2ScrollerElement' and 'k2EqualHeights' to the li element inside the foreach loop below
	- the style attribute 'style="width:<?php echo $item->imageWidth; ?>px;"' to the li element inside the foreach loop below
	...then your Related Items will be transformed into a vertical-scrolling block, inside which, all items have the same height (equal column heights). This can be very useful if you want to show your related articles or products with title/author/category/image etc., which would take a significant amount of space in the classic list-style display.
	*/
	?>

	<div class="clr"></div>

	<?php if(!JRequest::getCmd('print')): ?>
	<div class="itemBackToTop">
		<a class="k2Anchor" href="<?php echo $this->item->link; ?>#startOfPageId<?php echo JRequest::getInt('id'); ?>">
			<?php echo JText::_('K2_BACK_TO_TOP'); ?>
		</a>
	</div>
	<?php endif; ?>

	<div class="clr"></div>

</div>
<!-- End K2 Item Layout -->
