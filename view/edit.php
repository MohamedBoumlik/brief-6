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
    <title>Edit Rdv</title>
    </head>
    <body>
        <form action="http://localhost/brief6/rdv/update/<?=$res['id']?>" method = "post">

            <input type="date" name="date" placeholder = "date" value="<?=$res['date']?>">
            <select name="horaire" >
                <option selected>Choose...</option>
                <option>08-9</option>
                <option>9-10</option>
                <option>10-11</option>
                <option>11-12</option>
                <option>14-15</option>
                <option>15-16</option>
                <option>16-17</option>
                <option>17-18</option>
            </select>
            <input type="text" name = "consu" placeholder = "consultation" value="<?=$res['type_de_consultation']?>">
            <button>update</button>

        </form>


    </body>
</html>