<?php

if(isset($_POST['edit_id'])){
    $id = $_POST['edit_id'];

}
$modal_data = CRUD::Select("note", null, ["NoteId" => $id]); 

?>

    <div class="modal fade" id="new-note1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <div class="media align-items-top justify-content-between">                            
                            <h3 class="mb-3"><?php echo $modal_data[0]['Title'] ?></h3>
                            <div class="btn-cancel p-0" data-dismiss="modal"><i class="las la-times"></i></div>
                        </div>
                        <div class="content create-workform">
                            <p class="mb-4"><?php echo $modal_data[0]['Description'] ?></p> 
                            <h4 class="mb-3">Shared</h4>
                            <ul class="list-inline p-0 m-0">
                                <li>
                                    <div class="media align-items-center cust-card mb-3">
                                        <div class="">
                                            <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                        </div>
                                        <div class="media-body ml-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="mb-0">Anne Effit</h5>
                                                <h6 class="mb-0">04 Hours Ago</h6>
                                            </div>
                                            <p class="mb-0">anneeffit@gmail.com</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media align-items-center cust-card mb-3">
                                        <div class="">
                                            <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="01">
                                        </div>
                                        <div class="media-body ml-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="mb-0">Poall Molve</h5>
                                                <h6 class="mb-0">04 Hours Ago</h6>
                                            </div>
                                            <p class="mb-0">poallmolve@gmail.com</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media align-items-center cust-card">
                                        <div class="">
                                            <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="01">
                                        </div>
                                        <div class="media-body ml-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h5 class="mb-0">Mack Devid</h5>
                                                <h6 class="mb-0">05 Jan 2021</h6>
                                            </div>
                                            <p class="mb-0">mackdevid@gmail.com</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>    

