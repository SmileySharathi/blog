@extends('layout.head')
@section('layout.rightnavbsar')
    @parent
@endsection
@section('content')
      <!-- mani page content body part -->
      <div id="main-content" style="margin-top: 0px;">
        <div class="container-fluid">
          <div class="block-header">
            <div class="row">
              <div class="col-lg-1 col-md-6 col-sm-12 ">
                <div class="container-fluid">
                  <div class="navbar-brand">
                    <!-- <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-bars"></i></button> -->
                    <span class="btn-toggle-fullwidth" style=" color: var(--text-muted);">
                      <i class="fa fa-bars"></i>
                    </span>
                    <a href="index.html"></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>Registration</h2>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="index.html">
                      <i class="fa fa-dashboard"></i>
                    </a>
                  </li>
                  <li class="breadcrumb-item">Dashboard</li>
                  <li class="breadcrumb-item active">Trainer Registration</li>
                </ul>
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12">
                <div class="d-flex flex-row-reverse">
                  <!-- <div class="page_action"><button type="button" class="btn btn-primary"><i class="fa fa-download"></i> Download report</button><button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Send report</button></div> -->
                  <div class="p-2 d-flex">
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" onclick="filter_table()"> New Trainer </a>
                  </div>
                  <div class="p-2 d-flex">
                    <!-- <a class="btn btn-primary"
                                            data-toggle="collapse"
                                            href="#collapseExample1"
                                            role="button" aria-expanded="false"
                                            aria-controls="collapseExample1"
                                            onclick="filter_table1()">
                                            Filter
                                        </a> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Filter</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- table -->
          <div class="row clearfix" id="filter_tbl">
            <div class="col-lg-12">
              <div class="card">
                <!-- <div class="header"><h2>Table Tools<small>Basic example without any additional modification classes</small></h2></div> -->
                <div class=" ">
                  <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                      <div class="header">
                        <h2>Basic Table <small>Basic example without any additional modification classes</small>
                        </h2>
                      </div>
                      <div id="DataTables_Table_0_filter" class="dataTables_filter"></div>
                      <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                        <thead>
                          <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Trainer Name: activate to sort column descending" style="width: 106.469px;" aria-sort="ascending">Trainer Name</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email ID: activate to sort column ascending" style="width: 180.828px;">Email ID</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 73.0156px;">Address</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 29.5px;">Age</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date of birth: activate to sort column ascending" style="width: 82.125px;">Date of birth</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 60.0312px;">Salary</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 97.0312px;">Action</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th rowspan="1" colspan="1">Trainer Name</th>
                            <th rowspan="1" colspan="1">Email ID</th>
                            <th rowspan="1" colspan="1">Address</th>
                            <th rowspan="1" colspan="1">Age</th>
                            <th rowspan="1" colspan="1">Date of birth</th>
                            <th rowspan="1" colspan="1">Salary</th>
                            <th rowspan="1" colspan="1">Action</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr role="row" class="odd">
                            <td class="sorting_1">Suki Burks</td>
                            <td>Developer</td>
                            <td>London</td>
                            <td>53</td>
                            <td>2009/10/22</td>
                            <td>$114,500</td>
                            <td class="actions">
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save" data-toggle="tooltip" data-original-title="Save" hidden="">
                                <i class="icon-drawer" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard" data-toggle="tooltip" data-original-title="Discard" hidden="">
                                <i class="icon-close" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon-pencil" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove" data-toggle="tooltip" data-original-title="Remove">
                                <i class="icon-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                          <tr role="row" class="even">
                            <td class="sorting_1">Tatyana Fitzpatrick</td>
                            <td>Regional Director</td>
                            <td>London</td>
                            <td>19</td>
                            <td>2010/03/17</td>
                            <td>$385,750</td>
                            <td class="actions">
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save" data-toggle="tooltip" data-original-title="Save" hidden="">
                                <i class="icon-drawer" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard" data-toggle="tooltip" data-original-title="Discard" hidden="">
                                <i class="icon-close" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit" data-toggle="tooltip" data-original-title="Edit" aria-describedby="tooltip505104">
                                <i class="icon-pencil" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove" data-toggle="tooltip" data-original-title="Remove">
                                <i class="icon-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="sorting_1">Thor Walton</td>
                            <td>Developer</td>
                            <td>New York</td>
                            <td>61</td>
                            <td>2013/08/11</td>
                            <td>$98,540</td>
                            <td class="actions">
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save" data-toggle="tooltip" data-original-title="Save" hidden="">
                                <i class="icon-drawer" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard" data-toggle="tooltip" data-original-title="Discard" hidden="">
                                <i class="icon-close" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon-pencil" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove" data-toggle="tooltip" data-original-title="Remove">
                                <i class="icon-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                          <tr role="row" class="even">
                            <td class="sorting_1">Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                            <td class="actions">
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save" data-toggle="tooltip" data-original-title="Save" hidden="">
                                <i class="icon-drawer" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard" data-toggle="tooltip" data-original-title="Discard" hidden="">
                                <i class="icon-close" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon-pencil" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove" data-toggle="tooltip" data-original-title="Remove">
                                <i class="icon-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="sorting_1">Timothy Mooney</td>
                            <td>Office Manager</td>
                            <td>London</td>
                            <td>37</td>
                            <td>2008/12/11</td>
                            <td>$136,200</td>
                            <td class="actions">
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save" data-toggle="tooltip" data-original-title="Save" hidden="">
                                <i class="icon-drawer" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard" data-toggle="tooltip" data-original-title="Discard" hidden="">
                                <i class="icon-close" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon-pencil" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove" data-toggle="tooltip" data-original-title="Remove">
                                <i class="icon-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                          <tr role="row" class="even">
                            <td class="sorting_1">Unity Butler</td>
                            <td>Marketing Designer</td>
                            <td>San Francisco</td>
                            <td>47</td>
                            <td>2009/12/09</td>
                            <td>$85,675</td>
                            <td class="actions">
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save" data-toggle="tooltip" data-original-title="Save" hidden="">
                                <i class="icon-drawer" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard" data-toggle="tooltip" data-original-title="Discard" hidden="">
                                <i class="icon-close" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon-pencil" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove" data-toggle="tooltip" data-original-title="Remove">
                                <i class="icon-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="sorting_1">Vivian Harrell</td>
                            <td>Financial Controller</td>
                            <td>San Francisco</td>
                            <td>62</td>
                            <td>2009/02/14</td>
                            <td>$452,500</td>
                            <td class="actions">
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save" data-toggle="tooltip" data-original-title="Save" hidden="">
                                <i class="icon-drawer" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard" data-toggle="tooltip" data-original-title="Discard" hidden="">
                                <i class="icon-close" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon-pencil" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove" data-toggle="tooltip" data-original-title="Remove">
                                <i class="icon-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                          <tr role="row" class="even">
                            <td class="sorting_1">Yuri Berry</td>
                            <td>Chief Marketing Officer (CMO)</td>
                            <td>New York</td>
                            <td>40</td>
                            <td>2009/06/25</td>
                            <td>$675,000</td>
                            <td class="actions">
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save" data-toggle="tooltip" data-original-title="Save" hidden="">
                                <i class="icon-drawer" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard" data-toggle="tooltip" data-original-title="Discard" hidden="">
                                <i class="icon-close" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon-pencil" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove" data-toggle="tooltip" data-original-title="Remove">
                                <i class="icon-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                          <tr role="row" class="odd">
                            <td class="sorting_1">Zenaida Frank</td>
                            <td>Software Engineer</td>
                            <td>New York</td>
                            <td>63</td>
                            <td>2010/01/04</td>
                            <td>$125,250</td>
                            <td class="actions">
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save" data-toggle="tooltip" data-original-title="Save" hidden="">
                                <i class="icon-drawer" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard" data-toggle="tooltip" data-original-title="Discard" hidden="">
                                <i class="icon-close" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon-pencil" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove" data-toggle="tooltip" data-original-title="Remove">
                                <i class="icon-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                          <tr role="row" class="even">
                            <td class="sorting_1">Zorita Serrano</td>
                            <td>Software Engineer</td>
                            <td>San Francisco</td>
                            <td>56</td>
                            <td>2012/06/01</td>
                            <td>$115,000</td>
                            <td class="actions">
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing m-r-5 button-save" data-toggle="tooltip" data-original-title="Save" hidden="">
                                <i class="icon-drawer" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-editing button-discard" data-toggle="tooltip" data-original-title="Discard" hidden="">
                                <i class="icon-close" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default m-r-5 button-edit" data-toggle="tooltip" data-original-title="Edit">
                                <i class="icon-pencil" aria-hidden="true"></i>
                              </button>
                              <button class="btn btn-sm btn-icon btn-pure btn-default on-default button-remove" data-toggle="tooltip" data-original-title="Remove">
                                <i class="icon-trash" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- pandi -->
            <div class="row">
              <div class="col-md-12">
                <!-- </p> -->
                <div class="collapse" id="collapseExample">
                  <div class="card card-body">
                    <!-- <div class="card"> -->
                    <div class="header">
                      <h2>Trainer Registration</h2>
                    </div>
                    <div class="body">
                      <form id="advanced-form" data-parsley-validate novalidate>
                        <div class="row">
                          <div class="col-lg-4 col-md-6">
                            <label for="text-input1"> Trainer Name</label>
                            <input type="text" id="text-input1" class="form-control" required data-parsley-minlength="8">
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <label for="text-input2"> Trainer Name</label>
                            <input type="text" id="text-input2" class="form-control" required data-parsley-length="[5,10]">
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <!-- <b>Email Address</b> -->
                            <label for="text-input1">Email Address</label>
                            <div class="input-group
                                                        mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fa
                                                                    fa-envelope-o"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control
                                                            email" placeholder="Ex:example@example.com">
                            </div>
                          </div>
                        </div>
                        <div class="row" style="padding:
                                                0px;">
                          <div class="col-lg-4 col-md-6">
                            <label>Date Of Birth</label>
                            <div class="input-group
                                                        date" data-date-autoclose="true" data-provide="datepicker">
                              <input type="text" class="form-control">
                              <div class="input-group-append">
                                <button class="btn
                                                                btn-outline-secondary" type="button">
                                  <i class="fa
                                                                    fa-calendar"></i>
                                </button>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <!-- <b>Phone Number</b> -->
                            <label for="text-input1">Phone Number</label>
                            <div class="input-group
                                                        mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fa
                                                                    fa-phone"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control
                                                            phone-number" placeholder="Ex: +00(000) 000-00-00" maxlength="10">
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <label>Address Line 1</label>
                            <textarea class="form-control" rows="2" cols="30" required></textarea>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4 col-md-6">
                            <label>Address Line 2</label>
                            <textarea class="form-control" rows="2" cols="30" required></textarea>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <label>State</label>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <label>City</label>
                            <select class="custom-select" id="inputGroupSelect01">
                              <option selected>Choose...</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                              <label for="product-key" class="control-label">Postal Code</label>
                              <input type="text" id="product-key" class="form-control" maxlength="6">
                              <span class="help-block">a*-999-999</span>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                              <label>Gender</label>
                              <br />
                              <label class="fancy-radio">
                                <input type="radio" name="gender" value="male" required data-parsley-errors-container="#error-radio">
                                <span>
                                  <i></i>Male </span>
                              </label>
                              <label class="fancy-radio">
                                <input type="radio" name="gender" value="female">
                                <span>
                                  <i></i>Female </span>
                              </label>
                              <p id="error-radio"></p>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <label>Profile Photo</label>
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01">
                              <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4 col-md-12">
                            <label>Skills (multi select)</label>
                            <div class="c_multiselect">
                              <select id="multiselect2" name="multiselect2[]" class="multiselect multiselect-custom" multiple="multiple">
                                <option value="cheese">Cheese</option>
                                <option value="tomatoes">Tomatoes</option>
                                <option value="mozarella">Mozzarella</option>
                                <option value="mushrooms">Mushrooms</option>
                                <option value="pepperoni">Pepperoni</option>
                                <option value="onions">Onions</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <label for="text-input1"> PAN Number</label>
                            <input type="text" id="text-input1" class="form-control" required data-parsley-minlength="8">
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <label for="text-input2"> Aadhar Number</label>
                            <input type="text" id="text-input2" class="form-control" required data-parsley-length="[5,10]">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4 col-md-6">
                            <label for="text-input1"> Salary</label>
                            <input type="text" id="text-input1" class="form-control" required data-parsley-minlength="8">
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <label for="text-input2"> Guardian Name</label>
                            <input type="text" id="text-input2" class="form-control" required data-parsley-length="[5,10]">
                          </div>
                          <div class="col-lg-4 col-md-6">
                            <!-- <b>Phone Number</b> -->
                            <label for="text-input1">Guardian Contact Number</label>
                            <div class="input-group
                                                        mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fa
                                                                    fa-phone"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control
                                                            phone-number" placeholder="Ex: +00(000) 000-00-00" maxlength="10">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-12">
                            <label>Comments</label>
                            <textarea class="form-control" rows="2" cols="30" required></textarea>
                          </div>
                        </div>
                        <br />
                        <button type="submit" class="btn btn-primary" style="float: right; margin-left: 10px;">Save</button>
                        <button type="submit" class="btn btn-danger" style="float: right;margin-left: 20px;">Back</button>
                      </form>
                    </div>
                    <!-- </div> -->
                  </div>
                </div>
              </div>
            </div>
            <!-- table -->
            <!-- Filter -->
            <div class="row">
              <div class="col-md-12">
                <!-- </p> -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Filter</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="card card-body">
                        <!-- <div class="card"> -->
                        <!-- <div class="header"><h2>Registration</h2></div> -->
                        <div class="body">
                          <form id="advanced-form" data-parsley-validate novalidate>
                            <div class="row">
                              <div class="col-lg-6 col-md-6">
                                <label for="text-input1"> Name</label>
                                <input type="text" id="text-input1" class="form-control" required data-parsley-minlength="8">
                              </div>
                              <div class="col-lg-6 col-md-6">
                                <label for="text-input2"> Name</label>
                                <input type="text" id="text-input2" class="form-control" required data-parsley-length="[5,10]">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6 col-md-12">
                                <label>Skills (multi select)</label>
                                <div class="c_multiselect">
                                  <select id="multiselect2" name="multiselect2[]" class="multiselect multiselect-custom" multiple="multiple">
                                    <option value="cheese">Cheese</option>
                                    <option value="tomatoes">Tomatoes</option>
                                    <option value="mozarella">Mozzarella</option>
                                    <option value="mushrooms">Mushrooms</option>
                                    <option value="pepperoni">Pepperoni</option>
                                    <option value="onions">Onions</option>
                                  </select>
                                </div>
                              </div>
                              <div class="col-lg-6 col-md-6">
                                <label>Date Of Birth</label>
                                <div class="input-group
                                                                    date" data-date-autoclose="true" data-provide="datepicker">
                                  <input type="text" class="form-control">
                                  <div class="input-group-append">
                                    <button class="btn
                                                                            btn-outline-secondary" type="button">
                                      <i class="fa
                                                                                fa-calendar"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-lg-6 col-md-6">
                                <label>Date Of Birth</label>
                                <div class="input-group
                                                                    date" data-date-autoclose="true" data-provide="datepicker">
                                  <input type="text" class="form-control">
                                  <div class="input-group-append">
                                    <button class="btn
                                                                            btn-outline-secondary" type="button">
                                      <i class="fa
                                                                                fa-calendar"></i>
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <br />
                            <button type="submit" class="btn btn-primary" style="float: right; margin-left: 10px;">Save</button>
                            <button type="submit" class="btn btn-danger" style="float: right;margin-left: 20px;">Back</button>
                          </form>
                        </div>
                        <!-- </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Filter -->
          </div>
          <!-- pandi -->
          <div class="row">
            <div class="col-md-12">
              <!-- </p> -->
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  <!-- <div class="card"> -->
                  <div class="header">
                    <h2>Trainer Registration</h2>
                  </div>
                  <div class="body">
                    <form id="advanced-form" data-parsley-validate novalidate>
                      <div class="row">
                        <div class="col-lg-4 col-md-6">
                          <label for="text-input1"> Trainer Name</label>
                          <input type="text" id="text-input1" class="form-control" required data-parsley-minlength="8">
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <label for="text-input2"> Trainer Name</label>
                          <input type="text" id="text-input2" class="form-control" required data-parsley-length="[5,10]">
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <!-- <b>Email Address</b> -->
                          <label for="text-input1">Email Address</label>
                          <div class="input-group
                                                        mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa
                                                                    fa-envelope-o"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control
                                                            email" placeholder="Ex:example@example.com">
                          </div>
                        </div>
                      </div>
                      <div class="row" style="padding:
                                                0px;">
                        <div class="col-lg-4 col-md-6">
                          <label>Date Of Birth</label>
                          <div class="input-group
                                                        date" data-date-autoclose="true" data-provide="datepicker">
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                              <button class="btn
                                                                btn-outline-secondary" type="button">
                                <i class="fa
                                                                    fa-calendar"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <!-- <b>Phone Number</b> -->
                          <label for="text-input1">Phone Number</label>
                          <div class="input-group
                                                        mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa
                                                                    fa-phone"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control
                                                            phone-number" placeholder="Ex: +00(000) 000-00-00" maxlength="10">
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <label>Address Line 1</label>
                          <textarea class="form-control" rows="2" cols="30" required></textarea>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-md-6">
                          <label>Address Line 2</label>
                          <textarea class="form-control" rows="2" cols="30" required></textarea>
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <label>State</label>
                          <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <label>City</label>
                          <select class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-md-6">
                          <div class="form-group">
                            <label for="product-key" class="control-label">Postal Code</label>
                            <input type="text" id="product-key" class="form-control" maxlength="6">
                            <span class="help-block">a*-999-999</span>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <div class="form-group">
                            <label>Gender</label>
                            <br />
                            <label class="fancy-radio">
                              <input type="radio" name="gender" value="male" required data-parsley-errors-container="#error-radio">
                              <span>
                                <i></i>Male </span>
                            </label>
                            <label class="fancy-radio">
                              <input type="radio" name="gender" value="female">
                              <span>
                                <i></i>Female </span>
                            </label>
                            <p id="error-radio"></p>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <label>Profile Photo</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile01">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-md-12">
                          <label>Skills (multi select)</label>
                          <div class="c_multiselect">
                            <select id="multiselect2" name="multiselect2[]" class="multiselect multiselect-custom" multiple="multiple">
                              <option value="cheese">Cheese</option>
                              <option value="tomatoes">Tomatoes</option>
                              <option value="mozarella">Mozzarella</option>
                              <option value="mushrooms">Mushrooms</option>
                              <option value="pepperoni">Pepperoni</option>
                              <option value="onions">Onions</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <label for="text-input1"> PAN Number</label>
                          <input type="text" id="text-input1" class="form-control" required data-parsley-minlength="8">
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <label for="text-input2"> Aadhar Number</label>
                          <input type="text" id="text-input2" class="form-control" required data-parsley-length="[5,10]">
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-4 col-md-6">
                          <label for="text-input1"> Salary</label>
                          <input type="text" id="text-input1" class="form-control" required data-parsley-minlength="8">
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <label for="text-input2"> Guardian Name</label>
                          <input type="text" id="text-input2" class="form-control" required data-parsley-length="[5,10]">
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <!-- <b>Phone Number</b> -->
                          <label for="text-input1">Guardian Contact Number</label>
                          <div class="input-group
                                                        mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">
                                <i class="fa
                                                                    fa-phone"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control
                                                            phone-number" placeholder="Ex: +00(000) 000-00-00" maxlength="10">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-6 col-md-12">
                          <label>Comments</label>
                          <textarea class="form-control" rows="2" cols="30" required></textarea>
                        </div>
                      </div>
                      <br />
                      <button type="submit" class="btn btn-primary" style="float: right; margin-left: 10px;">Save</button>
                      <button type="submit" class="btn btn-danger" style="float: right;margin-left: 20px;">Back</button>
                    </form>
                  </div>
                  <!-- </div> -->
                </div>
              </div>
            </div>
          </div>
          <!-- table -->
        </div>
      </div>
      @endsection
      @extends('layout.footer')
