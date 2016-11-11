<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="bannerText">Banner Text:</label>
			<span class="glyphicon glyphicon-info-sign" data-toggle="popover" title="Banner Text" data-content="This is the main text of the banner.  If you need more explanation than that, maybe this isn't the tool for you..."></span>
			<div class="input-group">
				<input type="text" id="bannerText" placeholder="E.g. 25% off sitewide" class="form-control">
				<div class="input-group-addon" data-toggle="collapse" href="#bannerTextToolbar">
					<span class="glyphicon glyphicon-cog"></span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row collapse" id="bannerTextToolbar">
	<div class="col-sm-3">
		<div class="form-group form-color">
			<span class="fakeLabel">Background Color:</span>
			<div class="radioContainer">
				<input type="radio" id="bgPink" name="backgroundColor" value="#AB2270" checked>
				<label for="bgPink" class="background pink"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="bgDarkBrown" name="backgroundColor" value="#5c5345">
				<label for="bgDarkBrown" class="background darkBrown"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="bgTan" name="backgroundColor" value="#dac3b7">
				<label for="bgTan" class="background tan"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="bgMaroon" name="backgroundColor" value="#702e3e">
				<label for="bgMaroon" class="background maroon"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="bgDarkTan" name="backgroundColor" value="#c9a892">
				<label for="bgDarkTan" class="background darkTan"></label>
			</div> 
			<div class="radioContainer">
				<input type="radio" id="bgLightGray" name="backgroundColor" value="#b1a7a2">
				<label for="bgLightGray" class="background lightGray"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="bgDarkBlue" name="backgroundColor" value="#13284c">
				<label for="bgDarkBlue" class="background darkBlue"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="bgDarkGray" name="backgroundColor" value="#4c4c4c">
				<label for="bgDarkGray" class="background darkGray"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="bgGray" name="backgroundColor" value="#d7cec7">
				<label for="bgGray" class="background bannerGray"></label>
			</div>
			<div class="radioContainer otherContainer">
				<input type="radio" id="bgOther" name="backgroundColor" value="other">
				<label for="bgOther">Other</label>
			</div>
			<input type="text" id="bgOtherText" class="form-control other" placeholder="E.g. #5c5345">
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group form-color">
			<span class="fakeLabel">Font Color:</span>
			<div class="radioContainer">
				<input type="radio" id="mainFontBlack" name="mainFontColor" value="#333">
				<label for="mainFontBlack" class="fontColor black"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="mainFontWhite" name="mainFontColor" value="#fff" checked>
				<label for="mainFontWhite" class="fontColor white"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="mainFontDarkBrown" name="mainFontColor" value="#5c5345">
				<label for="mainFontDarkBrown" class="background darkBrown"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="mainFontTan" name="mainFontColor" value="#dac3b7">
				<label for="mainFontTan" class="background tan"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="mainFontMaroon" name="mainFontColor" value="#702e3e">
				<label for="mainFontMaroon" class="background maroon"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="mainFontDarkTan" name="mainFontColor" value="#c9a892">
				<label for="mainFontDarkTan" class="background darkTan"></label>
			</div> 
			<div class="radioContainer">
				<input type="radio" id="mainFontLightGray" name="mainFontColor" value="#b1a7a2">
				<label for="mainFontLightGray" class="background lightGray"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="mainFontDarkBlue" name="mainFontColor" value="#13284c">
				<label for="mainFontDarkBlue" class="background darkBlue"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="mainFontDarkGray" name="mainFontColor" value="#4c4c4c">
				<label for="mainFontDarkGray" class="background darkGray"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="mainFontGray" name="mainFontColor" value="#d7cec7">
				<label for="mainFontGray" class="background bannerGray"></label>
			</div>
			<div class="radioContainer otherContainer">
				<input type="radio" id="mainFontOther" name="mainFontColor" value="other">
				<label for="mainFontOther">Other</label>
			</div>
			<input type="text" id="mainFontOtherText" class="form-control other" placeholder="E.g. #5c5345">
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label for="mainFontSize">Font Size:</label>
			<input type="range" id="mainFontSize" class="form-control" min="10" max="24" step="1">
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label for="mainLineHeight">Line Height:</label>
			<input type="range" id="mainLineHeight" class="form-control" min="1" max="3" step=".1">
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label for="mainLetterSpacing">Letter Spacing:</label>
			<input type="range" id="mainLetterSpacing" class="form-control" min="0" max="2" step=".5" value="0">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="exclusionsText">Exclusions Text:</label>
			<span class="glyphicon glyphicon-info-sign" data-toggle="popover" title="Exclusion Text" data-content="This is the text that is hidden on page load.  It usually contains exlcusion details and banner end date."></span>
			<div class="input-group">
				<input type="text" id="exclusionsText" placeholder="E.g. Excludes all shoes, handbags, and accessories" class="form-control">
				<div class="input-group-addon" data-toggle="collapse" href="#exclusionTextToolbar">
					<span class="glyphicon glyphicon-cog"></span>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row collapse" id="exclusionTextToolbar">
	<div class="col-sm-3">
		<div class="form-group form-color">
			<span class="fakeLabel">Background Color:</span>
			<div class="radioContainer">
				<input type="radio" id="exBgPink" name="exclusionBackgroundColor" value="#AB2270" checked>
				<label for="exBgPink" class="background pink"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exBgWhite" name="exclusionBackgroundColor" value="#FFF">
				<label for="exBgWhite" class="background white"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exBgDarkBrown" name="exclusionBackgroundColor" value="#5c5345">
				<label for="exBgDarkBrown" class="background darkBrown"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exBgTan" name="exclusionBackgroundColor" value="#dac3b7">
				<label for="exBgTan" class="background tan"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exBgMaroon" name="exclusionBackgroundColor" value="#702e3e">
				<label for="exBgMaroon" class="background maroon"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exBgDarkTan" name="exclusionBackgroundColor" value="#c9a892">
				<label for="exBgDarkTan" class="background darkTan"></label>
			</div> 
			<div class="radioContainer">
				<input type="radio" id="exBgLightGray" name="exclusionBackgroundColor" value="#b1a7a2">
				<label for="exBgLightGray" class="background lightGray"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exBgDarkBlue" name="exclusionBackgroundColor" value="#13284c">
				<label for="exBgDarkBlue" class="background darkBlue"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exBgDarkGray" name="exclusionBackgroundColor" value="#4c4c4c">
				<label for="exBgDarkGray" class="background darkGray"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exBgGray" name="exclusionBackgroundColor" value="#d7cec7">
				<label for="exBgGray" class="background bannerGray"></label>
			</div>
			<div class="radioContainer otherContainer">
				<input type="radio" id="exBgOther" name="backgroundColor" value="other">
				<label for="exBgOther">Other</label>
			</div>
			<input type="text" id="exBgOtherText" class="form-control other" placeholder="E.g. #5c5345">
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group form-color">
			<span class="fakeLabel">Font Color:</span>
			<div class="radioContainer">
				<input type="radio" id="exclusionFontBlack" name="exclusionFontColor" value="#333">
				<label for="exclusionFontBlack" class="fontColor black"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exclusionFontWhite" name="exclusionFontColor" value="#fff" checked>
				<label for="exclusionFontWhite" class="fontColor white"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exclusionFontDarkBrown" name="exclusionFontColor" value="#5c5345">
				<label for="exclusionFontDarkBrown" class="background darkBrown"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exclusionFontTan" name="exclusionFontColor" value="#dac3b7">
				<label for="exclusionFontTan" class="background tan"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exclusionFontMaroon" name="exclusionFontColor" value="#702e3e">
				<label for="exclusionFontMaroon" class="background maroon"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exclusionFontDarkTan" name="exclusionFontColor" value="#c9a892">
				<label for="exclusionFontDarkTan" class="background darkTan"></label>
			</div> 
			<div class="radioContainer">
				<input type="radio" id="exclusionFontLightGray" name="exclusionFontColor" value="#b1a7a2">
				<label for="exclusionFontLightGray" class="background lightGray"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exclusionFontDarkBlue" name="exclusionFontColor" value="#13284c">
				<label for="exclusionFontDarkBlue" class="background darkBlue"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exclusionFontDarkGray" name="exclusionFontColor" value="#4c4c4c">
				<label for="exclusionFontDarkGray" class="background darkGray"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exclusionFontGray" name="exclusionFontColor" value="#d7cec7">
				<label for="exclusionFontGray" class="background bannerGray"></label>
			</div>
			<div class="radioContainer otherContainer">
				<input type="radio" id="exclusionFontOther" name="exclusionFontColor" value="other">
				<label for="exclusionFontOther">Other</label>
			</div>
			<input type="text" id="exclusionFontOtherText" class="form-control other" placeholder="E.g. #5c5345">
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label for="exclusionFontSize">Font Size:</label>
			<input type="range" id="exclusionFontSize" class="form-control" min="10" max="24" step="1">
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label for="exclusionLineHeight">Line Height:</label>
			<input type="range" id="exclusionLineHeight" class="form-control" min="1" max="3" step=".1">
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<label for="exclusionLetterSpacing">Letter Spacing:</label>
			<input type="range" id="exclusionLetterSpacing" class="form-control" min="0" max="2" step=".5" value="0">
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<div class="form-group">
			<label for="bannerLink">Banner Link:</label>
			<span class="glyphicon glyphicon-info-sign" data-toggle="popover" title="Banner Link" data-content="This is the link that wraps around the entire banner.  For testing purposes, this will open in a new window.  The exported code will open the link in the same window.  If no link is desired, leave it empty!"></span>
			<input type="text" id="bannerLink" placeholder="E.g. http://www.naturalizer.com/womens?icid=TopNav_Womens" class="form-control">
		</div>
	</div>
</div>
<!--<div class="row">
	<div class="col-sm-offset-8 col-sm-4">
		<div class="form-group">
			<span class="fakeLabel">Exclusion Font Color:</span>
			<span class="glyphicon glyphicon-info-sign" data-toggle="popover" title="Exclusion Font Color" data-content="This is the font color for the exclusion text.  If you need a custom color, too bad...you get what you get and you don't throw a fit..."></span><br>
			<div class="radioContainer">
				<input type="radio" id="exclusionBlack" name="exclusionFontColor" value="#333" checked>
				<label for="exclusionBlack" class="fontColor black"></label>
			</div>
			<div class="radioContainer">
				<input type="radio" id="exclusionWhite" name="exclusionFontColor" value="#fff">
				<label for="exclusionWhite" class="fontColor white"></label>
			</div>
		</div>
	</div>
</div> -->