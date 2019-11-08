<form action="http://localhost:8000/users/create">
  <button type="submit">Tao Nguoi Dung Moi</button>
</form>
<table>
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>email</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>
        <form action="{{asset('users/'.$user->id)}}" method="GET">
          <button type="submit">Xem Nguoi Nay</button>
        </form>
        <form action="{{asset('/users/' .$user->id)}}" method="POST">
          <input type="hidden" name="_token" value={{csrf_token()}}>
          <input type="hidden" name="_method" value="DELETE">
          <button type="submit">Xoa Nguoi Nay</button>
        </form>
        <form action="{{asset('/users/'.$user->id.'/edit')}}" method="GET">
          <button type="submit">Sua Nguoi Nay</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>