
// deletes art from the UI.

function DeleteArtwork(id) {
    var confirmed = confirm("Are you sure you want to delete this art?");
    if (confirmed) {
        window.location = '/?action=deleteitem&itemId=' + id;
    }
}