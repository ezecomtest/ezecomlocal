/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	
	// config.filebrowserUploadUrl = 'ckupload.php';
	// config.filebrowserBrowseUrl = "/tubekh/uploads/news";

	config.filebrowserBrowseUrl = 'http://localhost/tubekh/asset/kcfinder/browse.php?opener=ckeditor&type=files'; 
	config.filebrowserImageBrowseUrl = 'http://localhost/tubekh/asset/kcfinder/browse.php?opener=ckeditor&type=images'; 
	config.filebrowserFlashBrowseUrl = 'http://localhost/tubekh/asset/kcfinder/browse.php?opener=ckeditor&type=flash'; 
	config.filebrowserUploadUrl = 'http://localhost/tubekh/asset/kcfinder/upload.php?opener=ckeditor&type=files'; 
	config.filebrowserImageUploadUrl = 'http://localhost/tubekh/asset/kcfinder/upload.php?opener=ckeditor&type=images'; 
	config.filebrowserFlashUploadUrl = 'http://localhost/tubekh/asset/kcfinder/upload.php?opener=ckeditor&type=flash'; 

};

