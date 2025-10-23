<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Kontaktní formulář</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">

<form action="/validate.php" method="POST">
<label for="jmeno">Jmeno:</label>
<input type="text" name="jmeno" id="jmeno">
   <button type="submit">Odeslat</button>
 </form>


</body>
</html>