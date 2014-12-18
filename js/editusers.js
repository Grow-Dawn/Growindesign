// Function used to change a user status.
function ChangeUserUser(id, user) {
    var confirmed = confirm("Change the user's status to: " + user);
    if (confirmed) {

        window.location = '/?action=changeuser&userid=' + id + '&user=' + user;
    }
}
// Function used to delete a user.

function DeleteUser(id) {
    var confirmed = confirm("Are you sure you want to remove this person?");
    if (confirmed) {

        window.location = '/?action=deleteuser&id=' + id;
    }
}