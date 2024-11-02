<div>
    <div class="card-box mb-30 p-6 bg-white shadow-lg rounded-lg">
        <span>
            <span class="text-sm text-yellow-500 mr-2">Total Countries:</span>
            <span class="text-lg">{{ Illuminate\Support\Number::abbreviate($totalCountries) }} countries</span>
        </span>

        <h3 class="text-2xl font-bold mb-6 text-yellow-500 flex items-center">
            <i class="fas fa-users px-2"></i> Countries
        </h3>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-yellow-500 rounded-lg shadow-md">
                <thead class="bg-yellow-500 text-white uppercase text-sm">
                    <tr>
                        <th class="px-6 py-3 border-b">Country</th>

                    </tr>
                </thead>
                <tbody class="text-sm">
                    @php
                        $srNo = 1;
                    @endphp
                    @foreach ($countries as $country)
                        <tr class="border-b">
                            <td class="px-6 py-4">{{ $country->country_name }}</td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="mt-4">
            {{ $countries->links() }}
        </div>
    </div>

</div>
