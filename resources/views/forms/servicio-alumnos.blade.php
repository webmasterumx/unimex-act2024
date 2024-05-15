<form id="servicio_alumnos" class="row">
    @csrf
    <div class="col-12">
        <h2>Servicio para Alumnos</h2>
    </div>
    <div class="mb-2 col-6">
        <div class="mb-3">
            <label for="name_service" class="form-label">
                <i class="bi bi-person-fill" style="color: #004b93;"></i> Nombre Completo
            </label>
            <input style="height: 32px !important;" type="text" class="form-control form-control-sm" id="name_service"
                name="name_service">
        </div>
    </div>
    <div class="mb-2 col-6">
        <div class="mb-3">
            <label for="email_service" class="form-label">
                <i class="bi bi-envelope-fill" style="color: #004b93;"></i> Correo Electrónico
            </label>
            <input style="height: 32px !important;" type="text" class="form-control" id="email_service"
                name="email_service">
        </div>
    </div>
    <div class="mb-2 col-4">
        <div class="mb-3">
            <label for="phone_casa_service" class="form-label">
                <i class="bi bi-telephone-fill" style="color: #004b93;"></i>Teléfono de Casa
            </label>
            <input style="height: 32px !important;" type="text" class="form-control" id="phone_casa_service"
                name="phone_casa_service" maxlength="10" minlength="10">
        </div>
    </div>
    <div class="mb-2 col-4">
        <div class="mb-3">
            <label for="movil_service" class="form-label">
                <i class="bi bi-phone-fill" style="color: #004b93;"></i> Teléfono celular
            </label>
            <input style="height: 32px !important;" type="text" class="form-control" id="movil_service"
                name="movil_service" maxlength="10" minlength="10">
        </div>
    </div>
    <div class="mb-2 col-4">
        <label for="select_plantel">
            <i class="bi bi-bank" style="color: #004b93;"></i> Plantel
        </label>
        <select class="form-select" style="height: 32px !important;" id="select_plantel" name="select_plantel">
            <option value="" selected>Selecciona tu Plantel</option>
            <option value="IZCALLI">IZCALLI</option>
            <option value="SATÉLITE">SATÉLITE</option>
            <option value="POLANCO">POLANCO</option>
            <option value="VERACRUZ">VERACRUZ</option>
        </select>
    </div>
    <div class="mb-2 col-6">
        <div class="mb-3">
            <label for="asunto_service" class="form-label">
                <i class="bi bi-bookmark-check-fill" style="color: #004b93;"></i> Asunto
            </label>
            <input style="height: 32px !important;" type="text" class="form-control" id="asunto_service"
                name="asunto_service">
        </div>
    </div>
    <div class="mb-2 col-6">
        <div class="mb-3">
            <label for="matricula_service" class="form-label">
                <i class="bi bi-credit-card-fill" style="color: #004b93;"></i> Matrícula
            </label>
            <input style="height: 32px !important;" type="text" class="form-control" id="matricula_service"
                name="matricula_service">
        </div>
    </div>
    <div class="mb-2 col-12">
        <div class="mb-3">
            <label for="mensaje_service" class="form-label">
                <i class="bi bi-pencil-square" style="color: #004b93;"></i> Mensaje
            </label>
            <textarea class="form-control" id="mensaje_service" name="mensaje_service" rows="4"></textarea>
        </div>
    </div>
    <div class="mb-3 col-12">
        <div class="mb-2 row">
            <div class="col-2 d-flex">
                <input disabled type="text" class="text-center" style="width: 40% !important;" id="number1"
                    name="number1">
                <div class="d-flex" style="width: 20% !important; align-items: center;">&nbsp;+</div>
                <input disabled type="text" class="text-center" style="width: 40% !important;" id="number2"
                    name="number2">
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
