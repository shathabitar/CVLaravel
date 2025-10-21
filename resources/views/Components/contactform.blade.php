<div class="contact-form p-4 shadow rounded" style="background-color:#f8f9fa;">
    @if(session('success'))
        <div class="alert alert-success bg-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required>
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" required>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Subject</label>
            <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" required>
            @error('subject')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label>Message</label>
            <textarea name="message" class="form-control @error('message') is-invalid @enderror" rows="4" required></textarea>
            @error('message')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

      <div class="mb-3">
    <label>Tag</label>
    <select name="tag_id" class="form-select">
        <option value="" selected disabled>Select a tag</option>
        @foreach($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select>
</div>

        <button type="submit" class="btn btn-primary mt-3">Send</button>
    </form>
</div>

