<h1>Member List<h1>
    <table border = '1'>
        <tr>
            <td>Id</td>
            <td>Full Name</td>
            <td>File</td>
            <td>Operation</td>
        <tr>
        @foreach($PersonDetail as $person)
        <tr>            
            <td>{{$person['id']}}</td>
            <td>{{$person['fname']}}</td>
            <td>{{$person['file']}}</td>
            <td>
                <a href="/remove/{{$person['id']}}">Delete</a>
                <a href="/edit/{{$person['id']}}">Edit</a>
            </td>
            
        <tr>
        @endforeach
    <table><br>
    <input type="button" onclick="location.href='http://127.0.0.1:8000/fomeview';" value="Add User" />