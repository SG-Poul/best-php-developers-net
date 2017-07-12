@extends ('layouts.master')

@section ('content')
    <input type="hidden" value="{{ csrf_token() }}" id="csrf-token">
    <div class="container">
        <br/>
        <table class="table">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Skype</th>
                <th>Telephone</th>
                <th>Body</th>
                <th>Date</th>
                <th style="text-align: center">Delete</th>
            </tr>
            @foreach($quotes as $q)
                <tr>
                    <td>{{ $q->name }}</td>
                    <td>{{ $q->email }}</td>
                    <td>{{ $q->skype }}</td>
                    <td>{{ $q->telephone }}</td>
                    <td>{{ $q->body }}</td>
                    <td>{{ $q->created_at }}</td>
                    <td style="text-align: center"><button class="removeQuote btn-sm btn-danger" value="{{ $q->id }}" style="border-radius: 100%">X</button></td>
                </tr>
            @endforeach
        </table>
        <!-- End Dropzone Preview Template -->
    </div>
@endsection
