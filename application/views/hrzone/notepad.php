<?php include('header.php'); 
// require_once(APPPATH.'libraries/scraper_utilities.php');
?>

<style>
.card {width:49%;margin-left: 6px;}
.card-header i {float:right;}
.fa-trash, .fa-pencil-alt {cursor: pointer;}
.hidden {display:none}
.swatch {width:20px; height:20px; float:left; margin-right:10px; border-radius: 50%; cursor: pointer; }
.swatch:hover, .active  {border: 3px solid rgb(247, 189, 189)}

body{
    background-color: #dec9f7;
}
.btn-primary{
    background-color: #1C304C;
    border-color: #e29118;

}
label{
    color:#343434;
}

.card{
    width: 100%;
    margin-left: 0px    ;
}
.display-4{
    font-size: 2rem;
    font-weight: 300;
    line-height: 1.2;
}
.text-primary{
    color: #1C304C!important;
}
.card-header{
    padding: 5px 18px;
    background-color: #000000b3;
    border-bottom:none;
}
.fas{
    margin-top: 5px;
}
.fa-trash{
    color:red;
}
.fa-pencil-alt{
    color:green;
}
.card-text{
    font-size: 13px;
}
.card-body{
    padding: 18px;
    text-align: justify;
}
</style>

    <div class="d-grid col-lg-6">
    <div class="container col-lg-12 mt-4">
        <h1 class="display-4 text-center">
            <i class="fas fa-book-open text-primary"></i>
           Notepad
        </h1>
        <form id="note-form">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="3"></textarea>
            </div>
            <div class="mb-4 float-right swatches">
                    <div class="bg-primary swatch active"></div>
                    <div class="bg-secondary swatch"></div>
                    <div class="bg-success swatch "></div>
                    <div class="bg-danger swatch"></div>
                    <div class="bg-warning swatch"></div>
                    <div class="bg-info swatch"></div>
                    <div class="bg-light swatch"></div>
                    <div class="bg-dark swatch"></div>
                    <div class="bg-white swatch"></div>
            </div>
            <input type="submit" value="Add Note" class="btn btn-primary btn-block">
            <input type="text" id="noteid" class="hidden">
        </form>
        </div>
        <div class="col-lg-12 mt-4">
            <div class=""><h3 style="font-size: 18px; color:#000; font-weight: bold;">Saved Notes</h3></div>
            <div style="height: 600px; overflow:scroll;">
            
        <div id="note-list" class="mt-2 d-flex flex-wrap">
           
        </div>
    </div>
    </div>
    </div>
    <script type="javascript">
    // note class
class Note {
    constructor(id, title, content, color) {
        this.title = title,
        this.content = content,
        this.id = id,
        this.color = color
    }
}

// UI class
class UI {
    static refreshNotes() {
        document.querySelector('#note-list').innerHTML = '';
        const notes = Store.getNotes();
        let i = notes.length;
        while(i--) UI.addNoteToList(notes[i]);
        UI.updateId();
    }

    static addNoteToList(note) {
        const list = document.querySelector('#note-list');
        let card = document.createElement('div');
        card.classList = 'card text-white bg-primary mb-3';
        var now = new Date();
        var day = ("0" + now.getDate()).slice(-2);
        var month = ("0" + (now.getMonth() + 1)).slice(-2);
        var today = now.getFullYear() + "-" + (month) + "-" + (day);
        

        card.innerHTML = `
            <div class="card-header">
                <span>${note.title}</span>
                <span style="font-size:10px;">(${today})</span>
                <i class="fas fa-trash" noteid="${note.id}"></i>
                <i class="fas fa-pencil-alt mr-3" noteid="${note.id}"></i>
            </div>
            <div class="card-body ${note.color} ${note.color=='bg-white'?'text-dark':''}">
                <p class="card-text">${note.content}</p>
            </div>
        `;
        list.appendChild(card);
    }

    static showAlert(message, className) {
        const div = document.createElement('div');
        div.className = `alert alert-${className}`;
        div.appendChild(document.createTextNode(message));
        const container = document.querySelector('.container');
        const form = document.querySelector('#note-form');
        container.insertBefore(div, form);
        // vannish in 3 sec
        setTimeout(() => document.querySelector('.alert').remove(), 3000)
    }

    static clearFields() {
        document.querySelector('#title').value = '';
        document.querySelector('#content').value = '';
        UI.updateId();
    }

    static updateId() {
        document.querySelector('#noteid').value = (Store.getLastNote()==undefined)? 1: Store.getLastNote().id+1;
    }

    static removeColorPicker() {
        let swatches = document.querySelector('.swatches').children;
        let i = swatches.length;
        while(i--) swatches[i].classList.remove('active');
    }

   

    

}

// Store class
class Store {

    static getNotes() {
        let notes;
        if(localStorage.getItem('notes') == null) {
            notes = [];
        }
        else {
            notes = JSON.parse(localStorage.getItem('notes'));
        }
        return notes;
    }

    static getNote(id) {
        return Store.getNotes().find(val => val.id == id);
    }

    static getLastNote() {
        let notes = Store.getNotes();
        return notes[notes.length-1];
    }

    static addNote(note) {
        if(Store.getNote(note.id) !== undefined)  {
            Store.removeNote(note.id); // first remove note if exists
        }
        const notes = Store.getNotes();
        notes.push(note);
        localStorage.setItem('notes', JSON.stringify(notes));
    }

    static removeNote(id) {
        const notes = Store.getNotes();
        notes.forEach((note, index) => {
            if(note.id == id) {
                notes.splice(index, 1)
            }
        });
        localStorage.setItem('notes', JSON.stringify(notes));
    }
}


// Events: Display
document.addEventListener('DOMContentLoaded', UI.refreshNotes());

// Event: add note
document.querySelector('#note-form').addEventListener('submit', e => {
    e.preventDefault();
    // get form values
    const title = document.querySelector('#title').value;
    const content = document.querySelector('#content').value;
    const id = parseInt(document.querySelector('#noteid').value);
    const color = document.querySelector('.swatches').querySelector('.active').classList[0];
    

    // validate
    if(title == '' || content == '') {
        UI.showAlert("Please fill in all fields", 'danger');
    }
    else {
        // Instantiate note
        const note = new Note(id, title, content, color);
        
        // Add Note
        UI.addNoteToList(note); 
        Store.addNote(note);
        UI.showAlert("Note Added ", 'success');
        UI.clearFields();
        UI.refreshNotes();
    }

})

// Event: remove/update note
document.querySelector('#note-list').addEventListener('click', e => {
    UI.refreshNotes(); // from UI
    if(e.target.classList.contains('fa-trash')) {
        Store.removeNote(e.target.getAttribute('noteid')); // from storage
        UI.showAlert("Note Removed ", 'success');
        UI.refreshNotes();
    }
    if(e.target.classList.contains('fa-pencil-alt')) {
        // update the form with selected note
        document.querySelector('#title').value = e.target.parentElement.firstElementChild.innerText.trim();
        document.querySelector('#content').value = e.target.parentElement.parentElement.querySelector('.card-body').innerText.trim();
        document.querySelector('#noteid').value = e.target.getAttribute('noteid');
        // switch selected color in form
        UI.removeColorPicker();
        document.querySelector('.'+e.target.parentElement.parentElement.querySelector('.card-body').classList[1]).classList.add('active');
        
    }
        
      
})


// choose color
document.querySelector('.swatches').addEventListener('click', e => {
    if(e.target.classList.contains('swatch')) {
        UI.removeColorPicker();
        e.target.classList.add('active');
    }

  
    
    
})

    </script>