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
    <title>RDV</title>
    </head>
    <body>
        <form action="http://localhost/brief6/rdv/insert" method = "post">

            <input type="date" name = "date" placeholder = "date">
            <select name="horaire">
                <option selected>Choose...</option>
                <option>08-09</option>
                <option>09-10</option>
                <option>10-11</option>
                <option>11-12</option>
                <option>14-15</option>
                <option>15-16</option>
                <option>16-17</option>
                <option>17-18</option>
            </select>
            <input type="text" name = "consu" placeholder = "consultation">
            <button>save</button>

        </form>
       <table>

        <tr>
            <th>date</th>
            <th>horaire</th>
            <th>type de consultation</th>
            <th>action</th>
        </tr>

        <!-- loop to get rows -->
        <?php foreach($rdvs as $row) { ?>

            <tr>

                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['horaire']; ?></td>
                <td><?php echo $row['type_de_consultation']; ?></td>
                <td>
                    <a href="http://localhost/brief6/rdv/delete/<?=$row['id']?>"><button>Delete</button></a>
                    <a href="http://localhost/brief6/rdv/edit/<?=$row['id']?>"><button>Edit</button></a>
                </td>

            </tr>

        <?php }?>

       </table>

    </body>
</html>