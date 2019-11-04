<table>
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($nguoi_dung as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>