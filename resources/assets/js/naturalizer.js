// If we ever expand this, this whole file should be broken out into a naturalizer.banner.js,
// or something similar, and then required in here...since it's the only JS, I'm leaving it
(function() {
	var eles = {
		contentType:      $('#contentType'),
		formContent:      $('.formContent'),
		previewContainer: $('.previewContainer'),
		previewContent:   $('.previewContent')
	};

	var vars = {
		contentType: null
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
			// Add the banner template markup
			eles.previewContent.html(tmpls.sitewideBanner());
			
			// Grab the preview elements
			eles.bannerText =             $('#bannerText');
			eles.mainFontSize =           $('#mainFontSize');
			eles.mainLineHeight =         $('#mainLineHeight');
			eles.mainLetterSpacing =      $('#mainLetterSpacing');
			eles.backgroundColor =        $('input[name="backgroundColor"]');
			eles.mainFontColor =          $('input[name="mainFontColor"]');
			eles.exclusionsText =         $('#exclusionsText');
			eles.previewSwBanner =        $('#previewSwBanner');
			eles.previewBannerText =      $('#previewBannerText');
			eles.previewExclusionsText =  $('#previewExclusionsText');
			eles.previewExclusionToggle = $('#previewExclusionToggle');

			// Lisenter to toggle "other" for colors
			$('[name="backgroundColor"], [name="mainFontColor"]').on('click', funcs.toggleOther);

			// Grab the default CSS values
			var bannerBackground = $('input[name="backgroundColor"]:checked').val(),
			    bannerText =       $('input[name="mainFontColor"]:checked').val();

			// Set the default CSS values
			eles.previewSwBanner.css({
				'background-color':bannerBackground
			});
			eles.previewBannerText.css({
				'color':          bannerText,
				'line-height':    eles.mainLineHeight.val(),
				'letter-spacing': eles.mainLetterSpacing.val() + 'px',
			});
			eles.previewExclusionToggle.css({
				'color':bannerText
			});

			// Add listeners to update the form
			eles.bannerText.on('keyup', funcs.updateBannerText);
			eles.mainFontSize.on('change', funcs.updateMainFontSize);
			eles.mainLineHeight.on('change', funcs.updateMainLineHeight);
			eles.mainLetterSpacing.on('change', funcs.updateMainLetterSpacing);
			eles.backgroundColor.on('change', funcs.updateBackgroundColor);
			eles.mainFontColor.on('change', funcs.updateMainFontColor);
			eles.exclusionsText.on('keyup', funcs.updateExclusionsText);
		},
		updateBannerText: () => {
			// Never set it to empty, the div collases and hides everything
			var updateText = (eles.bannerText.val() == '') ? '&nbsp;' : eles.bannerText.val();
			eles.previewBannerText.text(updateText);
		},
		updateMainFontSize: () => {
			eles.previewBannerText.css({'font-size':eles.mainFontSize.val() + 'px'});
		},
		updateMainLineHeight: () => {
			eles.previewBannerText.css({'line-height': eles.mainLineHeight.val()});
			eles.previewExclusionToggle.css({'line-height': eles.mainLineHeight.val()});
		},
		updateMainLetterSpacing: () => {
			eles.previewBannerText.css({'letter-spacing': eles.mainLetterSpacing.val() + 'px'});
		},
		updateBackgroundColor: () => {
			var color = $('input[name="backgroundColor"]:checked').val();
			eles.previewSwBanner.css({'background-color': color});
		},
		updateMainFontColor: () => {
			console.log($('input[name="mainFontColor"]:checked').val());
			var color = $('input[name="mainFontColor"]:checked').val();
			eles.previewBannerText.css({'color': color});
		},
		updateExclusionsText: () => {
			// Same as earlier...don't collapse it!
			var updateText = (eles.exclusionsText.val() == '') ? '&nbsp;' : eles.exclusionsText.val();
			eles.previewExclusionsText.text(updateText);
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
		sitewideBanner: () => {
			return `<div id="previewSwBanner">
						<div class="bannerWidth">
							<div id="mainLineContainer">
								<div id="previewBannerText">Update Banner Text, This Text Updates!</div>
								<a href="#" id="previewExclusionToggle" onclick="$('#previewExclusionsText').slideToggle(); return false;">details</a>
							</div>
						</div>
					</div>
					<div id="previewExclusionsText">Update Exclusions Text, This Text Updates!</div>
					`;
		}
	};

	funcs.init();
})();
