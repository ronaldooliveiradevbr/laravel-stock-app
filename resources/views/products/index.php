<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Stock management</title>
  <link href="css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
  <h1>Products</h1>

  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
      </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
      <tr>
        <td><?= $product['name'] ?></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>

