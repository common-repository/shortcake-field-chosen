(function ( $ ) {
	'use strict';
	/**
	 * enhance all elements with the .chosen-enhance class
	 */
	function makeChosen() {


		var chosenPromise = new Promise(function(resolve, reject){
			var timer,
				counter = 0,
				max = 20;

			timer = setInterval(function(){
				var selectElements = $('.chosen-enhance');

				if (selectElements.length > 0){
					clearInterval(timer);
					resolve(selectElements)
				}
				counter++;
				if (counter >= max){
					reject('shortcake-field-chosen-admin.js - no valid selects found after max retries (' + max + ')')
				}

			}, 250);

		}).then(function(selectElements){

			selectElements.chosen({
					no_results_text: 'Item not found'
				}
			);

			selectElements.removeClass('chosen-enhance');

		}).catch(function(message){
			console.log(message);
		});
	}

	$(document).ready(function () {

		if ( typeof wp !== 'undefined' && typeof wp.shortcake !== 'undefined' && typeof wp.shortcake.hooks !== 'undefined' ) {
			wp.shortcake.hooks.addAction('shortcode-ui.render_new', makeChosen);
			wp.shortcake.hooks.addAction('shortcode-ui.render_edit', makeChosen);
		}
	});

})(jQuery);
