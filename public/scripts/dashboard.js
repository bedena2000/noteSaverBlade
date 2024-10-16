document.querySelectorAll('.noteItem').forEach(item => {
    item.addEventListener('click', () => {
        const noteId = item.getAttribute('data-note-id'); // Получаем ID заметки
        openNote(noteId);
    });
});

function openNote(noteId) {
    if (!noteId) {
        console.error('Note ID is null or undefined');
        return;
    }

    fetch(`/notes/${noteId}`)
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(note => {
            document.getElementById('noteTitle').value = note.title;
            document.getElementById('noteContent').value = note.content;

            const form = document.getElementById('noteForm');
            form.action = form.action.replace(':id', note.id);

            document.getElementById('noteDetail').classList.remove('hidden');
            document.querySelector('.chooseNoteInfoWrapper').remove();
        })
        .catch(error => console.error('Error fetching note:', error));
}

function closeNote() {
    document.getElementById('noteDetail').classList.add('hidden');
}
