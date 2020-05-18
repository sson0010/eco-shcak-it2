<?php
class ReadMoreAjaxPro {
	public function __construct()
	{
		$this->init();
	}
	
	private function init() {
		add_action('wp_ajax_load_hidden_data', array($this, 'loadHiddenData'));
		add_action('wp_ajax_nopriv_load_hidden_data', array($this, 'loadHiddenData'));
	}
	
	public function loadHiddenData() {
		check_ajax_referer('YrmProNonce', 'ajaxNonce');
		$searchData = $_POST['searchData'];
		
		$readMoreId = $searchData['id'];
		$key = $searchData['key'];
		
		$content = ReadMoreAdminHelperPro::getHiddenData($readMoreId, $key);
		$response = array(
			'searchData' => $searchData,
			'content' => $content
		);
		
		echo json_encode($response);
		wp_die();
	}
}

new ReadMoreAjaxPro();