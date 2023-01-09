<?php
$data = new EmployesController();
$employes = $data->getAllEmployes();

print_r($employes);
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-body bg-light" >
                    <a href="<?= BASE_URL;  ?>add"> <i class="fas fa-plus"> add</i> </a>
                    <?php if(isset($_SESSION['add_error'])): ?>
                    <div class="alert alert-<?php if($_SESSION['add_error']=== 'row added successfully to databse'):
                    echo 'success'; else: echo 'danger'; endif ?>
                    alert-dismissible fade show">
                    <strong>wrong!</strong>
                    <?php 
                    echo $_SESSION['add_error'] ; 
                    unset($_SESSION['add_error'] );
                    ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert">
                        </button>
                    </div>
                    <?php endif ?>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <caption>List of employees</caption>
                            <thead>
                                <tr>
                                    <th scope="col  ">id</th>
                                    <th scope="col ">name</th>
                                    <th scope="col">status</th>
                                    <th scope="col">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($employes as $employe): ?>
                                <tr>
                                    <th scope="row h"><?= $employe["id"]; ?></th>
                                    <td><?= $employe["name"]; ?></td>
                                    <td><?= $employe["status"] ? '<span class=" badge bg-success ">active</span>' :
                                    '<span class=" badge bg-danger ">rellié</span>' ?></td>
                                    <td>
                                        <form action="update" method="post" class=" d-inline-block m-1">
                                            <input type="hidden" name="id"
                                            value="<?= $employe["id"]; ?>">
                                            <button class="btn btn-sm btn-warning " type="submit"> Edit <i class="bi bi-pencil"></i>
                                            </button>
                                        

                                        </form>
                                        <form action="delete" method="post" class="d-inline-block  m-1">
                                            <input type="hidden" name="id"
                                            value="<?= $employe["id"]; ?>">
                                            <button class="btn btn-sm btn-danger" type="submit"> Delete<i class="  fa fa-trashe"></i>
                                            </button>
                                        

                                        </form>
                                    </td>
                                    
                                    
                                        <?php endforeach ;?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>