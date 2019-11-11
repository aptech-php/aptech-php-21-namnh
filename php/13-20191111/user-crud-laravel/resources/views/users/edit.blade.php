<form action="{{route('users.update',$user->id)}}" method="POST">
  <input type="hidden" name="_token" value={{csrf_token()}}>
  <input type="hidden" name="_method" value="PUT">
  <input type="text" value="{{$user->name}}" name="name">
  <input type="email" value="{{$user->email}}" name="email">
  <button type="submit">Cap Nhat Du Lieu</button>
</form>