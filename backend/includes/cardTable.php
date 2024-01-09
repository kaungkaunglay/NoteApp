<div class="icon active animate__animated animate__fadeIn i-list">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table  tbl-server-info">
                    <thead>
                        <tr class="ligth">
                            <th class="w-50" scope="col">Title</th>
                            <th scope="col">Permission</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <?php 
                        $note_data = CRUD:: Select('note', ['Title', 'Description', 'Date', 'Priority']);
                    ?>


                    
                    <tbody>
                    <?php 
                        foreach($note_data as $data):
                    ?>
                        <tr>
                            <td>
                                <h4 class="mb-2"><?php echo $data['Title'] ?></h4>
                                <span><?php echo $data['Description']?></span>
                            </td>
                            <td>
                                <i class="las la-user-friends mr-2 font-size-20"></i>
                                03 share
                            </td>
                            <td><?php echo $data['Date'] ?></td>
                            <td>
                                <div>
                                    <a href="#" class="badge badge-success mr-3" data-toggle="modal" data-target="#edit-note1"><i class="las la-pen mr-0"></i></a>
                                    <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                                </div>
                            </td>
                        </tr>

                    <?php endforeach; ?> 
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>