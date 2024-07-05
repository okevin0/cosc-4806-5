<?php require_once 'app/views/templates/header.php' ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>User's Reminders Count</h1>
                <table class="table table-striped table-hover" >
                      <thead>
                        <tr>
                          <th scope="col">Username</th>
                          <th scope="col">Total Reminders</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                    <tbody>
                        <?php  
                            // print user reminder summary
                            foreach ($data['num_reminders'] as $reminders) {

                                echo "<tr><td>".$reminders['username']."</td>
                                      <td>".$reminders['number']."</td>
                                      <td><a href='/reports/view_all_reminders/?id=".$reminders['id']."&name=".$reminders['username']."'>View All</a></td></tr>";
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
