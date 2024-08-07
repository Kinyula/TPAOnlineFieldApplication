<div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">

        <div class="card-box mb-6 p-4 w-full">
            <h4 class="font-weight-bold uppercase">Departments <br></h4>
            <span class="font-weight-bold text-yellow-500">Total : </span>
            <span class="font-weight-bold text-blue-800">{{ $dipartments ?? 0 }}</span>
        </div>

        <div class="card-box mb-6 p-4 w-full">
            <h4 class="font-weight-bold uppercase">Directorates <br></h4>
            <span class="font-weight-bold text-yellow-500">Total : </span>
            <span class="font-weight-bold text-blue-800">{{ $directorates ?? 0 }}</span>
        </div>

        <div class="card-box mb-6 p-4 w-full">
            <h4 class="font-weight-bold uppercase">Human Resources <br> ( HR )</h4>
            <span class="font-weight-bold text-yellow-500">Total : </span>
            <span class="font-weight-bold text-blue-800">{{ $hr ?? 0 }}</span>
        </div>





    </div>
</div>
