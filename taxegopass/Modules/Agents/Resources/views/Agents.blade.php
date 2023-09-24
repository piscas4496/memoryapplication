<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- <div class="product-status mg-b-15"> -->
     <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Departments List</h4>
                            <div class="add-product">

                                 <div class="modal-area-button">
                                <a class="" href="#" data-toggle="modal" data-target="#Addagent">Add agent</a>
                                 <div id="Addagent" class="modal modal-edu-general default-popup-PrimaryModal fade" role="dialog">
                                 <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-1">
                                        <h4 class="modal-title">BG Color Header Modal</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>


                                    <div class="modal-body">
                                        <i class="educate-icon educate-checked modal-check-pro"></i>
                                        
                                        <form method="POST" action="">

                                       <div class="form-group">
                                            <label for="nomsag">Noms de l'agent</label>
                                            <input type="text" name="nomsag" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="genreag">Genre</label>
                                            <input type="text" name="genreag" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="datenaissag" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="mobile" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control">
                                        </div>

                                        <div class="form-group"> 
                                            <input type="text" name="password" class="form-control">
                                        </div>

                                         <div class="modal-footer info-md">
                                        <a data-dismiss="modal" href="#">Cancel</a>
                                        <a href="#">Enregistrer</a>
                                     </div>
                                  </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                                <!-- <a href="add-department.html">Add Departments</a> -->
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Name of Dept.</th>
                                        <th>Status</th>
                                        <th>Head</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>No. of Students</th>
                                        <th>Setting</th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Computer</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1500</td>
                                        <td>
           
         <button data-toggle="modal" data-target="#InformationproModalhdbgcl" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>   
             <div id="InformationproModalhdbgcl" class="modal modal-edu-general fullwidth-popup-InformationproModal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                         <div class="modal-header header-color-modal bg-color-2">
                     <h4 class="modal-title">Update Agents</h4>
                        <div class="modal-close-area modal-close-df">
                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                         </div> 
                </div>
                      <div class="modal-body">                                  
                                <form method="POST" action="">
                                       <div class="form-group">
                                            <label for="nomsag">Noms de l'agent</label>
                                            <input type="text" name="nomsag" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label" for="genreag">Genre</label>
                                            <input type="text" name="genreag" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="datenaissag" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="mobile" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control">
                                        </div>

                                        <div class="form-group"> 
                                            <input type="text" name="password" class="form-control">
                                        </div>

                                        <div class="modal-footer info-md">
                                        <a data-dismiss="modal" href="#">Cancel</a>
                                        <a href="#">Process</a>
                                      </div>
                                    </div>
                                  </form>                                                           
                            </div>
                     </div>
                </div>

                                 <button data-toggle="modal" data-target="#supression" title="Edit" class="pd-setting-ed"><i class="fa fa-trash-o " aria-hidden="true"></i></button>
                        </div>
                      <div id="supression" class="modal modal-edu-general Customwidth-popup-WarningModal fade" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header header-color-modal bg-color-3">
                                        <h4 class="modal-title">Supression</h4>
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <span class="educate-icon educate-warning modal-check-pro information-icon-pro"></span>
                                        <h2>Attention!</h2>
                                        <p>Voulez vous vraiment suprimer cet agent?</p>
                                    </div>
                                    <div class="modal-footer warning-md">
                                        <a data-dismiss="modal" href="#">Non</a>
                                        <a href="#">Oui</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                 </td>
                                       
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Mechanical</td>
                                        <td>
                                            <button class="ps-setting">Paused</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1700</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>MBA</td>
                                        <td>
                                            <button class="ds-setting">Disabled</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1500</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>BBA</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1200</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>CSE</td>
                                        <td>
                                            <button class="pd-setting">Active</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1800</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>MBA</td>
                                        <td>
                                            <button class="ps-setting">Paused</button>
                                        </td>
                                        <td>John Alva</td>
                                        <td>admin@gmail.com</td>
                                        <td>01962067309</td>
                                        <td>1000</td>
                                        <td>
                                            <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                            <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>