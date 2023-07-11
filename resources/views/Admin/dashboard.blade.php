@extends('Admin.layout')
@section('admin.content')
 <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid" style="border: 1px solid red; padding: 1em; display: flex; flex-direction:column; justify-content:center; align-items:center; gap:1em">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">

                                    </div>
                                    <h4 class="page-title">Dashboard</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one" s>
                                    <i class="icon-layers float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Orders</h6>
                                    <h3 class="my-3" data-plugin="counterup">1,587</h3>
                                    <span class="badge badge-success mr-1"> +11% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-paypal float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Revenue</h6>
                                    <h3 class="my-3">$<span data-plugin="counterup">46,782</span></h3>
                                    <span class="badge badge-danger mr-1"> -29% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-chart float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Average Price</h6>
                                    <h3 class="my-3">$<span data-plugin="counterup">15.9</span></h3>
                                    <span class="badge badge-pink mr-1"> 0% </span> <span class="text-muted">From previous period</span>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-rocket float-right m-0 h2 text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">Product Sold</h6>
                                    <h3 class="my-3" data-plugin="counterup">1,890</h3>
                                    <span class="badge badge-warning mr-1"> +89% </span> <span class="text-muted">Last year</span>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- end row -->
                        <div class="row" style="padding: 1em 0.5em; border: 1px solid black; width: 99%">
                            <h4 style=" color: black">Member Capture Forms Completed</h4>
                            <div style=" margin-bottom:0.5em; color: black">
                                <hr>
                            </div>
                            <table id="member_capture_completeProgressTable" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No#</th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>ID Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($memberCapture_CompletedForm_MainMembers as $index => $memberCapture_CompletedForm_MainMember)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $memberCapture_CompletedForm_MainMember->fullname }}</td>
                                        <td>{{ $memberCapture_CompletedForm_MainMember->surname }}</td>
                                        <td>{{ $memberCapture_CompletedForm_MainMember->id_number }}</td>
                                        <td>
                                            <a href="/dashboard/{{ $memberCapture_CompletedForm_MainMember->mm_id }}/edit" class="btn btn-outline-info btn-sm edit" title="Edit">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            {{-- @if($claims_CompletedForm_MainMembers->contains('mm_id', $memberCapture_CompletedForm_MainMember->mm_id) || $claims_InProgressForm_MainMembers->contains('mm_id', $memberCapture_CompletedForm_MainMember->mm_id)) --}}
                                                <button type="button" class="btn btn-sm btn-success show-confirm action" onclick="claimPageCompletedForm({{ $memberCapture_CompletedForm_MainMember->mm_id }})">
                                                    Claims
                                                </button>
                                            {{-- @endif --}}
                                            <button type="button" class="btn btn-sm btn-danger show-confirm action" onclick="deleteMemberForm('member-capture '+{{ $memberCapture_CompletedForm_MainMember->mm_id }})">
                                                <i class="fa fa-trash fa-lg"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No#</th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>ID Number</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <div class="row" style="padding: 1em 0.5em; border: 1px solid black; width: 99%">
                            <h4 style="color: black">Member Capture Forms In Progress</h4>
                            <div style=" margin-bottom:0.5em; color: black">
                                <hr>
                            </div>
                            <table id="member_capture_inProgressTable" class="table table-striped" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>No#</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>ID Number</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($memberCapture_InProgressForm_MainMembers as $index => $memberCapture_InProgressForm_MainMember)
                                  <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $memberCapture_InProgressForm_MainMember->fullname }}</td>
                                    <td>{{ $memberCapture_InProgressForm_MainMember->surname }}</td>
                                    <td>{{ $memberCapture_InProgressForm_MainMember->id_number }}</td>
                                    <td>
                                        <a href="/dashboard/{{ $memberCapture_InProgressForm_MainMember->mm_id }}/edit" class="btn btn-outline-info btn-sm edit" title="Edit">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <button type="button" class="btn btn-sm btn-danger show-confirm action" onclick="deleteMemberForm('member-capture '+{{ $memberCapture_InProgressForm_MainMember->mm_id }})">
                                            <i class="fa fa-trash fa-lg"></i>
                                        </button>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th>No#</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>ID Number</th>
                                    <th>Action</th>
                                  </tr>
                                </tfoot>
                            </table>

                        </div>

                        <div class="row" style="padding: 1em 0.5em; border: 1px solid black; width: 99%">
                            <h4 style=" color: black">Claims Forms Completed</h4>
                            <div style=" margin-bottom:0.5em; color: black">
                                <hr>
                            </div>
                            <table id="claims_completeProgressTable" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No#</th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>ID Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($claims_CompletedForm_MainMembers as $index => $claims_CompletedForm_MainMember)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $claims_CompletedForm_MainMember->fullname }}</td>
                                        <td>{{ $claims_CompletedForm_MainMember->surname }}</td>
                                        <td>{{ $claims_CompletedForm_MainMember->id_number }}</td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-success show-confirm action" onclick="claimPageCompletedForm({{ $claims_CompletedForm_MainMember->mm_id }})">
                                                Edit Claims
                                            </button>
                                            <button type="button" class="btn btn-sm btn-danger show-confirm action" onclick="deleteMemberForm('claims '+{{ $claims_CompletedForm_MainMember->mm_id }})">
                                                <i class="fa fa-trash fa-lg"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No#</th>
                                        <th>Name</th>
                                        <th>Surname</th>
                                        <th>ID Number</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                        <div class="row" style="padding: 1em 0.5em; border: 1px solid black; width: 99%">
                            <h4 style="color: black">Claims Forms In Progress</h4>
                            <div style=" margin-bottom:0.5em; color: black">
                                <hr>
                            </div>
                            <table id="claims_inProgressTable" class="table table-striped" style="width:100%">
                                <thead>
                                  <tr>
                                    <th>No#</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>ID Number</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach($claims_InProgressForm_MainMembers as $index => $claims_InProgressForm_MainMember)
                                  <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $claims_InProgressForm_MainMember->fullname }}</td>
                                    <td>{{ $claims_InProgressForm_MainMember->surname }}</td>
                                    <td>{{ $claims_InProgressForm_MainMember->id_number }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-danger show-confirm action" onclick="deleteMemberForm('claims '+{{ $claims_InProgressForm_MainMember->mm_id }})">
                                            <i class="fa fa-trash fa-lg"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm btn-success show-confirm action" onclick="claimPageCompletedForm({{ $claims_InProgressForm_MainMember->mm_id }})">
                                            Edit Claims
                                        </button>
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                                <tfoot>
                                  <tr>
                                    <th>No#</th>
                                    <th>Name</th>
                                    <th>Surname</th>
                                    <th>ID Number</th>
                                    <th>Action</th>
                                  </tr>
                                </tfoot>
                            </table>

                        </div>
                        <!-- end row -->

                    </div> <!-- end container-fluid -->

                    <!-- DataTables CSS -->
                    <script>
                        console.log("memberCapture_CompletedForm_MainMembers", <?php echo json_encode($memberCapture_CompletedForm_MainMembers); ?>)
                        console.log("memberCapture_InProgressForm_MainMembers", <?php echo json_encode($memberCapture_InProgressForm_MainMembers); ?>)
                        console.log("claims_CompletedForm_MainMembers", <?php echo json_encode($claims_CompletedForm_MainMembers); ?>)
                        console.log("claims_InProgressForm_MainMembers", <?php echo json_encode($claims_InProgressForm_MainMembers); ?>)

                        function deleteMemberForm(form_Id) {
                            fetch('/dashboard/' + form_Id, {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                                        section: 3,
                                                        _method: 'DELETE'
                                                    })
                            })
                            .then(async function (response) {  // Add the 'async' keyword here
                                if (response.ok) {
                                    // Success! Refresh the page or update the UI as needed
                                    const data = await response.json();
                                    console.log("form_Id result", data);
                                    // location.reload();
                                } else {
                                    // Error handling
                                    console.log('Delete request failed with status:', response.status);
                                }
                                })
                                .catch(function (error) {
                                console.log('Delete request error:', error);
                            });
                        }

                        function claimPageCompletedForm(memberId) {
                            fetch('/dashboard/claims/' + memberId, {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                    'Content-Type': 'application/x-www-form-urlencoded'
                                }
                            })
                            .then(async function (response) {  // Add the 'async' keyword here
                                if (response.ok) {
                                    // Redirect or handle successful response
                                    window.location.href = '/member-claim';
                                } else {
                                    throw new Error('Request error: ' + response.status);
                                }
                            })
                            .catch(error => {
                                console.log('Delete request error:', error);
                            });
                        }

                    </script>

                </div> <!-- end content -->



                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Tshitshithe.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Tendani ICT
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


@endsection
