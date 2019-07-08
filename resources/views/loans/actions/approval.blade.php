<div class="modal fade bd-example-modal-sm" id="approvalModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Approve this Loan</h3>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      <div class="modal-body">
        <div class="card">
          <div class="card-body">
            <form method="POST" action="/loan-actions/1/approve">
              {{ csrf_field() }}
              <div class="form-group">             
                <label class="form-label" for="approval_date">Approval Date</label>
                <input type="date" name="approval_date" class="form-control">
              </div>
              <div class="form-group">             
                <label class="form-label" for="approval_justification">Justification</label>
                <textarea name="approval_justification" class="form-control"></textarea> 
              </div>
              <div class="form-footer">
                <button type="submit" class="btn btn-primary btn-block">Approve</button>
              </div>
            </form>
          </div>
        </div>
      </div>
         
    </div>
  </div>
</div>
