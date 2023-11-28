@if ($errors->any())
<ul>
    {!! implode('',$errors->all('<li>:message</li>')) !!}
</ul>
@endif
<!DOCTYPE html>
<html>
<body align = "center">
	<h2 style="color: rgb(128, 0, 90);">
			USER LOGIN FORM
	</h2>
	<form method="POST" action="check_user_details_uri">
		<table align="center">
			<tr>
				<td>User Name</td>
				<td><input type="text" name="name" placeholder="User Name"></td>
			</tr>
            <tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder="Password"></td>
			</tr>
            <tr>
				<td><br></td>
				<td><br></td>
			</tr>
			<tr>
				<td colspan="2"><input type="Submit" name ="login" value="Login"></td>
			</tr>
            @csrf
		</table><br>
	</form>
</body>
</html>
