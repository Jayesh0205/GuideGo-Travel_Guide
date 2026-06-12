<h1>All Tourist Places</h1>

  <a href="/admin/place/add">Add New place</a>

<table border="1" cellpadding="10">

    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>District</th>
        <th>Actions</th>
    </tr>

    @foreach($places as $place)

        <tr>

            <td>{{ $place->id }}</td>

            <td>
    @if($place->image)
        <img src="{{ asset('storage/' . $place->image) }}" style="width:100px; height:80px;">
    @else
        No Image
    @endif
</td>

            <td>{{ $place->name }}</td>

            <td>{{ $place->district }}</td>

            <td>

                <a href="{{ route('admin.places.edit', $place->id) }}">
                    Edit
                </a>

                |

                <form action="{{ route('admin.places.destroy', $place->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Are you sure you want to delete this place?')">
                        Delete
                    </button>
                </form>

            </td>

        </tr>

    @endforeach

</table>