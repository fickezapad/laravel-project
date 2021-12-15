<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lista Kontakta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Lista Kontakta</h2>
        <table class="table" id="tbl-list-data">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Mobile number</th>
                    <th>Home number</th>
                </tr>
            </thead>
            <tbody>
                @foreach($korisnici as $korisnik)

                <tr>
                    <td>{{$korisnik -> name}}</td>
                    <td>{{$korisnik -> lastname}}</td>
                    <td>{{$korisnik -> mobile}}</td>
                    <td>{{$korisnik -> home}}</td>
                </tr>

                @endforeach

            </tbody>
        </table>
        <button id="myButton" onclick="window.location='{{ url("home") }}'">Home</button>
    </div>

    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('#tbl-list-data').DataTable();
        });
    </script>

</body>

</html>