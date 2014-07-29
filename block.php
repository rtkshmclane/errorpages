<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Emergancy Protection Results</title>
<style type="text/css">
<!--
@import url("style.css");
-->
</style>
</head>
<body>
<center>
<img src="logos/
<?php 
	$filename = "logos/" . $_GET["dep-id"] . ".jpg";
	if (file_exists($filename) ) {
		echo $_GET["dep-id"];
	} else {
		echo "awnlogo";
	}
?>
.jpg" height=100px wodth=100px >
<h3>Emergency Protection Enforcement</h3>
<div id="block-paragraph">
Your IT staff has requested that this request be temporarily block for security reasons.   Please contact the help desk for more information on how to rectify the issue.
</div>
<p>
<table id="background-image" summary="Meeting Results">
    <tfoot>
    	<tr>
        	<td align=center colspan="4">Please contact the help desk for assistance: <a href="mailto:support@bradscrabshack.com">support@bradscrabshack.com</a>
		<br>Powered by Arctic Wolf Concierge Security &copy 2014</td>
        </tr>
    </tfoot>
    <tbody>
    	<tr>
        	<td>Client IP</td>
            <td><? echo $_GET["cip"]; ?></td>
        </tr>
        <tr>
        	<td>Requested URL</td>
            <td>http://www.foo.com</td>
        </tr>
        <tr>
        	<td>Error Code</td>
            <td><? echo $_GET["err"]; ?></td>
        </tr>
        <tr>
        	<td>Deployment ID</td>
            <td><? echo $_GET["dep-id"]; ?></td>
        </tr>
    </tbody>
</table>

</center>
</body>
</html>
