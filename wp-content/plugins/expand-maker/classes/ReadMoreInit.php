<?php
class ReadMoreInit {

	private $pagesObj;

	function __construct() {

		if(YRM_PKG > YRM_FREE_PKG) {
			require_once(YRM_CLASSES.'FiltersPro.php');
			require_once(YRM_CLASSES.'ReadMoreContentManager.php');
			require_once(YRM_FILES.'ReadMoreAdminHelperPro.php');
		}
		require_once(YRM_FILES.'ReadMoreAdminHelper.php');
		require_once(YRM_FILES.'ShowReviewNotice.php');
		require_once(YRM_FILES."ReadMoreAdminPost.php");
		require_once(YRM_FILES."MultipleChoiceButton.php");
		require_once(YRM_CLASSES."ReadMoreInstall.php");
		require_once(YRM_CLASSES."ReadMoreData.php");
		require_once(YRM_CLASSES."ReadMore.php");
		require_once(YRM_CLASSES."ReadMoreFunctions.php");
		require_once(YRM_CSS."ReadMoreStyles.php");
		require_once(YRM_JAVASCRIPT_PATH."javascript.php");
		require_once(YRM_CLASSES."ReadMoreIncludeManager.php");
		require_once(YRM_FILES.'ReadMoreActions.php');
		require_once(YRM_FILES."RadMoreAjax.php");
		require_once(YRM_CLASSES."ReadMorePages.php");
		
		if(YRM_PKG > YRM_FREE_PKG) {
			require_once(YRM_FILES."ReadMoreAjaxPro.php");
		}

		add_action('init', array($this, 'initAction'), 1, 1);
		$pagesObj =  new ReadMorePages();
		$readMoreData = new ReadMoreData();
		$functionsObj = new ReadMoreFunctions();

		$this->pagesObj = $pagesObj;
		$pagesObj->readMoreDataObj = $readMoreData;
		$pagesObj->functionsObj = $functionsObj;
		$this->actions();
	}

	public function initAction() {
		YrmConfig::typePaths();
	}

	public function activate() {
		
		ReadMoreInstall::install();
	}

	public function uninstall() {

		ReadMoreInstall::uninstall();
	}

	public function shortCode() {
		if (is_admin()) {
			return false;
		}
		require_once(YRM_CLASSES."ReadMoreShortCode.php");
		$shortCodeObj = new ReadMoreShortCode();
	}

	public function enqueueScripts() {
		
	}

	public function readMoreMainMenu() {
		
		$this->pagesObj->mainPage();
	}

	public function addNewButton() {

		$this->pagesObj->addNewButtons();
	}

	public function addNewPage() {
		
		$this->pagesObj->addNewPage();
	}

	public function morePlugins() {

		$this->pagesObj->morePlugins();
	}

	public function help() {

		$this->pagesObj->help();
	}

	public function expmAdminMenu() {
		$selectedRoles = array();
		$userRoles = get_option('yrm-user-roles');
		if(!empty($userRoles)) {
			$selectedRoles = get_option('yrm-user-roles');
		}
		$currentRole = ReadMoreData::getCurrentUserRole();

		if ($currentRole != 'administrator') {
			if (!in_array(ReadMoreData::getCurrentUserRole(), $selectedRoles)) {
				return false;
			}
		}
		add_menu_page(__('Read more', YRM_LANG), __('Read more', YRM_LANG), 'read', 'readMore', array($this, 'readMoreMainMenu'));
		add_submenu_page('readMore', __('Add New', YRM_LANG), __('Add New', YRM_LANG), 'read','addNew', array($this,'addNewPage'));
		add_submenu_page('readMore', __('Add New Button', YRM_LANG), __('Add New Button', YRM_LANG), 'read','button', array($this,'addNewButton'));
		add_submenu_page('readMore', __('Help', YRM_LANG), __('Help', YRM_LANG), 'read','rmmore-help', array($this,'help'));
		add_submenu_page('readMore', __('More Plugins', YRM_LANG), __('More Plugins', YRM_LANG), 'read','rmmore-plugins', array($this,'morePlugins'));
		add_submenu_page('readMore', __('Video Tutorials', YRM_LANG), __('Video Tutorials', YRM_LANG), 'read', YRM_VIDEO_TUTORIAL_KEY, array($this->pagesObj, 'videoTutorials'));
		add_submenu_page('readMore', __('Support', YRM_LANG), __('Support', YRM_LANG), 'read', YRM_SUPPORT_MENU_KEY, array($this->pagesObj, 'support'));
		add_submenu_page('readMore', __('Settings', YRM_LANG), __('Settings', YRM_LANG), 'read','rmmore-settings', array($this->pagesObj, 'settings'));
	}

	public function actions() {

		$actions = new ReadMoreActions();
		add_action("admin_menu", array($this, 'expmAdminMenu'));
		add_action('init',  array($this, 'shortCode'));
		add_action('wpmu_new_blog', array($this, 'activate'), 10, 6);
		register_activation_hook(WP_PLUGIN_DIR.'/'.YRM_PLUGIN_PREF,  array($this, 'activate'));
		register_uninstall_hook(WP_PLUGIN_DIR.'/'.YRM_PLUGIN_PREF,  array('ExpMaker', 'uninstall'));
		add_action('admin_post_update_data', array('DataProcessing', 'expanderUpdateData'));
		add_action('plugins_loaded', array($this, 'yrmPluginLoaded'));
        add_action('admin_head', array($this, 'adminHead'));
	}

    public function adminHead() {
        echo "<script>jQuery(document).ready(function() {jQuery('a[href*=\"page=yrmSupportKey\"]').css({color: 'yellow'});jQuery('a[href*=\"page=yrmSupportKey\"]').bind('click', function(e) {e.preventDefault(); window.open('https://wordpress.org/support/plugin/expand-maker/')}) });</script>";

    }
	
	public function yrmPluginLoaded() {

		load_plugin_textdomain(YRM_LANG, false, YRM_FOLDER_NAME.'/lang/');
		$versionYrm = get_option('EXPM_VERSION');
		if(!$versionYrm || $versionYrm < 1.21 ) {
			update_option('EXPM_VERSION', EXPM_VERSION);
			ReadMoreInstall::install();
			ReadMoreInstall::udateToNewVersion();
		}
	}
}