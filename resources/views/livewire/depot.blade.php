<div>
<form id="form-send-money" method="post">
   
        <div class="form-group">
            <label for="inputCountry">Moyens de paiement</label>
            <select wire:model.lazy='payement' class="custom-select" id="inputCountry" name="country_id">
                <option value="">Selectionner un moyen de paiement</option>
                <option value="orange-money">Orange Money</option>
                <option value="mtn-money">MTN Mobile Money</option>
                <option value="moov-money">Moov Africa</option>
                <option value="wertern-union">Western Union</option>
                <option value="perfect-money">Perfect Money</option>
                <option value="bitcoin">Bitcoin</option>
                <option value="ria">Ria</option>
            </select>
            @error('payement')<span style="color: red;">{{$message}}</span>@enderror
        </div>
       
        <div class="form-group">
            <label for="youSend">Montant investir</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">FCFA</span>
                </div>
                <select wire:model.lazy='pack' class="custom-select" id="inputCountry" name="country_id">
                  <option value="">Selectionner le montant à investir</option>
                   @foreach($packs as $pack)
                        <option value="{{$pack->id}}">{{$pack->money}}$</option>
                    @endforeach
                </select>
            </div>
        </div>
        @error('pack')<span style="color: red;">{{$message}}</span>@enderror

        <div class="form-group">
            <label for="recipientGets">Montant à recevoir</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">FCFA</span>
                </div>
                <input type="text" class="form-control" data-bv-field="recipientGets" id="recipientGets" value="{{$r_money ? $r_money."$" : 'Veuillez choisir votre pack'}}" placeholder="" disabled>
            </div>
        </div>
        <hr>
        <p>Frais Total de la transaction <span class="float-right">7.21 FCFA</span></p>
        <hr>
        <button wire:click.prevent= 'CreateTransaction()' class="btn btn-primary btn-block">Investir</button>
    </form>
</div>
