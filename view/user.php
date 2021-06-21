<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="view/css/Groupe.css"> -->
    <title>User</title>
    </head>
    <body>
        <form action="http://localhost/brief6/user/insert" method = "post">

            <input type="text" name = "nom" placeholder = "nom">
            <input type="text" name = "prenom" placeholder = "prenom">
            <input type="tel" name = "tel" placeholder = "tel">
            <input type="email" name = "email" placeholder = "email">
            <input type="number" name = "age" placeholder = "age">
            <input type="text" name = "cin" placeholder = "cin">
            <button>save</button>

        </form>
       

    </body>
</html>