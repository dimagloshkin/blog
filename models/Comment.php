<?php

class Comment
{
   public static function getCommentsByIdArt($art_id)
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT * FROM `comments` WHERE `art_id` = :art_id";
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':art_id', $art_id, PDO::PARAM_INT);
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;
   }//возвращает массив комментарие к определенной статье

   public static function addCommentByIdArt($art_id, $author, $content)
   {
      $db = ConnectionDB::getConnection();
      $sql = "INSERT INTO `comments` SET `author` = :author, `comment` = :content, `art_id` = :art_id";
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':author', $author, PDO::PARAM_STR);
      $stmt->bindParam(':content', $content, PDO::PARAM_STR);
      $stmt->bindParam(':art_id', $art_id, PDO::PARAM_INT);
      $stmt->execute();
   }//добавление коментария в БД

   public static function getFiveTopComments()
   {
      $db = ConnectionDB::getConnection();
      $sql = "SELECT * FROM `comments` ORDER BY `date` DESC LIMIT 5";
      $result = $db->query($sql);
      $result = $result->fetchAll(PDO::FETCH_ASSOC);
      return $result;
   }

}