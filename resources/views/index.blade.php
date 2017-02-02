<!doctype html>
<html ng-app="prueba">
  <head>
    <base href="/">
    <meta charset="utf-8">
    <title>prueba</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- build:css({.tmp/serve,src}) styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/ui-bootstrap-csp.css" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="assets/styles/vendor/animate.css">
    <link rel="stylesheet" href="assets/styles/main.css">
    <!-- endbower -->
    <!-- endbuild -->
    

    <!-- build:css({.tmp/serve,src}) styles/app.css -->
    <!-- inject:css -->
    <link rel="stylesheet" href="app/index.css">
    <!-- endinject -->
    <!-- endbuild -->
  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <div ui-view></div>

    <!-- build:js(src) scripts/vendor.js -->
    <!-- bower:js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/angular.min.js"></script>
    <script src="js/angular-resource.min.js"></script>
    <script src="js/angular-ui-router.min.js"></script>
    <script src="js/ui-bootstrap-tpls.min.js"></script>
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:js({.tmp/serve,.tmp/partials,src}) scripts/app.js -->
    <!-- inject:js -->
    <script src="app/index.module.js"></script>
    <script src="app/main/main.service.js"></script>
    <script src="app/main/main.controller.js"></script>
    <script src="app/index.run.js"></script>
    <script src="app/index.route.js"></script>
    <script src="app/index.constants.js"></script>
    <script src="app/index.config.js"></script>
    <!-- endinject -->
    
    <!--Node module JS-->
    <script src="node_modules/chart.js/Chart.min.js"></script>
    <script src="node_modules/angular-chart.js/dist/angular-chart.min.js"></script>
    
    <!-- inject:partials -->
    <!-- angular templates will be automatically converted in js and inserted here -->
    <!-- endinject -->
    <!-- endbuild -->

  </body>
</html>
