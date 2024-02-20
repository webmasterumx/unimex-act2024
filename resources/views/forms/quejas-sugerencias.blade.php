<form id="form_quejaSugerencia" class="row">
    @csrf
    <div class="mb-3 col-6 input-group">
        <x-form-contact.span-form-contact><i class="bi bi-person-fill"></i></x-form-contact.span-form-contact>
        <div class="form-floating">
            <input type="text" class="form-control" id="nombre_qys" name="nombre_qys" placeholder="Nombre Completo">
            <label for="nombre_qys">Nombre Completo</label>
        </div>
    </div>
    <div class="mb-3 col-6 input-group">
        <x-form-contact.span-form-contact><i class="bi bi-envelope-fill"></i></x-form-contact.span-form-contact>
        <div class="form-floating">
            <input type="email" class="form-control" id="mail_qys" name="mail_qys" placeholder="Correo Electronico">
            <label for="mail_qys">Correo Electronico</label>
        </div>
    </div>
    <div class="mb-3 col-4 input-group">
        <x-form-contact.span-form-contact><i class="bi bi-telephone-fill"></i></x-form-contact.span-form-contact>
        <div class="form-floating">
            <input type="text" class="form-control" id="telefono_casa_qys" name="telefono_casa_qys"
                placeholder="Teléfono de Casa" maxlength="10">
            <label for="telefono_casa_qys">Teléfono de Casa</label>
        </div>
    </div>
    <div class="mb-3 col-4 input-group">
        <x-form-contact.span-form-contact><i class="bi bi-phone-fill"></i></x-form-contact.span-form-contact>
        <div class="form-floating">
            <input type="text" class="form-control" id="telefono_movil_qys" name="telefono_movil_qys"
                placeholder="Teléfono celular" maxlength="10">
            <label for="telefono_movil_qys">Teléfono celular</label>
        </div>
    </div>
    <div class="mb-3 col-4 input-group">
        <x-form-contact.span-form-contact><i class="bi bi-credit-card-fill"></i></x-form-contact.span-form-contact>
        <div class="form-floating">
            <input type="text" class="form-control" id="matricula_qys" name="matricula_qys" placeholder="Matricula" maxlength="20">
            <label for="matricula_qys">Matricula</label>
        </div>
    </div>
    <div class="mb-3 col-6 input-group">
        <x-form-contact.span-form-contact><i class="bi bi-bookmark-check-fill"></i></x-form-contact.span-form-contact>
        <div class="form-floating">
            <input type="text" class="form-control" id="asunto_qys" name="asunto_qys" placeholder="Asunto">
            <label for="asunto_qys">Asunto</label>
        </div>
    </div>
    <div class="mb-3 col-12">
        <div class="form-floating">
            <textarea rows="4" class="form-control" id="mensaje_qys" name="mensaje_qys" placeholder="Mensaje"></textarea>
            <label for="mensaje_qys">Mensaje</label>
        </div>
    </div>
    <div class="mb-3 col-12">
        <div class="mb-2 row">
            <div class="col-2 d-flex">
                <input disabled type="text" class="text-center" style="width: 40% !important;" id="number5"
                    name="number5">
                <div class="d-flex" style="width: 20% !important; align-items: center;">&nbsp;+</div>
                <input disabled type="text" class="text-center" style="width: 40% !important;" id="number6"
                    name="number6">
            </div>
            <div class="col-4">
                <input type="number" class="form-control" id="operacion_qys" name="operacion_qys"
                    placeholder="Introduce el resultadio aquí" maxlength="2">
            </div>
        </div>
    </div>
    <div class="mb-5 col-12 form-check">
        <input class="form-check-input" type="checkbox" id="aceptar_qys" name="aceptar_qys" checked>
        <label class="form-check-label ms-4 mt-2" for="aceptar_qys">
            Estoy de acuerdo en ser contactado por UNIMEX® y acepto el aviso de privacidad.
        </label>
    </div>
    <div class="mb-4 col-4">
        <button type="submit" class="btn btn-primary">ENVIAR DATOS</button>
    </div>
    <div class="mb-4 col-4">
        <button type="reset" class="btn btn-outline-danger">BORRAR DATOS</button>
    </div>
</form>
