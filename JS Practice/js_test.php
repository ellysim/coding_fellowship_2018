<html>
  <head>
<!-- Make a page fade in everytime you reload -->
      <title>JS Practice</title>
      <style>
        div{
          display: none;
          width: 100px;
          height: 100px;
          text-align: center;

        }
      </style>
  </head>

  <body>
    <script src="/include/jquery.js"></script>
        <div class="box" style='background-color:#ffe6ff'>Hello</div>

    <script type='text/javascript'>
      $('div').fadeIn("slow");
    </script>

</body>

</html>
