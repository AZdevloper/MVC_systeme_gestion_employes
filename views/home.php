<?php
$data = new EmployesController();
$employes = $data->getAllEmployes();
print_r($employes);
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="table-responsive">
                <table class="table table-hover">
                    <caption>List of employees</caption>
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($employes as $employe): ?>
                        <tr>
                            <th scope="row"><?= $employe["id"]; ?></th>
                            <td><?= $employe["name"]; ?></td>
                                <?php endforeach ;?>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>