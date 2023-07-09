<h1 class="mt-5">Achat</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <form class="mt-5">
                <div class="row mt-3">
                    <div class="form-group col-6">
                        <label for="title">Intitulé</label>
                        <input type="text" class="form-control" id="title">
                    </div>
                    
                    <div class="form-group col-6">
                        <label for="account">Compte comptable</label>
                        <select class="form-control" id="account">
                            <option selected>Sélectionner un compte</option>
                            <option>601</option>
                            <option>602</option>
                            <option>603</option>
                            <option>604</option>
                            <option>605</option>
                            <option>606</option>
                            <option>607</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="form-group col-6">
                        <label for="price">Prix</label>
                        <input type="number" class="form-control" id="price">
                    </div>
                    <div class="form-group col-6">
                        <label for="taxe">TVA</label>
                        <input type="number" class="form-control" id="taxe">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="form-group">
                        <label for="total">Total</label>
                        <input type="number" disabled class="form-control" id="total">
                    </div>
                </div>
                <button class="btn btn-primary mt-3" id="submit">Soumettre</button>
            </form>
        </div>
    </div>
</div>

