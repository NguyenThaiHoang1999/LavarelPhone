<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dashboard</title>

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <style>
        table{
            margin: auto;
            width: 500px;
            height: auto;
            border:1px solid black;
        }
        tr{
            border:1px solid black;
            width: 50px;
        }
        td{
            border:1px solid black;
            width: 100px;
            height: 50px;
        }
    </style>


    </head>
    <body>
        <h1 class="text-center">Hello Admin</h1>

        <div class="row">
            @foreach ($phones as $phone)
                <table>
                        <tr>
                            <td>{{ $phone->name }}</td>

                            {{-- <td>
                                  <img class="card-img-top" style="width: 300px;height: 250px" src="storage/{{ $room->image }}" alt="">
                            </td> --}}

                            <td>{{ $phone->style }}</td>
                            <td>{{ $phone->price }}</td>



                            <td>
                                <form action="{{'/phones/'.$phone->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">delete</button>
                                </form>
                            </td>
                            <td>
                            <a href="{{ '/phones/'.$phone->id.'/edit' }}">Edit</a>
                            </td>

                        </tr>
                </table>
            </div>
            </div>
            @endforeach
            <td>
                    <a href="/phones/create" style="coler:red;">Create new phone</a>
            </td>
            </div>

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
