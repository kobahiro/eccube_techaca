<?php /* Smarty version 2.6.27, created on 2017-03-07 14:42:58
         compiled from error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'error.tpl', 28, false),)), $this); ?>

<?php echo '<div id="undercolumn"><div id="undercolumn_error"><div class="message_area"><!--★エラーメッセージ--><p class="error">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_error'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '</p></div><div class="btn_area"><ul><li>'; ?><?php if (((is_array($_tmp=$this->_tpl_vars['return_top'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><?php echo '<a href="'; ?><?php echo ((is_array($_tmp=@TOP_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo '"><img class="hover_change_image" src="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'img/button/btn_toppage.jpg" alt="トップページへ" /></a>'; ?><?php else: ?><?php echo '<a href="javascript:history.back()"><img class="hover_change_image" src="'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_URLPATH'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?><?php echo 'img/button/btn_back.jpg" alt="戻る" /></a>'; ?><?php endif; ?><?php echo '</li></ul></div></div></div>'; ?>
