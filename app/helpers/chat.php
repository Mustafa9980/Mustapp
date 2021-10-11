<?php 

function getChats($id_1,$id_2,$conn){

$sql="SELECT * FROM chats WHERE (from_id=? and to_id=?) or
(to_id=? and from_id=?) order by chat_id asc";
$stmt=$conn->prepare($sql);
$stmt->execute([$id_1,$id_2,$id_1,$id_2]);
if($stmt->rowCount()>0){

    $chats = $stmt->fetchAll();
    return $chats;
}else{
    $chats=[];
    return $chats;
}

}
?>