<!-- Modal add tab -->
<div class="modal fade" id="TabContent" tabindex="-1" aria-labelledby="TabContentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="TabContentLabel">Add Tab Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tab Title</label>
                        <input class="form-control" type="text" name="TabTitle">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Body Header</label>
                        <input class="form-control" type="text" name="BodyHeader">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select class="form-control form-control-sm" id="Status" name="Status">
                            <option value="0">Active</option>
                            <option value="1">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="SaveContents"
                        class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                            class="icofont icofont-edit-alt"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal edit tab -->
<div class="modal fade" id="EditTabContent" tabindex="-1" aria-labelledby="EditTabContentLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditTabContentLabel">Edit Tab Title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input class="form-control" type="hidden" name="id_tab" id="id_tab">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tab Title</label>
                        <input class="form-control" type="text" name="TabTitle" id="TabTitle">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Body Header</label>
                        <input class="form-control" type="text" name="BodyHeader" id="BodyHeader">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <select class="form-control form-control-sm" id="Status" name="Status">
                            <option value="0">Active</option>
                            <option value="1">Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="UpdateTabContents"
                        class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                            class="icofont icofont-edit-alt"></i> Update</button>
                </div>
            </div>
        </form>
    </div>
</div>


<!-- Modal add Career -->
<div class="modal fade" id="Career" tabindex="-1" aria-labelledby="CareerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CareerLabel">Add Career</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input class="form-control" type="text" name="Title">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="my-textarea">Description</label>
                            <textarea id="my-textarea" class="form-control" name="Description" rows="6"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="SaveCareer"
                        class="btn btn-success py-1 btn-round waves-effect waves-light"><i
                            class="icofont icofont-edit-alt"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal Edit Career -->
<div class="modal fade" id="EditCareer" tabindex="-1" aria-labelledby="EditCareerLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditCareerLabel">Edit Career</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id_career" id="id_career">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input class="form-control" type="text" name="Title" id="Title">
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="my-textarea">Description</label>
                            <textarea id="Description" class="form-control" name="Description" rows="6"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="UpdateCareer"
                        class="btn btn-warning py-1 btn-round waves-effect waves-light"><i
                            class="icofont icofont-edit-alt"></i> Update</button>
                </div>
            </div>
        </form>
    </div>
</div>