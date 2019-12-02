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
<?php 
$parent = JTable::getInstance('K2Category', 'Table');
$parent->load($this->item->category->parent);
$parentname = $parent->name; 
?>
<div class="itemHeader stateshd">
<h1><?php echo $this->item->category->name; ?></h1>
<div id="blackoverimage"></div>
</div>
<div id="sidemenu">
<h2><?php echo $this->item->category->name; ?></h2>
<?php
$document = &JFactory::getDocument();
$renderer   = $document->loadRenderer('modules');
$position   = 'statemenu';
$options   = array('style' => 'raw');
echo $renderer->render($position, $options, null); 
?>
</div>
<div id="statewrapper">
<!-- Article Tools Starts -->
<div id="articletools">
<ul>
<li><p>Font Size</p></li>
<a href="#" id="fontIncrease"><li><i class="fa fa-plus-circle" aria-hidden="true"></i></li></a>
<a id="fontDecrease" href="#"><li><i class="fa fa-minus-circle" aria-hidden="true"></i></li></a>
</ul>
<ul class="printmail">
<a href="#" class="itemPrintThisPage" rel="nofollow" onclick="window.print();return false;"><li><i class="fa fa-print" aria-hidden="true"></i><p>Print</p></li></a>
<a class="itemEmailLink" rel="nofollow" href="<?php echo $this->item->emailLink; ?>" onclick="window.open(this.href,'emailWindow','width=400,height=350,location=no,menubar=no,resizable=no,scrollbars=no'); return false;"><li><i class="fa fa-envelope" aria-hidden="true"></i><p>Email</p></li></a>

</ul>

<ul>
<a href="https://twitter.com/share" class="twitter-share-button" data-lang="<?php echo $this->item->langTagForTW; ?>" data-via="<?php if($this->item->params->get('twitterUsername')) echo $this->item->params->get('twitterUsername'); ?>"><?php echo JText::_('K2_TWEET'); ?></a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            
<li><div id="fb-root"></div>
			<script>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)) return;js=d.createElement(s);js.id=id;js.src="//connect.facebook.net/<?php echo $this->item->langTagForFB; ?>/sdk.js#xfbml=1&version=v2.5";fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));</script>
			<div class="fb-like" data-width="200" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></li>
            
<li><script src="https://apis.google.com/js/platform.js" async defer></script>
<g:plus action="share"></g:plus></li>

</ul>
<?php if(JRequest::getInt('print')==1): ?>
<!-- Print button at the top of the print page only -->
<a class="itemPrintThisPage" rel="nofollow" href="#" onclick="window.print();return false;">
	<span><?php echo JText::_('K2_PRINT_THIS_PAGE'); ?></span>
</a>
<?php endif; ?>
</div>
<!-- Article Tools Ends -->

<!-- Start K2 Item Layout -->
<span id="startOfPageId<?php echo JRequest::getInt('id'); ?>"></span>

