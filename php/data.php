<?php
    while($row = mysqli_fetch_assoc($query)){
    $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
                    <div class="content">
                    <img src="php/images/'. $row['img'] .'" alt="">
                    <div class="details">
                        <span>'. $row['fname']. " " . $row['lname'] .'</span>
                        <p>This is a sample message</p>
                    </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>';
    }
?>