<table>
  <thead>
    <tr>
      <th>id</th>
      <th>name</th>
      <th>phone number</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->phone->phone_number}}</td>
    </tr>
    @endforeach
  </tbody>
</table>