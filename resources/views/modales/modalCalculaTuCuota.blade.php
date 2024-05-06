<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content bg-transparent border-0"> <!--  -->
            <div class="modal-header border-0" style="justify-content: flex-end !important">
                {{--  <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1> --}}
                <button type="button" style="color: #de951b" class="fs-3" data-bs-dismiss="modal" aria-label="Close">
                    <strong>
                        <i class="bi bi-x-lg"></i>
                    </strong>
                </button>
            </div>
            <div class="modal-body text-center">
                <a href="{{ route('calcula_tu_cuota') }}" target="_blank">
                    <img class="" src="{{ asset('assets/img/popup/pop_up_unimex_texto.png') }}" alt="">
                </a>
            </div>
            {{-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
        </div>
    </div>
</div>
