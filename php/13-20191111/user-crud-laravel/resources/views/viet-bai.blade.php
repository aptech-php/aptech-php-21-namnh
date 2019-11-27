<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>

  {!! "<ol>\r\n
    \t<li>fslkdg</li>\r\n
    \t<li>tejrt235</li>\r\n
    \t<li>f34oiq53</li>\r\n
    \t<li>&quot;HEHE&quot;</li>\r\n
    </ <h1>Hello World</h1>"
    !!}
    <form action="{{route('luu-bai-viet')}}" method="POST">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <textarea name="noiDungBaiViet" id="editor" cols="30" rows="10"></textarea>
      <button type="submit">Luu Bai Viet</button>
    </form>
    <script src="{{asset('/js/ckeditor/ckeditor.js')}}"></script>
    <script>
      CKEDITOR.replace('editor');
    </script>
</body>

</html>