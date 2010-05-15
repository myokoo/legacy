<?php
/**
 * @file
 * @package legacy
 * @version $Id$
**/

if(!defined('XOOPS_ROOT_PATH'))
{
	exit();
}

/**
 * Interface of progress client delegate
**/
abstract class Legacy_AbstractProgressClientDelegate
{
	/**
	 * getManagedModules	Legacy_Progress.GetManagedModules
	 *
	 * @param mix[] &$list
	 *	$list['dirname']
	 *	$list['dataname']
	 *
	 * @return	void
	 */ 
	abstract public function getManagedModules(/*** array ***/ &$list);

	/**
	 * updateStatus Legacy_Progress.UpdateStatus
	 *
	 * @param string	&$result
	 * @param string	$dirname
	 * @param string	$dataname
	 * @param int		$data_id
	 * @param Enum		$status Lenum_ProgressStatus
	 *
	 * @return	void
	 */ 
	abstract public function updateStatus(/*** string ***/ &$result, /*** string ***/ $dirname, /*** string ***/ $dataname, /*** int ***/ $data_id, /*** Enum ***/ $status);
}

?>
