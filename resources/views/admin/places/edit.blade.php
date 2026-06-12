<h1>Edit Place</h1>

<form action="{{ route('admin.places.update', $place->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Name:</label>
    <input type="text" name="name" value="{{ $place->name }}">
    <br><br>

    <label>Image:</label>
    <input type="text" name="image" value="{{ $place->image }}">
    <br><br>

    <label>District:</label>
    <input type="text" name="district" value="{{ $place->district }}">
    <br><br>


    <button type="submit">Update</button>
</form>