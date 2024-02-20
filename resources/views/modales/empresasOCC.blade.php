<!-- modal empresas occ -->
<div class="modal fade" id="empresasOCC" tabindex="-1" aria-labelledby="empresasOCCLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h1 class="modal-title text-center fs-5" id="empresasOCCLabel">Empresas Registradas en OCC</h1>
                <form id="form_empresasOCC" class="row">
                    @csrf
                    <div class="col-12">
                        <p id="parrafoEmpresasOCC">
                            Ingresa los datos de tu empresa para publicar tus vacantes.
                        </p>
                    </div>
                    <div class="input-group my-3 col-12">
                        <span class="input-group-text text-white" style="background-color: #f8981d;">
                            <i class="bi bi-bank2"></i>
                        </span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="nombre_empresaOCC" name="nombre_empresaOCC"
                                placeholder="Nombre de la Empresa">
                            <label for="nombre_empresaOCC">Nombre de la Empresa</label>
                        </div>
                    </div>
                    <div class="input-group my-3 col-12">
                        <span class="input-group-text text-white" style="background-color: #f8981d;">
                            <i class="bi bi-person-fill"></i>
                        </span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="contacto_empresaOCC"
                                name="contacto_empresaOCC" placeholder="Nombre del Contacto">
                            <label for="contacto_empresaOCC">Nombre del Contacto</label>
                        </div>
                    </div>
                    <div class="input-group my-3 col-12">
                        <span class="input-group-text text-white" style="background-color: #f8981d;">
                            <i class="bi bi-envelope-fill"></i>
                        </span>
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email_empresaOCC" name="email_empresaOCC"
                                placeholder="Correo Electronico">
                            <label for="email_empresaOCC">Correo Electronico</label>
                        </div>
                    </div>
                    <div class="input-group my-3 col-6">
                        <span class="input-group-text text-white" style="background-color: #f8981d;">
                            <i class="bi bi-telephone-fill"></i>
                        </span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="telefono_empresaOCC"
                                name="telefono_empresaOCC" placeholder="Telefono de Casa" maxlength="10">
                            <label for="telefono_empresaOCC">Telefono de Casa</label>
                        </div>
                    </div>
                    <div class="input-group my-3 col-6">
                        <span class="input-group-text text-white" style="background-color: #f8981d;">
                            <i class="bi bi-phone-fill"></i>
                        </span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="celular_empresaOCC"
                                name="celular_empresaOCC" placeholder="Telefono Celular" maxlength="10">
                            <label for="celular_empresaOCC">Telefono Celular</label>
                        </div>
                    </div>
                    <div class="input-group my-3 col-12">
                        <span class="input-group-text text-white" style="background-color: #f8981d;">
                            <i class="bi bi-file-earmark-fill"></i>
                        </span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="razon_empresaOCC" name="razon_empresaOCC" placeholder="Razón Social">
                            <label for="razon_empresaOCC">Razón Social</label>
                        </div>
                    </div>
                    <div class="input-group my-3 col-12">
                        <span class="input-group-text text-white" style="background-color: #f8981d;">
                            <i class="bi bi-folder-fill"></i>
                        </span>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="rfc_empresaOCC"
                                name="rfc_empresaOCC" placeholder="RFC" maxlength="13">
                            <label for="rfc_empresaOCC">RFC</label>
                        </div>
                    </div>
                    <div class="mb-3 col-12">
                        <div class="form-floating">
                            <textarea rows="4" class="form-control" id="comentarios_empresaOCC" name="comentarios_empresaOCC" placeholder="comentarios_empresaOCC"></textarea>
                            <label for="comentarios_empresaOCC">Comentarios</label>
                        </div>
                    </div>
                    <div class="mb-2 row col-12">
                        <div class="col-2 d-flex">
                            <input disabled type="text" class="text-center" style="width: 40% !important;"
                                id="number7" name="number7">
                            <div class="d-flex" style="width: 20% !important; align-items: center;">&nbsp;+</div>
                            <input disabled type="text" class="text-center" style="width: 40% !important;"
                                id="number8" name="number8">
                        </div>
                        <div class="col-5">
                            <input type="number" class="form-control" id="operacion_empresaOCC"
                                name="operacion_empresaOCC" placeholder="Introduce el resultadio aquí"
                                maxlength="2">
                        </div>
                    </div>
                    <input id="type_empresaOCC" name="type_empresaOCC" type="hidden">
                    <div class="mb-3 col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="flexCheckDefault" checked>
                            <label class="form-check-label ms-4 mt-3" for="flexCheckDefault">
                                Estoy de acuerdo en ser contactado por UNIMEX® y acepto el aviso de privacidad.
                            </label>
                        </div>
                    </div>
                    <div class="mb-4 col-4">
                        <button type="submit" class="btn btn-primary">ENVIAR DATOS</button>
                        <!--  data-bs-dismiss="modal" -->
                    </div>
                    <div class="mb-4 col-4">
                        <button type="reset" class="btn btn-outline-danger">BORRAR DATOS</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
