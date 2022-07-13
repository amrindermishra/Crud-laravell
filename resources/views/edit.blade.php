<!DOCTYPE html>
<html>
<body>

<h1>Update Member</h1>
<form action ="/edit" method = "POST" enctype="multipart/form-data"> @csrf
    <input type = 'hidden' name = "id" value="{{$data['id']}}">
    <input type = 'text' name = "fname" value="{{$data['fname']}}"><br><br>
    <input type = 'text' name = "email" value="{{$data['email']}}"><br><br>
    <input type = 'file' name = "file" ><br><br>
    <input type = 'hidden' name = "old_file" value="{{$data['file']}}" ><br><br>
    <button type="submit">Update</button>
</form> 
</body>
</html> 