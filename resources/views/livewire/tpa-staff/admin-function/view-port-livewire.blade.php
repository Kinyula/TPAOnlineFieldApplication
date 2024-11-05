<div class=" mb-30 p-6 shadow-lg rounded-lg">
    <span>
        <span class="text-sm text-yellow-500 mr-2">Total Ports:</span>
        <span class="text-lg">{{ Illuminate\Support\Number::abbreviate($totalPorts) }}</span>
    </span>

    <h3 class="text-2xl font-bold mb-6 text-yellow-500 flex items-center">
        <i class="fas fa-flag px-2"></i> Ports
    </h3>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white border border-yellow-500 rounded-lg shadow-md">
            <thead class="bg-yellow-500 text-white uppercase text-sm">
                <tr>
                    <th class="px-6 py-3 border-b">#</th>
                    <th class="px-6 py-3 border-b">Port</th>
                    <th class="px-6 py-3 border-b">Action</th>

                </tr>
            </thead>
            <tbody class="text-sm">
                @php
                    $srNo = 1;
                @endphp
                @foreach ($ports as $port)
                    <tr class="border-b">
                        <td class="px-6 py-4">{{ $srNo++ }}</td>
                        <td class="px-6 py-4">{{ $port->port_name }}</td>
                        <td class="px-6 py-4">
                            <a href="" class="text-yellow-500 hover:text-yellow-600">Edit</a>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination Links -->
    <div class="mt-4">
        {{ $ports->links() }}
    </div>
</div>
