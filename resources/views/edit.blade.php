<!DOCTYPE html>
<html>
<head>
    <title>Edit Registration Details</title>
</head>
<body>
    <form method="POST" action="/register/{{ $user->id }}">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}" required><br>

        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
