<x-app>
    <x-table>
        <thead>
        <tr>
            <x-table.th>Name</x-table.th>
            <x-table.th>Email</x-table.th>
        </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">

        @foreach($users as $user)
            <tr>
                <x-table.td>{{$user['name']}}</x-table.td>
                <x-table.td>{{$user['email']}}</x-table.td>
            </tr>
        @endforeach

        </tbody>

    </x-table>

    <div class="mt-3">
        {{ $users->links() }}
    </div>
</x-app>
