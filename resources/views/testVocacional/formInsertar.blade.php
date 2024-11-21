<form id="insertar">
    @csrf
    <div class="form-row">
        <h1 class="title-answer" align="center">Por favor selecciona tu
            carrera y turno
            de interés:</h1>
        <div class="form-group col-md-6">
            <select name="plantel" id="plantel" class="form-control" required>
                <option value="" selected disabled>Selecciona Plantel
                </option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <select name="nivel" id="nivel" class="form-control" required>
                <option value="" selected disabled>Selecciona Nivel
                </option>
            </select>
        </div>
        <div class="form-group col-md-12">
            <select name="periodo" id="periodo" class="form-control" required>
                <option value="" selected disabled>¿Cuándo deseas iniciar
                    tu licenciatura?
                </option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <select name="carrera" id="carrera" class="form-control" required>
                <option value="" selected disabled>Selecciona Carrera
                </option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <select name="horario" id="horario" class="form-control" required>
                <option value="" selected disabled>Selecciona Horario
                </option>
            </select>
        </div>
        <input type="hidden" name="source" id="source" value="15" />
        <input type="hidden" id="calificacion" name="calificacion" class="textbox" value='Derecho'>
        <input type="hidden" name="ulrVisitada" id="urlVisitada" value="{{ URL::full() }}">
        <div class="form-group col-md-6">
            <button type="submit" class="btn btn-secondary" id="finalizar">
                Finalizar
            </button>
        </div>

    </div>
</form>
