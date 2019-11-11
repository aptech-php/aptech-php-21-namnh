<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <h1>Tat Ca Nguoi Dung</h1>
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>
          <div style="display: flex;">
            <form action="{{route('users.show',$user->id)}}" style="margin: 0 10px;" method="GET">
              <button type="submit">Xem</button>
            </form>
            <form action="{{route('users.edit',$user->id)}}" style="margin: 0 10px;">
              <button type="submit">Sua</button>
            </form>
            <form action="{{route('users.destroy',$user->id)}}" style="margin: 0 10px;" method="POST">
              <input type="hidden" name="_token" value={{csrf_token()}}>
              <input type="hidden" name="_method" value="DELETE">
              <button type="submit">Xoa</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</body>

</html>