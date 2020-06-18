<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{ asset('css/app.css')}}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/admin/default/admin.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <router-link to="/home"  class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </router-link>

          </li>
            <li class="nav-item">
                <router-link to="/category-list" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Category
                    </p>
                </router-link>
            </li>
            <li class="nav-item">
                <router-link to="posts"  class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Posts
                        <span class="right badge badge-danger">New</span>
                    </p>
                </router-link>
            </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
{{--        <router-view></router-view>--}}

        <admin-main></admin-main>

    </div>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://larablog/">FullStack WEB</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<script src="{{ asset('js/app.js')}}"></script>
<script>
    // if (!('serviceWorker' in navigator)) {
    //     // Service Worker isn't supported on this browser, disable or hide UI.
    //     console.log("!('serviceWorker'")
    // }
    // else{
    //     console.log("serviceWorker'")
    //
    // }
    //
    // if (!('PushManager' in window)) {
    //     // Push isn't supported on this browser, disable or hide UI.
    //     console.log("!('PushManager'")
    //
    // } else{
    //     console.log("'PushManager'")
    //
    // }
    //
    //
    // // Utility function for UTF-8 encoding a string to an ArrayBuffer.
    // const utf8Encoder = new TextEncoder('utf-8');
    //
    // // The unsigned token is the concatenation of the URL-safe base64 encoded
    // // header and body.
    // const unsignedToken = 'testsdv';
    //
    // // Sign the |unsignedToken| using ES256 (SHA-256 over ECDSA).
    // const key = {
    //     kty: 'EC',
    //     crv: 'P-256',
    //     x: window.uint8ArrayToBase64Url(
    //         applicationServerKeys.publicKey.subarray(1, 33)),
    //     y: window.uint8ArrayToBase64Url(
    //         applicationServerKeys.publicKey.subarray(33, 65)),
    //     d: window.uint8ArrayToBase64Url(applicationServerKeys.privateKey),
    // };
    //
    // // Sign the |unsignedToken| with the server's private key to generate
    // // the signature.
    // let testa= crypto.subtle.importKey('jwk', key, {
    //     name: 'ECDSA', namedCurve: 'P-256',
    // }, true, ['sign'])
    //     .then((key) => {
    //         return crypto.subtle.sign({
    //             name: 'ECDSA',
    //             hash: {
    //                 name: 'SHA-256',
    //             },
    //         }, key, utf8Encoder.encode(unsignedToken));
    //     })
    //     .then((signature) => {
    //         console.log('Signature: ', signature);
    //     });
    // console.log('test', testa)


</script>
</body>
</html>
