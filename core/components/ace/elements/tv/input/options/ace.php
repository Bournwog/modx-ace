<?
/**
 * Ace Input Options Render
 */
$corePath = $this->modx->getOption('ace.core_path', null,  $this->modx->getOption('core_path').'components/ace/');        
return $modx->smarty->fetch($corePath . 'elements/tv/input/tpl/ace.options.tpl');
