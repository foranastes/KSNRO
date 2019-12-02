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
<div id="newsheader">
        <?php /*?><img alt="<?php echo $this->item->category->name; ?>" src="media/k2/categories/<?php echo $this->item->category->image; ?>" /><?php */?>
        
        <?php if($this->item->params->get('itemImage')): ?>
        <img src="<?php echo $this->item->image; ?>" alt="<?php if(!empty($this->item->image_caption)) echo K2HelperUtilities::cleanHtml($this->item->image_caption); else echo K2HelperUtilities::cleanHtml($this->item->title); ?>"/>
        <?php endif; ?>
        <?php if(!empty($this->item->params->get('itemImage'))): ?>
        <img alt="<?php echo $this->item->category->name; ?>" src="media/k2/categories/<?php echo $this->item->category->image; ?>" />
        <?php endif; ?>
        
<?php if($this->item->params->get('itemTitle')): ?>
	<!-- Item title -->
	<h2 class="newsTitle">
		<?php echo $this->item->title; ?>
	</h2>
	<?php endif; ?>
      
</div>
<div id="newswrapper">
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
<div id="k2Container" class="itemView<?php echo ($this->item->featured) ? ' itemIsFeatured' : ''; ?><?php if($this->item->params->get('pageclass_sfx')) echo ' '.$this->item->params->get('pageclass_sfx'); ?>">

	<div class="itemHeader">
    <!-- breadcrump -->
    
     <div id="breadcrump">
    <?php foreach (JModuleHelper::getModules('breadspace') as $module) { echo JModuleHelper::renderModule($module);} ?>
    </div>
    
    <!-- breadcrump -->
	<?php if($this->item->params->get('itemDateCreated')): ?>
	<!-- Date created -->
	<span class="newsDateCreated">
		<?php echo JHTML::_('date', $this->item->created , JText::_('K2_DATE_FORMAT_LC2')); ?>
	</span>
	<?php endif; ?>

	<?php if($this->item->params->get('itemAuthor')): ?>
	<!-- Item Author -->
	<span class="itemAuthor">
		Posted By <?php echo $this->item->author->name; ?>
	</span>
	<?php endif; ?>

	</div>
    <div id="itemtools">
    <span class="toolscol"></span>
    <span class="toolscol"></span>
    <span class="toolscol"></span>
    <span class="toolscol"></span>
    <span class="toolscol"></span>
    </div>
    <hr />

	<div class="itemBody newsbody">

		<!-- Plugins: BeforeDisplayContent -->
		<?php echo $this->item->event->BeforeDisplayContent; ?>

		<!-- K2 Plugins: K2BeforeDisplayContent -->
		<?php echo $this->item->event->K2BeforeDisplayContent; ?>

		

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

		<?php if($this->item->params->get('itemHits') || ($this->item->params->get('itemDateModified') && intval($this->item->modified)!=0)): ?>
		<div class="itemContentFooter">

			<?php if($this->item->params->get('itemHits')): ?>
			<!-- Item Hits -->
			<span class="itemHits">
				<?php echo JText::_('K2_READ'); ?> <b><?php echo $this->item->hits; ?></b> <?php echo JText::_('K2_TIMES'); ?>
			</span>
			<?php endif; ?>

			<?php if($this->item->params->get('itemDateModified') && intval($this->item->modified)!=0): ?>
			<!-- Item date modified -->
			<span class="itemDateModified">
				<?php echo JText::_('K2_LAST_MODIFIED_ON'); ?> <?php echo JHTML::_('date', $this->item->modified, JText::_('K2_DATE_FORMAT_LC2')); ?>
			</span>
			<?php endif; ?>

			<div class="clr"></div>
		</div>
		<?php endif; ?>

		<!-- Plugins: AfterDisplayContent -->
		<?php echo $this->item->event->AfterDisplayContent; ?>

		<!-- K2 Plugins: K2AfterDisplayContent -->
		<?php echo $this->item->event->K2AfterDisplayContent; ?>

		<div class="clr"></div>

	</div>

	<?php if(
		$this->item->params->get('itemTwitterButton',1) ||
		$this->item->params->get('itemFacebookButton',1) ||
		$this->item->params->get('itemGooglePlusOneButton',1)
	): ?>
	<!-- Social sharing -->
	<div class="itemSocialSharing">

		<?php if($this->item->params->get('itemTwitterButton',1)): ?>
		<!-- Twitter Button -->
		<div class="itemTwitterButton">
			<a href="https://twitter.com/share" class="twitter-share-button" data-lang="<?php echo $this->item->langTagForTW; ?>" data-via="<?php if($this->item->params->get('twitterUsername')) echo $this->item->params->get('twitterUsername'); ?>"><?php echo JText::_('K2_TWEET'); ?></a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</div>
		<?php endif; ?>

		<?php if($this->item->params->get('itemFacebookButton',1)): ?>
		<!-- Facebook Button -->
		<div class="itemFacebookButton">
			<div id="fb-root"></div>
			<script>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id)) return;js=d.createElement(s);js.id=id;js.src="//connect.facebook.net/<?php echo $this->item->langTagForFB; ?>/sdk.js#xfbml=1&version=v2.5";fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));</script>
			<div class="fb-like" data-width="200" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
		</div>
		<?php endif; ?>

		<?php if($this->item->params->get('itemGooglePlusOneButton',1)): ?>
		<!-- Google +1 Button -->
		<div class="itemGooglePlusOneButton">
			<div class="g-plusone" data-size="medium"></div>
			<script>window.___gcfg={lang:'<?php echo $this->item->langTagForGP; ?>'};(function(){var po=document.createElement('script');po.type='text/javascript';po.async=true;po.src='https://apis.google.com/js/platform.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(po,s);})();</script>
		</div>
		<?php endif; ?>

		<div class="clr"></div>

	</div>
	<?php endif; ?>

	<?php if(
		$this->item->params->get('itemCategory') ||
		$this->item->params->get('itemTags') ||
		$this->item->params->get('itemAttachments')
	): ?>
	<div class="itemLinks">

		<?php if($this->item->params->get('itemCategory')): ?>
		<!-- Item category -->
		<div class="itemCategory">
			<span><?php echo JText::_('K2_PUBLISHED_IN'); ?></span>
			<a href="<?php echo $this->item->category->link; ?>"><?php echo $this->item->category->name; ?></a>
		</div>
		<?php endif; ?>

		<?php if($this->item->params->get('itemTags') && count($this->item->tags)): ?>
		<!-- Item tags -->
		<div class="itemTagsBlock">
			<span><?php echo JText::_('K2_TAGGED_UNDER'); ?></span>
			<ul class="itemTags">
				<?php foreach ($this->item->tags as $tag): ?>
				<li><a href="<?php echo $tag->link; ?>"><?php echo $tag->name; ?></a></li>
				<?php endforeach; ?>
			</ul>
			<div class="clr"></div>
		</div>
		<?php endif; ?>

		<?php if($this->item->params->get('itemAttachments') && count($this->item->attachments)): ?>
		<!-- Item attachments -->
		<div class="itemAttachmentsBlock">
			<span><?php echo JText::_('K2_DOWNLOAD_ATTACHMENTS'); ?></span>
			<ul class="itemAttachments">
				<?php foreach ($this->item->attachments as $attachment): ?>
				<li>
					<a title="<?php echo K2HelperUtilities::cleanHtml($attachment->titleAttribute); ?>" href="<?php echo $attachment->link; ?>"><?php echo $attachment->title; ?></a>
					<?php if($this->item->params->get('itemAttachmentsCounter')): ?>
					<span>(<?php echo $attachment->hits; ?> <?php echo ($attachment->hits==1) ? JText::_('K2_DOWNLOAD') : JText::_('K2_DOWNLOADS'); ?>)</span>
					<?php endif; ?>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
		<?php endif; ?>

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
</div>
<!-- End K2 Item Layout -->