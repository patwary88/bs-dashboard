<script type="text/javascript">
  function func_emp_basic() {

    let cbo_bloodgroup_id = $('#cbo_bloodgroup_id').val();
    console.log(cbo_bloodgroup_id);

  }
</script>


<h2>Multiple Inputs and Helpers</h2>
<p>Add multiple inputs or addons:</p>

<!-- Multiple inputs -->
<form id="emp_basic" autocomplete="off">
  <div class="row">
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-sm">Emp Code</span>
      <input type="text" id="txt_emp_code" name="txt_emp_code" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Card No</span>
      <input type="text" id="txt_id_card_no" name="txt_id_card_no" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Punch No</span>
      <input type="text" id="txt_punch_card_no" name="txt_punch_card_no" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="row">
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-sm">First Name</span>
      <input type="text" id="txt_first_name" name="txt_first_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Middle Name</span>
      <input type="text" id="txt_middle_name" name="txt_middle_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Last Name</span>
      <input type="text" id="txt_last_name" name="txt_last_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="row">
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-sm">Name ( Local ) </span>
      <input type="text" id="txt_full_name_local" name="txt_full_name_local" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Father Name</span>
      <input type="text" id="txt_father_name" name="txt_father_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Father Name ( Local )</span>
      <input type="text" id="txt_father_name_local" name="txt_father_name_local" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="row">
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-sm">Mother Name </span>
      <input type="text" id="txt_mother_name" name="txt_mother_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Mother Name ( Local )</span>
      <input type="text" id="txt_mother_name_local" name="txt_mother_name_local" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Date Of Birth</span>
      <input type="date" id="txt_date_of_birth" name="txt_date_of_birth" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="row">
    <div class="col input-group mb-2">
      <label class="input-group-text" for="inputGroupSelect01">Blood Group</label>
      <select id="cbo_bloodgroup_id" data-live-search="true" multiple data-actions-box="true">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Nationality</span>
      <input type="text" id="cbo_nationality_id" name="cbo_nationality_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Religion</span>
      <input type="text" id="cbo_religion_id" name="cbo_religion_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>

  <div class="row">
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-sm">National ID</span>
      <input type="text" id="txt_national_id" name="txt_national_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Birth Registration</span>
      <input type="text" id="txt_birth_registration" name="txt_birth_registration" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Passport No</span>
      <input type="text" id="txt_passport_no" name="txt_passport_no" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>
  <div class="row">
    <div class="col input-group mb-2">
    <label class="input-group-text" for="inputGroupSelect01">Marital Status</label>
      <select id="cbo_marital_status" data-live-search="true">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Spouse's Name</span>
      <input type="text" id="txt_spouse_name" name="txt_spouse_name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    <div class="col input-group mb-2">
      <span class="input-group-text" id="inputGroup-sizing-default">Spouse's Name( Local )</span>
      <input type="text" id="txt_spouse_name_local" name="txt_spouse_name_local" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
  </div>

  <div class="row">
    <div class="col input-group mb-2">
    <label class="input-group-text" for="inputGroupSelect01">Category</label>
      <select id="cbo_category_id" data-live-search="true">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col input-group mb-2">
    <label class="input-group-text" for="inputGroupSelect01">Company</label>
      <select id="cbo_company_id" data-live-search="true">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col input-group mb-2">
    <label class="input-group-text" for="inputGroupSelect01">Location</label>
      <select id="cbo_location_id" data-live-search="true">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col input-group mb-2">
    <label class="input-group-text" for="inputGroupSelect01">Division</label>
      <select id="cbo_division_id" data-live-search="true">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col input-group mb-2">
    <label class="input-group-text" for="inputGroupSelect01">Department</label>
      <select id="cbo_department_id" data-live-search="true">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col input-group mb-2">
    <label class="input-group-text" for="inputGroupSelect01">Section</label>
      <select id="cbo_section_id" data-live-search="true">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col input-group mb-2">
    <label class="input-group-text" for="inputGroupSelect01">Subsection</label>
      <select id="cbo_subsection_id" data-live-search="true">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col input-group mb-2">
    <label class="input-group-text" for="inputGroupSelect01">Designation Level</label>
      <select id="cbo_designation_level_id" data-live-search="true">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
    <div class="col input-group mb-2">
    <label class="input-group-text" for="inputGroupSelect01">Designation</label>
      <select id="cbo_designation_id" data-live-search="true">
        <option selected>Choose...</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
    </div>
  </div>

  <div class="row">
    <input class="btn btn-outline-secondary" type="button" value="Save" onclick="func_emp_basic();">
  </div>
</form>
<script>
  $('#cbo_bloodgroup_id').selectpicker();
  $('#cbo_marital_status').selectpicker();
  $('#cbo_category_id').selectpicker();
  $('#cbo_company_id').selectpicker();
  $('#cbo_location_id').selectpicker();
  $('#cbo_division_id').selectpicker();
  $('#cbo_department_id').selectpicker();
  $('#cbo_section_id').selectpicker();
  $('#cbo_subsection_id').selectpicker();
  $('#cbo_designation_level_id').selectpicker();
  $('#cbo_designation_id').selectpicker();
</script>