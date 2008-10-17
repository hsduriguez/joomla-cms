<?php /** $Id$ */ defined('_JEXEC') or die('Restricted access'); ?>
<fieldset class="adminform">
	<legend><?php echo JText::_( 'SEO Settings' ); ?></legend>
	<table class="admintable" cellspacing="1">

		<tbody>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Search Engine Friendly URLs' ); ?>::<?php echo JText::_('Search Engine Optimization Settings'); ?>">
					<?php echo JText::_( 'Search Engine Friendly URLs' ); ?>
				</span>
			</td>
			<td>
				<?php echo JHTML::_('select.booleanlist', 'sef', 'class="inputbox"', $this->row->sef); ?>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'Use mod_rewrite' ); ?>::<?php echo JText::_('TIPUSEMODREWRITE'); ?>">
					<?php echo JText::_( 'Use mod_rewrite' ); ?>
				</span>
			</td>
			<td>
				<?php echo JHTML::_('select.booleanlist', 'sef_rewrite', 'class="inputbox"', $this->row->sef_rewrite); ?>
				<span class="error hasTip" title="<?php echo JText::_( 'Warning' );?>::<?php echo JText::_( 'WARNAPACHEONLY' ); ?>">
					<?php echo JHTML::_('config.warnicon'); ?>
				</span>
			</td>
		</tr>
		<tr>
			<td width="185" class="key">
				<span class="editlinktip hasTip" title="<?php echo JText::_( 'URL Suffix' ); ?>::<?php echo JText::_('TIPURLSUFFIX'); ?>">
					<?php echo JText::_( 'Add suffix to URLs' ); ?>
				</span>
			</td>
			<td>
				<?php echo JHTML::_('select.booleanlist', 'sef_suffix', 'class="inputbox"', $this->row->sef_suffix); ?>
			</td>
		</tr>
		</tbody>
	</table>
</fieldset>
