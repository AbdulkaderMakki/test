@extends('layouts.base')

@section('title', __('Add New Order'))

@push('styles')
	<link rel="stylesheet" href="{{ asset('main/css/bootstrap-select.min.css') }}">
@endpush

@push('scripts')
	<script src="{{ asset('main/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('main/js/order/create.js') }}"></script>
@endpush

@section('contents')

	@if (count($errors) > 0)
		<div class="alert">
			<div class="alert alert-warning">
				<h4>Errors:</h4>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		</div>
	@endif

	<form class="form-horizontal" id="create_form" method="post" action="">
		{{ csrf_field() }}
		<div class="form-group">
			<label class="col-md-4 control-label">{{ __('Client Type') }}</label>
			<div class="col-md-6">
			<input type="text" class="form-control" name="type" id="type" value="{{ old('type') }}" placeholder="{{ __('Client Type') }}">
			</div>
		</div>
		<button type="submit" class="btn btn-primary">{{ __('Add') }}</button>
	</form>
	
@endsection
