
<!DOCTYPE html>
<html>
<head lang="en">
    <link rel="stylesheet" type="text/css" href="final">
    <meta charset="UTF-8">
    <title>Your Data</title>
</head>
<body>
<header style="height: 70px" class="header"><h6>"YOUR REGISTRATION IS COMPLETED"</h6></header>
    <h6>Your Data</h6>
<form class="fin">
<fieldset>
<table>

<tr>
    <label>
        <td class="imp">User id:</td>
        <td> <?php echo $_SESSION["userid"];?> </td>
    </label>
</tr>
<tr>
    <label>
        <td class="imp">Password:</td>
        <td> <?php echo $_SESSION["password"];?></td>
    </label>
</tr>
<tr>
    <label>
        <td class="imp">Name:</td>
        <td><?php echo $_SESSION["name"];?></td>
    </label>
</tr>
<tr>
    <label>
        <td class="imp">Address:</td>
        <td><?php echo $_SESSION["address"];?> </td>
    </label>
</tr>
<tr>
<label>
<td class="imp">Country:</td>
    <td> <?php echo $_SESSION["country"];?> </td>
</label>
</tr>
<tr><label><td class="imp">Zip-code:</td>
        <td> <?php echo $_SESSION["zipcode"];?> </td>
    </label>
</tr>
<tr>
    <label><td class="imp">E-mail:</td>
        <td><?php echo $_SESSION["email"];?> </td>
    </label>
</tr>
<tr><label>
        <td class="imp">Gender:</td>
        <td><?php echo $_SESSION["sex"];?> </td>
    </label>
</tr>
<tr><label>
        <td class="imp">Language:</td>
        <td><?php echo $_SESSION["language"];?> </td>
    </label>
</tr>
<tr><label>
        <td class="imp"> About:</td>
        <td><?php echo $_SESSION["about"];?> </td>
    </label>
</tr>
</table>
</fieldset>
</form>
</body>
</html>
