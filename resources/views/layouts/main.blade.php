<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Baktify | {{ $title }}</title>
</head>
<body class="bg-gray-50">
 

  {{-- Navbar --}}
  @include('components.navbar')

  {{-- Content Home, About and Products --}}
  <div class="mt-20">
    @yield('container')
  </div>


{{-- Footer --}}
@include('components.footer')

<script>
  function succesSignup() {
    alert('Sign up Successfull, Please sign up')
  }
</script>
  

</body>
</html>