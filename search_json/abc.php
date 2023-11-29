<?php 
    //sleep(3);
    $term = $_POST['term'];
    $con=mysqli_connect('localhost', 'root', '', 'webtech');
    $sql = "select * from users where username like '%{$term}%'";
    $result = mysqli_query($con, $sql);

    

    $tabledata = array(); 

    while ($row = mysqli_fetch_assoc($result)) {
        $tabledata[] = array(
            'id' => $row['id'],
            'username' => $row['username'],
            'email' => $row['email']
        );
    }

    echo json_encode($tabledata);







    //echo $sql;


    // [{
    //     'id': 1,
    //     'username': 'alamin',
    //     'email': 'alamin@aiub.edu'
    // },
    // {
    //     'id': 1,
    //     'username': 'alamin',
    //     'email': 'alamin@aiub.edu'
    // },
    // {
    //     'id': 1,
    //     'username': 'alamin',
    //     'email': 'alamin@aiub.edu'
    // }]
?>