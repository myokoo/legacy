<?php
/**
 * @file
 * @package lecat
 * @version $Id$
**/

if(!defined('XOOPS_ROOT_PATH'))
{
    exit;
}

require_once LECAT_TRUST_PATH . '/class/AbstractListAction.class.php';

/**
 * Lecat_CatListAction
**/
class Lecat_CatListAction extends Lecat_AbstractListAction
{
    /**
     * &_getHandler
     * 
     * @param   void
     * 
     * @return  Lecat_CatHandler
    **/
    protected function &_getHandler()
    {
        $handler =& $this->mAsset->getObject('handler', 'cat');
        return $handler;
    }

    /**
     * &_getFilterForm
     * 
     * @param   void
     * 
     * @return  Lecat_CatFilterForm
    **/
    protected function &_getFilterForm()
    {
        // $filter =& new Lecat_CatFilterForm();
        $filter =& $this->mAsset->getObject('filter', 'cat',false);
        $filter->prepare($this->_getPageNavi(), $this->_getHandler());
        return $filter;
    }

    /**
     * _getBaseUrl
     * 
     * @param   void
     * 
     * @return  string
    **/
    protected function _getBaseUrl()
    {
        return './index.php?action=CatList';
    }

    /**
     * executeViewIndex
     * 
     * @param   XCube_RenderTarget  &$render
     * 
     * @return  void
    **/
    public function executeViewIndex(/*** XCube_RenderTarget ***/ &$render)
    {
        $render->setTemplateName($this->mAsset->mDirname . '_cat_list.html');
        $render->setAttribute('objects', $this->mObjects);
        $render->setAttribute('pageNavi', $this->mFilter->mNavi);
	
		//set Header
		$headerScript = $this->mRoot->mContext->getAttribute('headerScript');
		$headerScript->addStylesheet($this->_getStylesheet());
    }
}

?>