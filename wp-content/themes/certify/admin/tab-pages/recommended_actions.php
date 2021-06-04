<?php 
	$certify_actions = $this->recommended_actions;
	$certify_actions_todo = get_option( 'certify_recommended_actions', false );
?>
<div id="recommended_actions" class="certify-tab-pane panel-close">
<div class="action-list">
	<?php if($certify_actions): foreach ($certify_actions as $key => $certify_val): ?>
	<div class="col-md-6">
	<div class="action" id="<?php echo esc_attr($certify_val['id']); ?>">
		<div class="action-watch">
		<?php if(!$certify_val['is_done']): ?>
			<?php if(!isset($certify_actions_todo[$certify_val['id']]) || !$certify_actions_todo[$certify_val['id']]): ?>
				<span class="dashicons dashicons-visibility"></span>
			<?php else: ?>
				<span class="dashicons dashicons-hidden"></span>
			<?php endif; ?>
		<?php else: ?>
			<span class="dashicons dashicons-yes"></span>
		<?php endif; ?>
		</div>
		<div class="action-inner">
			<h3 class="action-title"><?php echo esc_html($certify_val['title']); ?></h3>
			<div class="action-desc"><?php echo esc_html($certify_val['desc']); ?></div>
			<?php echo wp_kses_post($certify_val['link']); ?>
		</div>
	</div>
	</div>
	<?php endforeach; endif; ?>
</div>
</div>