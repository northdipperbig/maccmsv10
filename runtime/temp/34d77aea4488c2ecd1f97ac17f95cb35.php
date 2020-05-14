<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:41:"template/90sdyy_dc/html/gbook/report.html";i:1588579216;}*/ ?>
<div class="fed-part-layout fed-back-whits">
<form class="fed-comm-fork fed-comm-form fed-event" data-role="<?php echo $gbook['login']; ?>" autocomplete="off" onkeydown="if(event.keyCode==13){return false}">
<ul class="fed-part-rows">
<li class="fed-padding fed-col-xs12"><textarea class="fed-form-info fed-rims-info fed-form-area fed-comm-text fed-event" name="gbook_content" cols="40" rows="4" placeholder="输入留言内容"><?php echo $param['name']; ?></textarea></li>
<li class="fed-padding<?php if($gbook['verify']==1): ?> fed-col-xs12 fed-col-md4<?php else: ?> fed-col-xs9 fed-col-md10<?php endif; ?>"><p class="fed-form-info fed-rims-info fed-btns-disad fed-text-muted">提示：<span class="fed-comm-tips">还可以输入255字</span></p></li>
<?php if($gbook['verify']==1): ?>
<li class="fed-padding fed-col-xs6 fed-col-md4"><input class="fed-form-info fed-rims-info fed-comm-veri" type="tel" name="verify" placeholder="验证码" /></li>
<li class="fed-padding fed-col-xs3 fed-col-md2"><img class="fed-rims-info fed-comm-code" height="40" src="<?php echo mac_url('verify/index'); ?>" data-role="<?php echo mac_url('verify/index'); ?>" title="看不清楚? 换一张！" onClick="this.src=this.src+'?'" /></li>
<?php endif; ?>
<li class="fed-padding fed-col-xs3 fed-col-md2"><a class="fed-form-info fed-rims-info fed-btns-info fed-btns-green fed-comm-gbooks">提交</a></li>
</ul>
</form>
</div>