<?php

class Controller_Main extends Controller {
	public function action_index() {
		// ここでセッションとる
		return Response::forge(View::forge('main/index'));
	}
}