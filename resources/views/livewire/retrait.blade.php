<div>
<form id="form-send-money" method="post">
            <div class="form-group">
                <label for="inputCountry">Moyens de paiement</label>
                <select class="custom-select" id="inputCountry" name="country_id">
                    <option value="">Selectionner un moyen de paiement</option>
                    <option value="orange-money">Orange Money</option>
                    <option value="mtn-money">MTN Mobile Money</option>
                    <option value="moov-money">Moov Africa</option>
                    <option value="wertern-union">Western Union</option>
                    <option value="perfect-money">Perfect Money</option>
                    <option value="bitcoin">Bitcoin</option>
                    <option value="ria">Ria</option>
                </select>
            </div>
            <div class="form-group">
                <label for="youSend">Montant investir (Room fait le choix entre les deux)</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">FCFA</span>
                    </div>
                    <input type="text" class="form-control" data-bv-field="youSend" id="youSend" value="1,000" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="youSend">Montant investir (Room fait le choix entre les deux)</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">FCFA</span>
                    </div>
                    <select class="custom-select" id="inputCountry" name="country_id">
                      <option value="">Selectionner le montant à investir</option>
                    
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="recipientGets">Montant à recevoir</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">FCFA</span>
                    </div>
                    <input type="text" class="form-control" data-bv-field="recipientGets" id="recipientGets" value="1,410.06" placeholder="" disabled>
                </div>
            </div>
            <hr>
            <p>Frais Total de la transaction <span class="float-right">7.21 FCFA</span></p>
            <hr>
            <p class="text-4 font-weight-500">Montant Total a Payer <span class="float-right"> 1,000.00 FCFA </span></p>
            <button class="btn btn-primary btn-block">Investir</button>
        </form>
</div>