<div id="k2Container" class="itemView<?php echo ($this->item->featured) ? ' itemIsFeatured' : ''; ?><?php if($this->item->params->get('pageclass_sfx')) echo ' '.$this->item->params->get('pageclass_sfx'); ?>">

	<!-- Plugins: BeforeDisplay -->
	<?php echo $this->item->event->BeforeDisplay; ?>

	<!-- K2 Plugins: K2BeforeDisplay -->
	<?php echo $this->item->event->K2BeforeDisplay; ?>

	<div class="itemHeader">

	<?php if($this->item->params->get('itemTitle')): ?>
	<!-- Item title -->
	<h2 class="itemTitle">
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
    <hr />

	<?php if($this->item->params->get('itemAuthor')): ?>
	<!-- Item Author -->
	<span class="itemAuthor">
		<?php echo K2HelperUtilities::writtenBy($this->item->author->profile->gender); ?>
		<?php if(empty($this->item->created_by_alias)): ?>
		<a rel="author" href="<?php echo $this->item->author->link; ?>"><?php echo $this->item->author->name; ?></a>
		<?php else: ?>
		<?php echo $this->item->author->name; ?>
		<?php endif; ?>
	</span>
	<?php endif; ?>

	</div>

	<!-- Plugins: AfterDisplayTitle -->
	<?php echo $this->item->event->AfterDisplayTitle; ?>

	<!-- K2 Plugins: K2AfterDisplayTitle -->
	<?php echo $this->item->event->K2AfterDisplayTitle; ?>

	<?php if($this->item->params->get('itemRating')): ?>
	<!-- Item Rating -->
	<div class="itemRatingBlock">
		<span><?php echo JText::_('K2_RATE_THIS_ITEM'); ?></span>
		<div class="itemRatingForm">
			<ul class="itemRatingList">
				<li class="itemCurrentRating" id="itemCurrentRating<?php echo $this->item->id; ?>" style="width:<?php echo $this->item->votingPercentage; ?>%;"></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_1_STAR_OUT_OF_5'); ?>" class="one-star">1</a></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_2_STARS_OUT_OF_5'); ?>" class="two-stars">2</a></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_3_STARS_OUT_OF_5'); ?>" class="three-stars">3</a></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_4_STARS_OUT_OF_5'); ?>" class="four-stars">4</a></li>
				<li><a href="#" data-id="<?php echo $this->item->id; ?>" title="<?php echo JText::_('K2_5_STARS_OUT_OF_5'); ?>" class="five-stars">5</a></li>
			</ul>
			<div id="itemRatingLog<?php echo $this->item->id; ?>" class="itemRatingLog"><?php echo $this->item->numOfvotes; ?></div>
			<div class="clr"></div>
		</div>
		<div class="clr"></div>
	</div>
	<?php endif; ?>

	<div class="itemBody">

		<!-- Plugins: BeforeDisplayContent -->
		<?php echo $this->item->event->BeforeDisplayContent; ?>

		<!-- K2 Plugins: K2BeforeDisplayContent -->
		<?php echo $this->item->event->K2BeforeDisplayContent; ?>

		<?php if($this->item->params->get('itemImage') && !empty($this->item->image)): ?>
		<!-- Item Image -->
		<div class="itemImageBlock">
			<span class="itemImage">
				<a data-k2-modal="image" href="<?php echo $this->item->imageXLarge; ?>" title="<?php echo JText::_('K2_CLICK_TO_PREVIEW_IMAGE'); ?>">
					<img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>" style="width:<?php echo $this->item->imageWidth; ?>px; height:auto;" />
				</a>
			</span>

			<?php if($this->item->params->get('itemImageMainCaption') && !empty($this->item->image_caption)): ?>
			<!-- Image caption -->
			<span class="itemImageCaption"><?php echo $this->item->image_caption; ?></span>
			<?php endif; ?>

			<?php if($this->item->params->get('itemImageMainCredits') && !empty($this->item->image_credits)): ?>
			<!-- Image credits -->
			<span class="itemImageCredits"><?php echo $this->item->image_credits; ?></span>
			<?php endif; ?>

			<div class="clr"></div>
		</div>
		<?php endif; ?>

		<?php if(!empty($this->item->fulltext)): ?>

		<?php if($this->item->params->get('itemIntroText')): ?>
		<!-- Item introtext -->
		<div class="itemIntroText">
			<?php echo $this->item->introtext; ?>
		</div>
		<?php endif; ?>

		<?php if($this->item->params->get('itemFullText')): ?>
		<!-- Item fulltext -->
		<div class="itemFullText">
			<?php echo $this->item->fulltext; ?>
		</div>
		<?php endif; ?>

		<?php else: ?>

		<!-- Item text -->
		<div class="itemFullText">
			<?php echo $this->item->introtext; ?>
		</div>

		<?php endif; ?>

		<div class="clr"></div>

		<?php if($this->item->params->get('itemExtraFields') && count($this->item->extra_fields)): ?>
		<!-- Item extra fields -->
		<div class="itemExtraFields">
			<h3><?php echo JText::_('K2_ADDITIONAL_INFO'); ?></h3>
			<ul>
				<?php foreach ($this->item->extra_fields as $key=>$extraField): ?>
				<?php if($extraField->value != ''): ?>
				<li class="<?php echo ($key%2) ? "odd" : "even"; ?> type<?php echo ucfirst($extraField->type); ?> group<?php echo $extraField->group; ?>">
					<?php if($extraField->type == 'header'): ?>
					<h4 class="itemExtraFieldsHeader"><?php echo $extraField->name; ?></h4>
					<?php else: ?>
					<span class="itemExtraFieldsLabel"><?php echo $extraField->name; ?>:</span>
					<span class="itemExtraFieldsValue"><?php echo $extraField->value; ?></span>
					<?php endif; ?>
				</li>
				<?php endif; ?>
				<?php endforeach; ?>
			</ul>
			<div class="clr"></div>
		</div>
		<?php endif; ?>
        
        <?php if($this->item->params->get('itemDateCreated')): ?>
	<!-- Date created -->
	<span class="itemDateCreated">
		<?php echo 'Last updated on ' . JHTML::_('date', $this->item->modified , JText::_('K2_DATE_FORMAT_LC2')); ?>
	</span>
	<?php endif; ?>

		<!-- Plugins: AfterDisplayContent -->
		<?php echo $this->item->event->AfterDisplayContent; ?>

		<!-- K2 Plugins: K2AfterDisplayContent -->
		<?php echo $this->item->event->K2AfterDisplayContent; ?>

		<div class="clr"></div>

	</div>

	<?php if($this->item->params->get('itemAuthorBlock') && empty($this->item->created_by_alias)): ?>
	<!-- Author Block -->
	<div class="itemAuthorBlock">
		<?php if($this->item->params->get('itemAuthorImage') && !empty($this->item->author->avatar)): ?>
		<img class="itemAuthorAvatar" src="<?php echo $this->item->author->avatar; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($this->item->author->name); ?>" />
		<?php endif; ?>

		<div class="itemAuthorDetails">
			<h3 class="itemAuthorName">
				<a rel="author" href="<?php echo $this->item->author->link; ?>"><?php echo $this->item->author->name; ?></a>
			</h3>

			<?php if($this->item->params->get('itemAuthorDescription') && !empty($this->item->author->profile->description)): ?>
			<p><?php echo $this->item->author->profile->description; ?></p>
			<?php endif; ?>

			<?php if($this->item->params->get('itemAuthorURL') && !empty($this->item->author->profile->url)): ?>
			<span class="itemAuthorUrl"><i class="icon-globe"></i> <a rel="me" href="<?php echo $this->item->author->profile->url; ?>" target="_blank"><?php echo str_replace('http://','',$this->item->author->profile->url); ?></a></span>
			<?php endif; ?>

			<?php if($this->item->params->get('itemAuthorURL') && !empty($this->item->author->profile->url) && $this->item->params->get('itemAuthorEmail')): ?>
			<span class="k2HorizontalSep">|</span>
			<?php endif; ?>

			<?php if($this->item->params->get('itemAuthorEmail')): ?>
			<span class="itemAuthorEmail"><i class="icon-envelope"></i> <?php echo JHTML::_('Email.cloak', $this->item->author->email); ?></span>
			<?php endif; ?>

			<div class="clr"></div>

			<!-- K2 Plugins: K2UserDisplay -->
			<?php echo $this->item->event->K2UserDisplay; ?>

			<div class="clr"></div>
		</div>
		<div class="clr"></div>
	</div>
	<?php endif; ?>

	<?php if($this->item->params->get('itemAuthorLatest') && empty($this->item->created_by_alias) && isset($this->authorLatestItems)): ?>
	<!-- Latest items from author -->
	<div class="itemAuthorLatest">
		<h3><?php echo JText::_('K2_LATEST_FROM'); ?> <?php echo $this->item->author->name; ?></h3>
		<ul>
			<?php foreach($this->authorLatestItems as $key=>$item): ?>
			<li class="<?php echo ($key%2) ? "odd" : "even"; ?>">
				<a href="<?php echo $item->link ?>"><?php echo $item->title; ?></a>
			</li>
			<?php endforeach; ?>
		</ul>
		<div class="clr"></div>
	</div>
	<?php endif; ?>

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

	<?php if($this->item->params->get('itemRelated') && isset($this->relatedItems)): ?>
	<!-- Related items by tag -->
	<div class="itemRelated">
		<h3><?php echo JText::_("K2_RELATED_ITEMS_BY_TAG"); ?></h3>
		<ul>
			<?php foreach($this->relatedItems as $key=>$item): ?>
			<li class="<?php echo ($key%2) ? "odd" : "even"; ?>">

				<?php if($this->item->params->get('itemRelatedTitle', 1)): ?>
				<a class="itemRelTitle" href="<?php echo $item->link ?>"><?php echo $item->title; ?></a>
				<?php endif; ?>

				<?php if($this->item->params->get('itemRelatedCategory')): ?>
				<div class="itemRelCat"><?php echo JText::_("K2_IN"); ?> <a href="<?php echo $item->category->link ?>"><?php echo $item->category->name; ?></a></div>
				<?php endif; ?>

				<?php if($this->item->params->get('itemRelatedAuthor')): ?>
				<div class="itemRelAuthor"><?php echo JText::_("K2_BY"); ?> <a rel="author" href="<?php echo $item->author->link; ?>"><?php echo $item->author->name; ?></a></div>
				<?php endif; ?>

				<?php if($this->item->params->get('itemRelatedImageSize')): ?>
				<img style="width:<?php echo $item->imageWidth; ?>px;height:auto;" class="itemRelImg" src="<?php echo $item->image; ?>" alt="<?php echo K2HelperUtilities::cleanHtml($item->title); ?>" />
				<?php endif; ?>

				<?php if($this->item->params->get('itemRelatedIntrotext')): ?>
				<div class="itemRelIntrotext"><?php echo $item->introtext; ?></div>
				<?php endif; ?>

				<?php if($this->item->params->get('itemRelatedFulltext')): ?>
				<div class="itemRelFulltext"><?php echo $item->fulltext; ?></div>
				<?php endif; ?>

				<?php if($this->item->params->get('itemRelatedMedia')): ?>
				<?php if($item->videoType=='embedded'): ?>
				<div class="itemRelMediaEmbedded"><?php echo $item->video; ?></div>
				<?php else: ?>
				<div class="itemRelMedia"><?php echo $item->video; ?></div>
				<?php endif; ?>
				<?php endif; ?>

				<?php if($this->item->params->get('itemRelatedImageGallery')): ?>
				<div class="itemRelImageGallery"><?php echo $item->gallery; ?></div>
				<?php endif; ?>
			</li>
			<?php endforeach; ?>
			<li class="clr"></li>
		</ul>
		<div class="clr"></div>
	</div>
	<?php endif; ?>

	<div class="clr"></div>

	<?php if($this->item->params->get('itemVideo') && !empty($this->item->video)): ?>
	<!-- Item video -->
	<a name="itemVideoAnchor" id="itemVideoAnchor"></a>
	<div class="itemVideoBlock">
		<h3><?php echo JText::_('K2_MEDIA'); ?></h3>

		<?php if($this->item->videoType=='embedded'): ?>
		<div class="itemVideoEmbedded">
			<?php echo $this->item->video; ?>
		</div>
		<?php else: ?>
		<span class="itemVideo"><?php echo $this->item->video; ?></span>
		<?php endif; ?>

		<?php if($this->item->params->get('itemVideoCaption') && !empty($this->item->video_caption)): ?>
		<span class="itemVideoCaption"><?php echo $this->item->video_caption; ?></span>
		<?php endif; ?>

		<?php if($this->item->params->get('itemVideoCredits') && !empty($this->item->video_credits)): ?>
		<span class="itemVideoCredits"><?php echo $this->item->video_credits; ?></span>
		<?php endif; ?>

		<div class="clr"></div>
	</div>
	<?php endif; ?>

	<?php if($this->item->params->get('itemImageGallery') && !empty($this->item->gallery)): ?>
	<!-- Item image gallery -->
	<a name="itemImageGalleryAnchor" id="itemImageGalleryAnchor"></a>
	<div class="itemImageGallery">
		<h3><?php echo JText::_('K2_IMAGE_GALLERY'); ?></h3>
		<?php echo $this->item->gallery; ?>
	</div>
	<?php endif; ?>

	<?php if($this->item->params->get('itemNavigation') && !JRequest::getCmd('print') && (isset($this->item->nextLink) || isset($this->item->previousLink))): ?>
	<!-- Item navigation -->
	<div class="itemNavigation">
		<span class="itemNavigationTitle"><?php echo JText::_('K2_MORE_IN_THIS_CATEGORY'); ?></span>

		<?php if(isset($this->item->previousLink)): ?>
		<a class="itemPrevious" href="<?php echo $this->item->previousLink; ?>">&laquo; <?php echo $this->item->previousTitle; ?></a>
		<?php endif; ?>

		<?php if(isset($this->item->nextLink)): ?>
		<a class="itemNext" href="<?php echo $this->item->nextLink; ?>"><?php echo $this->item->nextTitle; ?> &raquo;</a>
		<?php endif; ?>
	</div>
	<?php endif; ?>

	<!-- Plugins: AfterDisplay -->
	<?php echo $this->item->event->AfterDisplay; ?>

	<!-- K2 Plugins: K2AfterDisplay -->
	<?php echo $this->item->event->K2AfterDisplay; ?>

	<?php if(
		$this->item->params->get('itemComments') &&
		(($this->item->params->get('comments') == '2' && !$this->user->guest) || ($this->item->params->get('comments') == '1'))
	): ?>
	<!-- K2 Plugins: K2CommentsBlock -->
	<?php echo $this->item->event->K2CommentsBlock; ?>
	<?php endif; ?>

	<?php if(
		$this->item->params->get('itemComments') &&
		($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2')) && empty($this->item->event->K2CommentsBlock)
	): ?>
	<!-- Item comments -->
	<a name="itemCommentsAnchor" id="itemCommentsAnchor"></a>
	<div class="itemComments">
		<?php if($this->item->params->get('commentsFormPosition')=='above' && $this->item->params->get('itemComments') && !JRequest::getInt('print') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2' && K2HelperPermissions::canAddComment($this->item->catid)))): ?>
		<!-- Item comments form -->
		<div class="itemCommentsForm">
			<?php echo $this->loadTemplate('comments_form'); ?>
		</div>
		<?php endif; ?>

		<?php if($this->item->numOfComments>0 && $this->item->params->get('itemComments') && ($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2'))): ?>
		<!-- Item user comments -->
		<h3 class="itemCommentsCounter">
			<span><?php echo $this->item->numOfComments; ?></span> <?php echo ($this->item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?>
		</h3>

		<ul class="itemCommentsList">
			<?php foreach ($this->item->comments as $key=>$comment): ?>
			<li class="<?php echo ($key%2) ? "odd" : "even"; echo (!$this->item->created_by_alias && $comment->userID==$this->item->created_by) ? " authorResponse" : ""; echo($comment->published) ? '':' unpublishedComment'; ?>">
				<span class="commentLink">
					<a href="<?php echo $this->item->link; ?>#comment<?php echo $comment->id; ?>" name="comment<?php echo $comment->id; ?>" id="comment<?php echo $comment->id; ?>">
						<?php echo JText::_('K2_COMMENT_LINK'); ?>
					</a>
				</span>

				<?php if($comment->userImage): ?>
				<img src="<?php echo $comment->userImage; ?>" alt="<?php echo JFilterOutput::cleanText($comment->userName); ?>" width="<?php echo $this->item->params->get('commenterImgWidth'); ?>" />
				<?php endif; ?>

				<span class="commentDate"><?php echo JHTML::_('date', $comment->commentDate, JText::_('K2_DATE_FORMAT_LC2')); ?></span>

				<span class="commentAuthorName">
					<?php echo JText::_('K2_POSTED_BY'); ?>
					<?php if(!empty($comment->userLink)): ?>
					<a href="<?php echo JFilterOutput::cleanText($comment->userLink); ?>" title="<?php echo JFilterOutput::cleanText($comment->userName); ?>" target="_blank" rel="nofollow"><?php echo $comment->userName; ?></a>
					<?php else: ?>
					<?php echo $comment->userName; ?>
					<?php endif; ?>
				</span>

				<p><?php echo $comment->commentText; ?></p>

				<?php if(
					$this->inlineCommentsModeration ||
					($comment->published && ($this->params->get('commentsReporting')=='1' || ($this->params->get('commentsReporting')=='2' && !$this->user->guest)))
				): ?>
				<span class="commentToolbar">
					<?php if($this->inlineCommentsModeration): ?>
					<?php if(!$comment->published): ?>
					<a class="commentApproveLink" href="<?php echo JRoute::_('index.php?option=com_k2&view=comments&task=publish&commentID='.$comment->id.'&format=raw')?>"><?php echo JText::_('K2_APPROVE')?></a>
					<?php endif; ?>

					<a class="commentRemoveLink" href="<?php echo JRoute::_('index.php?option=com_k2&view=comments&task=remove&commentID='.$comment->id.'&format=raw')?>"><?php echo JText::_('K2_REMOVE')?></a>
					<?php endif; ?>

					<?php if($comment->published && ($this->params->get('commentsReporting')=='1' || ($this->params->get('commentsReporting')=='2' && !$this->user->guest))): ?>
					<a data-k2-modal="iframe" href="<?php echo JRoute::_('index.php?option=com_k2&view=comments&task=report&commentID='.$comment->id)?>"><?php echo JText::_('K2_REPORT')?></a>
					<?php endif; ?>

					<?php if($comment->reportUserLink): ?>
					<a class="k2ReportUserButton" href="<?php echo $comment->reportUserLink; ?>"><?php echo JText::_('K2_FLAG_AS_SPAMMER'); ?></a>
					<?php endif; ?>
				</span>
				<?php endif; ?>

				<div class="clr"></div>
			</li>
			<?php endforeach; ?>
		</ul>

		<!-- Comments Pagination -->
		<div class="itemCommentsPagination">
			<?php echo $this->pagination->getPagesLinks(); ?>
			<div class="clr"></div>
		</div>
		<?php endif; ?>

		<?php if(
			$this->item->params->get('commentsFormPosition')=='below' &&
			$this->item->params->get('itemComments') &&
			!JRequest::getInt('print') &&
			($this->item->params->get('comments') == '1' || ($this->item->params->get('comments') == '2' && K2HelperPermissions::canAddComment($this->item->catid)))
		): ?>
		<!-- Item comments form -->
		<div class="itemCommentsForm">
			<?php echo $this->loadTemplate('comments_form'); ?>
		</div>
		<?php endif; ?>

		<?php $user = JFactory::getUser(); if($this->item->params->get('comments') == '2' && $user->guest): ?>
		<div class="itemCommentsLoginFirst"><?php echo JText::_('K2_LOGIN_TO_POST_COMMENTS'); ?></div>
		<?php endif; ?>

	</div>
	<?php endif; ?>

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
</div>