<x-layout>
<div class="container my-5">
    <h1 class="mb-4">All Contacts</h1>

    @if($contacts->isEmpty())
        <p>No contacts found.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Tags</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->subject }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                        {{ $contact->tag ? $contact->tag->name : 'No Tag' }}
                    </td>
                    <td>{{ $contact->created_at->format('Y-m-d H:i') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
</x-layout>
