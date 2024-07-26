<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('phone/intlTelInput.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/css/intlTelInput.css" rel="stylesheet" media="screen">
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
</head>
<body>
<input type="tel" id="phone">
<input class="form-control phone_phone" required type="number" id="telephone" name="phone" value="{{ old('phone') }}" >

<script src="{{ asset('phone/intlTelInput.js') }}"></script>
<script>
var input = document.querySelector("#phone");
document.querySelector("#phone");.intlTelInput(input);
var input = document.querySelector("#phone");
intlTelInput(input, {
    utilsScript: "js/utils.js"
});

</script>
</body>
</html>