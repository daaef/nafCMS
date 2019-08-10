
<h1>Welcome {{ Sentinel::getUser()->first_name }}</h1>
@yield('content')
@include('admin.menu')