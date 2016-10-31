(function() {
	var eles = {
		contentType:      $('#contentType'),
		formContent:      $('.formContent'),
		previewContainer: $('.previewContainer'),
		previewContent:   $('.previewContent')
	};

	var vars = {
		contentType:      null
	};

	var funcs = {
		init: () => {
			eles.contentType.on('change', funcs.getForm);
		},
		getForm: () => {
			eles.formContent.html(tmpls.loader());

			vars.contentType = eles.contentType.val();
			eles.contentType.replaceWith(vars.contentType.replace('-', ' '));
		
			$.ajax(`/naturalizer/form/${vars.contentType}`)
			.done((data) => {
				if(data.success) {
					eles.formContent.html(data.html);
					eles.previewContent.html(tmpls[vars.contentType.replace('-', '')]);
					eles.previewContainer.show();
					funcs.setPreview(vars.contentType);
				}
			})
			.fail(() => {
				console.log('woah, something went horribly wrong...');
			});
		},
		setPreview: (content) => {
			if(content == 'simple-banner') {
				// Grab the preview elements
				eles.swBanner =        $('#previewSwBanner');
				eles.bannerText =      $('#previewBannerText');
				eles.exclusionText =   $('#previewExclusionText');
				eles.exclusionToggle = $('#previewExclusionToggle');


				// Grab the CSS values
				var bannerBackground = $('input[name="backgroundColor"]:checked').val(),
				    bannerText =       $('input[name="mainFontColor"]:checked').val();

				eles.swBanner.css({
					'background-color':bannerBackground
				});
				eles.bannerText.css({
					'color':bannerText
				});
				eles.exclusionToggle.css({
					'color':bannerText
				});
			}
		}
	};

	var tmpls = {
		loader: () => {
			return `<div class="row">
						<div class="col-sm-12>"
							<div class="loader">
								<div class="spinner"></div>
							</div>
						</div>
					</div>`;
		},
		simplebanner: () => {
			return `<div id="previewSwBanner">
						<div class="bannerWidth">
							<div id="previewBannerText">Test Text, Remove!</div>
							<a href="#" id="previewExclusionToggle" onclick="$('#previewExclusionText').slideToggle(); return false;">details</a>
						</div>
					</div>
					<div class="bannerWidth">
						<div id="previewExclusionText">Test Exclusion Text!</div>
					</div>
					`;
		}
	};

	funcs.init();
})();
