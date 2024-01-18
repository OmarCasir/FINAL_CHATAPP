<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    include_once "config.php";
    $outgoing_id = mysqli_real_escape_string($conn, $_POST['outgoing_id']);
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);

    $sql = "SELECT * FROM messages
            LEFT JOIN users ON users.unique_id = messages.outgoing_msg_id
            WHERE (outgoing_msg_id = {$outgoing_id} AND incoming_msg_id = {$incoming_id})
            OR (outgoing_msg_id = {$incoming_id} AND incoming_msg_id = {$outgoing_id}) ORDER BY msg_time";
    $query = mysqli_query($conn, $sql);
    $output = "";

    if (mysqli_num_rows($query) > 0) {
        while ($row = mysqli_fetch_assoc($query)) {
            $msg_status = $row['msg_status'];
            if ($row['outgoing_msg_id'] === $outgoing_id) {
                $output .= '<div class="chat outgoing">
                                <div class="details">
                                    <p>' . $row['msg'] .'</p>
                                    <em class="status">' . $row['msg_time'] ." | ". $msg_status . '</em>  
                                </div>
                            </div>';
            } else {
                if ($msg_status === 'sent') {
                    $sql_update_status = mysqli_query($conn, "UPDATE messages SET msg_status = 'seen' WHERE msg_id = {$row['msg_id']}");
                }
                $output .= '<div class="chat incoming">
                                <img src="php/images/' . $row['img'] . '" alt="">
                                <div class="details">
                                    <p>' . $row['msg'] .'</p> 
                                    <em>' . $row['msg_time'] ." | ". $msg_status . '</em>
                                </div>
                            </div>';
            }
        }
        echo $output;
    }
} else {
    header("../login.php");
}
?>
