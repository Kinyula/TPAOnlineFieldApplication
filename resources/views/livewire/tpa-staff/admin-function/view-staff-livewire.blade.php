<div>
    <div class="card-box mb-30 p-6 bg-white shadow-lg rounded-lg">
        <h3 class="text-2xl font-bold mb-6 text-yellow-500 flex items-center">
            <i class="fas fa-users px-2"></i> Staff List
        </h3>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
                <thead class="bg-gray-100 text-gray-600 uppercase text-sm">
                    <tr>
                        <th class="px-6 py-3 border-b">First Name</th>
                        <th class="px-6 py-3 border-b">Last Name</th>
                        <th class="px-6 py-3 border-b">Email</th>
                        <th class="px-6 py-3 border-b">Position</th>
                        <th class="px-6 py-3 border-b">Department</th>
                    </tr>
                </thead>
                <tbody class="text-sm">
                    @foreach ($staff as $member)
                        <tr class="border-b">
                            <td class="px-6 py-4">{{ $member->first_name }}</td>
                            <td class="px-6 py-4">{{ $member->last_name }}</td>
                            <td class="px-6 py-4">{{ $member->email }}</td>
                            <td class="px-6 py-4">{{ $member->position }}</td>
                            <td class="px-6 py-4">{{ $member->extraUserInfo->department_id ?? 'N/A' }}</td> <!-- Adjust if your department relationship or attribute differs -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination Links -->
        <div class="mt-4">
            {{ $staff->links() }}
        </div>
    </div>

</div>
