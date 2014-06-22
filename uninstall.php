<?
if( !defined( 'ABSPATH') && !defined('WP_UNINSTALL_PLUGIN') )
	exit();

	delete_option('wph_hatebu_type');
	delete_option('wph_twitter_type');
	delete_option('wph_ever_blogname');
	delete_option('wph_ever_clip_id');
	delete_option('wph_ever_add');
	delete_option('wph_fcbk_type');
	delete_option('wph_fcbk_share');
	delete_option('wph_fcbk_width');
	delete_option('wph_mixi_key');
	delete_option('wph_img_path');
	delete_option('wph_googleplusone_size');
	delete_option('wph_googleplusone_displaycounter');
	delete_option('wph_pocket_type');
?>
