<form id="servicio_alumnos" class="row">
    @csrf   
    <div class="col-12">
        <h2>Servicio para Alumnos</h2>
    </div>
    <div class="mb-2 col-6">
        <div class="input-group my-2">
            <x-form-contact.span-form-contact>
                <i class="bi bi-person-fill"></i>
            </x-form-contact.span-form-contact>
            <div class="form-floating">
                <x-form-contact.input-contact-text id="name_service" name="name_service" placeholder="Nombre Completo"></x-form-contact.input-contact-text>
                <label for="name_service">Nombre Completo</label>
            </div>
        </div>
    </div>
    <div class="mb-2 col-6">
        <div class="input-group my-2">
            <x-form-contact.span-form-contact>
                <i class="bi bi-envelope-fill"></i>
            </x-form-contact.span-form-contact>
            <div class="form-floating">
                <input type="email" class="form-control" id="email_service" name="email_service" placeholder="Correo Electronico">
                <label for="email_service">Correo Electronico</label>
            </div>
        </div>
    </div>
    <div class="mb-2 col-4">
        <div class="input-group my-2">
            <x-form-contact.span-form-contact>
                <i class="bi bi-telephone-fill"></i>
            </x-form-contact.span-form-contact>
            <div class="form-floating">
                <x-form-contact.input-contact-text maxlength="10" minlength="10" id="phone_casa_service" name="phone_casa_service" placeholder="Teléfono de Casa"></x-form-contact.input-contact-text>
                <label for="phone_casa_service">Teléfono de Casa</label>
            </div>
        </div>
    </div>
    <div class="mb-2 col-4">
        <div class="input-group my-2">
            <x-form-contact.span-form-contact>
                <i class="bi bi-phone-fill"></i>
            </x-form-contact.span-form-contact>
            <div class="form-floating">
                <x-form-contact.input-contact-text maxlength="10" minlength="10" id="movil_service" name="movil_service" placeholder="Teléfono celular"></x-form-contact.input-contact-text>
                <label for="movil_service">Teléfono celular</label>
            </div>
        </div>
    </div>
    <div class="mb-2 col-4">
        <div class="form-floating my-2">
            <select class="form-select" id="select_plantel" name="select_plantel" aria-label="Floating label select example">
                <option selected>Planteles</option>
                <option value="IZCALLI">IZCALLI</option>
                <option value="SATELITE">SATÉLITE</option>
                <option value="POLANCO">POLANCO</option>
                <option value="VERACRUZ">VERACRUZ</option>
            </select>
            <label for="select_plantel">Selecciona tu Plantel</label>
        </div>
    </div>
    <div class="mb-2 col-6">
        <div class="input-group my-2">
            <x-form-contact.span-form-contact>
                <i class="bi bi-bookmark-check-fill"></i>
            </x-form-contact.span-form-contact>
            <div class="form-floating">
                <x-form-contact.input-contact-text id="asunto_service" name="asunto_service" placeholder="Asunto"></x-form.contact.input-contact-text>
                    <label for="asunto_service">Asunto</label>
            </div>
        </div>
    </div>
    <div class="mb-2 col-6">
        <div class="input-group my-2">
            <x-form-contact.span-form-contact>
                <i class="bi bi-credit-card-fill"></i>
            </x-form-contact.span-form-contact>
            <div class="form-floating">
                <x-form-contact.input-contact-text maxlength="15" id="matricula_service" name="matricula_service" placeholder="Matricula"></x-form-contact.input-contact-text>
                <label for="matricula_service">Matricula</label>
            </div>
        </div>
    </div>
    <div class="mb-2 col-12">
        <div class="form-floating">
            <textarea rows="4" class="form-control" id="mensaje_service" name="mensaje_service" placeholder="Mensaje"></textarea>
            <label for="mensaje_service">Mensaje</label>
        </div>
    </div>
    <div class="mb-2 col-12">
        <div class="mb-2 row">
            <div class="col-2 d-flex">
                <input disabled type="text" class="text-center" style="width: 40% !important;" id="number1" name="number1" value="2"> 
                <div class="d-flex" style="width: 20% !important; align-items: center;">&nbsp;+</div>
                <input disabled type="text" class="text-center" style="width: 40% !important;" id="number2" name="number2" value="2">
            </div>
            <div class="col-4">
                <input type="number" class="form-control" id="operacion_service" name="operacion_service"
                    placeholder="Introduce el resultadio aquí" maxlength="2">
            </div>
        </div>
    </div>
    <div class="mb-2 col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="deacuerdo_service" name="deacuerdo_service" checked>
            <label class="form-check-label ms-4 mt-3" for="deacuerdo_service">
                Estoy de acuerdo en ser contactado por UNIMEX® y acepto el aviso de privacidad.
            </label>
        </div>
    </div>
    <div class="mb-4 col-4">
        <button type="submit" class="btn btn-primary mt-3">ENVIAR DATOS</button>
    </div>
    <div class="mb-4 col-4">
        <button type="reset" class="btn btn-outline-danger mt-3">BORRAR DATOS</button>
    </div>
</form>
