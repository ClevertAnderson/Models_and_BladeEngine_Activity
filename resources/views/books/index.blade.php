<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    @include('books.header')

    <div class="container mx-auto mt-8">
        <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-lg">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="py-2 px-4">ID</th>
                    <th class="py-2 px-4">ISBN</th>
                    <th class="py-2 px-4">Title</th>
                    <th class="py-2 px-4">Author</th>
                    <th class="py-2 px-4">Date Published</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr class="border-b">
                        <td class="py-2 px-4">{{ $book->id }}</td>
                        <td class="py-2 px-4">{{ $book->isbn }}</td>
                        <td class="py-2 px-4">{{ $book->title }}</td>
                        <td class="py-2 px-4">{{ $book->author }}</td>
                        <td class="py-2 px-4">{{ $book->date_published }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('books.footer')

</body>
</html>
