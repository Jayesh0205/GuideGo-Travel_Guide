<!DOCTYPE html>
<html>

<head>
    <title>All Tourist Places</title>

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
        }

        th {
            background: #0d6efd;
            color: white;
        }
    </style>
</head>

<body>

    <h1>All Tourist Places</h1>

    <table>

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
            <th>District</th>
            <th>Description</th>
        </tr>
        @foreach($places as $place)
            <tr>
                <td>{{ $place->id }}</td>
                <td>{{ $place->name }}</td>
                <td>
    <img src="{{ asset('storage/' . $place->image) }}"
         style="width:150px;height:150px;border:2px solid red;">
</td>
                <td>{{ $place->district }}</td>
                <td>{{ $place->description }}</td>
            </tr>
        @endforeach
    </table>                                                                                                                                                                 

</body>

</html>