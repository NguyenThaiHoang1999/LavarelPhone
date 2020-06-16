<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Create</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">


    </head>
    <body>
        <div class="container-fluid"  style=" position: relative">

            <div class="container">
            <div id="viewport" >
          <!-- Content -->
          <div id="content" >

            <form action="/phones" method="POST" enctype="multipart/form-data">
              @csrf
                  <div class="form-group">
                      <label  for="name">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Nhập tên ">
                  </div>
                  <div class="form-group">
                    <label  for="tyle">Style</label>
                    <input type="text" class="form-control" name="style" placeholder="Nhập loai">
                </div>
                  <div class="form-group">
                    <label  for="sale">Price:</label>
                    <input type="text" class="form-control" name="price" placeholder="Nhap gia">
                  </div>
                  <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
          </div>
            </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>




