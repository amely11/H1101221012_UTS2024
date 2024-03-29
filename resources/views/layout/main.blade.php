<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================


* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim


=========================================================


* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('layout.link')
</head>


<body class="g-sidenav-show   bg-gray-100">
    @include('layout.navbar')


    @yield('content')


    @include('layout.footer')
</body>
@include('layout.script')


</html>