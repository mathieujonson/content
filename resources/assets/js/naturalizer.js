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

					// Init bootstrap popovers
					$('[data-toggle="popover"]').popover({
						placement: 'top',
						trigger:   'hover'
					});

					if(vars.contentType == 'sitewide-banner') {
						funcs.initSitewide();
					}			
				}
			})
			.fail(() => {
				console.log('woah, something went horribly wrong...');
			});
		},
		toggleOther: (e) => {
			var $target =    $(e.target), 
			    radioGroup = $target.attr('name');

			if($(`[name="${radioGroup}"]:checked`).val() == 'other') {
				$target.parent().next('input[type="text"]').fadeIn();
			}
			else {
				$target.parent().parent().find('.other').fadeOut();	
			}
		},
		initSitewide: () => {
			// Grab the preview elements
			eles.bannerText =             $('#bannerText');
			eles.previewSwBanner =        $('#previewSwBanner');
			eles.previewBannerText =      $('#previewBannerText');
			eles.previewExclusionText =   $('#previewExclusionText');
			eles.previewExclusionToggle = $('#previewExclusionToggle');

			$('[name="backgroundColor"], [name="mainFontColor"]').on('click', funcs.toggleOther);

			// Grab the CSS values
			var bannerBackground = $('input[name="backgroundColor"]:checked').val(),
			    bannerText =       $('input[name="mainFontColor"]:checked').val();

			eles.previewSwBanner.css({
				'background-color':bannerBackground
			});
			eles.bannerText.css({
				'color':bannerText
			});
			eles.previewExclusionToggle.css({
				'color':bannerText
			});
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
							<div id="previewBannerText">&nbsp;</div>
							<a href="#" id="previewExclusionToggle" onclick="$('#previewExclusionText').slideToggle(); return false;">details</a>
						</div>
					</div>
					<div class="bannerWidth">
						<div id="previewExclusionText">&nbsp;</div>
					</div>
					`;
		}
	};

	funcs.init();
})();
