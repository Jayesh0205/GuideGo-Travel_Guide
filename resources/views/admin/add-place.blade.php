<!DOCTYPE html>
<html>

<head>
    <title>Add Tourist Place</title>
</head>

<body>

    <h1>Add Tourist Place</h1>

    <form action="/admin/place/store" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="name" placeholder="Place Name">

        <br><br>

        <label>Image</label>

        <input type="file" name="image">

        <br><br>
        
        <input type="text" name="district" placeholder="District">

        <br><br>

        <textarea name="description" placeholder="Description"></textarea>

        <br><br>


        <button type="submit">Save Place</button>



    </form>

</body>

</html>