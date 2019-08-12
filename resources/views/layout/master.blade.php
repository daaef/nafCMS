
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  
  
</head>
<body>
  <h1>Welcome {{ Sentinel::getUser()->first_name }}</h1>
  @yield('content')
  @include('admin.menu')
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script>
    @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
          case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

          case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
          case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
          case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
        }
    @endif
  </script>
</body>
</html>