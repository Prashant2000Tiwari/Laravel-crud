<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <div class="container">
      <table>
        <thead>
            <tr>
                <th>Name:</th>
                <th>Email:</th>
            </tr>
        </thead>
        <tbody>
           @foreach($customers as $customer)
           <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>
                   <a href="{{url('/customer/delete/')}}/{{$customer->id}}"><button>delete</button></a> 
                   <a href="{{url('/customer/edit/')}}/{{$customer->id}}"> <button>edit</button></a> 
                </td>
            </tr>
           @endforeach
        </tbody>
      </table>
       </div>
    </div>
</body>
</html>