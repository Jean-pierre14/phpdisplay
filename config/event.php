<?php
require_once("./connection.php");

// Global variables
$output = '';

if(isset($_POST['action'])){
    if($_POST['action'] == 'view'){
        $sql = "SELECT * FROM user_account INNER JOIN wedding_tb ON user_account.id=wedding_tb.husband_id ORDER BY id DESC";
        $results = mysqli_query($con, $sql);

        if(@mysqli_num_rows($results) > 0){
            $output .= '<div class="row">';
            while($row = mysqli_fetch_assoc($results)):
                $output .= '
                <div class="col-md-4">
                    <div class="panel shadow-lg">
                    <div class="panel-header">
                        '.$row['name'].'
                    </div>
                    <div class="panel-body">
                        <p class="p-0 m-0">
                            '.$row['about'].'
                        </p>

                    </div>
                </div>
                </div>
                ';
            endwhile;
            $output .= '</div>';
        }else{
            $output .= '<div class=""></div>';
        }
        print $output;
    }
}