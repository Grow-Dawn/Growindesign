<?php
/// Deletes an item from the database.
/// $itemId - The Id of the item to delete.
function DeleteItem($itemId)
{
if ($itemId)
{
$query = "DELETE FROM items WHERE ID=:id";
$result = DbExecute($query, array(':id' => $itemId));
}
}
/// Retrieves and item from the database.
/// $id - the ID of the item to retrieve.
function GetItemById($id)
{
$query = "SELECT * FROM items WHERE ID=:id";
$result = DbSelect($query, array(':id' => $id));
if (array_key_exists(0, $result))
{
return $result[0];
}
return false;
}
/// Retreives all items from the database, ordered by their Awesome score.
function GetOrderedItems()
{
$query = "SELECT * FROM items ORDER BY Ratio DESC, Upvotes DESC";
return DbSelect($query);
}
// Save a vote for an item.
// $itemId: The item to vote for
// $direction: Up=1, Down=2
function SaveItemVote($itemId, $direction)
{
if ($item = GetItemById($itemId))
{
if ($direction == 1)
{
$fieldUpdate = 'Upvotes=Upvotes+1';
}
else
{
$fieldUpdate = 'Downvotes=Downvotes+1';
}
$query = "UPDATE items SET $fieldUpdate,Ratio=(Upvotes/(Upvotes+Downvotes)) WHERE ID=:id";
DbExecute($query, array(':id' => $itemId));
}
else
{
// The item was not found, don't save the vote.
}
}
// Save a new Item
// $name - the name of the item.
// $imageUrl - a URL to the item image.
function SaveNewItem($name, $imageUrl)
{
$query = "INSERT INTO items(Name, Upvotes, Downvotes, Ratio, ImageUrl, createdBy) VALUES(:name, 0, 0, 0.0, :url, :userId)";
$id = DbInsert($query, array(':name' => $name, ':url' => $imageUrl, ':userId' => GetLoggedInUserId()));
return $id;
}