<?php
/**
 * The welcome index view model.
 * 一応作ったけど、今は必要なさそうだったので未使用
 * @package  app
 * @extends  ViewModel
 */
class View_Top_Index extends ViewModel
{
	/**
	 * Prepare the view data, keeping this in here helps clean up
	 * the controller.
	 *
	 * @return void
	 */
	public function view()
	{
		$this->name = 'ezura';
	}
}
