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
    if($_POST['action'] == 'views'){
        $limit = $_POST['limit'];
        $sql = mysqli_query($con, "SELECT * FROM user_account ORDER BY id DESC limit 5");
        if(@mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_array($sql)):
                $output .= '
                <div class="card m-3">
                    <div class="card-header p-1"><h2>'.$row['name'].'</h2></div>
                    <div class="card-body">
                        <p class="">
                            <span class="">Username: </span>
                            <span class="">'.$row['username'].'</span>
                        </p>
                    </div>
                </div>';
            endwhile;
        }else{
            $output .= '<p class="alert alert-success">NO data</p>';
        }
        print $output;
    }
}