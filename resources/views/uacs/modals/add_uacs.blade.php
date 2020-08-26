<!-- Modal -->
<div class="modal fade" id="add_uacs">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            {{ Form::open(['action' => 'UacsController@store']) }}
            <div class="modal-header">
                <h5 class="modal-title">Add Code</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                @csrf
                <div class="form-group">
                  {{ Form::label('name_uacs', 'Description', ['class' => 'col-form-label']) }}
                  {{ Form::text('name_uacs', '', ['class' => 'form-control', 'id' => 'add_uacs_name']) }}
                </div>
                <div class="form-group">
                  {{ Form::label('code_uacs', 'Code', ['class' => 'col-form-label']) }}
                  {{ Form::text('code_uacs', '', ['class' => 'form-control', 'id' => 'add_uacs_code']) }}
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
