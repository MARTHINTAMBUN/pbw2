<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                <script>
                    $(document).ready(function(){
                        $('#datatable').DataTable({
                        ajax:'{{ url("getAllCollections") }}',
                        serverSide : false,
                        processing: true,
                        deferRender: true,
                        type: 'GET',
                        destroy: true,
                        columns: [
                            {data: 'id', name: 'id'},
                            {data: 'judul', name: 'judul'},
                            {data: 'jenisKoleksi', name: 'jenisKoleksi'},
                            {data: 'jumlahKoleksi', name: 'jumlahKoleksi'},
                            {data: 'action', name: 'action', orderable: false, searchable: false}
                        ]
                    });
                    })
                </script>
<body>
    <div class="container-fluid">
        <div class="row form-inline">
            <table class="table table-striped table-hover" id="datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NamaKoleksi</th>
                        <th>JenisKoleksi</th>
                        <th>JumlahKoleksi</th>
                            <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</body>
</div>
</div>
</div>
</x-app-layout>