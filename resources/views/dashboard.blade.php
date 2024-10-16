<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes Dashboard</title>
    <link rel="stylesheet" href="{{ url('css/dashboard.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <script src="{{ url('scripts/dashboard.js') }}" defer></script>
</head>
<body>

    <div class="dashboardWrapper">
        
        <div class="dashboardLeftSide">
            <div>
                <div class="dashboardLeftSide__topPart">
                    <h1 class="dashboardLeftSide__title">NoteSaver</h1>
                    <img class="dashboardLeftSide__searchIcon" src="{{ url('img/icons/searchIcon.png') }}" alt="searchIcon">
                </div>

                <div class="newNoteButton">
                    <img src="{{ url('img/icons/addIcon.png') }}" alt="newNoteButtonIcon">
                    <p>New Note</p>
                </div>

                <div>
                    <p class="sideTitle">More</p>
                    <div class="groupItemsWrapper">
                        <div class="groupItem">
                            <img src="{{ url('img/icons/favoriteIcon.png') }}" alt="favoriteIcon">
                            <p>Favorites</p>
                        </div>

                        <div class="groupItem">
                            <img src="{{ url('img/icons/trashIcon.png') }}" alt="trashIcon">
                            <p>Trash</p>
                        </div>

                        <div class="groupItem">
                            <img src="{{ url('img/icons/archivedIcon.png') }}" alt="favoriteIcon">
                            <p>Archived Notes</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logoutWrapper">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="logoutButton">
                        Logout
                    </button>
                </form>
            </div>
        </div>
        
        <div class="dashboardRightSide">
            <h2 class="userName">{{ Auth::user()->name }}'s notes</h2>
            <div class="notesContainer">
                @foreach ($notes as $note)
                <div class="noteItem" data-note-id="{{ $note->id }}">
                    <x-note 
                        :title="$note->title"
                        :createdAt="$note->created_at->format('d/m/Y')"
                        :content="$note->content"
                    />
                </div>
                @endforeach
            </div>
        </div>

        <div class="chooseNote">
            <div class="chooseNoteInfoWrapper">
                <div class="chooseNoteImage">
                    <img src="{{ url('img/icons/noteIcon.png') }}" alt="chooseNoteIcon">
                </div>
                <p class="chooseNoteTitle">
                    Select a note to view
                </p>
                <p class="chooseNoteDescription">
                    Choose a note from the list on the left to view its contents, or create a new note to add to your collection.
                </p>
            </div>

            <div id="noteDetail" class="noteDetail hidden">
                <form method="POST" action="{{ route('note.update', ':id') }}" id="noteForm" class="noteFormWrapper">
                    @csrf
                    @method('PUT')
                    
                    <div class="noteInfoWrapper">
                        <label for="noteTitle">Title</label>
                        <input type="text" id="noteTitle" name="title" value="" />

                        <label for="noteContent">Content</label>
                        <textarea id="noteContent" name="content"></textarea>

                        <div class="buttonGroup">
                            <button type="submit">Save</button>
                            <button type="button" onclick="closeNote()">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> 

        



    </div>
    
</body>
</html>