<?php

// Dawn Grow
// 
/// Deletes an artwork from the database.
/// $artworkId - The Id of the artwork to delete.
function DeleteArtwork($id) {
    /*if ($id) {
        $query = "DELETE FROM gallery WHERE artID = :id";
        $result = DbExecute($query, array(':id' => $id));
        return ;
    }
}*/
    $db = connAdmin();
        $sql = 'DELETE FROM gallery WHERE artID = :id';
        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();
            $success = $stmt->rowCount();
        } catch (PDOException $e){
            return FALSE;
        } 
        return $success;
}
/// Retrieves and artwork from the database.
/// $id - the ID of the artwork to retrieve.
function GetArtworkById($id) { //echo "not";
    $db = connAdmin();
    $sql = 'SELECT * FROM gallery WHERE artID =:id';
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        $art = $stmt->fetch();
    } catch (PDOException $e) {
        return FALSE;
    }
    return $art;
}

/* $query = "SELECT * FROM gallery WHERE artID=:id";
  $result = DbSelect($query, array(':id' => $id));
  if (array_key_exists(0, $result))
  {
  return $result[0];
  }
  return false;
  } */

/// Retreives all artwork from the database, ordered by their Awesome score.
function GetOrderedArtwork() {
    $query = "SELECT * FROM gallery ";
    return DbSelect($query);
}

// Save a like for an artwork.
// $id: The artwork to add a like to
// $direction: Up=1, Down=2
function SaveArtworkLike($id) {
        $query = "UPDATE gallery SET likes=likes+1 WHERE artID=:id";
        DbExecute($query, array(':id' => $id));
}


// Save a new artwork
// $name - the name of the artwork.
// $imageUrl - a URL to the artwork image.
function SaveNewArtwork($artwork, $imageURL, $description) {
    /* $query = "INSERT INTO gallery(artwork, likes, Ratio, ImageURL, createdBy) VALUES(:name, 0, 0, 0.0, :url, :artID)";
      $id = DbInsert($query, array(':name' => $name, ':url' => $imageUrl, ':whoId' => GetLoggedInUserId()));
      return $id;
      } */
    $db = connAdmin();
    $sql = 'INSERT INTO gallery (artwork, imageURL, description) VALUES (:artwork,:imageURL, :description)';
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':artwork', $artwork);
        $stmt->bindValue(':imageURL', $imageURL);
        $stmt->bindValue(':description', $description);
        $stmt->execute();
        $id = $db->lastInsertId();
    } catch (PDOException $e) {
        return FALSE;
    }
    if ($id) {
        return $id;
    } else {
        return FALSE;
    }
}
function updateArt($id, $artwork, $imageURL, $description){
$db = connAdmin();
    $sql = 'UPDATE gallery SET artwork=:artwork, imageURL=:imageURL, description=:description WHERE artID=:artID ';
    try {
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':artID', $id);
        $stmt->bindValue(':artwork', $artwork);
        $stmt->bindValue(':imageURL', $imageURL);
        $stmt->bindValue(':description', $description);
        $stmt->execute();
        $id = $db->lastInsertId();
    } catch (PDOException $e) {
        return FALSE;
    }
    if ($id) {
        return $id;
    } else {
        return FALSE;
    }  
}