<div class="col-lg-12 text-right">
    <button type="button" class="btn btn-info btn-sm" select2="true" onclick="callPopupLarge(this,'{{ route('admin.master.scheme.award.addform', Crypt::encrypt(0)) }}'+'?district='+$('#district_select_box').val()+'&tehsil='+$('#tehsil_select_box').val()+'&village='+$('#village_select_box').val()+'&scheme='+$('#scheme_select_box').val())">Create Scheme Award</button>
</div>
<div class="col-lg-12">
    <fieldset class="fieldset_border">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" id="ajax_data_table">
                <thead style="background-color: #6c757d;color: #fff">
                    <tr>
                        <th>Sr.No.</th>                
                        <th>District</th>
                        <th>Tehsil</th>
                        <th>Village</th>
                        <th>Award No</th>
                        <th>Award Date</th>
                        <th>Year</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sr_no = 1;
                    @endphp
                    @foreach($rs_records as $value)
                    <tr>
                        <td>{{ $sr_no++ }}</td>
                        <td>{{ $value->d_name }}</td>
                        <td>{{ $value->t_name }}</td>
                        <td>{{ $value->v_name }}</td>
                        <td>{{ $value->award_no }}</td>
                        <td>{{ $value->award_date }}</td>
                        <td>{{ $value->year }}</td>
                        <td>
                            <button type="button" class="btn btn-info btn-sm" select2="true" onclick="callPopupLarge(this,'{{ route('admin.master.scheme.award.addform', Crypt::encrypt($value->id)) }}'+'?district='+$('#district_select_box').val()+'&tehsil='+$('#tehsil_select_box').val()+'&village='+$('#village_select_box').val()+'&scheme='+$('#scheme_select_box').val())"><i class="fa fa-edit"></i> Edit</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </fieldset>
</div>