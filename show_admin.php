<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理者資訊</title>
</head>

<body>

<h2>登入成功</h2>

<div id="info"></div>

<script>
let admin = JSON.parse(sessionStorage.getItem("admin"));

document.getElementById("info").innerHTML = `
    <p>🆔 ID：${admin.Admin_ID}</p>
    <p>👤 姓名：${admin.Admin_Name}</p>
    <p>🏢 部門：${admin.Department}</p>
`;
</script>

</body>
</html>