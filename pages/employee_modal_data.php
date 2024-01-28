<!-- Button to trigger the modal -->
<button type="button" class="btn btn-primary" id="openModalBtn">
    Open Modal
</button>

<!-- Bootstrap Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Modal Title</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body" id="modalBody">
                <!-- Content loaded via AJAX will be placed here -->
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>


<script>
  var url = "./assets/js/core/form_design.js";
  $.getScript(url);

</script>