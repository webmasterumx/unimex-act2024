<form id="form_trabaja" class="row" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 col-6 input-group">
        <x-form-contact.span-form-contact>
            <i class="bi bi-person-fill"></i>
        </x-form-contact.span-form-contact>
        <div class="form-floating">
            <input type="text" class="form-control" id="nombre_trabajo" name="nombre_trabajo"
                placeholder="Nombre Completo">
            <label for="nombre_trabajo">Nombre Completo</label>
        </div>
    </div>
    <div class="mb-3 col-6 input-group">
        <x-form-contact.span-form-contact>
            <i class="bi bi-envelope-fill"></i>
        </x-form-contact.span-form-contact>
        <div class="form-floating">
            <input type="email" class="form-control" id="email_trabaja" name="email_trabaja"
                placeholder="Correo Electronico">
            <label for="email_trabaja">Correo Electronico</label>
        </div>
    </div>
    <div class="mb-3 col-3 input-group">
        <x-form-contact.span-form-contact>
            <i class="bi bi-telephone-fill"></i>
        </x-form-contact.span-form-contact>
        <div class="form-floating">
            <input type="text" class="form-control" id="telefono_casa_trabaja" name="telefono_casa_trabaja"
                placeholder="Teléfono de Casa" maxlength="10">
            <label for="telefono_casa_trabaja">Teléfono de Casa</label>
        </div>
    </div>
    <div class="mb-3 col-3 input-group">
        <x-form-contact.span-form-contact>
            <i class="bi bi-phone-fill"></i>
        </x-form-contact.span-form-contact>
        <div class="form-floating">
            <input type="text" class="form-control" id="telefono_movil_trabaja" name="telefono_movil_trabaja"
                placeholder="Teléfono celular" maxlength="10">
            <label for="telefono_movil_trabaja">Teléfono celular</label>
        </div>
    </div>
    <div class="mb-3 col-3">
        <div class="form-floating">
            <select class="form-select" id="plantel_trabaja" name="plantel_trabaja"
                aria-label="Floating label select example">
                <option selected>Plantel de interes:</option>
                <option value="RECTORIA">RECTORÍA</option>
                <option value="IZCALLI">IZCALLI</option>
                <option value="SATELITE">SATÉLITE</option>
                <option value="POLANCO">POLANCO</option>
                <option value="VERACRUZ">VERACRUZ</option>
            </select>
            <label for="plantel_trabaja"> -Selecciona tu Plantel- </label>
        </div>
    </div>
    <div class="mb-3 col-3">
        <div class="form-floating">
            <select class="form-select" id="nivel_est_trabaja" name="nivel_est_trabaja"
                aria-label="Floating label select example">
                <option selected>Último Nivel de Estudios</option>
                <option value="Secundaria">SECUNDARIA</option>
                <option value="Preparatoria">PREPARATORIA</option>
                <option value="Licenciatura Titulado">LICENCIATURA Titulado</option>
                <option value="Licenciatura Pasante">LICENCIATURA Pasante</option>
                <option value="Posgrado">POSGRADO</option>
            </select>
            <label for="nivel_est_trabaja"> -Selecciona Nivel- </label>
        </div>
    </div>
    <div class="col-12">
        <label class="form-label">Conoce nuestras vacantes: <a
                href="https://www.occ.com.mx/empleos-en-mexico-y-el-mundo/para-trabajar-en-Universidad-Mexicana">Aqui</a></label>
    </div>
    <div class="mb-3 col-12">
        <div class="mb-3">
            <label for="cv_trabaja" class="form-label">Adjunta tu CV:</label>
            <input class="form-control" type="file" id="cv_trabaja" name="cv_trabaja">
            *Se aceptan archivos Word y PDF
        </div>
    </div>
    <div class="mb-3 col-12 input-group">
        <x-form-contact.span-form-contact>
            <i class="bi bi-person-workspace"></i>
        </x-form-contact.span-form-contact>
        <div class="form-floating">
            <input type="text" class="form-control" id="puesto_interes" name="puesto_interes"
                placeholder="¿Qué puesto te interesa?">
            <label for="puesto_interes">¿Qué puesto te interesa?</label>
        </div>
    </div>
    <div class="mb-3 col-12">
        <div class="form-floating">
            <textarea rows="5" class="form-control" id="experiencia_trabaja" name="experiencia_trabaja"
                placeholder="Describe tu experiencia laboral(Experiencia)"></textarea>
            <label for="experiencia_trabaja">Describe tu experiencia laboral(Experiencia)</label>
        </div>
    </div>
    <div class="mb-3 col-12">
        <div class="mb-2 row">
            <div class="col-2 d-flex">
                <input disabled type="text" class="text-center" style="width: 40% !important;" id="number3"
                    name="number3">
                <div class="d-flex" style="width: 20% !important; align-items: center;">&nbsp;+</div>
                <input disabled type="text" class="text-center" style="width: 40% !important;" id="number4"
                    name="number4">
            </div>
            <div class="col-4">
                <input type="number" class="form-control" id="operacion_trabaja" name="operacion_trabaja"
                    placeholder="Introduce el resultadio aquí" maxlength="2">
            </div>
        </div>
    </div>
    <div class="mb-3 col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="aceptar_trabajar" name="aceptar_trabajar" checked>
            <label class="form-check-label ms-4 mt-2" for="aceptar_trabajar">
                Estoy de acuerdo en ser contactado por UNIMEX® y acepto el aviso de privacidad.
            </label>
        </div>
    </div>
    <div class="mb-4 col-4 mt-3">
        <button type="submit" class="btn btn-primary">ENVIAR DATOS</button>
    </div>
    <div class="mb-4 col-4 mt-3">
        <button type="reset" class="btn btn-outline-danger">BORRAR DATOS</button>
    </div>
</form>
