<link href="{{ asset('js_css/toastr.min.css') }}" rel="stylesheet">
<form action="{{ route('product.store') }}" method="POST">
@csrf
@method('POST')
<label for="">Name</label>
<input type="text" name="name" value="{{ old('name') }}" >
</form>
<!-- Required vendors -->
<script src="{{ asset('js_css/global.min.js') }}"></script>
<script src="{{ asset('js_css/toastr.min.js') }}"></script>
@include('product.Validation.errorValidation')