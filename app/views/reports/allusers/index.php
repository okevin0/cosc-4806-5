<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>List of Users Login</h1>
                <table class="table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th scope="col">Username</th>
                          <th scope="col">Attempt Status</th>
                          <th scope="col">Status Count</th>
                        </tr>
                      </thead>
                    <tbody>
                        <?php  
                            // print user list
                            foreach ($data['list_of_users'] as $user) {

                                echo "<tr><td>".$user['username']."</td>
                                      <td>".$user['attempt']."</td>
                                      <td>".$user['number']."</td></tr>";
                            }
                               // print_r($_SESSION['user_id']);
                        ?>
                      </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
    <?php require_once 'app/views/templates/footer.php' ?>
