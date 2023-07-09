<?php include("view/header.php")?>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-7 mt-5">
                <div class="card text-center">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <h5 class="card-title">Formulaire pour facture d'achat</h5>
                        <a href="controller/controller.achat.php" class="btn btn-primary">Créer</a>
                    </div>
                    <div class="card-footer text-muted"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-7 mt-5">
                <div class="card text-center">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <h5 class="card-title">Formulaire pour factures de vente</h5>
                        <a href="controller/controller.vente.php" class="btn btn-primary">Créer</a>
                    </div>
                    <div class="card-footer text-muted"></div>
                </div>
            </div>
        </div>
    </div>

<?php include("view/footer.php");?>