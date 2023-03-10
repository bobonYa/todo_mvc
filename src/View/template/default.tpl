<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="">
  <link rel="icon" href="https://bootstrap-4.ru/favicon.ico">

  <title>ToDo List</title>
  <link href="https://bootstrap-4.ru/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://bootstrap-4.ru/docs/4.0/examples/pricing/pricing.css" rel="stylesheet">
</head>

<body>



  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
    <h5 class="my-0 mr-md-auto font-weight-normal"><a href="/">ToDo List</a></h5>


    {if isset($logged_in) and $logged_in}
      <a class="btn btn-outline-primary" href="/logout">Logout</a>
    {else}
      <a class="btn btn-outline-primary" href="/login">Login</a>
    {/if}

  </div>



  <div class="container">
    {$mainContent}

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
          ToDo List.
          <small class="d-block mb-3 text-muted">&copy; 2023</small>
        </div>

      </div>
    </footer>
  </div>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://bootstrap-4.ru/assets/js/vendor/popper.min.js"></script>
  <script src="https://bootstrap-4.ru/dist/js/bootstrap.min.js"></script>
  <script src="https://bootstrap-4.ru/assets/js/vendor/holder.min.js"></script>
  <script>
    Holder.addTheme('thumb', {
      bg: '#55595c',
      fg: '#eceeef',
      text: 'Thumbnail'
    });
  </script>


<script src="https://bootstrap-4.ru/docs/5.2/examples/checkout/form-validation.js"></script>
</body>

</html>