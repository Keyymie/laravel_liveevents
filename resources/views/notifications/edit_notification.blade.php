<form action="{{ route('notifications.update', $notification->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label>Titre :</label>
        <input type="text" name="title" value="{{ old('title', $notification->title) }}" required>
    </div>

    <div>
        <label>Message :</label>
        <textarea name="message" required>{{ old('message', $notification->message) }}</textarea>
    </div>

    <div>
        <label>Type :</label>
        <select name="type" required>
            <option value="important" {{ $notification->type == 'important' ? 'selected' : '' }}>Important</option>
            <option value="general" {{ $notification->type == 'general' ? 'selected' : '' }}>Général</option>
            <option value="normal" {{ $notification->type == 'normal' ? 'selected' : '' }}>Normal</option>
        </select>
    </div>

    <div>
        <button type="submit">Mettre à jour</button>
    </div>
</form>
