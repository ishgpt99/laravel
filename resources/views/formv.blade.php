<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>1295 form</title>
</head>
<body><center>
<h1>Registration Form</h1><br>
<form method="post" action="/submit">
<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
<table width="500">
<tr>
<th>Name</th>
<td><input class="form-control" type="text" name="name" placeholder="Enter the name"/></td>
</tr>
<tr>
<th>Password</th>
<td><input class="form-control" type="password" name="psswrd" placeholder="Enter the password"/></td>
</tr>
<tr>
<td><input class="btn btn-info" type="submit" value="Submit" /></td>
</tr>
</table>
</form></center>   
</body>
</html>