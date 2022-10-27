
    
<label class="row col-form-label text-md-end fw-bold ">General:</label>
    <div class="row general">
        <div class="col-sm-6 col-md-6 card">
            <div class="mb-1 pt-1 pb-1 row ">    
                <label for="Nombre" class="col-4 col-sm-5 col-form-label">Nombre: </label>
                <div class="col-8 col-sm-7">
                    <input type="text" class="form-control" name="Name" value="{{isset($alimento->Name)?$alimento->Name:''}}">
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 card">
            <div class="mb-1 pt-1 pb-1  row">    
                <label for="cantidad" class="col-4 col-sm-4 col-form-label text-md-end">Cantidad</label>
                <div class="col-5 col-sm-5">
                    <input type="number" class="form-control" name="cantidad" value="{{isset($alimento->cantidad)?$alimento->cantidad:''}}" step=0.01>
                </div>
                <div class=" col-3 col-sm-3">
                    <select class="custom-select custom-select-lg btn btn-link" name="unidadMedida">
                        <option selected disabled>{{isset($alimento->unidadMedida)?$alimento->unidadMedida:''}}</option>
                        <option value="Mg">Miligramo</option>
                        <option value="g">Gramo</option>
                        <option value="Kg">Kilogramo</option>
                    </select>
                </div>  
            </div>
        </div>
    </div>
    <label class="row col-form-label text-md-end fw-bold ">Macronutrientes:</label>
    <div class="row mb-1 mt-1 macronutriente pt-1 pb-1">
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-2 pb-1  row">    
                <label for="energia" class="col-4 col-sm-4 col-form-label text-md-end">Energía</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="Energia" value="{{isset($alimento->Energia)?$alimento->Energia:''}}" step=0.01>
                </div>
                <label for="medidas" class="col-sm-3 col-3 col-form-label fw-bold">(Kcal)</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-2 pb-1 row ">  
                <label for="ProteinaTotal" class="col-4 col-sm-4 col-form-label text-md-end">Proteina</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control"name="ProteinaTotal" value="{{isset($alimento->ProteinaTotal)?$alimento->ProteinaTotal:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-sm-3 col-3 col-form-label fw-bold">(g)</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 card">

             <div class="mb-1  pt-2 pb-1 row" >
                <label for="CarbohidratosTotales" class="col-4 col-sm-4 col-form-label text-md-end">H. Carbono </label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="CarbohidratosTotales" value="{{isset($alimento->CarbohidratosTotales)?$alimento->CarbohidratosTotales:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-sm-3 col-3 col-form-label fw-bold">(g)</label>
            </div>           
        </div>
        <div class="col-sm-6 col-md-3 card">

            <div class="mb-1  pt-2 pb-1  row">  
                <label for="GrasaTotal" class="col-4 col-sm-4 col-m- col-form-label text-md-end">Grasa</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="GrasaTotal" value="{{isset($alimento->GrasaTotal)?$alimento->GrasaTotal:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-sm-3 col-3 col-form-label fw-bold">(g)</label>
            </div>            
        </div>
    </div>
    
    <label class="row col-form-label text-md-end fw-bold ">Micronutrientes:</label>

    <div class="row mb-1 mt-1 micronutriente  pt-1 pb-1">
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="FibraDietaria" class="col-sm-4 col-4 col-form-label">Fibra</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="FibraDietaria" value="{{isset($alimento->FibraDietaria)?$alimento->FibraDietaria:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(g)</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">  
                <label for="agua" class="col-sm-4 col-4 col-form-label">Agua</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control"name="Agua" value="{{isset($alimento->ProteinaTotal)?$alimento->Agua:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(g)</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 card">
            <div class=" mb-1 row pt-1 pb-1">  
                <label for="Calcio" class="col-sm-4 col-4 col-form-label">Calcio</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="Calcio" value="{{isset($alimento->Calcio)?$alimento->Calcio:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(mg)</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="Fosforo" class="col-sm-4 col-4 col-form-label">Fósforo: </label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="Fosforo" value="{{isset($alimento->Fosforo)?$alimento->Fosforo:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(mg)</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="Zinc" class="col-sm-4 col-4 col-form-label">Zinc</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="Zinc" value="{{isset($alimento->Zinc)?$alimento->Zinc:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(mg)</label>
            </div>
        </div>  
        <div class="col-sm-6 col-md-3 card"> 
            <div class="mb-1 pt-1 pb-1 row">
                <label for="Hierro" class="col-sm-4 col-4 col-form-label">Hierro</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="Hierro" value="{{isset($alimento->Hierro)?$alimento->Hierro:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(mg)</label>
            </div>
        </div>
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="B_caroteno" class="col-sm-4 col-4 col-form-label">B- Caroteno</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="B_caroteno" value="{{isset($alimento->B_caroteno)?$alimento->B_caroteno:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(μg)</label>
            </div>
        </div> 
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="VitaminaA" class="col-sm-4 col-4 col-form-label">Vitamina A</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="VitaminaA" value="{{isset($alimento->VitaminaA)?$alimento->VitaminaA:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(μg)</label>
            </div>
        </div> 
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="Tiamina" class="col-sm-4 col-4 col-form-label">Tiamina</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="Tiamina" value="{{isset($alimento->Tiamina)?$alimento->Tiamina:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(mg)</label>
            </div>
        </div>   
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="Riboflavina" class="col-sm-4 col-4 col-form-label">Riboflavina: </label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="Riboflavina" value="{{isset($alimento->Riboflavina)?$alimento->Riboflavina:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(mg)</label>
            </div>
        </div> 
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="Niacina" class="col-sm-4 col-4 col-form-label">Niacina</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="Niacina" value="{{isset($alimento->Niacina)?$alimento->Niacina:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(mg)</label>
            </div>
        </div>          
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="VitaminaC" class="col-sm-4 col-4 col-form-label">Vitamina C</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="VitaminaC" value="{{isset($alimento->VitaminaC)?$alimento->VitaminaC:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(mg)</label>
            </div>
        </div>            
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="VitaminaC" class="col-sm-4 col-4 col-form-label">Ácido Fólico</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="AcidoFolico" value="{{isset($alimento->AcidoFolico)?$alimento->AcidoFolico:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(mg)</label>
            </div>
        </div>           
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="Sodio" class="col-sm-4 col-4 col-form-label">Sodio: </label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="Sodio" value="{{isset($alimento->Sodio)?$alimento->Sodio:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(mg)</label>
            </div>
        </div>          
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="Potasio" class="col-sm-4 col-4 col-form-label">Potasio: </label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="Potasio" value="{{isset($alimento->Potasio)?$alimento->Potasio:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(mg)</label>
            </div>
        </div>            
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="VitaminaB12" class="col-sm-4 col -4col-form-label">Vitamina B12 </label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="VitaminaB12" value="{{isset($alimento->VitaminaB12)?$alimento->VitaminaB12:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(μg)</label>
            </div>
        </div>          
        <div class="col-sm-6 col-md-3 card">
            <div class="mb-1 pt-1 pb-1 row">
                <label for="VitaminaD" class="col-sm-4 col-4 col-form-label">Vitamina D</label>
                <div class="col-sm-5 col-5">
                    <input type="number" class="form-control" name="VitaminaD" value="{{isset($alimento->VitaminaD)?$alimento->VitaminaD:''}}" step=0.01 >
                </div>
                <label for="medidas" class="col-3 col-sm-3 col-form-label fw-bold">(μg)</label>
            </div>
        </div> 
    </div>
    <label class="row col-form-label text-md-end fw-bold ">Medidas Caseras:</label>
    <div class="send">
        <button class="send_g btn btn-success" type="submit">Guardar Datos</button>
        <a class="send_back btn btn-danger" href="{{ url('alimento/')}}">Regresar</a>  
    </div>
    