<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>form member|Tshitshite & Bros|Funeral Undertaker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Responsive bootstrap 4 admin template" name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Responsive Table css -->
        <link href="assets/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css"  id="app-stylesheet" />
        <link href="assets/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body style="overflow-x: hidden">
        <form class="container p-4">
            {!! csrf_field() !!}
            <input type="hidden" name="section" value="section3">
            <h3>Extended Member</h3>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="userName2"class="col-md-5 col-form-label">Title:<span class="text-danger">*</span> </label>
                        <div class="col-md-8">

                            <select id="emtitle" name="emtitle" class="required form-control"style="margin-left:130px ! important" placeholder=>
                                <option value="">{{ $data->emtitle }}</option>
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Dr">Dr</option>
                                <option value="Prof">Prof</option>
                                <option value="Adv">Adv</option>

                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="password2"class="col-md-5 col-form-label"> Relationship:</label>
                        <div class="col-md-8">

                            <select id="emrelationship" name="emrelationship" class="required form-control"style="margin-left:130px ! important" placeholder=>
                                <option value="">{{ $data->emrelationship }}</option>
                                <option value="Spouse">Spouse</option>
                                <option value="child">child</option>
                                <option value="father or mother">father or mother</option>
                                <option value="sibling">sibling</option>
                                <option value="Free extended">Free extended</option>


                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="userName2"class="col-md-5 col-form-label">Full names:</label>
                        <div class="col-md-8">
                            <input class="required form-control" id="emfullname" name="emfullname" type="text"style="margin-left:130px ! important" placeholder={{ $data->emfullname }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="password2"class="col-md-5 col-form-label">Surname:</label>
                        <div class="col-md-8">
                            <input id="emsurname" name="emsurname" type="text" class="required form-control"style="margin-left:130px ! important" placeholder={{ $data->emsurname }}>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="userName2"class="col-md-5 col-form-label">ID No:</label>
                        <div class="col-md-8">
                            <input class="required form-control" id="emid_number" name="emid_number" type="text"style="margin-left:130px ! important" placeholder={{ $data->emid_number }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="password2"class="col-md-5 col-form-label">Date of Birth:</label>
                        <div class="col-md-8">
                            <input id="emdate_of_birth" name="emdate_of_birth" type="date" class="required form-control"style="margin-left:130px ! important" placeholder={{ $data->emdate_of_birth }}>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="userName2"class="col-md-5 col-form-label">Cellphone:</label>
                        <div class="col-md-8">
                            <input class="required form-control" id="emcellphone" name="emcellphone" type="text"style="margin-left:130px ! important" placeholder={{ $data->emcellphone }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="password2"class="col-md-5 col-form-label">Email Address:</label>
                        <div class="col-md-8">
                            <input id="ememail" name="ememail" type="text" class="required form-control"style="margin-left:130px ! important" placeholder={{ $data->ememail }}>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="userName2"class="col-md-5 col-form-label">Initials:</label>
                        <div class="col-md-8">
                            <input class="required form-control" id="eminitials" name="eminitials" type="text"style="margin-left:130px ! important" placeholder={{ $data->eminitials }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="password2"class="col-md-5 col-form-label">Gender</label>
                        <div class="col-md-8">

                            <select id="emgender" name="emgender" class="required form-control"style="margin-left:130px ! important">
                                <option value="">{{ $data->emtitle }}</option>
                                <option value="F">Female</option>
                                <option value="M">Male</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="userName2"class="col-md-5 col-form-label">Cover Amount: </label>
                        <div class="col-md-8">
                            <input class="required form-control" id="emcover_amount" name="emcover_amount" type="number"style="margin-left:130px ! important" placeholder={{ $data->emcover_amount }}>
                        </div>
                    </div>
                </div>





                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="password2"class="col-md-5 col-form-label">Policy Type:</label>
                        <div class="col-md-8">

                            <select onChange="myplan()" id="empolicy_type" name="empolicy_type" class="required form-control"style="margin-left:130px ! important" placeholder={{ $data->empolicy_type }}>


                                <option id="producttype"  readonly name="product_type" value="ju"></option>


                            </select>

                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="userName2"class="col-md-5 col-form-label">Add Premium:</label>
                        <div class="col-md-8">
                            <input class="required form-control" id="emadd_premium" name="emadd_premium" type="text"style="margin-left:130px ! important" placeholder={{ $data->emadd_premium }}>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group clearfix">
                        <label for="password2"class="col-md-5 col-form-label"> Total Premium:</label>
                        <div class="col-md-8">
                            <input id="emtotal_premium" name="emtotal_premium" type="number" class="required form-control"style="margin-left:130px ! important" placeholder={{ $data->emtotal_premium }}>

                        </div>
                    </div>
                </div>
            </div>

            <div class="half text flexrow" style="flex-direction:row;">
            </div>

            <div class="col-md-6" id="inputFormRow"  style="width: 100%">
                <div class="col-lg-12 mt-5"  style=" left: -1em">

                    <div  id= "newext"></div>
                    <button id="Update" type="button" class="btn btn-primary waves-effect waves-light mb-2"> Update</button>

                </div>
            </div>

            <script>
                console.log("member", <?php echo $data?>);
                document.addEventListener("DOMContentLoaded", function() {
                    var updateButton = document.getElementById("Update");
                    updateButton.addEventListener("click", function() {
                        var id = <?php echo $data->em_id; ?>;
                        var title = document.getElementById('emtitle').value;
                        var relationship = document.getElementById('emrelationship').value;
                        var fullName = document.getElementById('emfullname').value;
                        var surname = document.getElementById('emsurname').value;
                        var idNumber = document.getElementById('emid_number').value;
                        var dateOfBirth = document.getElementById('emdate_of_birth').value;
                        var cellphone = document.getElementById('emcellphone').value;
                        var email = document.getElementById('ememail').value;
                        var initials = document.getElementById('eminitials').value;
                        var gender = document.getElementById('emgender').value;
                        var coverAmount = document.getElementById('emcover_amount').value;
                        var policyType = document.getElementById('empolicy_type').value;
                        var addPremium = document.getElementById('emadd_premium').value;
                        var totalPremium = document.getElementById('emtotal_premium').value;

                        var extendedMember = {
                            _token: document.querySelector('input[name="_token"]').value,
                            section: 'section3',
                            emtitle: title,
                            emrelationship: relationship,
                            emfullname: fullName,
                            emsurname: surname,
                            emid_number: idNumber,
                            emdate_of_birth: dateOfBirth,
                            emcellphone: cellphone,
                            ememail: email,
                            eminitials: initials,
                            emgender: gender,
                            emcover_amount: coverAmount,
                            empolicy_type: policyType,
                            emadd_premium: addPremium,
                            emtotal_premium: totalPremium
                        };
                        console.log("extend", extendedMember)
                        fetch(`/member-capture/${id}`, {
                            method: 'PUT',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': extendedMember._token // Include the CSRF token header
                            },
                            body: JSON.stringify(extendedMember)
                        })
                        .then(function(response) {
                            return response.json();
                        })
                        .then(function(response) {
                            // console.log("input", response.input);
                            console.log("Extended member update", response);
                            window.location.href = '/member-capture';
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                    });
                });
            </script>

        </form>
    </body>
</html>


