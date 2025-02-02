<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">{{ @$rec_id>0? 'Edit' : 'Add' }}</h4>
            <button type="button" id="btn_close" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="{{ route('admin.master.scheme.store', Crypt::encrypt($rec_id)) }}" method="post" class="add_form" button-click="btn_close" content-refresh="example">
                {{ csrf_field() }}
                <div class="box-body"> 
                    <div class="form-group">
                        <label>Scheme Name</label>
                        <span class="fa fa-asterisk"></span>
                        <input type="text" name="name_e" class="form-control" placeholder="Enter Name" maxlength="50" required value="{{ @$rs_records[0]->scheme_name_e }}"> 
                    </div>
                    <div class="form-group">
                        <label>Scheme Name Hindi</label>
                        <span class="fa fa-asterisk"></span>
                        <input type="text" name="name_l" class="form-control" placeholder="Enter Name Hindi" maxlength="100" required value="{{ @$rs_records[0]->scheme_name_l }}"> 
                    </div>               
                </div>
                <div class="modal-footer card-footer justify-content-between">
                    <button type="submit" class="btn btn-success form-control">{{ @$rec_id>0? 'Update' : 'Submit' }}</button>
                    <button type="button" class="btn btn-danger form-control" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

