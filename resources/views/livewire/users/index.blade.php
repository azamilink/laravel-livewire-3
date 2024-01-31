<div>
    <table class="table">
        <thead>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Join</th>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr wire:key='{{ $user->id }}'>
                    <th scope="row">{{ $loop->index + $users->firstItem() }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d F, Y') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <x-pagination :items="$users" />
</div>