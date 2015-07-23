<div style="border-top:2px solid #ccc;" class="left box">
    <a href="<?php echo url_for('page/show?route='.$rs->getRoute())?>" title="<?php echo GlobalLib::clearOutput($rs->getTitle())?>" style="display:block;">
        <h1 style="margin:9px 0 8px 8px;font-weight:bold;letter-spacing:0px;<?php if($rs->getIntro()) echo 'padding:0 0 5px 0;border-bottom:1px solid #dedede;'?>">
            <?php echo GlobalLib::clearOutput($rs->getTitle())?>
        </h1>
        <div style="margin:0 8px 8px 8px;">
        		<?php echo GlobalLib::clearOutput(
                  mb_strlen($rs->getIntro()) > 100 
                  ? utf8_substr($rs->getIntro(), 0, 100).' ...' 
                  : $rs->getIntro());?>
    		</div>
        <?php echo image_tag($rs->getCover(), array('style'=>'max-width:750px;'))?>
    </a>
    <div style="position:absolute;bottom:0;left:0;height:12px;padding:6px 0;width:100%;background:rgba(0,0,0,0.5);">
        <span class="left c-fff timeago" style="margin:0 8px;"><?php echo time_ago($rs->getCreatedAt())?></span>
        <span class="left c-fff" style="line-height:13px;margin:0 8px;"><?php echo image_tag('icons/eye.ico', array('class'=>'left', 'style'=>'margin:-3px 4px 0 0;max-width:20px;'))?> <?php echo $rs->getNbViews()?></span>
        <!--<span class="left c-fff" style="line-height:13px;margin:0 8px;"><?php //echo image_tag('icons/love16.ico', array('align'=>'absmiddle'))?> <?php //echo $rs->getNbLove()?></span>-->
        <a href="<?php echo url_for("page/show?route=".$rs->getRoute())?>#comments-title" class="left c-fff" style="line-height:13px;margin:0 8px;">
            <?php echo image_tag('icons/comments.ico', array('align'=>'absmiddle'))?> <?php echo $rs->getNbComment()?>
        </a>
        <a href="<?php echo url_for('page/show?route='.$rs->getRoute())?>" title="<?php echo GlobalLib::clearOutput($rs->getTitle())?>" class="right c-fff more">
            Дэлгэрэнгүй &raquo; &nbsp;
        </a>
        <br clear="all">
    </div>
</div>