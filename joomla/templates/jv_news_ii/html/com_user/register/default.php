<?php // @version $Id: default.php 11917 2009-05-29 19:37:05Z ian $
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<?php if($this->params->get('show_page_title',1)) : ?>
<h2 class="componentheading<?php echo $this->escape($this->params->get('pageclass_sfx')) ?>">
	<?php echo $this->escape($this->params->get('page_title')) ?>
</h2>
<?php endif; ?>

<script type="text/javascript">
	Window.onDomReady(function(){
		document.formvalidator.setHandler('passverify', function (value) { return ($('password').value == value); }	);
	});
</script>

<form action="<?php echo JRoute::_('index.php?option=com_user#content'); ?>" method="post" id="josForm" name="josForm" class="form-validate user">
	<?php if(isset($this->message)) :
		$this->display('message');
	endif; ?>
	<fieldset>
		<p><?php echo JText::_('REGISTER_REQUIRED'); ?></p>
  <div class="name">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="120"><label id="namemsg" for="name"><?php echo JText::_('Name'); ?>: *</label></td>
    <td><input name="name"  type="text" class="inputbox validate required none namemsg" id="name" value="<?php echo $this->escape($this->user->get('name')); ?>" size="50" maxlength="50" /></td>
  </tr>
  <tr>
    <td><label id="usernamemsg" for="username"><?php echo JText::_('Username'); ?>: *</label></td>
    <td><input name="username" type="text" class="inputbox validate required username usernamemsg" id="username"  value="<?php echo $this->escape($this->user->get('username')); ?>" size="50" maxlength="25" /></td>
  </tr>
  <tr>
    <td><label id="emailmsg" for="email"><?php echo JText::_('Email'); ?>: *</label></td>
    <td><input name="email" type="text" class="inputbox validate required email emailmsg" id="email" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;"  value="<?php echo $this->escape($this->user->get('email')); ?>" size="50" maxlength="100"/></td>
  </tr>	</fieldset><fieldset>
  <tr>
    <td><label id="pwmsg" for="password"><?php echo JText::_('Password'); ?>: *</label></td>
    <td><input name="password" type="password" class="inputbox required validate-password" id="password" onfocus="if(this.value==this.defaultValue) this.value='';" onblur="if(this.value=='') this.value=this.defaultValue;" value="" size="50"/></td>
  </tr>
  <tr>
    <td><label id="pw2msg" for="password2"><?php echo JText::_('Verify Password'); ?>: *</label></td>
    <td><input name="password2" type="password" class="inputbox required validate-passverify" id="password2" value="" size="50" /></td>
  </tr>
</table>		
		</div>
		
	</fieldset>
	<button class="button " type="submit"><?php echo JText::_('Register'); ?></button>
	<input type="hidden" name="task" value="register_save" />
	<input type="hidden" name="id" value="0" />
	<input type="hidden" name="gid" value="0" />
	<?php echo JHTML::_( 'form.token' ); ?>
</form>
