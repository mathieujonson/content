@extends('../layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Naturalizer Content Generator</div>

				<div class="panel-body welcome">
					<div class="row">
						<div class="col-sm-4">
							<label for="contentType">What are we building today?</label>
							<div class="typeContainer">
								<select name="contentType" id="contentType" class="form-control">
									<option value="">Select a type of content</option>
									<option value="simple-banner">Simple Banner</option>
									<option value="fancy-banner">Fancy Banner</option>
								</select>
							</div>
						</div>
					</div>
					<div class="formContent"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="previewContainer">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<h4 class="previewTitle">Preview</h4>
			</div>
		</div>
	</div>
	<div class="previewContent"></div>
</div>
@endsection

@section('scripts')
<script src="/js/naturalizer.js"></script>
@endsection