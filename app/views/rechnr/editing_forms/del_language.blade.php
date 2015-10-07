<script type="text/javascript">
	function check(){
		confirm("Are you sure you want to delete the language?");
	}
</script>
@extends('rechnr.master')

@section('admin_content')


@if(Session::has('lang'))
	{{Session::get('lang')}}
@endif

	{{	Form::open(array('url'	=>	$link_url))}}
		<div>
		Select the language to be deleted :
		<select name="selected-language">
		@foreach($languages as $language)
			<option value="{{ $language->domain_id}}"> {{ $language->language}} </option>
		@endforeach
		</select>
		<input type="submit" value="Delete Language" onclick=check() />
		{{ Form::token() }}
	{{ Form::close() }}
@stop