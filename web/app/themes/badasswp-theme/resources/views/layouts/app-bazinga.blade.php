<!doctype html>
<html @php(language_attributes())>
@include('partials.head')
<body @php(body_class())>
@php(do_action('get_header'))
<div class="wrap container" role="document">
  @yield('content')
</div>
@php(do_action('get_footer'))
@php(wp_footer())
</body>
</html>
