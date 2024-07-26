<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- /home/mainone/public_html/public/site/css/phone/intlTelInput.css --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
</head>
<body>


<form action="{{ route('phones.store') }}" method="POST">
    @csrf
    @method('POST')


<input type="text" id="key" name="key" value="">
<div class="col-12" >
<label for="phone" class="form-label">{{ ('Phone') }} <span class="required">*</span></label><br>
<input class="form-control phone_phone" required type="text" min="2" max="2" id="telephone" name="phone" value="{{ old('phone') }}" >
</div>


    <button type="submit">submit</button>
</form>
{{-- Route::get('ar/اتصل-بنا', 'HomeController@contact'); --}}


{{-- /home/mainone/public_html/public/site/js/phone/jquery-3.3.1.min.js --}}
{{-- /home/mainone/public_html/public/site/js/phone/intlTelInput.min.js --}}
{{-- /home/mainone/public_html/public/site/js/phone/utils.js --}}

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>
<script src="{{ asset('phone/intlTelInput.js') }}"></script>
</body>
</html>